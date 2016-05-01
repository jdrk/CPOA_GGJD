/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package métier;

/**
 *
 * @author Guillaume
 */
public class Vip {
    
    private String numVip;
    private String nomVip;
    private String prenomVip;
    private String civilite;
    private String dateNaissance;
    private String lieuNaissance;
    private String codeRole;
    private String codeStatut;
    private String nationalite;

    public Vip(String numVip, String nomVip, String prenomVip, String civilite, String dateNaissance, String lieuNaissance, String codeRole, String codeStatut, String nationalite) {
        this.numVip = numVip;
        this.nomVip = nomVip;
        this.prenomVip = prenomVip;
        this.civilite = civilite;
        this.dateNaissance = dateNaissance;
        this.lieuNaissance = lieuNaissance;
        this.codeRole = codeRole;
        this.codeStatut = codeStatut;
        this.nationalite = nationalite;
    }

    public String getNumVip() {
        return numVip;
    }

    public void setNumVip(String numVip) {
        this.numVip = numVip;
    }

    public String getNomVip() {
        return nomVip;
    }

    public void setNomVip(String nomVip) {
        this.nomVip = nomVip;
    }

    public String getPrenomVip() {
        return prenomVip;
    }

    public void setPrenomVip(String prenomVip) {
        this.prenomVip = prenomVip;
    }

    public String getCivilite() {
        return civilite;
    }

    public void setCivilite(String civilite) {
        this.civilite = civilite;
    }

    public String getDateNaissance() {
        return dateNaissance;
    }

    public void setDateNaissance(String dateNaissance) {
        this.dateNaissance = dateNaissance;
    }

    public String getLieuNaissance() {
        return lieuNaissance;
    }

    public void setLieuNaissance(String lieuNaissance) {
        this.lieuNaissance = lieuNaissance;
    }

    public String getCodeRole() {
        return codeRole;
    }

    public void setCodeRole(String codeRole) {
        this.codeRole = codeRole;
    }

    public String getCodeStatut() {
        return codeStatut;
    }

    public void setCodeStatut(String codeStatut) {
        this.codeStatut = codeStatut;
    }

    public String getNationalite() {
        return nationalite;
    }

    public void setNationalite(String nationalite) {
        this.nationalite = nationalite;
    }

    @Override
    public String toString() {
        return "Vip{" + "numVip=" + numVip + ", nomVip=" + nomVip + ", prenomVip=" + prenomVip + ", civilite=" + civilite + ", dateNaissance=" + dateNaissance + ", lieuNaissance=" + lieuNaissance + ", codeRole=" + codeRole + ", codeStatut=" + codeStatut + ", nationalite=" + nationalite + '}';
    }
    
    
    
}
