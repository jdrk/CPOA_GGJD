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
public class Film {
    
    private String numVisa;
    private String titreFilm;
    private String idGenre;
    private int anneeSortie;
    private String idAffiche;

    public Film(String numVisa, String titreFilm, String idGenre, int anneeSortie, String idAffiche) {
        this.numVisa = numVisa;
        this.titreFilm = titreFilm;
        this.idGenre = idGenre;
        this.anneeSortie = anneeSortie;
        this.idAffiche = idAffiche;
    }

    public String getNumVisa() {
        return numVisa;
    }

    public void setNumVisa(String numVisa) {
        this.numVisa = numVisa;
    }

    public String getTitreFilm() {
        return titreFilm;
    }

    public void setTitreFilm(String titreFilm) {
        this.titreFilm = titreFilm;
    }

    public String getIdGenre() {
        return idGenre;
    }

    public void setIdGenre(String idGenre) {
        this.idGenre = idGenre;
    }

    public int getAnneeSortie() {
        return anneeSortie;
    }

    public void setAnneeSortie(int anneeSortie) {
        this.anneeSortie = anneeSortie;
    }

    public String getIdAffiche() {
        return idAffiche;
    }

    public void setIdAffiche(String idAffiche) {
        this.idAffiche = idAffiche;
    }
    
    
    
    
    
}
