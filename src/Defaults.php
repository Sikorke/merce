<?php

declare(strict_types=1);

namespace Sikor\Tree;

class Defaults {
    
    const TREES = [
        'small' => ['netPrice' => 100.00, 'grossPrice' => 123.00, 'amountOfRows' => 4],
        'medium' => ['netPrice'=> 200.00, 'grossPrice' => 246.00, 'amountOfRows' => 5],
        'large' => ['netPrice'=> 250.00,  'grossPrice' => 307.50, 'amountOfRows' => 6]   
    ];

    const ORNAMENTS = [
        'small' => [
            'red'    => ['netPrice' => 3.30, 'grossPrice' => 4.06],
            'blue'   => ['netPrice' => 3.50, 'grossPrice' => 4.30],
            'yellow' => ['netPrice' => 3.60, 'grossPrice' => 4.43]
        ],
        'medium' => [
            'green'  => ['netPrice' => 4.44, 'grossPrice' => 5.46],
            'white'  => ['netPrice' => 5.55, 'grossPrice' => 6.83],
            'pink'   => ['netPrice' => 6.66, 'grossPrice' => 8.19]
        ],
        'large' => [
            'snowman' => ['netPrice' => 8.00, 'grossPrice' => 9.84],
            'santa'   => ['netPrice' => 8.00, 'grossPrice' => 9.84],
            'reindeer' => ['netPrice' => 8.00, 'grossPrice' => 9.84]
        ]
    ];

    public static function getOrnamentData($size, $color) {
        return self::ORNAMENTS[$size][$color] ?? null;
    }
}
