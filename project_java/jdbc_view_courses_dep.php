<html>
<body>
<h3>Enter information to view a course from given department in the database:</h3>

<form action="jdbc_view_courses_dep.php" method="post">
	DeptCode: <input type="text" name="deptcode"><br>
    <input name="submit" type="submit" >
</form>
<br><br>

<form action="hello.php" method="post">
click to go to home page<br>
<input name="submit" type="submit" value="Main Menu">
</form>

</body>
</html>

<?php
if (isset($_POST['submit'])) 
{
    // replace ' ' with '\ ' in the strings so they are treated as single command line args
    $deptcode = escapeshellarg($_POST[deptcode]);

    $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar jdbc_view_courses_dep ' . $deptcode;
	
    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
    echo "<p>command: $command <p>";
 
    // run jdbc_insert_restaurant.exe
    system($command);           
}
?>