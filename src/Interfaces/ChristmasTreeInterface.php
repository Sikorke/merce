<?php

declare(strict_types=1);

namespace Sikor\Tree\Interfaces;

interface ChristmasTreeInterface {
    public function getSize(): string;
    public function getPrice(): float;
    public function addOrnamentRow(OrnamentRowInterface $row): void;
    public function getTotalPrice(): float;
}
