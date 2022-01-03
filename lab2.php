<?php

// Task 1

echo nl2br("You will find the \n newlines in this string \r\n on the browser window.");
echo "<br>****************************</br>";

// task2

// First Method
$str = "Hello World!";
echo count_chars($str,3);
echo "<br>";

// Second Method
$str = '<span class="Test">Hello</span> ';
echo htmlentities($str);

//Third Method
echo "<br>";
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr);
echo "<br>****************************</br>";

?>



<pre>
    <?php
    // TAsk 3
     var_dump($_SERVER); ?>
     </pre>
<pre>
    <?php print_r($GLOBALS);
    echo "<br>****************************</br>";
     ?>
</pre>



<?php
// Task 4
$arr =array(12,45,10,25);
echo "The Sum Of Numbers =". array_sum($arr);
echo "<br>";
$arr = array_filter($arr);
$average = array_sum($arr)/count($arr);
echo "The Average Of Numers =  $average";
echo "<br>";

rsort($arr);
foreach($arr as $values){
    echo "<br>";
    echo "Values ". $values;
}

echo "<br>****************************</br>";



// Last Task

$arr =array("Sara"=>"31","John"=>"41","Walaa"=>"39","Ramy"=>"40");
// Sort an associative array in descending order, according to the value:
arsort($arr);
foreach($arr as $values){
    echo "<br>";
    echo "Values in descending order, according to the value". $values;
}

echo "<br>";echo "<br>";echo "<br>";
//Sort an associative array in ascending order, according to the value:
asort($arr);
foreach($arr as $values){
    echo "<br>";
    echo "Values in ascending order, according to the value". $values;
}

echo "<br>";echo "<br>";echo "<br>";

//sort associative arrays in ascending order, according to the key:
ksort($arr);
foreach($arr as $x => $x_value) {
    echo "sorts an associative array in ascending order, according to the key:" . $x ;
    echo "<br>";
  }

  echo "<br>";echo "<br>";echo "<br>";
  //sort associative arrays in descending order, according to the key:

  krsort($arr);
  foreach($arr as $x => $x_value) {
    echo "sorts an associative array in ascending order, according to the key:" . $x ;
    echo "<br>";
  }

?>