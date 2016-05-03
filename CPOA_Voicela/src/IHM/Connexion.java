/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package IHM;

import java.awt.Frame;
import java.net.PasswordAuthentication;

/**
 *
 * @author Guillaume
 */
public class Connexion extends javax.swing.JDialog {

    /**
     * Creates new form Connexion
     */
    public Connexion(Frame parent) {
        super(parent, true);
        initComponents();
    }
    
    public PasswordAuthentication identifier(){
        setVisible(true);
        return new PasswordAuthentication(txUser.getText(), txPass.getPassword());
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        lbUser = new javax.swing.JLabel();
        lbPass = new javax.swing.JLabel();
        txUser = new javax.swing.JTextField();
        btConnexion = new javax.swing.JButton();
        btReset = new javax.swing.JButton();
        txPass = new javax.swing.JPasswordField();

        setDefaultCloseOperation(javax.swing.WindowConstants.DISPOSE_ON_CLOSE);
        setTitle("Connexion au serveur VoiceLa");
        setBackground(new java.awt.Color(204, 0, 0));
        setForeground(new java.awt.Color(204, 0, 0));
        setResizable(false);
        setType(java.awt.Window.Type.UTILITY);

        lbUser.setText("Nom d'utilisateur :");

        lbPass.setText("Mot de passe :");

        txUser.setText("p1422528");

        btConnexion.setText("Connexion");
        btConnexion.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btConnexionActionPerformed(evt);
            }
        });

        btReset.setText("Reset");
        btReset.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btResetActionPerformed(evt);
            }
        });

        txPass.setText("234358");

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(35, 35, 35)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(btConnexion)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 92, Short.MAX_VALUE)
                        .addComponent(btReset))
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                            .addComponent(lbUser)
                            .addComponent(lbPass))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                            .addComponent(txUser, javax.swing.GroupLayout.DEFAULT_SIZE, 146, Short.MAX_VALUE)
                            .addComponent(txPass))))
                .addContainerGap(49, Short.MAX_VALUE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(34, 34, 34)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(lbUser)
                    .addComponent(txUser, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(29, 29, 29)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(lbPass)
                    .addComponent(txPass, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 34, Short.MAX_VALUE)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(btConnexion)
                    .addComponent(btReset))
                .addGap(20, 20, 20))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void btConnexionActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btConnexionActionPerformed
        this.dispose();        // TODO add your handling code here:
    }//GEN-LAST:event_btConnexionActionPerformed

    private void btResetActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btResetActionPerformed
        txUser.setText("");
        txPass.setText("");
        
    }//GEN-LAST:event_btResetActionPerformed

    /**
     * @param args the command line arguments
     */

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btConnexion;
    private javax.swing.JButton btReset;
    private javax.swing.JLabel lbPass;
    private javax.swing.JLabel lbUser;
    private javax.swing.JPasswordField txPass;
    private javax.swing.JTextField txUser;
    // End of variables declaration//GEN-END:variables
}
