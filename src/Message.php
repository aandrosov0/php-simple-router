<?php 
namespace PhpRouter;

class Message {

    public function __construct(protected string $message, protected int $responseCode, protected string $contentType) {}
    
    public function __toString(): string {
        http_response_code($this->responseCode);
        header('Content-Type: ' . $this->contentType);
        return $this->message;
    }
}