/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package appli;

import DA.DaoEvenement;
import DA.DaoFilm;
import DA.DaoNationalite;
import DA.DaoVip;
import DA.Source;
import IHM.Connexion;
import IHM.MainScreen;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.net.PasswordAuthentication;
import java.sql.Connection;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.sql.DataSource;
import javax.swing.JOptionPane;
import javax.swing.UIManager;
import javax.swing.UnsupportedLookAndFeelException;
import modele.ModeleFilm;
import modele.ModeleNat;
import modele.ModeleVip;
import modele.ModeleVipEvent;

/**
 *
 * @author Guillaume
 */
public class Appli {
    
    private static DaoVip daoVip;
    private static DaoNationalite daoNationalite;
    private static DaoFilm daoFilm;
    private static DaoEvenement daoEvent;
    private static Connection connexion;
    private static DataSource source;
    
    
        public static void main(String args[]) throws IOException, FileNotFoundException, SQLException, Exception {
        
        // Look and Feel de windows
        try {
            UIManager.setLookAndFeel("com.sun.java.swing.plaf.windows.WindowsLookAndFeel");
        } catch (ClassNotFoundException | InstantiationException | IllegalAccessException | UnsupportedLookAndFeelException e) {
            System.out.print(e.getMessage());
        }

        
        boolean etat = false;
        do {
            Connexion co = new Connexion(null);
            PasswordAuthentication login = co.identifier();
            try {
                source = Source.getSource(login);
                connexion = source.getConnection();
                etat=true;
            } catch (Exception e){
                JOptionPane.showMessageDialog(null, "Login incorrect : "  + e.getMessage(), "Erreur", JOptionPane.WARNING_MESSAGE);
            }
            
            
        } while (etat == false);
        

        
        try{
            daoVip = new DaoVip(connexion);
            daoNationalite = new DaoNationalite(connexion);
            daoFilm = new DaoFilm(connexion);
            daoEvent = new DaoEvenement(connexion);
            final ModeleVip modeleVip = new ModeleVip(daoVip);
            final ModeleNat modeleNat = new ModeleNat(daoNationalite);
            final ModeleFilm modeleFilm = new ModeleFilm(daoFilm);
            final ModeleVipEvent modeleVipEvent = new ModeleVipEvent(daoVip,daoEvent);

            /* Create and display the form */
            java.awt.EventQueue.invokeLater(new Runnable() {
                public void run() {
                    try {
                        new MainScreen(modeleVip, Source.getUserName(), modeleNat, modeleFilm, modeleVipEvent, daoEvent, daoVip).setVisible(true);
                    } catch (IOException ex) {
                        Logger.getLogger(Appli.class.getName()).log(Level.SEVERE, null, ex);
                    } catch (SQLException ex) {
                        Logger.getLogger(Appli.class.getName()).log(Level.SEVERE, null, ex);
                    }
                    
                }
            });
        } catch (SQLException ex) {
            JOptionPane.showMessageDialog(null, "problème dans la création des objets nécessaires" + ex.getMessage(),
                    "avertissement", JOptionPane.WARNING_MESSAGE);
            
        }
    }
    
}
