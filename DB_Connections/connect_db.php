


<!-- $user = 'root';
$password = 'root';
$db = 'Sample_DB';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
); -->


<?php


$conn = new mysqli ("localhost:8889","root","root","Sample_DB");

if($conn ->connect_errno)
{
	die("Connction failed".$conn->connect_errno);
}

else
{
	print("Connection established");
}

// insert data in mysqli

$conn->query("insert into register values('','abc','9876543210')");
print(".   Data inserted into query");


// delete query in mysqli

$conn->query("delete from register where id='2'");


// update query using mysqli in oo style

$conn-> query("update register set name='New name' where id=1");


// select query using mysqli in oo style
$ft =$conn->query("select * from register");
while ($row=$ft->fetch_array()) {

print_r($row);	
}




// fetch_all function

$ft = $conn->query("select * from register ");
$row = $ft->fetch_all();

print_r($row);

// prepare statement
$conn->prepare("insert into register(name,fname,number) values(?,?,?)");

$name = "ABC";
$fname = "abc";
$num = "9876543210";
$ft->bind_param("ssi",$name,$fname,$num);
$ft->execute();
?>