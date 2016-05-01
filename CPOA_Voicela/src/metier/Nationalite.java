/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package metier;

/**
 *
 * @author Guillaume
 */
public class Nationalite {
    
    private String idNat;
    private String nomNat;

    public Nationalite(String idNat, String nomNat) {
        this.idNat = idNat;
        this.nomNat = nomNat;
    }

    public String getIdNat() {
        return idNat;
    }

    public void setIdNat(String idNat) {
        this.idNat = idNat;
    }

    public String getNomNat() {
        return nomNat;
    }

    public void setNomNat(String nomNat) {
        this.nomNat = nomNat;
    }
    
    
    
    
}
