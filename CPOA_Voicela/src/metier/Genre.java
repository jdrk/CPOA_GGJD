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
public class Genre {
    
    private String idGenre;
    private String libbeleGenre;

    public Genre(String idGenre, String libbeleGenre) {
        this.idGenre = idGenre;
        this.libbeleGenre = libbeleGenre;
    }
    
    public Genre(){
    }

    public String getIdGenre() {
        return idGenre;
    }

    public void setIdGenre(String idGenre) {
        this.idGenre = idGenre;
    }

    public String getLibbeleGenre() {
        return libbeleGenre;
    }

    public void setLibbeleGenre(String libbeleGenre) {
        this.libbeleGenre = libbeleGenre;
    }

    @Override
    public String toString() {
        return "Genre{" + "idGenre=" + idGenre + ", libbeleGenre=" + libbeleGenre + '}';
    }
    
    
}
