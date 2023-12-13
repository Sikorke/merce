<?php

declare(strict_types=1);

namespace Sikor\Tree\Factory;

use Sikor\Tree\Interfaces\OrnamentInterface;
use Sikor\Tree\Models\Ornament;

class OrnamentFactory {
    public static function createOrnament($color, $price, $size): OrnamentInterface {
        return new Ornament($color, $price, $size);
    }
}
