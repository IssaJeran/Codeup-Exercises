<?php

$companies = [
    'Sun Microsystems' => [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' => [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' => [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' => [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' => [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' => [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' => [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];

var_dump($companies);


ksort($companies);
var_dump($companies);


// foreach ($companies as $employees)
// {
//     sort($employees);
//     print_r($employees); 
// }

foreach ($companies as $companyName => $employees){
    sort($employees);
    $companies[$companyName] = $employees; 
} 

var_dump($companies);

ksort($companies);
print_r($companies);
var_dump($companies);

//Sort the companies from biggest to lowest

arsort($companies);
print_r($companies);
var_dump($companies);
