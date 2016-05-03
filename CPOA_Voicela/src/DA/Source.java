/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package DA;

import com.mysql.jdbc.jdbc2.optional.MysqlDataSource;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.InputStream;
import java.net.PasswordAuthentication;
import java.util.Properties;
import javax.sql.DataSource;

/**
 *
 * @author Alain
 */
public class Source {

    /**
     *
     * @param login
     * @return
     * @throws Exception
     */
    public static DataSource getSource(PasswordAuthentication login) throws Exception {
        // récupération des informations d'authentification
        String user = login.getUserName();
        String pwd = new String(login.getPassword());
        // création d'un objet Properties à parir du fichier 
        Properties props = new Properties();
        FileInputStream fichier = new FileInputStream("src/connexion.properties");
        props.load(fichier);
        MysqlDataSource ds = new MysqlDataSource();
        ds.setPortNumber(Integer.parseInt(props.getProperty("port")));
        ds.setDatabaseName(props.getProperty("service"));
        ds.setServerName(props.getProperty("serveur"));
        ds.setUser(user);
        ds.setPassword(pwd);
        return ds;
    }


     
     public static String getUserName() throws FileNotFoundException, IOException{
         Properties props=new Properties();
         //FileInputStream fichier=new FileInputStream("/DA/connexion.properties");
         InputStream fichier = Source.class.getClassLoader().getResourceAsStream("connexion.properties");
         props.load(fichier);
         
         return props.getProperty("User");
     }
   
    
    
}

