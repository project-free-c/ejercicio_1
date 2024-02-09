<?php

namespace App\Model;

class Transbrank
{
    private ?string $method = "transbrank";

    public function getMethod(): ?string
    {
        return $this->method;
    }
}