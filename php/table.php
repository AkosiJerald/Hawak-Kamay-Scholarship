<?PHP
$servername = "localhost";
$username = "root";
$password = "";
$database = "myLogin";
		// CREATE CONNECTION
$conn = new mysqli($servername, $username, $password, $database);
		// CHECK CONNECTION
if ($conn->connect_error) {
die("CONNECTION FAILED: " . $conn->connect_error);
}
		// SQL TO CREATE TABLE
$sql = 'CREATE TABLE Login_data(
id int(6) unsigned auto_increment primary key,
Firstname varchar(30) not null,
Lastname varchar(30) not null,
Email varchar(30) not null,
Birtday date not null,
Phone varchar(15) not null,
Address varchar(50),
Course varchar(50) not null,
Campus varchar(50) not null,
Lschool varchar(50) not null,
Father_FName varchar(30) ,
Father_LName varchar(30),
Mother_FName varchar(30),
Mother_LName varchar(30))';
if ($conn -> query($sql) === TRUE) {
	echo "TABLE Login_data CREATED SUCCESSFULLY";
} 
else{
	echo "ERROR CREATING TABLE: " .$conn->error;
}
$conn->close();
?>
