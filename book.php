<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/book.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid book">
				<div class="container table">
				<h1> BOOK </h1>

	 <form action="#" method="post">
		 <h2 class="imgg">BOOK IMAGE</h2>
		 <div class="col-6 book_image">
		 <input type="file" id="image" name="image">
			 </div>
		 <div class="col-6 text">
		 <h2 class="ti">TITLE</h2>
        <input type="text" name="title" id="title" placeholder="Title">
        <h2 class="au">AUTHOR</h2>
        <input type="text" name="author" id="author" placeholder="Author"><br>
        <h2 class="gen">GENRE</h2>
        <select name="category" id="category">
			<option value="select">Select Category</option>
            <option value="comedy">Comedy</option>
            <option value="thriller">Thriller</option>
            <option value="romans">Romans</option>
            <option value="kids">Kids</option>
        </select>
		 <h2 class="pub">PUBLISHED DATE</h2>
		 <input type="date" id="date" name="date" placeholder="Published date"><br>
       <input id="submit" type="submit" value="Update" name="button">
    </form>
			</div>
	</div>
	</div>
</body>
</html>