import java.sql.*;

/*
jdbc_insert_restaurant.java    // java program that is called by php that just does the insert; calls jdbc_db.java to connect and do the actual insert
jdbc_db.java // class (no main program) that has useful methods
*/

public class jdbc_insert_course 
{
	//private static Connection connection;
	//private static Statement statement;
	//private static int sID;
   // The main program that inserts a restaurant
   public static void main(String[] args) throws SQLException 
   {
   String Username = "fmota";              // Change to your own username
   String mysqlPassword = "culin3Ai";    // Change to your own mysql Password

      // Connect to the database
      jdbc_db myDB = new jdbc_db();
      myDB.connect(Username, mysqlPassword);
      myDB.initDatabase();				    

      // For debugging purposes:  Show the database before the insert
      StringBuilder builder = new StringBuilder();
      String query1 = "SELECT * FROM COURSE;";
      builder.append("<br> Table STUDENT before:" + myDB.query(query1) + "<br>");       

      // Parse input string to get restauranrestaurant Name and Address
      String deptcode = "4";
      String coursenum = "Number";
      String title = "classname";
	  String credithours = "3";

      // Read command line arguments
      // args[0] is the first parameter
      deptcode = args[0];
      coursenum = args[1];
      title = args[2];
	  credithours = args[3];
	  
	  /*String student_id = "SELECT MAX(STUDENTID) AS STUDENTID FROM STUDENT;";
	  Statement state = connection.createStatement();
	  ResultSet res5a = state.executeQuery(student_id);	
	  if(res5a.next()){
		sID = res5a.getInt("STUDENTID");
		sID++;
	  }*/
      // Insert the new restaurant
      String input = deptcode + ",'" + coursenum + "','" + title + "','" + credithours + "'"; 
	  
	  //,'" + city + "'";               
      myDB.insert("COURSE", input);    // insert new restaurant

      // For debugging purposes:  Show the database after the insert
      builder.append("<br><br><br> Table STUDENT after:" + myDB.query(query1));
      System.out.println(builder.toString());     

      myDB.disConnect();
   }
}
