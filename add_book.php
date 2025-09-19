<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/library_book_form.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid book_form">
			<div class="container form">
				<h1>ADD BOOK FORM</h1>
	 <form action="#" method="post" enctype="multipart/form-data" onSubmit="return add_book_validation();">
		 <h2>BOOK IMAGE</h2>
		 <input type="file" id="image" name="image" oninput="remove_book_validation('image');">
		 <h2>TITLE</h2>
        <input type="text" name="title" id="title" placeholder="Title" oninput="remove_book_validation('title');">
        <h2>AUTHOR</h2>
        <input type="text" name="author" id="author" placeholder="Author" oninput="remove_book_validation('author');"><br>
        <h2>GENRE</h2>
        <select name="category" id="category" onChange="remove_book_validation('category');">
			<option value="select">Select Caregory</option>
            <option value="comedy">Comedy</option>
            <option value="thriller">Thriller</option>
            <option value="romans">Romans</option>
            <option value="kids">Kids</option>
			<option value="other">Other</option>
        </select>
		 <h2>DESCRIPTION</h2>
         <textarea class="des" name="des"></textarea>
		 
		 <h2>COUNT</h2>
		 <input type="number" name="count" id="count">
		 
		 <h2 class="price">PRICE</h2>
		 <input type="number" name="rate" id="rate" oninput="remove_book_validation('rate');">
		 
		 <h2 style="padding-left:56px; text-align:left; width:100%;">PUBLISHED DATE</h2>
		 
		 <input type="date" name="date" placeholder="Published date" id="published_date" oninput="remove_book_validation('published_date');"><br>
       <input id="submit" type="submit" value="Add" name="button">
    </form>
			</div>
			</div>
</body>
	<script>
	
// 		function add_book_validation()
// 		{
// 			let image=document.getElementById("image");
// 			let title=document.getElementById("title");
// 			let author=document.getElementById("author");
// 			let category=document.getElementById("category");
// 			let f=0
// //			 alert(category.value);
// 			if(title.value == "")
// 				{
					
// 					validation_color(title);
// 					f=1;
// 				}
			
// 			if(image.value == "")
// 				{
// 					validation_color(image);
// 					f=1;
// 				}
// 			if(author.value == "")
// 				{
// 					validation_color(author);
// 					f=1;
// 				}
// 			if(category.value == "select")
// 				{
// 					validation_color(category);
// 					f=1;
// 				}
// 			if(f==0)
// 				{
// 					return true;
// 				}
// 			else
// 				{
// 					return false;
// 				}
// 		}
// 		function validation_color(field)
// 		{
// 			field.style.border="2px solid red";
// 		}
		
// 		function remove_book_validation(fields)
// 		{
// 			let title=document.getElementById(fields);
			
// 			title.style.border="none";
// 		}
	</script>
</html>
