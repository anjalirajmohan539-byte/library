<?php
include('database.php');

if(isset($_POST['button'])){

    $image=$_FILES['image']['name'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $discribtion=$_POST['des'];
    $price=$_POST['price'];
    $count=$_POST['count'];
    $date=$_POST['date'];
    $category=$_POST['category'];

    $select_books="SELECT b_id FROM `add_book` WHERE b_title='$title' AND b_author='$author'";
    echo $select_books;
    if(!$book_statemnt=mysqli_query($con,$select_books))
    {
        echo "error";
    }
    else
    {
        if(mysqli_num_rows($book_statemnt)>0)
        {
            echo "exist";
        }
        else
        {
            $insert="INSERT INTO `add_book`( `b_title`, `b_author`, `b_category`, `b_publish`, `b_price`, `b_image`, `b_description`, `book_count`) 
             VALUES ($title,$author,$category,$date,$price,$image,$discribtion,$count)";

             var_dump($insert);
        }
    }
    
}
?>