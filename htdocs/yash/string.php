<?php
    $str = "This is a string.";
    echo $str;
    
    
    echo "<br>lenght :".strlen($str);
    // ".(dot operator) to use concetination."
    
    
    echo "<br>Word count :".str_word_count($str);
    
    
    echo "<br> reverse string :".strrev($str);
    
    
    echo "<br>position :".strpos($str,'a');
    
    
    echo "<br>replace :".str_replace('is', 'at', $str);
    
?>