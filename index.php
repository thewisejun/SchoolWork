<!DOCTYPE html>
<html lang="en">

<head>
<?php

session_start();
?>


<!-- HERE IS SEO TAGS TO WORK AND GET VIEWS -->
 <meta name="title" content="Homeworklead - Find the answers to your problem for students">
<meta name="description" content="Imagine having a place to all your homework needs, no need to imagine homeworklead is the place">
<meta name="keywords" content="homework solver app,homework solver 2x2,homework solver 3x3,homework solver 4x4,homework solver 5x5,homework solver 6x6,homework solver 9x9,homework solver camera,homework solver dictionary,homework solver geometry,homework solver java,homework solver kindergarten,homework solver lake,homework solver robot,homework solver unboxing,homework solver vba,homework solver yoga,homework solver zone,maths solver online,maths solver snapchat,homework solving app,homework solver 7th grade,homework solver 8 bit,homework solver in excel,homework solver not working,homework solver with steps,maths equation solver app,maths mcq solver app,maths problem solver app,maths question solver app,maths solver by photo,maths solver for pc,holiday homework solver,homework solver 3x3x3,homework solver 8.2,homework solver download,homework solver nexus,homework solver runescape,homework solver that shows work,homework solver youtube,homework solver zipper,math homework solver app,maths solver app,homework solver 2 words,homework solver 4th grade,homework solver 5x5 online,homework solver geometry online,homework solver job description,math homework solver,maths sum solver app,homework solver 4x2,homework solver 5.3,homework solver guide,homework solver in excel 2016,homework solver lake trader joes,homework solver net,homework solver reviews,homework solver that shows steps,homework solver tips,homework solver vs goal seek,homework solver with steps free,homework solver 2 unknowns,homework solver 3 variables,homework solver dollar city,homework solver job title,homework solver lake ca,homework solver vs splattercannon,school solver homework answers,brainly homework help and solver,homework solver 2.0,homework solver 3d,homework solver games,homework solver journal,homework solver life,homework solver notebook,homework solver review,homework solver tutorial,homework solver videos,solve homework for money,homework solver day 1,homework helper and solver,homework solver 2019,homework solver jeans,homework solver lessons,homework solver numbers,homework solver jacket,maths solved class 9,miao math homework solver,maths solved class 10,homework solver jobs,homework solver journey">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="1 days">
<meta name="author" content="Homeworklead">
  <title>Homeworklead - Find the answers to your problem for students</title>

 
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<link href="css/landing-page.min.css" rel="stylesheet">

</head>

<body>

<?php 

$conn = mysqli_connect('localhost','foo','PaqV7EsYF8UbDc3s','main_database');

if ($conn == false) {
	
	echo '0XX0';
}
else {
	
}


?>

  <!-- Navigation -->
 <?php include 'navbar.php' ?>
 
 
 <style>
 .bg-light {
    background-color: #0a0b0c!important;
	color:white;
}

 
 </style>


<?php 

if (isset($_POST['submit'])) {
	
	$search = $_POST['search'];
	$search= mysqli_real_escape_string($conn,$search);
	if ($search == NULL) {
		
		echo "You typed Nothing";
	}
	else {
	$query = "SELECT * FROM main WHERE name LIKE '%$search%'";
	$results = mysqli_query($conn,$query);
	
	$_SESSION['search'] =$search;
	$_SESSION['query'] = $query;
	$_SESSION['results']=$results;

	echo ('<meta http-equiv="refresh" content="1; URL=results.php" />');
	
	
}
}



?>
  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Find the answers to your problems made for students by a student
		  

		  </h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form action="index.php" method="POST" id="form-1">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="text" class="form-control form-control-lg" name="search" placeholder="Search">
              </div>
              <div class="col-12 col-md-3">
                <button id="myButton" type="submit" class="btn btn-block btn-lg btn-primary" value="submit" form="form-1" name="submit" >Find </button>
				
	
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Community Driven</h3>
            <p class="lead mb-0">Real students help submit homework answers so we can all enjoy</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Free</h3>
            <p class="lead mb-0">SchoolWyrk is 100% free no need to sign up to view homework</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Easy to Use</h3>
            <p class="lead mb-0">Find answers quick !</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <!-- Footer -->
  <?php include 'footer.php' ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
