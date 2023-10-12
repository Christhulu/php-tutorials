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
        'creator' => 'Rasmus Lerdorf',
        'extension' => '.php',
        'website' => 'www.php.net',
        'isOpenSource' => true,
        'versions'=> [
            ['version'=> 8, 'releaseDate' => 'Nov 26, 2020'],
            ['version'=> 7.4, 'releaseDate' => 'Nov 28, 2019']
        ]
    ],
    'Python'=> [
        'creator' => 'Guido Van Rossum',
        'extension' => '.py',
        'website' => 'www.python.org',
        'isOpenSource' => true,
        'versions'=> [
            ['version'=> 3.9, 'releaseDate' => 'Oct 5, 2020'],
            ['version'=> 3.8, 'releaseDate' => 'Oct 14, 2019']
        ]
    ],
    'Java' => [
        'creator' => 'James Gosling',
        'extension' => '.jav',
        'website' => 'https://www.java.com/en/',
        'isOpenSource' => true,
        'versions'=> [
            ['version'=> 20, 'releaseDate' => 'Mar 21, 2023'],
            ['version'=> 19, 'releaseDate' => 'Sep 20, 2022']
        ]
    ],
    'TypeScript' => [
        'creator' => 'Anders Hejlsberg',
        'extension' => '.ts',
        'website' => 'https://www.typescriptlang.org/',
        'isOpenSource' => true,
        'versions'=> [
            ['version'=> 5, 'releaseDate' => 'Mar 2023'],
            ['version'=> 4, 'releaseDate' => 'Aug 2020']
        ]
    ],
    'C#' => [
        'creator' => 'Anders Hejlsberg',
        'extension' => '.cs',
        'website' => 'https://dotnet.microsoft.com/en-us/languages/csharp',
        'isOpenSource' => true,
        'versions'=> [
            ['version'=> 7.0, 'releaseDate' => 'Nov 8, 2022'],
            ['version'=> 6.0, 'releaseDate' => 'Nov 8, 2021'],
            ['version'=> 5.0, 'releaseDate' => 'Aug 2012']
        ]
    ]
];

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

echo $programmingLanguageSummaries['PHP']['versions'][0]['releaseDate'];

$array = ['a', 'b', 50=>'c', 'd', 'e'];

#Remove element from end
echo array_pop($array);

#Remove element from beginning
echo array_shift($array);

#Removing using unset, used to destroy variables normally, but you can specify a key also
#Doesn't re-index, pushing a new one would add them at the next value like the other ones weren't removed
unset($array[50], $array[1]);

#Print array
print_r($array);


//Casting to an array
$x = 5;
var_dump((array) $x);


#checking if value exists in array in a different way
var_dump(array_key_exists('a', $array)); #true
#checking if value exists and is not null in array in a different way
var_dump(isset($array['a'])); #false