<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Home | COMP1002 HTML, CSS, and JS Fundamentals</title>
		<meta name="author" content="The name of the document’s author to go here" />
		<meta name="description" content="A concise and accurate summary of the document content is to appear here">
		<link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="../css/styles.css" />
	</head>
	<body id="section1">
		<!-- Page-level header -->
		<header>
 			<img src="../images/html-logo.svg" height="75" width="75" alt="HTML" />
			<h1>HTML, CSS, and JS Fundamentals</h1>
			<h2>Building Blocks for Web Developers</h2>
<?php
	include("../includes/global-nav.php");
?>
		</header>
		<!-- Page-level main content -->
		<main>
			<!-- News Section -->
			<section>
				<h3>Different Types of Red Blocks</h3>
				<!-- JavaScript-powered image gallery -->
				<ul id="blockGallery">
					<li>
						<a href="../images/red-1x1.png" title="Red Block 1x1">1x1</a>
					</li>
					<li>
						<a href="../images/red-1x2.png" title="Red Block 1x2">1x2</a>
					</li>
					<li>
						<a href="../images/red-2x2.png" title="Red Block 2x2">2x2</a>
					</li>
					<li>
						<a href="../images/red-2x3.png" title="Red Block 2x3">2x3</a>
					</li>
				</ul>
				<img id="blockImage" src="../images/red-1x1.png" alt="Red Block 1x1" width="250" height="230" />
				<p id="blockCaption">Click on any of the above links to view each block.</p>
			</section>
			<!-- Side Notes / Related Information -->
			<aside>
				<h3>It’s All About Choice</h3>
				<p>Having a variety of different shapes and sizes of blocks can expand the creative possibilities of the builder. Our red blocks are now available in a number of different sizes.</p>
				<p>Click on any of the links to view an image of each of our different types of red building blocks.</p>
			</aside>
		</main>
		<!-- Page-level footer -->
		<footer>
<?php
	include("../includes/footer-nav.php");
?>
			<p><small>© HTML, CSS, and JS Blocks Inc.</small></p>
		</footer>
		<!-- IMPORTANT: Add a SCRIPT element below that links to the JavaScript file called 'gallery.js' located inside the 'js' folder - remember that the file path needs to point up one directory! Save this page and upload it to the web server -->
		<script src="../js/gallery.js"></script>
	</body>
</html>
