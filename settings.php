<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/settings.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid banner_image">
	<div class="container banner">
		<div class="col-7 menu">
		<a href="report.php">Report</a>
			<a href="alert.php">Alert</a>
		</div>
	<h1>LIBRARY SETTINGS</h1>
		<form action="#" method="post">
			<h2 class="name">NAME :</h2>
		<input id="name" type="text">
			<h2 class="des">DESCRIPTION :</h2>
			<textarea></textarea>
		</form>
		<div class="cl"></div>
		<p class="one">Default sensitivity labels <img id="info" src="images/icons-info.png"></p>
		<p class="two">Choose a sensitivity label to apply to newly created or edited files, or to expand protection on files when they leave the library. <br>For Office and PDF files only.<b>Learn more</b></p>
		<div class="cl"></div>
				<ul class="tick">
		<li>
			<input type="checkbox" id="satement">
			<label id="box" for="satement">
				<p>Extand protection on unencrypted files when they're downloaded.copied, or moved.<b>Learn more</b></p>
			</label>
			</li>
		</ul>
		<div class="cl"></div>
		<div class="button">
		<button>Save</button>
		<button>Cancel</button>
			</div>
	</div>
		</div>
</body>
</html>
