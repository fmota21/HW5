<html>
<body>
<h3>Enter information to insert an application to the database:</h3>

<form action="jdbc_insert_application.php" method="post">
	StudentID: <input type="text" name="studentid"><br>
    DeptCode: <input type="text" name="deptcode"><br>
    CourseNum: <input type="text" name="coursenum"><br>
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
    $studentid = escapeshellarg($_POST[studentid]);
	$deptcode = escapeshellarg($_POST[deptcode]);
    $coursenum = escapeshellarg($_POST[coursenum]);

    $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar jdbc_insert_application ' . $studentid . ' ' . $deptcode . ' ' . $coursenum;
	
    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
    echo "<p>command: $command <p>";
 
    // run jdbc_insert_restaurant.exe
    system($command);           
}
?>