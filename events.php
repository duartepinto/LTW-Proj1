<!DOCTYPE html>
<html>
<head>
	<title>Event Manager</title>
	<meta charset='UTF-8'>
	<script src="dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<link rel="stylesheet" href="css/events.css">

</head>
<body>
	<div class="top-bar">
		<form>
			<input id="search-bar" type="text" name="search" required="optional" placeholder="Search"/>
			<input id="searchButton" type="button" value="Search"/>
		</form>
	</div>	
	
	<div class="left-bar">
		<div>
			<h5>My Events</h5>
			<br>
			<div class="link-events"> 
				<a href="">Event</a>
			</div>
		</div>
		<div>
			<h5>Other Events</h5>
			<br>
			<div class="link-events">
				<a href="">Event</a>
			</div>
		</div>
	</div>


	<div class="display-event">
		<div id="header">
			<div>
				<h1 id="name">Event_name</h1>
				<br>
				<h2 id="type">Event_type</h2>
			</div>
			<h3 id="date">24/11/2015</h3>
			
		</div>

	</div>
</body>
</html>
