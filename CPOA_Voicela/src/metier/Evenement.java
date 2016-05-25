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
public class Evenement {
    
    private String numVip;
    private String dateMariage;
    private String numVipConjoint;
    private String lieuMariage;
    private String dateDivorce;

    public Evenement(String numVip, String dateMariage, String numVipConjoint, String lieuMariage, String dateDivorce) {
        this.numVip = numVip;
        this.dateMariage = dateMariage;
        this.numVipConjoint = numVipConjoint;
        this.lieuMariage = lieuMariage;
        this.dateDivorce = dateDivorce;
    }

    public String getNumVip() {
        return numVip;
    }

    public void setNumVip(String numVip) {
        this.numVip = numVip;
    }

    public String getDateMariage() {
        return dateMariage;
    }

    public void setDateMariage(String dateMariage) {
        this.dateMariage = dateMariage;
    }

    public String getNumVipConjoint() {
        return numVipConjoint;
    }

    public void setNumVipConjoint(String numVipConjoint) {
        this.numVipConjoint = numVipConjoint;
    }

    public String getLieuMariage() {
        return lieuMariage;
    }

    public void setLieuMariage(String lieuMariage) {
        this.lieuMariage = lieuMariage;
    }

    public String getDateDivorce() {
        return dateDivorce;
    }

    public void setDateDivorce(String dateDivorce) {
        this.dateDivorce = dateDivorce;
    }
    
    
          
    
}
