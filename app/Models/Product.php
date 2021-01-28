<?php

namespace App\Models;

class Product
{
    private int $id;
    private string $sku;
    private string $name;
    private string $price;
    private string $type;
    private string $description;
    private string $createdAt;

    public function __construct(
        int $id,
        string $sku,
        string $name,
        string $price,
        string $type,
        string $description,
        string $createdAt
    )
    {
        $this->id = $id;
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->description = $description;
        $this->createdAt = $createdAt;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function sku(): string
    {
        return $this->sku;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function price(): string
    {
        return $this->price;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function createdAt(): string
    {
        return $this->createdAt;
    }
}