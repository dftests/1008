<?php
require 'complex.class.php';

$test = new complex(4,5,10,11);
echo '4,5,10,11<br>'; 
echo 'addition '.$test->addition().'<br>';
echo 'subtraction '.$test->subtraction().'<br>';
echo 'multiplication '.$test->multiplication().'<br>';
echo 'division '.$test->division().'<br>';
echo '<hr><br>';

$test = new complex(4,5,4,0);
echo '4,5,4,0<br>';
echo 'addition '.$test->addition().'<br>';
echo 'subtraction '.$test->subtraction().'<br>';
echo 'multiplication '.$test->multiplication().'<br>';
echo 'division '.$test->division().'<br>';
echo '<hr><br>';

$test = new complex(4,5,10,5);
echo '4,5,10,5<br>';
echo 'addition '.$test->addition().'<br>';
echo 'subtraction '.$test->subtraction().'<br>';
echo 'multiplication '.$test->multiplication().'<br>';
echo 'division '.$test->division().'<br>';
echo '<hr><br>';
?>