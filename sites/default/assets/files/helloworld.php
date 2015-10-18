<html>
<head>
<title>Testing Hello world</title>
</head>
<body>
<?php 
echo "Hello World from George" ;

$name = "George 2";

echo "\n hello world from".$name ;


$num1 = 14;
$num2 = 7;

$num4 = 3;
$text1 = " text 1";
echo "<BR>";
echo $num1 =($num1*$num2);
echo "<BR>";
echo "hello world from".$name." \$num1 is ".$num1+=1 ;
$text1.=" more text";

echo "<BR>";
echo "<BR>"."1: ".$num1++;
echo "<BR>"."2: ".++$num2;
echo "<BR>"."3: ".$text1;

// 4,5,6,7,8 if statments elseif, else if , and else 
if($num2<10) { 
echo "<BR>"."4: use of if statement" ;
echo "<BR>"."5: use of if statement with == , <= ,>= ,!=" ;
} 

if(!($num2==7 && $num3 == 2) || $num1 == 99) { 
echo "<BR>"."6: use logical operators ==,!, ||, ++" ;
}

if ((!$num2>7)){} else {echo "<BR>"."7: use else"; }

if ((!$num2>7))
	{
		
	} 	
	elseif ($num2>7)
		{
		echo "<BR>"."8: use else if or elseif";
		}
		
//8 ternary operator  (option ? true : false)
$num3 = 6;
echo($num3==2) ?  "<BR> 8.1 : True Case" :"<BR> 8.1 : false Case" ;

echo($num3 >11) ?  "<BR> 8.2 : True Case" : ($num3<5) ? "<BR> 8.3 : False+true Case" : "<BR> 8.4 : false +false Case" ;
		
//9 Switch statements 	
$num3 = 2;	
switch ($num3){
	case 1 :
		echo "<BR>"."9:"." case 1";
		break;
	case 2 :
	echo "<BR>"."9:"." case 2";
		break;
	case 3: //fall throw 
	echo "<BR>"."9:"." case 3";
	// this will be done if no cases were selected
	default :
	echo "<BR>"."9:"." Default case ";
}


//10 Ch4 Loops for, while, do..while
for ($x =12; $x>-12;$x-=6){
	
	echo "<BR>"."10:".$x;
}
 
 $i = -5;
 while ($i <1){
	echo "<BR>"."10:While: value ".$i;
	$i+=3;
}

$i =10;
do {
	echo "<BR>"."10:Do_while: will happen at least once before evaluation of the loop condition: ".$i;
	$i+=10;
} while ($i==-10);


//11 Break commands with loops and exist command
	
for ($x2 =12; $x2>-12 ; $x2--){

	if ($x2 ==6) 	break;
	
}	
echo "<BR>"."11.1: Loop ended ".$x2;
{
	echo "<BR>"."11.2: this exit ends here ";
	exit ;
}
	echo "<BR>"."11.3: this will not show ";
?>
</body>
</html>