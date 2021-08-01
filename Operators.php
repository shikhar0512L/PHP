<?php
//OPERATORS IN PHP


//Arthematic Operator
$var1 = 456;
$var2 = 876543;
echo 'The value of var1+var2 is';
echo "<br>";   //USE HTML IN {""};
echo $var1+$var2;
echo "<br>";
echo "The value of varible1 - variable2 is ";
echo $var1 - $var2;
echo "<br>";
echo "The value of varible1 * variable2 is ";
echo $var1 * $var2;
echo "<br>";
echo "The value of varible1 / variable2 is ";
echo $var1 / $var2;
echo "<br>";

//Assignment Operator
echo "<br>";
$newVar = $var1;
echo "The value of new variable is ";
echo $newVar;
echo "<br>";
 $var2 +=10;
 echo "The value of new variable is ";
 echo $var2;
 echo "<br>";
 $var2 -=10;
 echo "The value of new variable is ";
 echo $var2;
 echo "<br>";
 $var2 *= 10;
 echo "The value of new variable is ";
 echo $var2;
 echo "<br>";
 $var2 /= 10;
 echo "The value of new variable is ";
 echo $var2;
 echo "<br>";

echo "<br>";

//Comparison Operator
    // echo "<h1> Comparison Operators </h1>";
    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";

    echo "The value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";

    echo "The value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";

echo "<br>";
//Increment/Decrement Operator
    // echo $variable1++;
    // echo $variable1--;
    // echo ++$variable1;
    echo --$var1;
    echo "<br>";
    echo $var1;



//Logical Operator
    // and (&&)
    // or (||)
    // xor 
    // !
echo "<br>";
    // $myVar = (true and true);
    // $myVar = (false and true);
    // $myVar = (false and false);
    // $myVar = (true and false);
    // $myVar = (true or false);

    // $myVar = (true xor true);
    // $myVar = (false and true);
    // $myVar = (false xor false);
    $myVar = (true and false);
    echo "<br>";
    echo var_dump($myVar);


?>