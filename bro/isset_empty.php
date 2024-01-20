<?php
    // isset() : Returns true if a variable is declared and not null
    // empty() : Returns true if a variable is not declared, false, null, or ""

    $username  = "Kin";
    $testEmpty = "";
    $testNull = null;


    
    if(isset($testEmpty)) {
        echo "This variable is set <br>";
    }
    else {
        echo "This variable is NOT set <br>";
    }

    if(empty($testEmpty)) {
        echo "This variable is empty <br>";
    }
    else {
        echo "This variable is NOT empty <br>";
    }

    
?>