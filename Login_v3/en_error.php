<?php 
session_start();
include 'link.php';
$error = $_SESSION['en_error'];



?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Data error</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Muli:400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">

	<!-- Font Awesome Icon -->
	<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/error.css" />

</head>

<body>

<?php
echo"
<script>
Swal.fire({
	title: 'Error!',
	text: '".$error." ' ,
	icon: 'warning',
	confirmButtonText: 'OK',
  }).then((result) => {
	if (result.value) {
	  window.location.href = `enrollments.php`
	}
  }); 
</script>
;";
?>	

</body>

</html>
