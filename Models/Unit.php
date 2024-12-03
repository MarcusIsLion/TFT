<?php

declare(strict_types=1);

namespace Models;


class Unit
{
    private ?int $id;
    private string $name;
    private int $cost;
    private string $origin;
    private string $url_img;

    public function __construct(array $data = [])
    {
        $this->hydrate($data);
    }

    //methode pour hydrater l'objet
    public function hydrate(array $data): void
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    // Getters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCost(): int
    {
        return $this->cost;
    }

    public function getOrigin(): string
    {
        return $this->origin;
    }

    public function getUrlImg(): string
    {
        return $this->url_img;
    }

    // Setters
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setCost(int $cost): void
    {
        $this->cost = $cost;
    }

    public function setOrigin(string $origin): void
    {
        $this->origin = $origin;
    }

    public function setUrlImg(string $url_img): void
    {
        $this->url_img = $url_img;
    }
}
