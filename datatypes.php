<?php

/* Data Types & Type Casting*/

# 4 Scalar Types
    # bool - true /false
    $completed = true;
    # int - 1, 2, 3, 4, 5
    $score = 75;
    # float - 1.5, 0.1, 0.005, -15.8
    $price = 0.99;
    # string = "something", "something else"
    $greeting = 'Hello Chris';


    //Get type of variable
    var_dump($completed);
    var_dump($score);
    var_dump($price);
    var_dump($greeting);

    echo $completed . '<br />';
    echo $score . '<br />';
    echo $price . '<br />';
    echo $greeting . '<br />';



# 4 Compound Types
    # array (Arrays don't have to be one type, is just a list of objects)
    $companies = [1, 2, 3, 0.5, -9.2, 'A', 'b', true];

    //This will return an error on the front-end because php doesn't know how to convert this to a string
    //echo $companies;
    //use print_r instead
    print_r($companies);

    # object
    # callable
    # iterable




# 2 Special Types
    # resource
    # null

