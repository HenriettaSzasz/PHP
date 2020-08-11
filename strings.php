<?php
    echo '<br>Exercises part 1: <br>';

    echo '1. Write a PHP script to : - <br>' .
    'a) transform a string all uppercase letters. <br>' .
    'b) transform a string all lowercase letters. <br>' .
    'c) make a string\'s first character uppercase. <br>' .
    'd) make a string\'s first character of all the words uppercase.<br><br>';

    $my_string = 'this is a string';

    echo 'a)<br>' . $my_string . '<br>' . strtoupper($my_string) . '<br>';

    $my_string = 'THIS IS A STRING';

    echo 'b)<br>' . $my_string . '<br>' . strtolower($my_string) . '<br>';

    $my_string = 'this is a string';

    echo 'c)<br>' . $my_string . '<br>' . ucfirst($my_string) . '<br>';

    echo 'd)<br>' . $my_string . '<br>' . ucwords($my_string) . '<br><br>';

    // 2.

    echo '2. Write a PHP script to split the following string. <br>' .
    'Sample string : \'082307\' <br>' .
    'Expected Output : 08:23:07 <br><br>';

    $my_string = '082307';

    $time = date_create_from_format('His', $my_string);

    $my_result = date_format($time, 'H:i:s');

    echo $my_string . '<br>' . $my_result . '<br><br>';

    // 3.

    echo '3. Write a PHP script to check if a string contains specific string? <br>' .
    'Sample string : \'The quick brown fox jumps over the lazy dog.\' <br>' .
    'Check whether the said string contains the string \'jumps\'. <br><br>';

    $my_string =  'The quick brown fox jumps over the lazy dog.';

    $my_result = stristr($my_string, 'jumps') ? 'Yes' : 'No';

    echo $my_string . '<br>' . $my_result . '<br><br>';


    // 4.

    echo '4. Write a PHP script to convert the value of a PHP variable to string. <br>';

    $my_variable = 3.14;

    $my_string = strval($my_variable);

    echo $my_variable;
    echo is_string($my_variable) ? ' Is string' : ' Is not string';
    echo '<br>' . $my_string;
    echo is_string($my_string) ? ' Is string' : ' Is not string';
    echo '<br><br>';


    // 5.

    echo '5.Write a PHP script to extract the file name from the following string. <br>' .
    'Sample String : \'www.example.com/public_html/index.php\' <br>' .
    'Expected Output : \'index.php\'<br>';

    $my_string = 'www.example.com/public_html/index.php';

    $my_result = substr(strrchr($my_string, '/'), 1);

    echo $my_string . '<br>' . $my_result . '<br><br>';


    // 6.

    echo '6. Write a PHP script to extract the user name from the following email ID. <br>' .
    'Sample String : \'rayy@example.com\' <br>' .
    'Expected Output : \'rayy\' <br>';

    $my_string = 'rayy@example.com';

    $my_result = strstr($my_string, '@', true);

    echo $my_string . '<br>' . $my_result . '<br><br>';


    // 7.

    echo '7. Write a PHP script to get the last three characters of a string. <br>'  .
    'Sample String : \'rayy@example.com\' <br>' .
    'Expected Output : \'com\' <br>';

    $my_result = substr($my_string, strlen($my_string) - 3, 3);

    echo $my_string . '<br>' . $my_result . '<br><br>';


    // 8.

    echo '8. Write a PHP script to format values in currency style. <br>'  .
    'Sample values : value1 = 65.45, value2 = 104.35 <br>' .
    'Expected Result : 169.80 <br>';

    $value1 = 65.45;
    $value2 = 104.35;

    $my_result = number_format($value1 + $value2, 2);

    echo $value1 . '<br>' . $value2 . '<br>'. $my_result . '<br><br>';


    // 9.

    echo '9. Write a PHP script to generate simple random password [do not use rand() function] from a given string. <br>'  .
    'Sample string : \'1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz\' <br>' .
    'Note : Password length may be 6, 7, 8 etc. <br>';

    $my_string = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';

    $password = '';

    $password_length = 6;

    for($i = 0; $i < $password_length; $i++){
        $password .= $my_string[random_int(0, strlen($my_string) - 1)];
    }

    echo $my_string . '<br>' . $password . '<br><br>';


    // 10.


    echo '10. Write a PHP script to replace the first \'the\' of the following string with \'That\'. <br>'  .
    'Sample date : \'the quick brown fox jumps over the lazy dog.\' <br>' .
    'Expected Result : That quick brown fox jumps over the lazy dog. <br>';

    $my_string =  'the quick brown fox jumps over the lazy dog.';

    $count = 1;

    $my_result = preg_replace('/the/', 'That', $my_string, 1);

    echo $my_string . '<br>' . $my_result . '<br><br>';


    // 11.

    echo '11. Write a PHP script to find first character that is different between two strings. <br>'  .
    'String1 : \'football\'  String2 : \'footboll\' <br>' .
    'Expected Result : First difference between two strings at position 5: "a" vs "o" <br>';


    $string1 = 'football';

    $string2 = 'footboll';

    $position = strspn($string1 ^ $string2, "\0");

    $my_result = "First difference between two strings at position $position: \"$string1[$position]\" vs \"$string2[$position]\"";

    echo $string1 . '<br>' . $string2 . '<br>' . $my_result .  "<br><br>";

    // 12.

    echo '12. Write a PHP script to get the filename component of the following path. <br>'  .
    'Sample path : "http://www.w3resource.com/index.php" <br>' .
    'Expected Output : \'index\' <br>';

    $my_string = "http://www.w3resource.com/index.php";

    $my_result = substr(strstr(strrchr($my_string, '/'), '.', true), 1);

    echo $my_string . '<br>' . $my_result . '<br><br>';


    //13.

    echo '13. Write a PHP script to print the next character of a specific character. <br>'  .
    'Sample character : \'a\' <br>' .
    'Expected Output : \'b\' <br>' .
    'Sample character : \'z\' <br>' .
    'Expected Output : \'a\' <br>';

    $my_char = 'a';

    $next_char = chr(ord($my_char) + 1);

    echo $my_char . '<br>' . $next_char . '<br>';

    $my_char = 'z';

    $next_char = chr(((ord($my_char) + 1) - 97) % 26 + 97);

    echo $my_char . '<br>' . $next_char . '<br><br>';

    // 14.

    echo '14. Write a PHP script to remove a part of a string from the beginning. <br>' .
    'Sample string : \'rayy@example.com\ <br>' .
    'Expected Output : \'example.com\' <br>';

    $my_string = 'rayy@example.com';

    $my_result = substr(strrchr($my_string, '@'), 1);

    echo $my_string . '<br>' . $my_result . '<br><br>';


    // 15.

    echo '15. Write a PHP script to get a hex dump of a string. <br>' .
    'Sample string : \'rayy@example.com\' <br>';

    $my_string = 'rayy@example.com';

    $my_result = substr(strrchr($my_string, '@'), 1);

    echo $my_string . '<br>' . $my_result . '<br><br>';


    // 16.

    echo '16. Write a PHP script to insert a string at the specified position in a given string. <br>' .
    'Original String : \'The brown fox\' <br>' .
    'Insert \'quick\' between \'The\' and \'brown\'. <br>' .
    'Expected Output : \'The quick brown fox\' <br>';

    $my_string = 'The brown fox';

    $my_result = substr(strrchr($my_string, '@'), 1);

    echo $my_string . '<br>' . $my_result . '<br><br>';


    echo '<br><br><br><br><br>'
?>