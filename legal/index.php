<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Legal - Simon Zhang</title>
  <meta name="description" content="Legal/attributions page">
  <meta name="author" content="Simon Zhang">
  <meta name="theme-color" content="#3D6C7A"> <!-- colour in Chrome mobile -->

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> 
  <link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,700,500,300,400italic' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="../assets/css/skeleton.css">
  <link rel="stylesheet" href="../assets/css/normalize.css">
  <link rel="stylesheet" href="../assets/css/custom.css">

  <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="../assets/js/jquery-2.1.3.js"></script>
  <script src="../assets/js/jquery-ui.js"></script>
  <script src="../assets/js/custom.js" type="text/javascript"></script>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="../assets/icons/blue-circle.png" type="icon/png" rel="icon" />

  <!-- Google Analytics tracking
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <?php include_once("../assets/analytics/analyticstracking.php") ?>

</head>
<body>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<div id="wrapper">

<!-- NAVBAR -->
<?php 
	include ("../navbar.php"); 
	echo navbar(true, false, 1);
?>

<!-- OVERLAY: to appear when navbar expands -->
<div class="overlay" style="display: none;"></div>

<div id="main">

  <!-- TOPBAR -->
  <?php 
    include ("../topbar.php"); 
    echo topbar(false, 1);
  ?>

	<div class="container content">

		<!-- HEADER -->
		<div class="row">
			<div id="header" class="twelve columns" style="margin-top: 5%; text-align: center;">
				<a href="./">
					<div class="name" onmouseover="colourText('title', 2, '#EEEEEE')" onmouseout="colourText('title', 2, '#C0C0C0')">
						<span class="title" style="font-size: 34pt">Legal</span>
					</div>
				</a>
			</div>
		</div>

		
		<div class="row box" style="margin-top: 5%; padding: 5%;">
      <ul>

  			<li><a href="../assets/icons/close47.png">Close icon</a> made by <a href="http://www.google.com" title="Google">Google</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></li>

        <li><a href="../assets/icons/connector3.png">Connector icon</a> made by <a href="http://www.danielbruce.se" title="Daniel Bruce">Daniel Bruce</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></li>

        <li><a href="../assets/icons/email6.png">Email icon</a> made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></li>

        <li><a href="../assets/icons/info28.png">Information icon</a> made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>             is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></li>

        <li><a href="../assets/icons/magnifying-glass14.png">Magnifying glass icon</a> made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></li>

        <li><a href="../assets/icons/puzzle-piece-64.png">Puzzle piece silhouette icon</a> made by <a href="https://www.flaticon.com/authors/dave-gandy" title="Dave Gandy">Dave Gandy</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></li>

        <li><a href="../assets/icons/professional5.png">Resume icon</a> made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed under <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></li>

      </ul>
		</div>
	</div>

</div>

<!-- FOOTER -->
<?php 
  include ("../footer.php"); 
  echo foot(1);
?>

</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
