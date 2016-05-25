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
import javax.swing.JComboBox;
import metier.Nationalite;

/**
 *
 * @author Guillaume
 */
public class DaoNationalite {
    
    private final Connection connexion;
    private static String idNat;
    

    public DaoNationalite(Connection connexion) throws SQLException {
        this.connexion = connexion;
    }

    public void lireNat(ArrayList<Nationalite> lesNat) throws SQLException{
        
        String requete = "SELECT * FROM NATIONALITE";
        PreparedStatement pstmt = connexion.prepareStatement(requete);
        ResultSet rset = pstmt.executeQuery(requete);
        Nationalite nat;
        while(rset.next()){
            idNat = rset.getString(1);
            String nom = rset.getString(2);
            nat = new Nationalite(idNat,nom);
            System.out.println("ID: " + idNat + " nom : " + nom);
            lesNat.add(nat);
        }
        rset.close();
        pstmt.close();
    }
    
}
    