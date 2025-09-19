<?php
include('database.php');

// $select="SELECT COUNT(1) AS Cnt FROM `student_signup`";
// $statmnt=mysqli_query($con,$select);

// if(mysqli_num_rows($statmnt)>0)
// {
//   $student_count=mysqli_fetch_assoc($statmnt);
  
// }

// $t_select="SELECT COUNT(1) AS Cnt FROM `teacher_signup`";
// $t_statnmt=mysqli_query($con,$t_select);

// if(mysqli_num_rows($t_statnmt)>0)
// {
//   $teacher_count=mysqli_fetch_assoc($t_statnmt);
// }


$b_select="SELECT COUNT(1) AS Cnt FROM `add_book`";
$b_statnmt=mysqli_query($con,$b_select);

if(mysqli_num_rows($b_statnmt)>0){
  $book_count=mysqli_fetch_assoc($b_statnmt);
}



$s_select="SELECT COUNT(1) AS Cnt , status FROM `book_request`  GROUP by status";
$s_stamnt=mysqli_query($con,$s_select);

if(mysqli_num_rows($s_stamnt)>0){
  while($status_count=mysqli_fetch_assoc($s_stamnt))
  {
    switch($status_count['status']){
      case 0:
        $req = $status_count['Cnt'];
        break;
      case 1:
        $app = $status_count['Cnt'];
        break;
      case 2:
        $rej = $status_count['Cnt'];
        break;
    }
  }
}



$d_select="SELECT COUNT(1) AS Cnt
           FROM `add_book` ab
           INNER JOIN book_request br ON br.book_id = ab.b_id
           WHERE  br.status=1 AND CURRENT_DATE > br.return_date AND fine=0";
$d_statmnt=mysqli_query($con,$d_select);

if(mysqli_num_rows($d_statmnt)>0){
  $due_count=mysqli_fetch_assoc($d_statmnt);
}



$u_select="SELECT COUNT(1) AS Cnt , l_usertype FROM `login`  GROUP BY l_usertype";
$u_statemnt=mysqli_query($con,$u_select);

if(mysqli_num_rows($u_statemnt)>0){
  while($user_count=mysqli_fetch_assoc($u_statemnt)){
    switch($user_count['l_usertype'])
    {
      case "student":
        $student=$user_count['Cnt'];
        break;
      case "teacher";
        $teacher=$user_count['Cnt'];
    }
  }
  $total = $student + $teacher;
}


$active="SELECT COUNT(1) AS Cnt , l_active FROM `login` WHERE l_usertype IN ('teacher','student') GROUP BY l_active";
$a_statemnt=mysqli_query($con,$active);

if(mysqli_num_rows($a_statemnt)>0){
  while($active_count=mysqli_fetch_assoc($a_statemnt)){
    switch($active_count['l_active'])
    {
      case 1:
        $activee=$active_count['Cnt'];
        break;
      case 2:
        $inactive=$active_count['Cnt'];
        break;
    }
  }
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="css/admin_dash_board.css" rel="stylesheet">
</head>

<body>
	<div class="sidebar">
    <h2>Our Book World</h2>
    <ul>
      <a href="admin_dash_board.php"><li>Dashboard</li></a>
      <a href="s_list.php"><li>Students</li></a>
      <a href="t_list.php"><li>Staffs</li></a>
      <a href="all_books.php"><li>Books</li></a>
      <a href="s_fine_student.php"><li>Due Book</li></a>
	    <a href="book_add.php"><li>Add Book</li></a>
      <a href="settings"><li>Settings</li></a>
      <a href="index.php"><li>Logout</li></a>
    </ul>
  </div>

  
  <div class="main-content">
	  
    <div class="header">
      <h2>Library Dashboard</h2>
      <p>Hey, you can manage everything of your library here.</p>
    </div>


    <div class="cards">

      <div class="card">
        <h3>Total Users </h3>
        <p>Total Users : <?php echo $total?></p>
        <a href="users.php"><button>Click here to go</button></a>
      </div>
      
      <div class="card">
        <h3>Manage Students</h3>
        <p id="stuent_count">Total Students: <?php echo $student;?></p>
        <a href="s_list.php"><button>Click here to go</button></a>
      </div>
  
      <div class="card">
        <h3>Manage Teachers/Staff</h3>
        <p id="staff_count">Total Staffs: <?php echo $teacher;?></p>
        <a href="t_list.php"><button>Click here to go</button></a>
      </div>
      <div class="card">
        <h3>Manage Books</h3>
        <p id="book_count">Total Books: <?php echo $book_count['Cnt'];?></p>
        <a href="all_books.php"><button>Click here to go</button></a>
      </div>

		<div class="card">
        <h3>Due Books</h3>
        <p id="due_count">Due Books to Students: <?php echo $due_count['Cnt'];?></p>
        <a href="admin_due_list.php"><button>Click here to go</button></a>
      </div>

		<div class="card">
		<h3>Book Request</h3>
		<p>Book Requested list: <?php echo $req;?></p>
		<a href="admin_book_request.php?status=0"><button>Click here to go</button></a>
		</div>
    
		<div class="card">
		<h3>Book Approve</h3>
		<p>Book Approved list: <?php echo $app;?></p>
		<a href="admin_book_request.php?status=1"><button>Click here to go</button></a>
		</div>

		<div class="card">
		<h3>Book Reject</h3>
		<p>Book Rejected list: <?php echo $rej;?></p>
		<a href="admin_book_request.php?status=2"><button>Click here to go</button></a>
		</div>

    <div class="card">
		<h3>Active Users</h3>
		<p>Active: <?php echo $activee;?></p>
		<a href="users.php?page_id=1"><button>Click here to go</button></a>
		</div>

    <div class="card">
		<h3>Inactive Users</h3>
		<p>Inactive: <?php echo $inactive;?></p>
		<a href="users.php?page_id=2"><button>Click here to go</button></a>
		</div>
    </div>
  </div>
</body>
</html>