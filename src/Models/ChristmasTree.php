<?php

declare(strict_types=1);

namespace Sikor\Tree\Models;

use Sikor\Tree\Interfaces\ChristmasTreeInterface;
use Sikor\Tree\Interfaces\OrnamentRowInterface;

class ChristmasTree implements ChristmasTreeInterface {
    private $size;
    private $basePrice;
    private $ornamentRows = [];

    public function __construct($size, $basePrice) {
        $this->size = $size;
        $this->basePrice = $basePrice;
    }

    public function getSize(): string {
        return $this->size;
    }

    public function getPrice(): float {
        return $this->basePrice;
    }

    public function addOrnamentRow(OrnamentRowInterface $row): void {
        $this->ornamentRows[] = $row;
    }

    public function getTotalPrice(): float {
        $totalPrice = $this->basePrice;
        foreach ($this->ornamentRows as $row) {
            foreach ($row->getOrnaments() as $ornament) {
                $totalPrice += $ornament->getPrice();
            }
        }
        return $totalPrice;
    }
}
