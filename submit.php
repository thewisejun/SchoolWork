<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Submit Your Homework</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" href="favicon.ico" type="image/x-icon">

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
 
<h1>UNDER CONSTRUCTION</h1>
<div class="hammer">
  <div class="face"></div>
  <div class="head"></div>
  <div class="handle"></div>
</div>
<style>
h1 {
  width: 100%;
  text-align: center;
  font-family: Verdana, Geneva, sans-serif;
  font-weight: 100;
}

.hammer {
  height: 10rem;
  width: 10rem;
  position: absolute;
  left: 45%;
  top: 30%;
  /* Transitions with browser fallbacks */
  -webkit-transition: -webkit-transform 0.8s ease-in-out;
  -ms-transition: -ms-transform 0.8s ease-in-out;
  transition: transform 0.8s ease-in-out;
}

.hammer:hover {
  transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  -webkit-transform: rotate(-90deg);
}

.face {
  height: 1rem;
  width: 1rem;
  background: #676767;
  position: absolute;
  left: 2.5rem;
  top: 0.25rem;
  border-radius: 2px;
}

.head {
  height: 2rem;
  width: 1.5rem;
  background: #676767;
  margin: 0 auto;
}

.head::before {
  content: "";
  height: 0;
  width: 0.5rem;
  position: absolute;
  left: 3rem;
  top: 0.25rem;
  border-bottom: 1rem solid #676767;
  border-left: 0.5rem solid transparent;
  border-right: 0.5rem solid transparent;
  transform: rotate(270deg);
}

.head::after {
  content: "";
  height: 1rem;
  width: 2rem;
  box-shadow: 6px 0.5rem 0 7px #676767;
  border-radius: 50%;
  position: absolute;
  right: 3rem;
  transform: rotate(180deg);
  top: 1rem;
}

.handle {
  height: 8rem;
  width: 1.5rem;
  margin: 0 auto;
  border-radius: 0 0 1rem 1rem;
  background: #ba6442;
  /* Textured wood effect */
  background-image: linear-gradient(
      90deg,
      rgba(255, 255, 255, 0.07) 50%,
      transparent 50%
    ),
    linear-gradient(90deg, rgba(255, 255, 255, 0.13) 50%, transparent 50%),
    linear-gradient(90deg, transparent 50%, rgba(255, 255, 255, 0.17) 50%),
    linear-gradient(90deg, transparent 50%, rgba(255, 255, 255, 0.19) 50%);
  background-size: 13px, 29px, 37px, 53px;
}

</style>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
