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
    private String lastName;
    
    public ModeleVip(DaoVip objetDaoVip){
        this.listeVip = new ArrayList<>();
        this.titre = new String[]{"Numéro VIP", "Nom","Prénom", "Civilité", "Date de naissance","Lieu de naissance","Rôle","Statut marital","Nationalité","Photo"};
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
            case 8 : return vip.getNationalite();
            case 9 : return vip.getIdPhoto();
            default : return null;
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
        String numVip = (String) getValueAt(ligne, 0);
        int numVip1 = Integer.parseInt(numVip);
        objetDaoVip.delVip(numVip);
        listeVip.remove(ligne);
        this.fireTableDataChanged();
    }
    
    public String loadVip() throws SQLException{
        String lastNum = objetDaoVip.lireVip(listeVip);
        this.fireTableDataChanged();
        return lastNum;
        
    }
    
    
    
    public void refreshVip(){
        this.fireTableDataChanged();
    }
    
    public void modifyVip(int index, String newNumVip, String nomVip, String prenomVip, String civiliteVip, String dateN, String lieuN, String codeR, String codeS, String nat) throws SQLException{
        Vip temp = this.getSelectedVip(index);
            
        objetDaoVip.modifyVip(temp.getNumVip(), newNumVip, nomVip, prenomVip, civiliteVip, dateN, lieuN, codeR, codeS, nat);
        listeVip.set(index, new Vip(newNumVip, nomVip, prenomVip, civiliteVip, dateN, lieuN, codeR, codeS, nat, temp.getIdPhoto()));
        this.fireTableDataChanged();
        
    }
    
    public Vip getSelectedVip(int ligne){
        return listeVip.get(ligne);
    }
    
    
    
    
    
    
    
    
    
}
