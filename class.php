<?php 

$xy= htmlentities("<a href='Twitter'>Twitter</a>");
echo html_entity_decode($xy);
echo "<br>";



//str_repeat
echo str_repeat("Design", 5);
echo "<br>";




//empty isset
$x= 0;
if (empty($x)) {
	echo "Variable is empty.<br>";

	if (isset($x)) {
		
		echo "Variable is set";
	}
}

echo "<br>";
$num="018984984";
if (empty($num)) {
	echo "Your number is empty";
}if (is_numeric($num)) {
	echo "Well Done";
}else{
	echo "Number must be integer";
}

echo "<br>";

$line="I am a Web Developer";
$arr= explode(' ' , $line);
var_dump($arr);
echo "<br>";


$format="index.jpg";

$imgformat= explode('.', $format);




if (end($imgformat) =='jpg') {
	echo "Image successfully selected";
}else{
	echo "Select an other image";
}
echo "<br>";

$names=[
	'Hello!',
     'I',
     'am',
     'Prema'
];

echo implode('', $names);

echo "<br>";
$name="Prema.Priya.Samanta.Pranto.Oyshe";
$namedevide= explode('.', $name);

if (in_array('Priya', $namedevide)) {
	echo "Correct";
}else{
	echo "Wrong";
}

echo "<br>";

$name_1=[
	['name' =>"Prema",
	'phonenumber' =>"798789789789",
],
[
	'name' =>"Prema",
	'phonenumber' =>"798789789789",
],
[
	'name' =>"Prema",
	'phonenumber' =>"798789789789",
],
[
	'name' =>"Prema",
	'phonenumber' =>"798789789789",
]
];
if (count($name_1) > 7) {
	echo "Well Done";
}else{
	echo "Incorrect";
}
	echo "<br>";

$user_name=[
	'name' => 'Samanta',
	'Contact num'=> "98789789",
	'year'=> "20",

];
$user_change=[
	'name' => 'Priya',
	'Contact num'=> "86868869",
	'year'=> "25",

];

print_r(array_diff($user_name, $user_change));


$color=[
	'red',
	'green',
	'blue',

];

array_push($color,'pink','white');

echo "<pre>";
print_r($color);
echo "</pre>";

echo "<br>";
$color=[
	'red',
	'green',
	'blue',

];
array_pop($color);

echo "<pre>";
print_r($color);
echo "</pre>";

echo "<br>";
$color=[
	'red',
	'green',
	'blue',

];
array_unshift($color, 'white');
print_r($color);




 ?>