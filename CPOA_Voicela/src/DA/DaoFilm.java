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
import metier.Film;

/**
 *
 * @author Guillaume
 */
public class DaoFilm {
    
    private final Connection connexion;

    public DaoFilm(Connection connexion) throws SQLException{
        this.connexion = connexion;
    }
    
    public void lireFilm(ArrayList<Film> listeFilm) throws SQLException{
        String requete = "SELECT * FROM FILM";
        PreparedStatement pstmt = connexion.prepareStatement(requete);
        ResultSet rset = pstmt.executeQuery(requete);
        Film leFilm;
        while(rset.next()){
            String numVisa = rset.getString(1);
            String titreFilm = rset.getString(2);
            String idGenre = rset.getString(3);
            int anneeSortie = rset.getInt(4);
            String idAffiche = rset.getString(5);
            leFilm = new Film(numVisa,titreFilm,idGenre,anneeSortie, idAffiche);
            listeFilm.add(leFilm);
        }
        rset.close();
        pstmt.close();
        
    
    }
    
    
    public void addFilm(Film film) throws SQLException{
        String requete = "INSERT INTO FILM VALUES (?,?,?,?, '000000.jpg')";
        PreparedStatement pstmt = connexion.prepareStatement(requete);
        pstmt.setString(1, film.getNumVisa());
        pstmt.setString(2, film.getTitreFilm());
        pstmt.setString(3, film.getIdGenre());
        pstmt.setInt(4, film.getAnneeSortie());
        
        pstmt.executeUpdate();
        pstmt.close();
    }
    
    public void delFilm(String numVisa) throws SQLException{
        String requete = "DELETE FROM FILM WHERE NUMVISA = ?";
        PreparedStatement pstmt = connexion.prepareStatement(requete);
        pstmt.setString(1, numVisa);
        pstmt.executeUpdate();
        pstmt.close();
        
    }
    
    public void modifyFilm(String numVisaOld, String numVisa, String titre, String idGenre, int anneeSortie) throws SQLException{
        String requete = "UPDATE FILM SET numVisa=?, titreFilm=?, idGenre =?,anneeSortie=? WHERE numVisa=?";
        PreparedStatement pstmt = connexion.prepareStatement(requete);
        pstmt.setString(1, numVisa);
        pstmt.setString(2, titre);
        pstmt.setString(3, idGenre);
        pstmt.setInt(4, anneeSortie);
        pstmt.setString(5, numVisaOld);
        pstmt.executeUpdate();
        pstmt.close();
    }
    
    
}
