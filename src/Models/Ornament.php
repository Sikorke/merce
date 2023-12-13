<?php

declare(strict_types=1);

namespace Sikor\Tree\Models;

use Sikor\Tree\Interfaces\OrnamentInterface;

class Ornament implements OrnamentInterface {
    private $color;
    private $price;
    private $size;

    public function __construct($color, $price, $size) {
        $this->color = $color;
        $this->price = $price;
        $this->size = $size;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getSize(): string {
        return $this->size;
    }
}
