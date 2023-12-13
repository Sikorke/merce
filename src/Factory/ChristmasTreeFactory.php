<?php

declare(strict_types=1);

namespace Sikor\Tree\Factory;

use Sikor\Tree\Interfaces\ChristmasTreeInterface;
use Sikor\Tree\Models\ChristmasTree;

class ChristmasTreeFactory {
    public static function createTree($size, $basePrice): ChristmasTreeInterface {
        return new ChristmasTree($size, $basePrice);
    }
}
 