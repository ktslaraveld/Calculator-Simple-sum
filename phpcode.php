<?php
if ( isset( $_POST['submit'] ) ) {

$firstNumber = $_POST['firstNumber'];
$secNumber = $_POST['secNumber'];
$operation = $_REQUEST['operation'];
if($operation=="+"){
  $output=$firstNumber+$secNumber;
}
elseif ($operation=="-"){
 $output=$firstNumber-$secNumber;
}
elseif ($operation=="*"){
 $output=$firstNumber*$secNumber;
}
elseif ($operation=="%"){
 $output=$firstNumber/$secNumber;
}

echo "sum is".$output;

}?>