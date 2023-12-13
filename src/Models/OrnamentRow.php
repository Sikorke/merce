<?php

declare(strict_types=1);

namespace Sikor\Tree\Models;

use Sikor\Tree\Interfaces\OrnamentInterface;
use Sikor\Tree\Interfaces\OrnamentRowInterface;

class OrnamentRow implements OrnamentRowInterface {
    private $ornaments = [];

    public function addOrnament(OrnamentInterface $ornament): void {
        $this->ornaments[] = $ornament;
    }

    public function getOrnaments(): array {
        return $this->ornaments;
    }
}
