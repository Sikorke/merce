<?php

declare(strict_types=1);

namespace Sikor\Tree\Interfaces;

interface OrnamentRowInterface {
    public function addOrnament(OrnamentInterface $ornament): void;
    public function getOrnaments(): array;
}
