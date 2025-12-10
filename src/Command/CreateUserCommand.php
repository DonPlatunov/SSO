<?php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\ByteString;

#[AsCommand(
    name: 'app:create-user',
    description: 'Add new user to database',
)]
class CreateUserCommand extends Command
{
    public function __construct(
        private UserPasswordHasherInterface $passwordHasher,
        private EntityManagerInterface $entityManager
    )
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->addArgument('email', InputArgument::REQUIRED, 'Email użytkownika')
            ->addOption('password', null, InputOption::VALUE_OPTIONAL, 'Hasło użytkownika');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $email = $input->getArgument('email');
        $plaintextPassword = $input->getOption('password') ?? ByteString::fromRandom(12)->toString();

        
        $userRepo = $this->entityManager->getRepository(User::class);
        $existingUser = $userRepo->findOneBy(['email' => $email]);
        if ($existingUser) {
            $io->error('User already exists');
            return Command::FAILURE;
        }

      
        $user = new User();
        $user->setEmail($email);
        $user->setRoles([]);
        $hashedPassword = $this->passwordHasher->hashPassword($user, $plaintextPassword);
        $user->setPassword($hashedPassword);

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $io->success("User '$email' created successfully.");
        $io->note("Password: $plaintextPassword");

        return Command::SUCCESS;
    }
}
