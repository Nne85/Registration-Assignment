<?php

$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$country = $_POST["country"];

$filename = './user_data.csv';// file name created
$data = array('name' => $name,'email' => $email,'dob'=> $dob, 'gender' => $gender, 'country' => $country);


$fp = fopen($filename, 'a'); // this will oen the file in append mode and write the submitted data

//Once the data is written, it will be saved in the csv file created.*/
fputcsv($fp, $data);// this will put the data into the csv file
fclose($fp);// close the file
//print_r($data);// This will print out the info



print_r($name); 
echo '<br>';
print_r($email);
echo '<br>';
print_r($dob);
echo '<br>';  
print_r($gender);
echo '<br>'; 
print_r($country);




?>