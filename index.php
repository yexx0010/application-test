<!doctype html>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	
<script src="//ajax.googleapis.com/ajax/libs/mootools/1.5.2/mootools.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>

<html>
<head>
<style>
body {background-color: white;} 
 
table#t01 {margin: auto;}
 
caption {
	font-family: 'Rockwell Extra Bold', 'Rockwell Bold', monospace;
	font-size: 35px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 26px;
}
 
 
table#t01 th,td{	
	border: 1px solid black;
	text-align:center;
	font-family: 'Rockwell Extra Bold', 'Rockwell Bold', monospace;
	font-size: 20px;
	color:white;
	text-shadow:2px 2px 5px black;}
	
table#t01 tr:nth-child(even) {
    background-color: none;
}
table#t01 tr:nth-child(odd) {
   background-color:none;
}
table#t01 th {
    background-color: black;
    color: white;
	height:50px;
	text-shadow:2px 2px 5px black;
}
table#t01 td{
color:white;}
 
table#t01 tr:hover{background-color:powderblue;}
table#t01 tr>td:nth-child(5){background-color:white;}
 
 
.button {
    background-color: black;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 50%;
}
 
.button:hover{
     background: gray;
}


</style>
<head>

<body>
<table id="t01">
<caption>Client</caption>
		<tr>
			<th>id</th>
			<th>FirstName</th>
			<th>LastName</th>
			<th>Email</th>
			<th>Click to show client information</th>
		</tr>
	


<?php

$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
 
$len=count($people);
$len1 = count($people[0]);
 
for ($i = 0; $i < $len; $i ++) {
	echo "<tr>";
	foreach($people[$i] as $k => $v) {
		echo "<td id=".$k.$i.">".$v;
		echo "</td>";
	}
	
		echo "<td><button class='button' id=".$i." onclick='out(this.id)'>Click</button></td>";
	echo "</tr>";
}
echo "</table>";
 


?>
<script type="text/javascript">
	function out(target) {
		$a = $("#first_name"+target).text();
		 $b =$("#last_name"+target).text();
		$c = $("#email"+target).text();
		alert("The information of the clicked client is:\nFirst Name:   " +$a+ ". \nLast Name:   "   +$b + ".\nEmail:            "  +$c + ".    ");
 
	}
</script>
	
</body>
</html>
