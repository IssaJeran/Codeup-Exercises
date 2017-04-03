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

// print_r($companies);
// ksort($companies);
// print_r($companies);

//Steps to solving #4. 

$employees = $companies['Be Inc'];
sort($employees);

$companies['Be Inc'] = $employees;

// foreach ($companies as $employees)
// {
//     sort($employees);
//     print_r($employees); 
// }

foreach ($companies as $companyName => $employees){
    sort($employees);
    $companies[$companyName] = $employees; 
} 

print_r($companies);
ksort($companies);
print_r($companies);

arsort($companies);
print_r($companies);
