<?php
$server_name = "sql310.infinityfree.com";
$username = "if0_35546750";
$password = "icHD0HRu0qWG";
$database_name = "if0_35546750_infoget";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{
    $namee = $_POST["namee"];
    $class = $_POST["class"];
    $department = $_POST["department"];
    $course = $_POST["course"];
    $semester = $_POST["semester"];
    $irb_training = $_POST["irb_training"];
    $version_label = $_POST["version_label"];

    $sql_query = "INSERT INTO details(namee,class,department,course,semester,irb_training,version_label) VALUES ('$namee','$class','$department','$course','$semester','$irb_training','$version_label')";

    if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>