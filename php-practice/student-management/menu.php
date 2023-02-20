<?php
$con = mysqli_connect("localhost", "root", "", "dbschool");

if (!$con) {
  die("<script>console.log(\"couldn't connect to the database\")</script>");
}

if (mysqli_connect_errno()) {
  echo "failed to connect to MySQL: " . mysqli_connect_error();
  exit();
} else {
  echo "<script>console.log(\"db connection success\")</script>";
}

if ($result = $con->query("SELECT * FROM tblstudent")) {
  while ($row = $result->fetch_assoc()) {
    $index[] = $row["fIdindex"];
    $student_number[] = $row["fIdstudentno"];
    $last_name[] = $row["fIdlastname"];
    $first_name[] = $row["fIdfirstname"];
    $middle_name[] = $row["fIdmiddlename"];
    $gender[] = $row["fIdgender"];
  }
  $result->free();
}
?>

<?php 
     $conn = mysqli_connect('localhost', 'root', '', 'dbschool');
     if(isset($_POST['search'])){
        $searchKey = $_POST['search'];
        $sql = "SELECT *
                FROM tblstudent
                WHERE
                `fIdstudentno` LIKE '%$searchKey%' OR
                `fIdlastname` LIKE '%$searchKey%' OR
                `fIdfirstname` LIKE '%$searchKey%' OR
                `fIdmiddlename` LIKE '%$searchKey%' OR
                `fIdgender` LIKE '%$searchKey%'";
     }  
     else
      $sql = "SELECT * FROM tblstudent";
     $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SA 2 - Database Management</title>
  <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
</head>

<body>
  <main>
    <nav>
      <ul>
        <li class="nav__link active"><a href="menu.php">Student</a></li>
        <li class="nav__link"><a href="#">Progam</a></li>
        <li class="nav__link"><a href="#">Course</a></li>
        <li class="nav__link"><a href="#">Instructor</a></li>
        <li class="nav__link"><a href="#">Grade</a></li>
      </ul>
    </nav>
    <section>
      <header>
        <h2>Student</h2>
      </header>

      <form class="form-search-student" method="POST">
        <input type = "text" name="search" placeholder="Search" value=<?php echo @$POST['search']; ?> >
        <input class="form-search-student__input form__btn" type="submit" value="Search Student">
        <a href="addstudent.php"><input class="form-add-student__input form__btn" value="Add Student"></a>
      </form>

      <table>
      <tr>
        <th>#</th>
        <th>Student No.</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Gender</th>
        <th></th>
        <th></th>
      </tr>
      <?php while($row = $result->fetch_object() ): ?> 
      <tr>
         <td><?php echo $row->fIdindex ?></td>
         <td><?php echo $row->fIdstudentno ?></td>
         <td><?php echo $row->fIdlastname ?></td>
         <td><?php echo $row->fIdfirstname ?></td>
         <td><?php echo $row->fIdmiddlename ?></td>
         <td><?php echo $row->fIdgender ?></td>
         <td><?php echo "<a class='link' href='editstudent.php?search=".$row->fIdstudentno."'>Edit</a>" ?></td>
         <td><?php echo "<a class='link' href='deletestudent.php?search=".$row->fIdstudentno."'>Delete</a>" ?></td>
      </tr>
      <?php endwhile; ?>

      <?php if (mysqli_num_rows($result)==0)echo "<tr><td class='no_result' colspan='8'>Record not found!</td><tr>" ?>
      </table>
    </section>
    <footer class="edit_footer">
      <a href="menu.php"><input class="form__submit form__btn" type="submit" value="Display All Records"></a>
    </footer>
  </main>
</body>

</html>