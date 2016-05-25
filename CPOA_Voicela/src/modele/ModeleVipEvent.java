/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modele;


import DA.DaoEvenement;
import DA.DaoVip;
import java.sql.SQLException;
import java.util.ArrayList;
import javax.swing.table.AbstractTableModel;
import metier.Evenement;
import metier.Vip;

/**
 *
 * @author Guillaume
 */
public class ModeleVipEvent extends AbstractTableModel {
    
    private ArrayList<Vip> listeVip;
    private ArrayList<Evenement> listeEvent;
    private String[] titre;
    private DaoVip objetDaoVip;
    private DaoEvenement objetEventVip;
    private String lastName;
    
    public ModeleVipEvent(DaoVip objetDaoVip, DaoEvenement objetEventVip){
        this.listeVip = new ArrayList<>();
        this.titre = new String[]{"Numéro VIP", "Nom","Prénom","Statut"};
        this.objetDaoVip = objetDaoVip;
        this.objetEventVip = objetEventVip;
        
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
            case 3 : return vip.getCodeStatut();
            default : return null;
        }
        
        
    }
    
    @Override
    public String getColumnName(int column){
        return titre[column];
    }
    
    public String loadVip() throws SQLException{
        String lastNum = objetDaoVip.lireVip(listeVip);
        this.fireTableDataChanged();
        return lastNum;
        
    }   
    
    public void refreshVip(){
        this.fireTableDataChanged();
    }
    
    
    public Vip getSelectedVip(int ligne){
        return listeVip.get(ligne);
    }
    
    public Evenement getSelectedVipEvent(String numVip) throws SQLException{
        return this.objetEventVip.getEventInfo(numVip);
    }
    
    
    
    
    
    
    
    
    
}
