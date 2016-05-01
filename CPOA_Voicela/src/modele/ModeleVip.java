/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modele;


import DA.DaoVip;
import java.sql.SQLException;
import java.util.ArrayList;
import javax.swing.table.AbstractTableModel;
import metier.Vip;

/**
 *
 * @author Guillaume
 */
public class ModeleVip extends AbstractTableModel {
    
    private ArrayList<Vip> listeVip;
    private String[] titre;
    private DaoVip objetDaoVip;
    
    public ModeleVip(DaoVip objetDaoVip){
        this.listeVip = new ArrayList<>();
        this.titre = new String[]{"Numéro", "Nom","Prénom", "Civilité", "Date de naissance","Lieu","Role","Statut","Nationalité"};
        this.objetDaoVip = objetDaoVip;
    }
    
    @Override
    public int getRowCount(){
        return listeVip.size();
    }
    
    @Override
    public int getColumnCount(){
        return titre.length;
    }
    
    @Override
    public Object getValueAt(int row, int column){
        Vip vip = listeVip.get(row);
        switch (column){
            case 0 : return vip.getNumVip(); 
            case 1 : return vip.getNomVip(); 
            case 2 : return vip.getPrenomVip();
            case 3 : return vip.getCivilite();
            case 4 : return vip.getDateNaissance();
            case 5 : return vip.getLieuNaissance();
            case 6 : return vip.getCodeRole();
            case 7 : return vip.getCodeStatut();
            default : return vip.getNationalite();
        }
        
        
    }
    
    @Override
    public String getColumnName(int column){
        return titre[column];
    }
    
    public void addVip(Vip vip) throws SQLException{
        objetDaoVip.addVip(vip);
        listeVip.add(vip);
        this.fireTableDataChanged();
    }
    
    public void delVip(int ligne)  throws SQLException{
        int numVip = (int) getValueAt(ligne, 0);
        objetDaoVip.delVip(numVip);
        listeVip.remove(ligne);
        this.fireTableDataChanged();
    }
    
    public void loadVip() throws SQLException{
        objetDaoVip.lireVip(listeVip);
        fireTableDataChanged();
        
    }
    
    
    
    
    
    
}
