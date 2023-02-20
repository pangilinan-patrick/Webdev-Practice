<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
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
                <h1>Payroll System</h1>
            </div>

            <div class="search-add">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <input type="text" name="searchKey" />
                    <input type="submit" value="Search Employee" name="enterSearch" />
                    <input type="submit" value="Add Employee" name="addEmployee" onclick="action='addemployee.php'; return true;" />
                </form>
            </div>
            <?php
            include "display.php";
            ?>
            <div class="displayButton">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <input type="submit" value="Display All" name="displayAll" />
                </form>
            </div>


        </div>
    </body>

</html>