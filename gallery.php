<?php
include("includes/_.config.php");

$page_title = 'Gallery Page';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Insert head.php -->
   <?php include("includes/head.php")?>
    <link rel="stylesheet" href= "Assests/css/gallery.css">
</head>
<body>
    <header>
        <!--  Insert header.php -->
    <?php include("includes/header.php")?>
    <style>

div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<header>

</header>
<body>

<h2>Gallery</h2>
<h4>Our past excellent works</h4>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/example1.jpg">
      <img src="images/example1.jpg" alt="electrical" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/chandelier1.jpg">
      <img src="images/chandelier1.jpg" alt="Chanderlier1" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/chandelier2.jpg">
      <img src="images/chandelier2.jpg" alt="chandelier2" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/example2.jpg">
      <img src="images/example2.jpg" alt="Bathroom2" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="clearfix"></div>

<div style="padding:6px;">

</div>

  <!-- Insert Footer -->
  <?php include("includes/footer.php")?>


</body>
</html>
