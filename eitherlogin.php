<!DOCTYPE html>
<html lang="en">

<head>

  
  <title>Predation, Page 165</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<meta name="robots" content="noindex,nosnippet,nocrawl" />
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">

</head>

<body>

<form action="submitinternal.php" method="POST">

<input type="text" name="user" required=required>

<input type="text" name="pass" required=required>

<input type="submit" name="submit" required=required>
</form>


<?php

if(isset($_POST['submit'])) {
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
} 


$conn = mysqli_connect("localhost","$user","$pass","main_database");

if ($conn == false) {
	
	echo ("TRY AGAIN");
}
else {
	
}



?>
  <!-- Navigation -->

 
 
 <style>
 .bg-light {
    background-color: #0a0b0c!important;
	color:white;
}

 
 </style>
 
 <?php
 

 
 
 ?>

  <!-- Masthead -->
  <div class="container">
  
  <?php 
  
  if (isset($_POST['submit'])) {
	  $imgFile = $_FILES['coverimg']['name'];
	$tmp_dir = $_FILES['coverimg']['tmp_name'];
	$imgSize = $_FILES['coverimg']['size'];
	$upload_dir = 'upload';
	$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
	$valid_extensions = array('jpeg', 'jpg', 'png', 'gif','.pdf'); 
	$coverpic = uniqid(rand(1000,1000000)).".".$imgExt;
	
	$addedname=uniqid(rand(1,10000000));
	$name= mysqli_real_escape_string($conn,$_POST['name']);
	$description= mysqli_real_escape_string($conn,$_POST['description']);
	$subject = mysqli_real_escape_string($conn,$_POST['subject']);
	$src = 'upload/'.$coverpic;
	
	$link = $name.$addedname;
	$link = str_replace(' ', '', $link);
	if (empty($name) && empty($description) && empty($subject)) {
		
			echo "empty set";
	}
	else{
		
		$query = "INSERT INTO `main` (`id`, `name`, `description`, `src`,`link`, `subject`, `t_up`, `t_down`) VALUES (NULL, '$name', '$description', '$src','$link', '$subject', NULL,NULL)";
		mysqli_query($conn,$query);
		echo "Added to database";
		
		
		
		
			 $content = "<html>";
			  $content .="<head>";
			  
			  $content.= '<?php $conn = mysqli_connect("localhost","foo","PaqV7EsYF8UbDc3s","main_database");
			  
			  if ($conn == false) { 
			  
			  echo "0XX0"; 
			  
			  } else { 
			  
			  } ?> <?php ';
  
  $content.=' $lookup =';
  $content.= '"SELECT * FROM main WHERE link = ';
 $content.= "'";
 $content.="$link";
  
  $content.= "'";
  $content .='";';
  
  $content.= '$query = mysqli_query($conn,$lookup)';
  $content.='?>';
  
  
  $content.= ' 
   
  <?php while ($row=mysqli_fetch_assoc($query)) {
  
  ?>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo $row["description"];?>">
  <meta name="author" content="HomeworkLead">

  <title><?php echo $row["name"];?></title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



</head>

<body>

  <!-- Navigation -->
  
<?php include "navbar.php" ?>


 <style>
 .bg-light {
    background-color: #0a0b0c!important;
	color:white;
}

 
 </style>

  

  <div class="container">

    <div class="row">

      
      <div class="col-lg-8">

      
        <h1 class="mt-4"><?php echo $row["name"];?></h1>

      
        <p class="lead">
          by
          <a href="index.php">HomeworkLead</a>
        </p>

        <hr>

     
       

        <hr>

     


<iframe src="<?php echo "../".$row["src"];?>" style="width: 100%;height: 100%;border: none;"></iframe>
        <hr>

     
        <p class="lead"><?php echo $row["description"];?></p>

 
       

		
		
       

       
        <?php }?>

    </div>
 

  </div>

  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>';
  
 
  
			  
			  $content.="</head>";
			  $content.="</html>";
			 
			 
			 
	
	
	
	$fp = fopen("answers/$link.php","wb");
	fwrite($fp,$content);
	fclose($fp);
		
		
		
		
		
	
	}
	

	if(in_array($imgExt, $valid_extensions))
	{
		if($imgSize < 5000000)
	{
		move_uploaded_file($tmp_dir,$upload_dir.'/'.$coverpic);
			
	}
	else{
	$errMSG = "Sorry, your file is too large.";
	}
	} 
	  
  }
  
  ?>
  <h1 style="text-align:center;"> Submit Your Homework </h1>
 <form action="submit.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputAddress">Name of Worksheet</label>
    <input type="text" required=required name="name"class="form-control" id="inputAddress" placeholder="Intro To physics answer key">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Description of homework</label>
    <input type="text"  required=required   name="description"class="form-control" id="inputAddress2" placeholder="What is a vector and how do you manipulate it etc..">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Subject</label>
      <input type="text" required=required name="subject"class="form-control" id="inputCity">
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      
      <input type="file" required=required class="form-control" name = "coverimg"id="inputCity">
    </div>
   
 
  <input type="submit" name ="submit" class="form-control" id="inputCity">
</form>


</div>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
