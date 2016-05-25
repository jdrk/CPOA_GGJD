/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modele;

import DA.DaoNationalite;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.AbstractListModel;
import javax.swing.ComboBoxModel;
import javax.swing.DefaultComboBoxModel;
import javax.swing.MutableComboBoxModel;
import javax.swing.event.ListDataListener;
import metier.Nationalite;


public class ModeleNat extends AbstractListModel implements ComboBoxModel  {
    
    private ArrayList<Nationalite> listeNat;
    private String[] idNat;
    private String selection = "FR - Française";
    private DaoNationalite objetDaoNat;
    
   

    public ModeleNat(DaoNationalite objetDao) {
        this.listeNat = new ArrayList<>();
        this.objetDaoNat = objetDao;
    }
    
   
    public void loadNat() throws SQLException{
        objetDaoNat.lireNat(listeNat);
        
    }

    @Override
    public int getSize() {
        return listeNat.size();
    }

    @Override
    public Object getElementAt(int index) {
        String nat = listeNat.get(index).getIdNat() + " - " + listeNat.get(index).getNomNat().substring(0,1).toUpperCase() + listeNat.get(index).getNomNat().substring(1).toLowerCase() ;

        return nat;
    }

    @Override
    public void setSelectedItem(Object anItem) {
        selection = (String) anItem;
    }

    @Override
    public Object getSelectedItem() {
        return selection;
    }

   
    
    
   
    
    
    
}
