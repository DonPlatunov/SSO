<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\JsonResponse;

class ApiResponseFormatter
{
    private $data = null;
    private $message = null;
    private $errors = null;
    private $status = 200;
    private $additionalData = null;

    public function withData($data): self
    {
        $this->data = $data;
        return $this;
    }

    public function withMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function withErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    public function withStatus(int $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function withAdditionalData($additionalData): self
    {
        $this->additionalData = $additionalData;
        return $this;
    }

    public function response(): JsonResponse
    {
        return new JsonResponse([
            'data' => $this->data,
            'messages' => $this->message,
            'errors' => $this->errors,
            'statusCode' => $this->status,
            'additionalData' => $this->additionalData,
        ], $this->status);
    }
}
