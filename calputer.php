
<html>
<head>
    <meta http-equiv="content-Type" content="text/html;charset-utf-8">
	<title>php简易计算器</title>
	<style type="text/css">
	  table{margin: 50px auto;width: 300px;border: 1px #ddd;}
      
	</style>
</head>
<?php
    //判断是否为空
    $opt1=true;
    $opt2=true;
    $messages="";

    if(isset($_GET["sub"])){
    	   if ($_GET["opt1"]=="") {
    	   	  $opt1=false;
    	   	  $messages.="第一个值不能为空";
    	   }
    	   if ($_GET["opt2"]=="") {
    	   	  $opt2=false;
    	   	  $messages.="第二个值不能为空";

    	   }
    	   if ($opt1 && $opt2) {
	           $sum=0;
	           switch ($_GET["opt"]) {
	           	case '+':
	           		$sum=$_GET["opt1"]+$_GET["opt2"];
	           		break;
	           	case '-':
	           		$sum=$_GET["opt1"]-$_GET["opt2"];
	           		break;
	           	case '*':
	           		$sum=$_GET["opt1"]*$_GET["opt2"];
	           		break;
	           	case '/':
	           		$sum=$_GET["opt1"]/$_GET["opt2"];
	           		break;
	           	case '%':
	           		$sum=$_GET["opt1"]%$_GET["opt2"];
	           		break;
	           }
           }
    }
?>
<body>
    <table border="1" cellpadding="0" cellspacing="0">
	<form action="calputer.php" method="get">
	 <tr>
	 	<td><input type="text" size="5" name="opt1"></td>
	 	<td>
	 		<select name="opt">
	 			<option value="+">+</option>
	 			<option value="-">-</option>
	 			<option value="">*</option>
	 			<option value="/">/</option>
	 			<option value="%">%</option>
	 		</select>
	 	</td>
	 	<td><input type="text" size="5" name="opt2"></td>
	 	<td><input type="submit" name="sub"  value="计算"></td>
	 	
	 </tr>
	 </form>
	 <?php
	    if(isset($_GET["sub"])) {
	    		echo '<tr><td colspan="5">';
	    		if ($opt1&&$opt2) {
	    		echo "结果：".$_GET["opt1"]." ".$_GET["opt"]." ".$_GET["opt2"]." = ".$sum;
	    		
	    	   }else{echo "$messages";}
	    	   echo '</td></tr>';
	    	}
	 ?>	
	
  </table>
</body>
</html>
