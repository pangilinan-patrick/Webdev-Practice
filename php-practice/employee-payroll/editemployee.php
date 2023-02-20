<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("Location: login.php");
    exit();
}

function edit_form($con, $submitted_ID)
{
    $old_last = "[your last name]";
    $old_first = "[your first name]";
    $old_password = "[your password]";
    $old_position = "[your employee position]";
    $old_type = "[your employee type]";
    $old_period = "[your payment period]";
    $selected_employee = $submitted_ID;
    $sql = "SELECT * FROM tblemployees";
    $result = mysqli_query($con, $sql);
    $verify_employee = false;
    while($row = mysqli_fetch_array($result))
    {
        if($selected_employee == $row['fldindex'])
        {
            $verify_employee = true;
            $old_last = $row['fldlastname'];
            $old_first = $row['fldfirstname'];
            $old_password = $row['fldpassword'];
            $old_position = $row['fldposition'];
            $old_type = $row['fldemployeetype'];
            $old_period = $row['fldperiod'];
        }
    }

    

    echo "<form action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>";
    echo "Employee ID: <input type='text' value='" . $selected_employee . "' name='employee_id' />";
    echo "<br />";
    echo "Last Name: <input type='text' value='" . $old_last . "' name='employeeLastName' />";
    echo "<br />";
    echo "First Name: <input type='text' value='" . $old_first . "' name='employeeFirstName' />";
    echo "<br />";
    echo "Password: <input type='password' value='" . $old_password . "' name='employeePassword' />";
    echo "<br />";
    echo "<br />";
    echo "Job Position: ";
    echo "<br />";
    //echo "Staff:     <input type='radio' name='employeePosition' value='Staff' />";
    if($old_position == "Staff") {
        echo "Staff:     <input type='radio' name='employeePosition' value='Staff' checked/>";
    } 
    else {
        echo "Staff:     <input type='radio' name='employeePosition' value='Staff' />";
    }
    echo "<br />";
    //echo "Manager:     <input type='radio' name='employeePosition' value='Manager' />";
    if($old_position == "Manager") {
        echo "Manager:     <input type='radio' name='employeePosition' value='Manager' checked/>";
    }
    else {
        echo "Manager:     <input type='radio' name='employeePosition' value='Manager' />";
    }
    echo "<br />";
    //echo "Executive:     <input type='radio' name='employeePosition' value='Executive' />";
    if($old_position == "Executive") {
        echo "Executive:     <input type='radio' name='employeePosition' value='Executive' checked/>";
    }
    else {
        echo "Executive:     <input type='radio' name='employeePosition' value='Executive' />";
    }
    echo "<br />";
    echo "<br />";
    echo "Employement type: ";
    echo "<br />";
    //echo "Part-Time: <input type='radio' name='employeeType' value='Part' />";
    if($old_type == "Part") {
        echo "Part-Time: <input type='radio' name='employeeType' value='Part' checked/>";
    }
    else {
        echo "Part-Time: <input type='radio' name='employeeType' value='Part' />";
    }
    echo "<br />";
    //echo "Full-Time: <input type='radio' name='employeeType' value='Full' />";
    if($old_type == "Full") {
        echo "Full-Time: <input type='radio' name='employeeType' value='Full' checked/>";
    }
    else {
        echo "Full-Time: <input type='radio' name='employeeType' value='Full' />";
    }
    echo "<br />";
    echo "<br />";
    echo "Payment Period: ";
    echo "<br />";
    //echo "Monthly: <input type='radio' name='employeePeriod' value='Monthly' />";
    if($old_period == "Monthly") {
        echo "Monthly: <input type='radio' name='employeePeriod' value='Monthly' checked/>";
    }
    else {
        echo "Monthly: <input type='radio' name='employeePeriod' value='Monthly' />";
    }
    echo "<br />";
    //echo "Semi-Monthly: <input type='radio' name='employeePeriod' value='Semi-Monthly' />";
    if($old_period == "Semi-Monthly") {
        echo "Semi-Monthly: <input type='radio' name='employeePeriod' value='Semi-Monthly' checked/>";
    }
    else {
        echo "Semi-Monthly: <input type='radio' name='employeePeriod' value='Semi-Monthly' />";
    }
    echo "<br />";
    echo "<input type='hidden' name='selectedEmployee' value='" . $selected_employee . "' />";
    echo "<input type='submit' name='submit_update_employee' value='Update' />";
    echo "</form>";
    echo "<a href='menu.php'><button>Cancel</button></a>";
}

