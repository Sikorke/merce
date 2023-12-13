<?php

declare(strict_types=1);

namespace Sikor\Tree\Interfaces;

interface OrnamentInterface {
    public function getColor(): string;
    public function getPrice(): float;
    public function getSize(): string;
}
