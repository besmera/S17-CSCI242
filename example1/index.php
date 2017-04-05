<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        function square($num)
        {
            $result = $num * $num;
            return $result;
        }
        
        $class = "CSCI242";
        /*
         * 100 lines of code here
         */
        $x = 5;
        
        $square = square($x);
  
        echo "Welcome to $class the square of $x is $square";
        ?>
    </body>
</html>
