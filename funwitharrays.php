<?php

//ARRAYS
$programmingLanguages = ['PHP', 'Java', 'Python'];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo count($programmingLanguages);
echo '<br/>';

//Add a new programming language to the array
$programmingLanguages[] = 'C++';

//Add multiple new programming languages to the array
//Pass by reference
array_push($programmingLanguages, 'TypeScript', 'C#');

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo count($programmingLanguages);


//Associative arrays
$programmingLanguageVersions = [
    'PHP' => '8.3',
    'Python' => '3.6',
    'Java' => '17'
];


//Multi-Dimensional Arrays
$programmingLanguageSummaries = [
    'PHP'=> [
        'creator' => '',
        'extension' => '',
        'website' => '',
        'isOpenSource' => '',
        'versions'=> [

        ]
    ],
    'Python'=> [
        'creator' => '',
        'extension' => '',
        'website' => '',
        'isOpenSource' => '',
        'versions'=> [
            
        ]
    ],
    'Java' => [
        'creator' => '',
        'extension' => '',
        'website' => '',
        'isOpenSource' => '',
        'versions'=> [
            
        ]
    ],
    'TypeScript' => [
        'creator' => '',
        'extension' => '',
        'website' => '',
        'isOpenSource' => '',
        'versions'=> [
            
        ]
    ],
    'C#' => [
        'creator' => '',
        'extension' => '',
        'website' => '',
        'isOpenSource' => '',
        'versions'=> [
            
        ]
    ]
];