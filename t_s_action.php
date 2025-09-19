<?php
include('database.php');

if(isset($_POST['submit']))
{
	echo $name=$_POST['search_name'];
}
?>