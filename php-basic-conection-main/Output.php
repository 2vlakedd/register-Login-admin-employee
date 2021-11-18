<html>
<?php
include "connection.php";
if (isset($_POST["insert"]))
{
    mysqli_query($link,"insert into employee values('$_POST[firstname]',
    '$_POST[lastname]','$_POST[middlename]','$_POST[empnumber]','$_POST[email]',
    '$_POST[pass]','$_POST[role]')");
    ?>
        <script type ="text/javascript">

        window.location.href=window.location.href;

        </script>
        <?php
    }

?>


<?php

      include "connection.php";
      if ($link->connect_error) {
      echo "connection Failed: " . $link->connect_error;
    } else {
        $sql = "SELECT FirstName, LastName, MiddleName, Email, EmployeeNumber,
        Password, Role FROM tblRegister
        WHERE EmployeeNumber=(SELECT MAX(EmployeeNumber) FROM tblRegister)";
        $result = $link->query($sql);
        while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<h1>Latest Record</h1>"."<br>";
      echo "<td>"; echo "<b>First Name : </b>".$row["FirstName"]; echo "<br>"."</td>";
      echo "<td>"; echo "<b>Last Name : </b>".$row["LastName"]; echo "<br>"."</td>";
      echo "<td>"; echo "<b>Middlename : </b>".$row["MiddleName"]; echo "<br>"."</td>";
      echo "<td>"; echo "<b>Email : </b>".$row["Email"]; echo "<br>"."</td>";
      echo "<td>"; echo "<b>Employee Number : </b>".$row["EmployeeNumber"]; echo "<br>"."</td>";
      echo "<td>"; echo "<b>Password : </b>".$row["Password"]; echo "<br>"."</td>";
      echo "<td>"; echo "<b>Role : </b>".$row["Role"]; echo "<br>"."</td>";

      }
        $result->free();
    }

?>


  <form  action="input.php" method="post">
 <input type="submit" name="inserts" value="Register Student" />
</form>
</html>