<html>
<head>
<title>Testing Hello world</title>
</head>
<body>
<?php 
echo "Hello World from George" ;

$name = "George 2";

echo "\n hello world from".$name ;

// arrays usage

$names = array ("name1", "name2", "name3", "name4");
echo "<BR>"."01: Arrays elements index 1 == :".$names[1];

for ($i =0; $i<count ($names) ; $i++){
	echo "<BR>"."01: Arrays in loop in position : ".$i." : ".$names[$i];
} 

// reverse sort
rsort ($names);
for ($i =0; $i<count ($names) ; $i++){
	echo "<BR>"."=====>>01:(use rsort, sort) in position : ".$i." : ".$names[$i];
} 

// Maps (associate array)
// use each function
$map1 = array ("A"=> "Element1", "B"=> "Element2");
echo "<BR>"."02:(MAP) woth Keys A  is : ".$map1["B"];

while ($map1_Elements= each($map1)){
	echo "<BR> use of each : (".$map1_Elements["key"].") has value of : ".$map1_Elements["value"];
}
// or we can use list function to get each element in two variables

// reset the internal pointers of the array before traverse again
reset($map1);
echo "<BR> ";
print_r($map1);
while (list ($key1,$value1) = each($map1)){
	echo "<BR>  03 use of list: (".$key1.") has value of : ".$value1;
}

// use of foreach function
// to reassign a value use & before a variable in the array
reset($map1);
echo "<BR> use of FOREACH";
foreach ($map1 as $key=>$value){
		echo "<BR>  04: (".$key.") has value of : ".$value;
}
// asort,rasort,ksort,krsort functions to sort array by value or key 

// add value to the map
$map1["C"] ="Element3";
//sort by key
krsort($map1);
foreach ($map1 as $key=>$value){
		echo "<BR>  05: (".$key.") has value of : ".$value;
}
// convert array to string
$tostring = implode (" and  ", $map1);
$toexplode = explode (" ","words in a string"); // (value to use to split , string)
echo "<BR>  06: :".$tostring;

foreach($toexplode as $key=>$value)
echo "<BR>  07: :".$key." : ".$value;


// string functions: strlen(string), substr(string, position, length to stop to)
// str_replace("text to find"," new value", the string)
// split a string into half
$sentence = " this string needs to be  split in half";
echo "<BR>  08.1: :".substr($sentence,0,strlen($sentence)/2);
echo "<BR>  08.2: :".substr($sentence,strlen($sentence)/2);
echo "<BR>  08.3: :".str_replace("e", "3", $sentence); 

?>
</body>
</html>