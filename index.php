<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Sikor\Tree\Factory\ChristmasTreeFactory;
use Sikor\Tree\Models\OrnamentRow;
use Sikor\Tree\Services\OrnamentCreator;
use Sikor\Tree\Defaults;

function createAndDecorateTree($size) {
    $treeData = Defaults::TREES[$size];
    $tree = ChristmasTreeFactory::createTree($size, $treeData['grossPrice']);
    $ornamentColors = array_keys(Defaults::ORNAMENTS[$size]);

    for ($i = 1; $i <= $treeData['amountOfRows']; $i++) {
        $row = new OrnamentRow();
        // echo(var_dump($row));
        $numberOfOrnaments = $treeData['amountOfRows'] - $i + 1;

        for ($j = 0; $j < $numberOfOrnaments; $j++) {
            $randomColorIndex = array_rand($ornamentColors);
            $color = $ornamentColors[$randomColorIndex];
            $row->addOrnament(OrnamentCreator::createOrnamentFromDefaults($size, $color));
            // echo(var_dump($row));
        }
        $tree->addOrnamentRow($row);
    }

    return $tree;
}

$smallTree = createAndDecorateTree('small');
$mediumTree = createAndDecorateTree('medium');
$largeTree = createAndDecorateTree('large');

echo "Cena za małe drzewko: " . $smallTree->getTotalPrice() . " PLN " . PHP_EOL;
echo "Cena za średnie drzewko: " . $mediumTree->getTotalPrice() . " PLN " . PHP_EOL;
echo "Cena za duże drzewko: " . $largeTree->getTotalPrice() . " PLN " . PHP_EOL;
