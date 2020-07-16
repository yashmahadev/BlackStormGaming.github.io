<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="cont">
        This is My First PHP Website
        <?php
            echo "Hello King";
            //comment
            echo "hello";

          //variables define by "$" sig1  
         $var1 = 10;
         $var2 = 20;
        //  $var3 = "hii";
        //  $var4 = "king";
         echo $var1;
         echo $var2;
         echo $var1+$var2;
        //  echo $var3+$var4;

        //Operators
        //1. Arethmetic Operators : 
        echo "<br>";
        echo "<br>";
        echo "The value Of var 1 + 2 is :"; echo $var1+$var2; 
        echo "<br>";
        echo "The value Of var 1 - 2 is :"; echo $var1-$var2; 
        echo "<br>";
        echo "The value Of var 1 * 2 is :"; echo $var1 * $var2; 
        echo "<br>";
         echo "The value Of var 1 / 2 is :"; echo $var1 / $var2; 
        
        //2. Assignment Operators :
        $newvar = $var1;
                echo "<br>";

        echo "<br>";
        echo "the Assignment operators :"; echo $newvar;
        echo "<br>";

        //3. Comparison Operator : 

        echo "<br>";
        echo "The value Of = is :";
        echo var_dump($var1 == $var2);

        echo "<br>";
        echo "The value Of != is :";
        echo var_dump($var1 != $var2);

        echo "<br>";
        echo "The value Of >= is :";
        echo var_dump($var1 >= $var2);

        echo "<br>";
        echo "The value Of <= is :";
        echo var_dump($var1 <= $var2);
        echo "<br>";
        echo "<br>";

        //4. Increment / Decriment Opretor : 

        echo $var1++;
        echo "<br>";
        echo $var1;

        echo "<br>";
        echo ++$var1;
        echo "<br>";
        echo $var1;


        //5. Logical Operator : 

        echo "<br>";
        echo "<br>";
         echo ($var1 >=5 and $var2<=25);
                 echo "<br>";
         echo var_dump($var1 >=5 and $var2<=25);

         echo "<br>";
         echo ($var1 or $var2);
                 echo "<br>";
         echo var_dump($var1 or $var2);


         echo "<br>";
         echo (false xor true);
                 echo "<br>";
         echo var_dump(true xor false);
        ?>

        <?php

        //primitive data type : 
        echo "<br><br>1. String :";
        $str = "This is String data type.";
        echo var_dump($str);

        echo "<br>2. int :";
        $int = 65; $float = 65.25;
        echo var_dump($int);
        // echo $int;
        echo var_dump($float);
        echo "<br>";
        echo "Constant var :";

        //constant in php :
        //to create constant use "define"
        define('pi',3.14);
        echo pi;
        ?>

    </div>
</body>
</html>