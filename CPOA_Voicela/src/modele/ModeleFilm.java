/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modele;

import DA.DaoFilm;
import java.sql.SQLException;
import java.util.ArrayList;
import javax.swing.table.AbstractTableModel;
import metier.Film;

/**
 *
 * @author Guillaume
 */
public class ModeleFilm extends AbstractTableModel {
    
    private ArrayList<Film> listeFilm;
    private String[] titre;
    private DaoFilm objetDaoFilm;
    
    public ModeleFilm(DaoFilm objetDaoFilm){
        this.listeFilm = new ArrayList<>();
        this.titre = new String[]{"N° Visa","Intitulé","Genre","Année de sortie","Affiche"};
        this.objetDaoFilm = objetDaoFilm;
    }

    @Override
    public int getRowCount() {
        return listeFilm.size();
    }

    @Override
    public int getColumnCount() {
        return titre.length;
    }

    @Override
    public Object getValueAt(int rowIndex, int columnIndex) {
        Film leFilm = listeFilm.get(rowIndex);
        switch(columnIndex){
            case 0 : return leFilm.getNumVisa();
            case 1 : return leFilm.getTitreFilm();
            case 2 : return leFilm.getIdGenre();
            case 3 : return leFilm.getAnneeSortie();
            case 4 : return leFilm.getIdAffiche();
            default : return null;
        }
    }
    
    @Override
    public String getColumnName(int column){
        return titre[column];
    }
    
    public void loadFilm() throws SQLException{
        objetDaoFilm.lireFilm(listeFilm);
    }
    
    public void delFilm(int ligne) throws SQLException{
        String numVisaString = (String) getValueAt(ligne,0);
        objetDaoFilm.delFilm(numVisaString);
        listeFilm.remove(ligne);
        this.fireTableDataChanged();
    }    
    
    public void addFilm(Film leFilm) throws SQLException{
        objetDaoFilm.addFilm(leFilm);
        listeFilm.add(leFilm);
        this.fireTableDataChanged();
    }
    
    public void modifyFilm(int index, String numVisa, String titre, String idGenre, int anneeSortie) throws SQLException{
        Film temp = this.getSelectedFilm(index);
        
        objetDaoFilm.modifyFilm(temp.getNumVisa(), numVisa, titre, idGenre, anneeSortie);
        listeFilm.set(index, new Film(numVisa, titre, idGenre, anneeSortie, temp.getIdAffiche()));
        this.fireTableDataChanged();
    }
    
    public Film getSelectedFilm(int ligne){
        return listeFilm.get(ligne);
    }
    
    
}
