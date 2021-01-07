<html>
<title>Demo</title>
<head>
	<link rel="stylesheet" href="style.css">
	<script src="validate.js"></script>
</head>
<body>
<div class="container">
	<div class="box">
		<div class="textupper"><label class="label"><u>Practical Test </u></label></div>
      <div class="innerbox">
      	<div class="text"><label class="label">Calculator</label></div>
      	<div class="col">
      <div class="form">
      	<form name="form" name="form" method="post" > 
      <!-- <form action="takeaction.php" name="form" method="post" onsubmit="return numberValidation()">  -->	
  <label class="label"for="firstNumber">Number 1</label>
  <input autocomplete="off" type="text" class="typetext" id="" placeholder="Enter Number" name="firstNumber" required=""><br><br>
  <label class="labelforselect" for="operation"></label>
  <select class="select" required="" name="operation" id="">
    <option value="+">+</option>
    <option  value="-">-</option>
    <option  value="*">*</option>
    <option  value="%">%</option>
  </select><br><br>
  <label class="label"for="secNumber" >Number 2</label>
  <input autocomplete="off" type="text" class="typetext"placeholder="Enter Number" id="" name="secNumber" required=""><br><br>
  <input type="submit" name="submit" value="Submit"><br><br>
</form>

  <label class="labeloutput" for="output">
    <?php
if ( isset( $_POST['submit'] ) ) {

$firstNumber = $_POST['firstNumber'];
$secNumber = $_POST['secNumber'];
$operation = $_REQUEST['operation'];
if (is_numeric($firstNumber) and is_numeric($secNumber)) {
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

echo "Your Answer is : ".$output;
}
else
{
  
        echo "Please Enter Numeric";
    }
}?>
</label>

      </div>
      </div>
   	</div>
</div>
</body>
</html>

