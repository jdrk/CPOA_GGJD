/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package DA;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import metier.Evenement;

/**
 *
 * @author Guillaume
 */
public class DaoEvenement {
    
    private final Connection connexion;
    private static Evenement event;
    
    public DaoEvenement(Connection connexion){
        this.connexion = connexion;
    }
    
    public void lireEvenement(ArrayList<Evenement> listeEvent) throws SQLException{
        String requete = "SELECT * FROM EVENT";
        PreparedStatement pstmt = connexion.prepareStatement(requete);
        ResultSet rset = pstmt.executeQuery(requete);
        Evenement event;
        while(rset.next()){
            String numVip = rset.getString(1);
            String dateMariage = rset.getString(2);
            String numVipConjoint = rset.getString(3);
            String lieuMariage = rset.getString(4);
            String dateDivorce = rset.getString(5);
            event = new Evenement(numVip, dateMariage, numVipConjoint, lieuMariage, dateDivorce);
            listeEvent.add(event);
        }
        rset.close();
        pstmt.close();
        
    }
    
    public Evenement getEventInfo(String numVip) throws SQLException{
        String requete = "SELECT * FROM NEWEVENT WHERE NUMVIP = " + numVip +" OR NUMVIPCONJOINT = " + numVip;
        PreparedStatement pstmt = connexion.prepareStatement(requete);
        ResultSet rset = pstmt.executeQuery(requete);
        
       while(rset.next()){
            String dateMariage = rset.getString(2);
            String numVipConjoint = rset.getString(3);
            String lieuMariage = rset.getString(4);
            String dateDivorce = rset.getString(5);
            event = new Evenement(numVip, dateMariage, numVipConjoint, lieuMariage, dateDivorce);
            
            return event;
        }
        rset.close();
        pstmt.close();
        
        return event;
    }
    
    public void addEvent(Evenement event) throws SQLException{
        String requete = "INSERT INTO NEWEVENT VALUES(?,?,?,?,?)";
        PreparedStatement pstmt = connexion.prepareStatement(requete);
        pstmt.setString(1, event.getNumVip());
        pstmt.setString(2, event.getDateMariage());
        pstmt.setString(3, event.getNumVipConjoint());
        pstmt.setString(4, event.getLieuMariage());
        pstmt.setString(5, event.getDateDivorce());
        pstmt.executeUpdate();
        pstmt.close();
        String requete2 = "UPDATE VIP SET CODESTATUT='M' WHERE NUMVIP= " +   event.getNumVip();
        PreparedStatement pstmt2 = connexion.prepareStatement(requete2);
        pstmt2.executeUpdate();
        pstmt2.close();
        String requete3 = "UPDATE VIP SET CODESTATUT='M' WHERE NUMVIP= " +   event.getNumVipConjoint();
        PreparedStatement pstmt3 = connexion.prepareStatement(requete3);
        pstmt3.executeUpdate();
        pstmt3.close();        
        
        
        

    }
    
    public void modifyEvent(String numVip, String dateM, String numVipC, String lieuM, String dateD){
        
    }
    
}
