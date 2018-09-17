
import java.sql.*;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author LiamWho
 */
public class DBConnect {
    private Connection con;
    private Statement st;
    private ResultSet rs;
    
    public DBConnect(){
        try{
            Class.forName("com.mysql.jdbc.Driver");
            
//            con = DriverManager.getConnection("jdbc:mysql://localhost:3306/interview","root","");
            con = DriverManager.getConnection("jdbc:mysql://localhost:3306/interview?useTimezone=true&serverTimezone=UTC","root","");
            st = con.createStatement();
            
        }catch(Exception ex){
            System.out.println("Error: "+ex);
        }
    }
    
    public void getData(){
        try{
            String query = "select * from users";
            rs = st.executeQuery(query);
            System.out.println("Records from Database");
            while (rs.next()){
                String name= rs.getString("firstName");
                String surname = rs.getString("lastName");
                System.out.println("Full Name: " +name +" " +surname);
            }
        }catch(Exception ex){
            System.out.println("Error: "+ex);
        }
    }
}
