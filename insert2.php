
<?php


$con = mysqli_connect('127.0.0.1','root','');

if (!$con) 
{ 
	echo 'Cannot connect to database';
}

if (!mysqli_select_db($con, 'test2')) {
 echo 'Cannot select database';
 }
 

$SerialNum = $_POST['serial'];
$Place = $_POST['place'];
$NameChild = $_POST['namechild'];
$DOB = $_POST['dob'];
$Gender = $_POST['gender'];
$NameMother = $_POST['namemother'];
$NameFather = $_POST['namefather'];
$IssuedBy = $_POST['issuedby'];
$TypeBirth = $_POST['typeofbirth'];
$NatureBirth = $_POST['natureofbirth'];

 
$sql = "INSERT INTO test2birth (SerialNumber, PlaceOfBirth, NameOfChild, DateOfBirth, Gender, NameOfMother, NameOfFather, IssuedBy, TypeBirth, NatureBirth ) VALUES ('$SerialNum', '$Place', '$NameChild', '$DOB', '$Gender', '$NameMother', '$NameFather', '$IssuedBy', '$TypeBirth', '$NatureBirth')";

if (!mysqli_query($con,$sql))
{
	echo 'Not inserted';
}

else
{
	
echo 'Inserted';
}

	header("refresh:10 url=index2.html");
	
?>
