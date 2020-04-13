<html>
<body>
<h3>Enter your name:</h3>

<!--<form action="hello.php" method="post">-->
	Main Menu<br>
	
	<form action="jdbc_insert_student.php" method="post">
	1) Add a student to the Student table <input name="submit" type="submit" value="click here"><br>
	</form>
	
	<form action="jdbc_insert_class.php" method="post">
	2) Add a course to the Course table <input name="submit" type="submit" value="click here"><br>
	</form>
	
	<form action="jdbc_insert_application.php" method="post">
	3) Add an application to the Enrollment table <input name="submit" type="submit" value="click here"><br>
	</form>
	
	<form action="jdbc_view_students.php" method="post">
	4) View all students <input name="submit" type="submit" value="click here"><br>
	</form>
	
	<form action="jdbc_view_courses_department.php" method="post">
	5) View all courses from a given department <input name="submit" type="submit" value="click here"><br>
	</form>
	
	<form action="jdbc_view_courses_department.php" method="post">
	6) View all courses for a given student <input name="submit" type="submit" value="click here"><br>
	</form>
	<br>
    <!--which function would you like to do?:<input type="text" name="name"><br>
    <input name="submit" type="submit" value="click here">-->
<!--</form>-->
<br><br>

</body>
</html>
 
<?php
if (isset($_POST['submit'])) 
{
    // add ' ' around multiple strings so they are treated as single command line args
    $name = escapeshellarg($_POST[name]);

    // build the linux command that you want executed;  
    $command = 'java hello ' . $name;

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
 
    // echo then run the command
    echo "command: $command <br>";
    system($command);           
}
?>


