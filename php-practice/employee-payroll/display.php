<?php
include "dbs-connect.php";

if(!isset($_POST['enterSearch']) || isset($_POST['displayAll']))
{
    $sql = "SELECT * FROM tblemployees";
    $results = mysqli_query($con, $sql);

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Employee ID</th>";
    echo "<th>Last Name</th>";
    echo "<th>First Name</th>";
    echo "<th>Job Position</th>";
    echo "<th>Employee Type</th>";
    echo "<th> </th>"; //Edit
    echo "<th> </th>"; //Delete
    echo "<th> </th>"; //Payroll
    echo "</tr>";

    if(mysqli_num_rows($results) > 0)
    {
        while($row = mysqli_fetch_assoc($results))
        {
            echo "<tr>";
            echo "<td>". $row['fldindex'] ."</td>";
            echo "<td>". $row['fldlastname'] ."</td>";
            echo "<td>". $row['fldfirstname'] ."</td>";
            echo "<td>". $row['fldposition'] ."</td>";
            echo "<td>". $row['fldemployeetype'] ."</td>";
            echo "<td><a href='editemployee.php?employeeID=". $row['fldindex'] ."'>Edit</a> </td>"; //edit link
            echo "<td><a href='deleteemployee.php?employeeID=". $row['fldindex'] ."'>Delete</a> </td>"; //delete link
            echo "<td><a href='payroll.php?employeeID=". $row['fldindex'] ."'>Payroll</a> </td>"; //payroll link
            echo "</tr>";
        }
    }
    else {
        echo "<tr>";
        echo "<td>No Entries</td>";
        echo "</tr>";
    }

    echo "</table>";
}
elseif(isset($_POST['enterSearch']))
{
    $search_query = $_POST['searchKey'];
    $search_sql = "SELECT * FROM tblemployees 
    WHERE (fldindex LIKE '%$search_query%') OR (fldlastname LIKE '%$search_query%') OR (fldfirstname LIKE '%$search_query%') OR (fldposition LIKE '%$search_query%') OR (fldemployeetype LIKE '%$search_query%')";

    $search_result = mysqli_query($con, $search_sql);

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Employee ID</th>";
    echo "<th>Last Name</th>";
    echo "<th>First Name</th>";
    echo "<th>Job Position</th>";
    echo "<th>Employee Type</th>";
    echo "<th> </th>"; //Edit
    echo "<th> </th>"; //Delete
    echo "<th> </th>"; //Payroll
    echo "</tr>";


    if(mysqli_num_rows($search_result) > 0)
    {
        while($search_row = mysqli_fetch_assoc($search_result))
        {
            echo "<tr>";
            echo "<td>". $search_row['fldindex'] ."</td>";
            echo "<td>". $search_row['fldlastname'] ."</td>";
            echo "<td>". $search_row['fldfirstname'] ."</td>";
            echo "<td>". $search_row['fldposition'] ."</td>";
            echo "<td>". $search_row['fldemployeetype'] ."</td>";
            echo "<td><a href='editemployee.php?employeeID=". $search_row['fldindex'] ."'>Edit</a>  </td>"; //edit link
            echo "<td><a href='deleteemployee.php?employeeID=". $search_row['fldindex'] ."'>Delete</a> </td>"; //delete link
            echo "<td><a href='payroll.php?employeeID=". $row['fldindex'] ."'>Payroll</a> </td>"; //payroll link
            echo "</tr>";
        }
    }
    else {
        echo "<tr>";
        echo "<td>No Entries</td>";
        echo "</tr>";
    }

    echo "</table>";
}

mysqli_close($con);
?>