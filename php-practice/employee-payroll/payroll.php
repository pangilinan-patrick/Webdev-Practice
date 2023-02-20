<?php
session_start();
if(!isset($_SESSION['user']))
{
    header("Location: login.php");
    exit();
}
?>

<html>]
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
                <h1>Payroll Info</h1>
            </div>

            <?php
                $selected_user = $_GET['employeeID'];
            ?>

            <div class="payroll-table">
                <table>
                    <tr>
                        <th> </th>
                        <th>Amount </th>
                    </tr>
                    <tr>
                        <td>Basic pay</td>
                        <td> </td> 
                    </tr>
                    <tr>
                        <td>Gross Pay</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Net Pay</td>
                        <td> </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>