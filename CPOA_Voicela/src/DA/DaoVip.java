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
import metier.Vip;

/**
 *
 * @author Guillaume
 */
public class DaoVip {
    
    private final Connection connexion;
    private static String numVip; // utilisé pour transmettre le dernier numéroVip
    
    public DaoVip(Connection connexion) throws SQLException{
        this.connexion = connexion;
    }
    
    public String lireVip(ArrayList<Vip> lesVip) throws SQLException{ //lis les VIP depuis la base et retourne le dernier numVip récupéré
        String requete = "SELECT * FROM VIP";
        PreparedStatement pstmt = connexion.prepareStatement(requete);
        ResultSet rset = pstmt.executeQuery(requete);
        Vip temp;
        while (rset.next()) {
            numVip = rset.getString(1);
            String nom = rset.getString(2);
            String prenom = rset.getString(3);
            String civilite = rset.getString(4);
            String dateNaissance = rset.getString(5);
            String lieuNaissance = rset.getString(6);
            String codeRole = rset.getString(7);
            String codeStatut = rset.getString(8);
            String nationalite = rset.getString(9);
            String idPhoto = rset.getString(10);
            temp = new Vip(numVip,nom,prenom,civilite,dateNaissance,lieuNaissance,codeRole,codeStatut,nationalite, idPhoto);
            lesVip.add(temp);
        }
        
      
          
        rset.close();
        pstmt.close();       
        
        return numVip;
      
    }
    // à modifier 
    public void lireNomVip(ArrayList<Vip> lesVip) throws SQLException{
        String requete = "SELECT numVip, nomVip, prenomVip FROM VIP";
        PreparedStatement pstmt = connexion.prepareStatement(requete);
        ResultSet rset = pstmt.executeQuery(requete);
        Vip temp;
        while (rset.next()) {
            String numVip = rset.getString(1);
            String nom = rset.getString(2);
            String prenom = rset.getString(3);
            String civilite = rset.getString(4);
            String dateNaissance = rset.getString(5);
            String lieuNaissance = rset.getString(6);
            String codeRole = rset.getString(7);
            String codeStatut = rset.getString(8);
            String nationalite = rset.getString(9);
            String idPhoto = rset.getString(10);
            temp = new Vip(numVip,nom,prenom,civilite,dateNaissance,lieuNaissance,codeRole,codeStatut,nationalite, idPhoto);
            lesVip.add(temp);
        }
        
      
          
        rset.close();
        pstmt.close();       
        
        
    }
    
    public Object getStatut(String numVip) throws SQLException{
        String requete = "SELECT codestatut FROM VIP where NUMVIP="+numVip;
        PreparedStatement pstmt = connexion.prepareStatement(requete);
        ResultSet rset = pstmt.executeQuery(requete);
        String codeS = new String();
        while (rset.next()) {
            codeS = rset.getString(8);
        }

        rset.close();
        pstmt.close();   
        return codeS;
    }
    
    public void addVip(Vip vip) throws SQLException{
        String requete = "INSERT INTO VIP VALUES(?,?,?,?,?,?,?,?,?,?)";
        PreparedStatement pstmt = connexion.prepareStatement(requete);
        pstmt.setString(1, vip.getNumVip());
        pstmt.setString(2, vip.getNomVip());
        pstmt.setString(3,vip.getPrenomVip());
        pstmt.setString(4, vip.getCivilite());
        pstmt.setString(5, vip.getDateNaissance());
        pstmt.setString(6, vip.getLieuNaissance());
        pstmt.setString(7, vip.getCodeRole());
        pstmt.setString(8, "C"); //pstmt.setString(8, vip.getCodeStatut());
        pstmt.setString(9, vip.getNationalite());
        pstmt.setString(10, vip.getIdPhoto());
        pstmt.executeUpdate();
        pstmt.close();
      
    }
    
    public void delVip(String numVip) throws SQLException{
        String requete = "DELETE FROM VIP WHERE NUMVIP = ?";
        PreparedStatement pstmt = connexion.prepareStatement(requete);
        pstmt.setString(1, numVip );
        pstmt.executeUpdate();
        pstmt.close();
    }

    public void modifyVip(String numVipOld, String numVip, String nomVip, String prenomVip, String civilite, String dateN, String lieuN, String codeR, String codeS, String nat) throws SQLException{
        String requete = "UPDATE VIP SET numVip=?,nomVip=?, prenomVip=?, civilite=?, dateNaissance=?, lieuNaissance=?, codeRole=?, codeStatut=?,nationalite=? WHERE numVip=?";
        PreparedStatement pstmt = connexion.prepareStatement(requete);
        pstmt.setString(1, numVip);
        pstmt.setString(2, nomVip);
        pstmt.setString(3, prenomVip);
        pstmt.setString(4, civilite);
        pstmt.setString(5, dateN);
        pstmt.setString(6, lieuN);
        pstmt.setString(7, codeR);
        pstmt.setString(8, codeS);
        pstmt.setString(9, nat);
        pstmt.setString(10, numVipOld);
        pstmt.executeUpdate();
        pstmt.close();
        
    }
}
