<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/book_add.css" rel="stylesheet">
</head>

<body>
	
  <h1>ADD BOOK</h1>

  <div class="container">
   
    <div class="col-6 left-box">
      <h2>ADD</h2>
      <input type="file">
    </div>

    
		<form action="add_book_action.php" method="post"  enctype="multipart/form-data" onSubmit="return add_book_validation();">

			<div class="col-6 right-box">
			<h5>Title</h5>
      <input type="text" name="title" id="title" placeholder="title">
			<h5>Author</h5>
      <input type="text" name="author" id="author" placeholder="author">

         <h5>Description</h5>
      <textarea placeholder="description" id="des" name="des"></textarea>

			
			 
		  <h5>Price</h5>
        <input type="text" name="price" id="price" placeholder="Price :">
      
			
			
      <div class="inline-inputs">
		  <h5>Count</h5>
      
		  <h5>Publish Date</h5>
        
      </div>
			
			<div class="inline-inputs">
		
        <input type="number" name="count" id="count" placeholder="Count :">
		  
        <input type="date" name="date" id="date" placeholder="published Date">
      </div>
 
			<h5>Genre</h5>
		<select name="category" id="category">
			<option value="select">Genre</option>
            <option value="comedy">Comedy</option>
            <option value="thriller">Thriller</option>
            <option value="romans">Romans</option>
            <option value="kids">Kids</option>
			<option value="other">Other</option>
        </select>

      <button type="submit">add</button>
			</form>
    </div>
  </div>
</body>
		<script>
	
		function add_book_validation()
		{
			let image=document.getElementById("image");
			let title=document.getElementById("title");
			let author=document.getElementById("author");
			let category=document.getElementById("category");
			let f=0
//			 alert(category.value);
			if(title.value == "")
				{
					
					validation_color(title);
					f=1;
				}
			
			if(image.value == "")
				{
					validation_color(image);
					f=1;
				}
			if(author.value == "")
				{
					validation_color(author);
					f=1;
				}
			if(category.value == "select")
				{
					validation_color(category);
					f=1;
				}
			if(f==0)
				{
					return true;
				}
			else
				{
					return false;
				}
		}
		function validation_color(field)
		{
			field.style.border="2px solid red";
		}
		
		function remove_book_validation(fields)
		{
			let title=document.getElementById(fields);
			
			title.style.border="none";
		}
	</script>
</html>