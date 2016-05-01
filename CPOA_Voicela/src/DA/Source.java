/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DA;

import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.InputStream;
import java.sql.SQLException;
import java.util.Properties;
import javax.sql.DataSource;
import oracle.jdbc.pool.OracleDataSource;

/**
 *
 * @author Guillaume
 */
public class Source extends OracleDataSource{
       
    private static DaoVip ods;
    
    private Source() throws SQLException{   
    }
    
     public static OracleDataSource getOracleDataSourceDAO() throws FileNotFoundException, IOException, SQLException{
        Properties props=new Properties();
        
        InputStream fichier = Source.class.getClassLoader().getResourceAsStream("connexion.properties");
       
        props.load(fichier);
        OracleDataSource ods=new OracleDataSource();
        ods.setDriverType(props.getProperty("Pilote"));
        ods.setPortNumber(Integer.parseInt(props.getProperty("Port")));
        ods.setServiceName(props.getProperty("Base"));
        ods.setUser(props.getProperty("User"));
        ods.setPassword(props.getProperty("Password"));
        ods.setServerName(props.getProperty("Serveur"));
        return ods;
    }
     
     public static String getUserName() throws FileNotFoundException, IOException{
         Properties props=new Properties();
         //FileInputStream fichier=new FileInputStream("/DA/connexion.properties");
         InputStream fichier = Source.class.getClassLoader().getResourceAsStream("connexion.properties");
         props.load(fichier);
         
         return props.getProperty("User");
     }
   
    
    
}
