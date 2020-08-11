<?php

echo '<br>Exercises part 2: <br><br>';

echo '1. $color = array(\'white\', \'green\', \'red\', \'blue\', \'black\'); <br>' .
    'Write a script which will display the following string - <br>' .
    '"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet,
the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M.
Nixon" <br>' .
    'and the words \'red\', \'green\' and \'white\' will come from $color. <br><br>';

$color = array('white', 'green', 'red', 'blue', 'black');

$result = 'The memory of that scene for me is like a frame of film forever frozen at that moment: the ' .
    $color[count($color) / 2 ] .
    ' carpet, the ' .
    next($color) .
    ' lawn, the '.
    prev($color) .
    ' house, the leaden sky. The new president and his first lady. - Richard M. Nixon';

echo $result . '<br><br>';

echo '2. $color = array(\'white\', \'green\', \'red\') <br>' .
    'Write a PHP script which will display the colors in the following way : <br>' .
    'Output : <br>
        white, green, red, <br><br>
        green <br><br>
        red <br><br>
        white <br><br>';

$color = array('white', 'green', 'red');

$result = implode(', ', $color);

echo $result . '<br><br>';

$result = implode('<br><br>', $color);

echo $result . '<br><br>';

echo '3. $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
        "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
        "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
        "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
        "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
        Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
        "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ; <br>' .
    'Create a PHP script which display the capital and country name from the above array $ceu. Sort the list by the name of the country' .
    'Sample Output : <br>
        The capital of Netherlands is Amsterdam <br>
        The capital of Greece is Athens <br>
        The capital of Germany is Berlin <br><br>';

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
    "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
    "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

foreach ( $ceu as $key => $value )
{
    echo "The capital of $key is $value<br />";
}

echo '<br>';

echo '4. $x = array(1, 2, 3, 4, 5); <br>' .
    'Delete an element from the above PHP array. After deleting the element, integer keys must be normalized. <br>' .
    'Sample Output : <br>
        array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } <br>
        array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) } <br><br>';

$x = array(1, 2, 3, 4, 5);

print_r($x);
echo '<br>';

array_splice($x, 3,1);

print_r($x);
echo '<br><br>';


echo '5. $color = array(4 => \'white\', 6 => \'green\', 11=> \'red\'); <br>' .
    'Write a PHP script to get the first element of the above array <br>' .
    'Expected result : white <br><br>';

$color = array(4 => 'white', 6 => 'green', 11=> 'red');

echo current($color) . '<br><br>';

echo '6. Write a PHP script which decode the following JSON string. <br>' .
    'Sample JSON code : <br>' .
    '{"Title": "The Cuckoos Calling",  <br>
        "Author": "Robert Galbraith",  <br>
        "Detail": {  <br>
        "Publisher": "Little Brown"  <br>
        }}  <br>
        Expected Output : <br>
        Title : The Cuckoos Calling <br>
        Author : Robert Galbraith <br>
        Publisher : Little Brown <br><br>';

$json = '{"Title": "The Cuckoos Calling",
        "Author": "Robert Galbraith",
        "Detail": {
                "Publisher": "Little Brown"
        }}';

$result = json_decode($json, true);

function print_json($array){
    foreach ( $array as $key => $value )
    {
        if(is_array($value)){
            print_json($value);
        }
        else
            echo "$key : $value<br />";
    }
}

print_json($result);

echo '<br>';

echo '7. Write a PHP script that insert a new item in an array on any position. <br>
        Expected Output : <br>
        Original array : <br>
        1 2 3 4 5 <br>
        After inserting \'$\' the array is : <br>
        1 2 3 $ 4 5 <br><br>';

$x = array(1, 2, 3, 4, 5);

echo implode(' ', $x) . '<br>';

array_splice($x, 2, 0, '$');

echo implode(' ', $x) . '<br><br>';


echo '8. Write a PHP script to sort the following associative array :<br>
        array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in<br>
        a) ascending order sort by value<br>
        b) ascending order sort by Key<br>
        c) descending order sorting by Value<br>
        d) descending order sorting by Key<br><br>';

$array = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

asort($array);

echo 'a)';

print_r($array);

echo '<br>b)';

ksort($array);

print_r($array);

echo '<br>c)';

arsort($array);

print_r($array);

echo '<br>d)';

krsort($array);

print_r($array);

echo '<br><br>';

echo '9. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.<br>
        Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73 <br>
        Expected Output :<br>
        Average Temperature is : 70.6<br>
        List of seven lowest temperatures : 60, 62, 63, 63, 64,<br>
        List of seven highest temperatures : 76, 78, 79, 81, 85,<br><br>';


$temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73);

$average = array_sum($temp) / count($temp);

sort($temp);

$lowest = array_slice($temp, 0, 5);

$highest = array_slice($temp, count($temp) - 5, 5);

echo "Average Temperature is : $average <br> 
        List of seven lowest temperatures : " . implode(', ',$lowest) . '<br>' .
        "List of seven highest temperatures : " . implode(', ', $highest).  "<br><br>";


echo '10. Write a PHP program to sort an array of positive integers using the Bead Sort Algorithm. <br>
        According to Wikipedia "Bead sort is a natural sorting algorithm, developed by Joshua J. Arulanandham, <br>
        Cristian S. Calude and Michael J. Dinneen in 2002. Both digital and analog hardware implementations of <br>
        bead sort can achieve a sorting time of O(n); however, the implementation of this algorithm tends to be <br>
        significantly slower in software and can only be used to sort lists of positive integers". <br>
        Input array : Array ( [0] => 5 [1] => 3 [2] => 1 [3] => 3 [4] => 8 [5] => 7 [6] => 4 [7] => 1 [8] => 1 [9] => 3 )  <br>
        Expected Result : Array ( [0] => 8 [1] => 7 [2] => 5 [3] => 4 [4] => 3 [5] => 3 [6] => 3 [7] => 1 [8] => 1 [9] => 1 )<br><br>';

$array = array( 5, 3, 1, 3, 8, 7, 4, 1, 1, 3 );

print_r($array);
echo '<br>';

function beadsort($array){
    $max = max($array);

    $bead = array();

    for($i = 0; $i < count($array); $i++){
        $bead[$i] = array_fill(0, $max, 0);
    }

    for ($i = 0; $i < count($array); $i++){
        for($j = 0; $j < $array[$i]; $j++){
            $bead[$i][$j] = 1;
        }
    }

    for($j = 0; $j < $max; $j++){
        $sum = 0;
        for($i = 0; $i < count($array); $i++){
            $sum += $bead[$i][$j];
            $bead[$i][$j] = 0;
        }

        for($i = 0; $i < $sum; $i++){
            $bead[$i][$j] = 1;
        }
    }

    for ($i = 0; $i < count($array); $i++){
        $j;
        for($j = 0; $j < $max && $bead[$i][$j]; $j++);
        $array[$i] = $j;
    }

    return $array;
}

print_r(beadsort($array));
echo '<br><br>';

echo '11. Write a PHP program to merge (by index) the following two arrays. <br>
        Sample arrays :<br>
        $array1 = array(array(77, 87), array(23, 45));<br>
        $array2 = array("w3resource", "com");<br>
        Expected Output :<br>
        Array<br>
        (<br>
        [0] => Array<br>
        (<br>
        [0] => w3resource<br>
        [1] => 77<br>
        [2] => 87<br>
        )<br>
        [1] => Array<br>
        (<br>
        [0] => com<br>
        [1] => 23<br>
        [2] => 45<br>
        )<br>
        )<br><br>';

$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

foreach ($array2 as $key => $value){
    if($key < count($array1) && is_array($array1[$key])) {
       array_unshift($array1[$key], $array2[$key]);
    }
    else{
        $array1[$key] = array($array2[$key]);
    }
}

print_r($array1);
echo '<br><br>';


echo '12. Write a PHP function to change the following array\'s all values to upper or lower case.<br>
    Sample arrays :<br>
    $Color = array(\'A\' => \'Blue\', \'B\' => \'Green\', \'c\' => \'Red\');<br>
    Expected Output :<br>
    Values are in lower case.<br>
    Array ( [A] => blue [B] => green [c] => red )<br>
    Values are in upper case.<br>
    Array ( [A] => BLUE [B] => GREEN [c] => RED )<br><br>';

$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

foreach ($Color as $key => $value){
    $upper[$key] = strtoupper($value);
    $lower[$key] = strtolower($value);
}

print_r($Color);
echo '<br>Values are in lower case.<br>';
print_r($lower);
echo '<br>Values are in upper case.<br>';
print_r($upper);
echo '<br><br>';


echo '13.Write a PHP script which display all the numbers between 200 and 250 that are divisible by 4.<br>
        Note : Do not use any PHP control statement.<br>
        Expected Output : 200,204,208,212,216,220,224,228,232,236,240,244,248<br><br>';

$array = array_fill(0, 50/4 + 1, 200);

array_walk($array, function (&$value, $key) {
    $value += $key * 4;
});


echo implode(', ', $array) . '<br><br>';




