function retry_edit_form()
{
    $new_ID = $_POST['employee_id'];
    $new_last = $_POST['employeeLastName'];
    $new_first = $_POST['employeeFirstName'];
    $new_pass = $_POST['employeePassword'];
    $new_position = $_POST['employeePosition'];
    $new_type = $_POST['employeeType'];
    $new_period = $_POST['employeePeriod'];
    $indentifier = $_POST['selectedEmployee'];

    echo "<form action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>";
    echo "Employee ID: <input type='text' value='" . $new_ID . "' name='employee_id' />";
    echo "<br />";
    echo "Last Name: <input type='text' value='" . $new_last . "' name='employeeLastName' />";
    echo "<br />";
    echo "First Name: <input type='text' value='" . $new_first . "' name='employeeFirstName' />";
    echo "<br />";
    echo "Password: <input type='password' value='" . $new_pass . "' name='employeePassword' />";
    echo "<br />";
    echo "<br />";
    echo "Job Position: ";
    echo "<br />";
    //echo "Staff:     <input type='radio' name='employeePosition' value='Staff' />";
    if($new_position == "Staff") {
        echo "Staff:     <input type='radio' name='employeePosition' value='Staff' checked/>";
    } 
    else {
        echo "Staff:     <input type='radio' name='employeePosition' value='Staff' />";
    }
    echo "<br />";
    //echo "Manager:     <input type='radio' name='employeePosition' value='Manager' />";
    if($new_position == "Manager") {
        echo "Manager:     <input type='radio' name='employeePosition' value='Manager' checked/>";
    }
    else {
        echo "Manager:     <input type='radio' name='employeePosition' value='Manager' />";
    }
    echo "<br />";
    //echo "Executive:     <input type='radio' name='employeePosition' value='Executive' />";
    if($new_position == "Executive") {
        echo "Executive:     <input type='radio' name='employeePosition' value='Executive' checked/>";
    }
    else {
        echo "Executive:     <input type='radio' name='employeePosition' value='Executive' />";
    }
    echo "<br />";
    echo "<br />";
    echo "Employement type: ";
    echo "<br />";
    //echo "Part-Time: <input type='radio' name='employeeType' value='Part' />";
    if($new_type == "Part") {
        echo "Part-Time: <input type='radio' name='employeeType' value='Part' checked/>";
    }
    else {
        echo "Part-Time: <input type='radio' name='employeeType' value='Part' />";
    }
    echo "<br />";
    //echo "Full-Time: <input type='radio' name='employeeType' value='Full' />";
    if($new_type == "Full") {
        echo "Full-Time: <input type='radio' name='employeeType' value='Full' checked/>";
    }
    else {
        echo "Full-Time: <input type='radio' name='employeeType' value='Full' />";
    }
    echo "<br />";
    echo "<br />";
    echo "Payment Period: ";
    echo "<br />";
    //echo "Monthly: <input type='radio' name='employeePeriod' value='Monthly' />";
    if($new_period == "Monthly") {
        echo "Monthly: <input type='radio' name='employeePeriod' value='Monthly' checked/>";
    }
    else {
        echo "Monthly: <input type='radio' name='employeePeriod' value='Monthly' />";
    }
    echo "<br />";
    //echo "Semi-Monthly: <input type='radio' name='employeePeriod' value='Semi-Monthly' />";
    if($new_period == "Semi-Monthly") {
        echo "Semi-Monthly: <input type='radio' name='employeePeriod' value='Semi-Monthly' checked/>";
    }
    else {
        echo "Semi-Monthly: <input type='radio' name='employeePeriod' value='Semi-Monthly' />";
    }
    echo "<br />";
    echo "<input type='hidden' name='selectedEmployee' value='" . $indentifier . "' />";
    echo "<input type='submit' name='submit_update_employee' value='Update' />";
    echo "</form>";
    echo "<a href='menu.php'><button>Cancel</button></a>";
}
?>

<html>
    <head>
        <link rel="stylesheet" href="sa3-stylesheet.css">
    </head>

    <body>
        <div class="side-bar">
            <table>
                <tr>
                    <td><a href="menu.php">Menu</a></td>
                </tr>
                <tr>
                    <td><a href="login.php">Logout</a></td>
                </tr>
            </table>
        </div>

        <div class="main-body">
            <div class="main-header">
                <hr>
                <h1>Employee / Edit Employee Details</h1>
                <hr>
            </div>

            <?php
                include "dbs-connect.php";

                if(isset($_GET['employeeID']))
                {
                    $submit_ID = $_GET['employeeID'];
                    edit_form($con, $submit_ID);
                }
                elseif(isset($_POST['submit_update_employee']))
                {
                    $selected_ID = $_POST['selectedEmployee'];
                    $new_ID = $_POST['employee_id'];
                    $new_last_name = $_POST['employeeLastName'];
                    $new_first_name = $_POST['employeeFirstName'];
                    $new_password = $_POST['employeePassword'];
                    $new_job_position = $_POST['employeePosition'];
                    $new_employement_type = $_POST['employeeType'];
                    $new_payment_period = $_POST['employeePeriod'];

                    $find_sql = "SELECT * FROM tblemployees";
                    $find_result = mysqli_query($con, $find_sql);
                    $verify_id = false;
                    while($find_row = mysqli_fetch_array($find_result))
                    {
                        if($new_ID == $find_row['fldindex'])
                        {
                            if($find_row['fldindex'] != $selected_ID)
                            {
                                $verify_id = true;
                            }
                        }
                    }

                    if(empty($new_ID) || empty($new_last_name) || empty($new_first_name) || empty($new_password) || empty($new_job_position) || empty($new_job_position) || empty($new_employement_type) || empty($new_payment_period))
                    {
                        retry_edit_form();
                        echo "<h3>Blank data are not allowed!!!</h3>";
                        echo "<br />";
                    }
                    elseif($verify_id)
                    {
                        retry_edit_form();
                        echo "<h3>ID number already exists!!!</h3>";
                        echo "<br />";
                    }
                    else {
                        $update_sql = "UPDATE tblemployees SET fldindex='$new_ID', fldlastname='$new_last_name', fldfirstname='$new_first_name', fldposition='$new_job_position', fldpassword='$new_password', fldemployeetype='$new_employement_type', fldperiod='$new_payment_period' WHERE fldindex='$selected_ID'";
                        if($con->query($update_sql) == TRUE)
                        {
                            retry_edit_form();
                            echo "<h3>Record Updated!!!</h3>" . "<br />";
                            echo "<a href='menu.php'><button>Go Back</button></a>";
                        }
                        else {
                            echo "Error updating" . $con->error . "<br />";
                        }
                        echo "<br />";
                    }

                }
                else {
                    echo "Please go back to Menu Page and select a valid entry";
                    echo "<br />";
                    echo "<a href='menu.php'><button>Go Back</button></a>";
                }

                mysqli_close($con);
            ?>

        </div>
    </body>
</html>