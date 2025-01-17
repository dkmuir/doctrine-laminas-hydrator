<?php

declare(strict_types=1);

namespace DoctrineTest\Laminas\Hydrator\Assets;

class SimpleEntityWithEnumPhp81
{
    protected int $id;

    protected ?SimpleEnumPhp81 $enum = null;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setEnum(?SimpleEnumPhp81 $enum = null): void
    {
        $this->enum = $enum;
    }

    public function getEnum(): ?SimpleEnumPhp81
    {
        return $this->enum;
    }
}
