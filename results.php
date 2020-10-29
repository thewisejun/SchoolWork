<!DOCTYPE html>
<html lang="en">

<head>
<?php 

session_start();

$search = $_SESSION['search'];
$query_null = $_SESSION['query'];
$results_null = $_SESSION['results'];


$conn = mysqli_connect('localhost','foo','PaqV7EsYF8UbDc3s','main_database');

if ($conn == false) {
	
	echo '0XX0';
}
else {
	
}

if ($search == NULL){
return null;	
}
else {
	
	
}

?>
  <meta charset="utf-8">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--<meta name="description" content="">
  <meta name="author" content="">
-->
  <title>RESULTS for <?php echo $search?></title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
 <?php include 'navbar.php' ?>
 
 
 <style>
 .bg-light {
    background-color: #0a0b0c!important;
	color:white;
}

 
 </style>

  <!-- Masthead -->
 <h1 class="mb-5" style="text-align:center;">Here are the results for: "<?php echo $search;?>"</h1>
 <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Worksheet Name</th>
      <th scope="col">Description </th>
      <th scope="col">Click here to visit worksheet</th>
	  <th scope="col"> Subject </th>
	   
    </tr>
  </thead>
  <tbody>
   
  <?php 
 
  $lookup = "SELECT * FROM main WHERE name LIKE '%$search%' OR description LIKE  '%$search%'";
 
 $query = mysqli_query($conn,$lookup);
  
  while ($row = mysqli_fetch_assoc($query)){
	 
  
  
  ?>
    <tr>
      <td scope="row"><?php echo $row['name']; ?></td>
      <td><?php echo $row['description']; ?></td>
 
	 <td > <a href="<?php echo "Answers/".$row['link'].".php";?>">"View Answers </a></td>
	  <td><?php echo $row['subject']; ?></td>
	  
	  
    </tr>
	
  <?php }?>
  </tbody>
</table>

  
  <!-- Footer -->
  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
