<?php
$host="localhost";
$user="root";
$pass="";
$db="mydata";

// Create connection
$conn = mysqli_connect($host, $user, $pass,$db);

//$con=pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Could not connect to Server\n ");

if(!$conn){
    echo "Error:Unable to open database\n";
}
else{
    $name=$_POST['username'];
    $password=$_POST['password'];

    $sql="INSERT INTO register (username,password) VALUES ('$name','$password')";
   // $result=pg_query($con,$query);

   if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
    header("Location: index.html");
}
$conn->close();

?>
