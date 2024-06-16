<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>About | COMP1002 HTML, CSS, and JS Fundamentals</title>
		<meta name="author" content="The name of the document’s author to go here">
		<meta name="description" content="A concise and accurate summary of the document content is to appear here">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body id="section6">
		<!-- Page-level header -->
		<header>
			<img src="images/html-logo.svg" height="75" width="75" alt="HTML" />
			<h1>HTML, CSS, and JS Fundamentals</h1>
			<h2>Building Blocks for Web Developers</h2>
<?php
	include("./includes/global-nav.php");
?>
		</header>
		<!-- Page-level main content -->
		<main>
			<section>
				<h3>About Us</h3>
				<p>Turpis nunc eget lorem dolor sed. Vel facilisis volutpat est velit egestas dui id. Quam quisque id diam vel quam. Mauris a diam maecenas sed enim. Tortor posuere ac ut consequat. Sed adipiscing diam donec adipiscing tristique risus nec feugiat. Mi quis hendrerit dolor magna eget est lorem ipsum dolor. Vitae elementum curabitur vitae nunc sed velit. Mollis nunc sed id semper. Diam vel quam elementum pulvinar. Ultrices gravida dictum fusce ut.</p>

				<p>Pellentesque sit amet porttitor eget. Aliquam ultrices sagittis orci a scelerisque purus semper eget duis. Dictum fusce ut placerat orci nulla pellentesque dignissim. Rhoncus mattis rhoncus urna neque viverra. Id semper risus in hendrerit gravida rutrum quisque non tellus. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt lobortis.</p>

				<p>Lorem mollis aliquam ut porttitor leo a diam. Elementum eu facilisis sed odio morbi quis commodo. Suspendisse interdum consectetur libero id faucibus nisl. Tempus urna et pharetra pharetra. Vitae justo eget magna fermentum iaculis eu non diam phasellus. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget. Sed faucibus turpis in eu mi bibendum. Sollicitudin aliquam ultrices sagittis orci.</p>
			</section>
			<!-- Side Notes / Related Information -->
			<aside>
				<!-- Newsletter Subscribe Form -->
				<h3 class="new-feature">Subscribe to Newsletter</h3>
				<form action="subscribe.php" method="get">
					<label for="emailAddress">Email</label>
					<input type="email" name="emailAddress" id="emailAddress" required />
					<button type="submit">Subscribe</button>
				</form>
				<h3>Did You Know…?</h3>
				<p>One of the most important components of effective life-long learning is <em>play</em>. Learning a new skill (like Web development) should include a certain amount of play. Renowned children’s programming entertainer Mr. Rogers certainly knew about the value that play represented:</p>
				<!-- Quotation -->
				<blockquote cite="https://www.brainyquote.com/quotes/fred_rogers_193081">
					<p>Play is often talked about as if it were a relief from serious learning. But for children, play <em>is</em> serious learning. Play is really the work of childhood. –Fred Rogers</p>
				</blockquote>
				<p>Take a little time every day to just <strong>play</strong> with technology – you’ll be surprised how much you learn.</p>
			</aside>
		</main>
		<!-- Page-level footer -->
		<footer>
<?php
	include("./includes/footer-nav.php");
?>
			<p><small>© HTML, CSS, and JS Blocks Inc.</small></p>
		</footer>
	</body>
</html>
