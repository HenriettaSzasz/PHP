<?php include_once 'title.php';
    $info = array("First name"=>"Henrietta", "Last Name"=>'Szasz' , "Position"=>'intern'); 

    echo "<table><tr><th>" . implode('</th><th>', array_keys($info)) . "</th></tr>";
    
    echo "<tr><td>" . implode('</td><td>', $info) . "</td></tr></table>";

    include_once 'strings.php';

    include_once 'arrays.php';
