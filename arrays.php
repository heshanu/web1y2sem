<?php
//Numeric arrays - Method 1
$student_names[0] = "Nimal De Silva";
$student_names[1] = "Mahesh Pathirana";
$student_names[2] = "Susil Perera";

echo 'The first student is ' . $student_names[0] . '<br>';
echo 'The second student is ' . $student_names[1] . '<br>';
echo 'The third student is ' . $student_names[2] . '<br> <br>';

//Numeric arrays - Method 2
$lecturer_names = array("Kamal Perera", "Sunil Fernando", "Nayana Silva");
echo 'The first lecturer is ' . $lecturer_names[0] . '<br> <br>';

//find the length of the array
$fruits = array("Apple", "Orange", "Banana");
echo 'The length of the array is ' . count($fruits) . '<br> <br>';

//populate an array using a array_fill() function
$x=array_fill(0,3,'PHP is a powerful tool for making dynamic and interactive web pages.');
print $x[0] . '<br>';
print $x[1] . '<br>';
print $x[2] . '<br> <br>';

//Associative arrays - Method 1
$employee_title["peter"] = "Accountant";
$employee_title["Jane"] = "Manager";
$employee_title["Meena"] = "Receptionist";

echo 'jane is a ' . $employee_title["Jane"] . '<br> <br>';

//Associative arrays - Method 2
$member_title = array("peter"=>"Accountant", "Jane"=>"Manager", "Meena"=>"Receptionist");
echo 'Peter is a ' . $member_title["peter"] . '<br> <br>';

//print all the elements of an array
print_r($employee_title);
echo '<br> <br>';

//Multidimensional arrays
$student["student1"]["name"] = "Nimal De Silva";
$student["student1"]["age"] = 20;
$student["student1"]["address"] = "Colombo";

$student["student2"]["name"] = "Kamal Perera";
$student["student2"]["age"] = 21;
$student["student2"]["address"] = "Kandy";

echo 'The name of the first student is ' . $student["student1"]["name"] . '<br> <br>';

//print all the elements of an array
echo '<pre>';
print_r($student);
echo '</pre>';
echo '<br> <br>';
