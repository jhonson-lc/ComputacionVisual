

<?php 
	function conexion()
	{
	$servername="localhost";
    $username="root";
    $password="";
    $dbname="cuartosoftware";
    return $conn= mysqli_connect($servername,$username,$password,$dbname);
	}

 ?>