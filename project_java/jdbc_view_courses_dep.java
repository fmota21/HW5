import java.sql.*;

/*
jdbc_insert_restaurant.java    // java program that is called by php that just does the insert; calls jdbc_db.java to connect and do the actual insert
jdbc_db.java // class (no main program) that has useful methods
*/

public class jdbc_view_courses_dep 
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
      builder.append("<br> Table COURSE before:" + myDB.query(query1) + "<br>");       

      // Parse input string to get restauranrestaurant Name and Address
      String deptcode = "4001";
   

      // Read command line arguments
      // args[0] is the first parameter
      deptcode = args[0];
	  
      // Insert the new restaurant
      //String input = id + ",'" + name + "','" + major + "'"; 
	  
	  
	  //,'" + city + "'";               
      //myDB.insert("STUDENT", input);    // insert new restaurant

	  //SHOW DATABASE FOR WANTED DEPARTMENT
	  String query2 = "SELECT * FROM COURSE WHERE DEPTCODE = " + deptcode + ";";
		


      // For debugging purposes:  Show the database after the insert
      builder.append("<br><br><br> Table COURSE after:" + myDB.query(query2));
      System.out.println(builder.toString());     

      myDB.disConnect();
   }
}