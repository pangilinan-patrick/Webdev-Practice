<?php
$con = mysqli_connect("localhost", "root", "", "dbschool");

if (mysqli_connect_errno()) {
  echo "<script>console.log(\"failed to connect to MySQL: " . mysqli_connect_error() . "\")</script>";
  exit();
} else {
  echo "<script>console.log(\"db connection success\")</script>";
}

$student_no = "";
$last_name = "";
$first_name = "";
$middle_name = "";
$gender = "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SA 2 - Database Management</title>
  <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

  <main>
    <nav>
      <ul>
        <li class="nav__link"><a href="menu.php">Student</a></li>
        <li class="nav__link"><a href="#">Progam</a></li>
        <li class="nav__link"><a href="#">Course</a></li>
        <li class="nav__link"><a href="#">Instructor</a></li>
        <li class="nav__link"><a href="#">Grade</a></li>
      </ul>
    </nav>
    <form class="form__layout" method="post">
      <section>
        <header>
          <h2 class="breadcrumbs">Student / Add Student</h2>
        </header>
        <table class="edit_Table">
          <tr>
            <td><label class="input-label" for="input_student_number">Student No:</label></td>
            <td><input class="input-field" type="number" name="input_student_number"></td>
          </tr>
          <tr>
            <td><label class="input-label" for="input_last_name">Last Name:</label></td>
            <td><input class="input-field" type="text" name="input_last_name"></td>
          </tr>
          <tr>
            <td><label class="input-label" for="input_first_name">First Name:</label></td>
            <td><input class="input-field" type="text" name="input_first_name"></td>
          </tr>
          <tr>
            <td><label class="input-label" for="input_middle_name">Middle Name:</label></td>
            <td><input class="input-field" type="text" name="input_middle_name"></td>
          </tr>
          <tr>
            <td><label class="input-label" for="input_gender">Gender:</label></td>
            <td><input class="input-field" type="text" name="input_gender"></td>
          </tr>
        </table>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
          $student_no = mysqli_real_escape_string($con, $_REQUEST["input_student_number"]);
          $last_name = mysqli_real_escape_string($con, $_REQUEST["input_last_name"]);
          $first_name = mysqli_real_escape_string($con, $_REQUEST["input_first_name"]);
          $middle_name =  mysqli_real_escape_string($con, $_REQUEST["input_middle_name"]);
          $gender =  mysqli_real_escape_string($con, $_REQUEST["input_gender"]);

          $sql = "INSERT INTO tblstudent (fIdstudentno, fIdlastname, fIdfirstname, fIdmiddlename, fIdgender) VALUES ($student_no, '$last_name', '$first_name', '$middle_name', '$gender')";

          $sql_uid = "SELECT * FROM tblstudent WHERE fIdstudentno = $student_no";

          $res_uid = mysqli_query($con, $sql_uid);

          if ($_POST["button"] === "Save Student") {
            if (empty($student_no) || empty($last_name) || empty($first_name) || empty($middle_name) || empty($gender))
              echo "<div class='alert alert-danger'>Blank data are not allowed!</div>";

            else if (mysqli_num_rows($res_uid) > 0)
              echo "<div class='alert alert-danger'>Duplicate student number: <u>$student_no</u>!</div>";

            else {
              if (mysqli_query($con, $sql)) {
                echo "<div class='alert alert-success'>Record saved! Reloading page...</div>";
                echo "<script>window.setTimeout(function(){window.location.href = 'addstudent.php';}, 1500);</script>";
              } else {
                echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . mysqli_error($con) . '</div>';
              }
            }
          }

          mysqli_close($con);
        }
        ?>
      </section>
      <footer class="edit_footer">
        <input class="form__submit form__btn" type="submit" name="button" value="Save Student">
        <a href="menu.php"><input class="form__cancel form__btn" value="Cancel"></a>
      </footer>
    </form>
  </main>

  <script>
    $(".alert").delay(3000).fadeOut(600)
  </script>
</body>

</html>