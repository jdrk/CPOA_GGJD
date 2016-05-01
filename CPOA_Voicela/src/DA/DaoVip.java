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
    
    public DaoVip(Connection connexion) throws SQLException{
        this.connexion = connexion;
    }
    
    public void lireVip(ArrayList<Vip> lesVip) throws SQLException{
        String requete = "SELECT * FROM VIP";
        PreparedStatement pstmt = connexion.prepareStatement(requete);
        ResultSet rset = pstmt.executeQuery(requete);
        while (rset.next()) {
            String num = rset.getString(1);
            String nom = rset.getString(2);
            String prenom = rset.getString(3);
            String civilite = rset.getString(4);
            String dateNaissance = rset.getString(5);
            String lieuNaissance = rset.getString(6);
            String codeRole = rset.getString(7);
            String codeStatut = rset.getString(8);
            String nationalite = rset.getString(9);
            Vip temp = new Vip(num,nom,prenom,civilite,dateNaissance,lieuNaissance,codeRole,codeStatut,nationalite);
            lesVip.add(temp);
        }
        rset.close();
        pstmt.close();        
      
    }
    
    public void addVip(Vip vip) throws SQLException{
        String requete = "INSERT INTO VIP VALUES(?,?,?,?,?,?,?,?,'FR')";
        PreparedStatement pstmt = connexion.prepareStatement(requete);
        pstmt.setString(1, vip.getNumVip());
        pstmt.setString(2, vip.getNomVip());
        pstmt.setString(3,vip.getPrenomVip());
        pstmt.setString(4, vip.getCivilite());
        pstmt.setString(5, vip.getLieuNaissance());
        pstmt.setString(6, vip.getLieuNaissance());
        pstmt.setString(7, vip.getCodeRole());
        pstmt.setString(8, vip.getCodeStatut());
        //pstmt.setString(9, vip.getNationalite());
        pstmt.executeUpdate();
        pstmt.close();
      
    }
    
    public void delVip(Vip vip) throws SQLException{
        String requete = "DELETE FROM VIP WHERE NUMVIP = ?";
        PreparedStatement pstmt = connexion.prepareStatement(requete);
        pstmt.setInt(1, Integer.parseInt(vip.getNumVip()) );
        pstmt.executeUpdate();
        pstmt.close();
    }

    public void delVip(int numVip) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
}
