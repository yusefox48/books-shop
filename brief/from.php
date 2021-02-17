<?php
include("db.php");
session_start();
        $id = 0;
        $update = false;
		$title = '';
		$author = '';
		$image = '';
		$date = '';
		$quantte = '';
		$prix = '';

if (isset($_POST['add'])){
	$title = $_POST['title'];
	$author = $_POST['author'];
	$date = $_POST['pub'];
	$quantte=$_POST['quantite'];
	$prix=$_POST['prix'];
	$filename = $_FILES["image"]["name"]; 
$tempname = $_FILES["image"]["tmp_name"];     
$folder = "images/".$filename; 
	$query = "INSERT INTO data(title, author, image, pub , quantite, prix) VALUES('$title','$author', '$filename', '$date', $quantte, $prix) ";
	if (move_uploaded_file($tempname, $folder))  { 
		$msg = "Image uploaded successfully"; 
	}else{ 
		$msg = "Failed to upload image"; 
  } 
	mysqli_query($connect,$query);
	
	$_SESSION['message'] = "Record has been saved";
	$_SESSION['msg_type'] = "success";
	header('location: crude.php');
}
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$connect->query("DELETE FROM data WHERE id=$id") or die ($connect->error());
	$_SESSION['message'] = "Record has been deleted";
	$_SESSION['msg_type'] = "danger";
	header('location: crude.php'); 
}
if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$update = true;
	$result = $connect->query("SELECT * FROM data WHERE id=$id") or die ($connect->error()) ;
		$row = $result->fetch_array();
		$title = $row['title'];
		$author = $row['author'];
		$image =$row['image'];
		$date =$row['pub'];
		$quantte =$row['quantite'];
		$prix =$row['prix'];

	
}
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$title = $_POST['title'];
		$author = $_POST['author'];
		$image =$_POST['image'];
		$date =$_POST['pub'];
		$quantte =$_POST['quantite'];
		$prix =$_POST['prix'];

		$connect->query("UPDATE data SET title='$title', author='$author',image='$image',pub='$date',quantite='$quantte', prix='$prix' WHERE id=$id ") or die($connect->error);
		$_SESSION["message"] = "has been updated !" ;
		$_SESSION["msg_type"] = "warning" ; 
header('location: crude.php');
}
?>