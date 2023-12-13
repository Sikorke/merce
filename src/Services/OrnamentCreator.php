<?php

declare(strict_types=1);

namespace Sikor\Tree\Services;

use Sikor\Tree\Defaults;
use Sikor\Tree\Factory\OrnamentFactory;
use Sikor\Tree\Interfaces\OrnamentInterface;

class OrnamentCreator {
    public static function createOrnamentFromDefaults($size, $color): OrnamentInterface {
        $ornamentData = Defaults::getOrnamentData($size, $color);

        if ($ornamentData === null) {
            // throw exc
        }

        return OrnamentFactory::createOrnament($color, $ornamentData['grossPrice'], $size);
    }
}
