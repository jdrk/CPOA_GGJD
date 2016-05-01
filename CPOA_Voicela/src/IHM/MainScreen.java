/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package IHM;

import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.UIManager;
import javax.swing.UnsupportedLookAndFeelException;

/**
 *
 * @author Guillaume
 */
public class MainScreen extends javax.swing.JFrame {

    /**
     * Creates new form Tabulado
     */
    public MainScreen() {
        initComponents();
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jSeparator1 = new javax.swing.JSeparator();
        eventTab = new javax.swing.JTabbedPane();
        jPanel1 = new javax.swing.JPanel();
        numVip = new javax.swing.JLabel();
        nomVip = new javax.swing.JLabel();
        prenomVip = new javax.swing.JLabel();
        numViptxt = new javax.swing.JTextField();
        nomViptxt = new javax.swing.JTextField();
        prenomViptxt = new javax.swing.JTextField();
        civiliteVip = new javax.swing.JLabel();
        civiliteVipbox = new javax.swing.JComboBox<>();
        naissanceVip = new javax.swing.JLabel();
        naissaneViptxt = new javax.swing.JTextField();
        datenaissanceVip = new javax.swing.JFormattedTextField();
        roleVip = new javax.swing.JLabel();
        roleVipbox = new javax.swing.JComboBox<>();
        nationaliteVip = new javax.swing.JLabel();
        nationaliteVipbox = new javax.swing.JComboBox<>();
        statutVip = new javax.swing.JLabel();
        statutVipbox = new javax.swing.JComboBox<>();
        addBtn = new javax.swing.JButton();
        resetBtn = new javax.swing.JButton();
        baseIndicTxt = new javax.swing.JLabel();
        baseNameTxt = new javax.swing.JLabel();
        jPanel2 = new javax.swing.JPanel();
        jPanel3 = new javax.swing.JPanel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("VoiceLa Administration Tool");

        numVip.setText("Numéro");

        nomVip.setText("Nom");

        prenomVip.setText("Prénom");

        numViptxt.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                numViptxtActionPerformed(evt);
            }
        });

        nomViptxt.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                nomViptxtActionPerformed(evt);
            }
        });

        civiliteVip.setText("Civilité");

        civiliteVipbox.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "Item 1", "Item 2", "Item 3", "Item 4" }));
        civiliteVipbox.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                civiliteVipboxActionPerformed(evt);
            }
        });

        naissanceVip.setText("Naissance");

        datenaissanceVip.setText("   /    /     ");

        roleVip.setText("Rôle");

        roleVipbox.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "Item 1", "Item 2", "Item 3", "Item 4" }));
        roleVipbox.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                roleVipboxActionPerformed(evt);
            }
        });

        nationaliteVip.setText("Nationalité");

        nationaliteVipbox.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "Item 1", "Item 2", "Item 3", "Item 4" }));
        nationaliteVipbox.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                nationaliteVipboxActionPerformed(evt);
            }
        });

        statutVip.setText("Statut ");

        statutVipbox.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "Item 1", "Item 2", "Item 3", "Item 4" }));
        statutVipbox.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                statutVipboxActionPerformed(evt);
            }
        });

        addBtn.setText("AJOUTER ");
        addBtn.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                addBtnActionPerformed(evt);
            }
        });

        resetBtn.setText("RESET");
        resetBtn.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                resetBtnActionPerformed(evt);
            }
        });

        baseIndicTxt.setText("Nom de la base : ");

        baseNameTxt.setText("pX");

        javax.swing.GroupLayout jPanel1Layout = new javax.swing.GroupLayout(jPanel1);
        jPanel1.setLayout(jPanel1Layout);
        jPanel1Layout.setHorizontalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                            .addGroup(jPanel1Layout.createSequentialGroup()
                                .addComponent(addBtn, javax.swing.GroupLayout.PREFERRED_SIZE, 90, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 69, Short.MAX_VALUE)
                                .addComponent(resetBtn, javax.swing.GroupLayout.PREFERRED_SIZE, 84, javax.swing.GroupLayout.PREFERRED_SIZE))
                            .addGroup(jPanel1Layout.createSequentialGroup()
                                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addComponent(numVip)
                                    .addComponent(prenomVip)
                                    .addComponent(civiliteVip)
                                    .addComponent(naissanceVip)
                                    .addComponent(roleVip)
                                    .addComponent(nationaliteVip)
                                    .addComponent(statutVip)
                                    .addComponent(nomVip))
                                .addGap(73, 73, 73)
                                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addComponent(statutVipbox, 0, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                                    .addComponent(nationaliteVipbox, 0, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                                    .addComponent(roleVipbox, 0, 119, Short.MAX_VALUE)
                                    .addGroup(jPanel1Layout.createSequentialGroup()
                                        .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                                            .addComponent(datenaissanceVip)
                                            .addComponent(naissaneViptxt)
                                            .addComponent(prenomViptxt, javax.swing.GroupLayout.Alignment.TRAILING)
                                            .addComponent(civiliteVipbox, javax.swing.GroupLayout.Alignment.TRAILING, 0, 119, Short.MAX_VALUE)
                                            .addComponent(nomViptxt)
                                            .addComponent(numViptxt))
                                        .addGap(0, 0, Short.MAX_VALUE)))))
                        .addGap(395, 395, 395))
                    .addGroup(jPanel1Layout.createSequentialGroup()
                        .addComponent(baseIndicTxt)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(baseNameTxt)
                        .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))))
        );
        jPanel1Layout.setVerticalGroup(
            jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel1Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(baseIndicTxt)
                    .addComponent(baseNameTxt))
                .addGap(26, 26, 26)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(numVip)
                    .addComponent(numViptxt, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(nomVip)
                    .addComponent(nomViptxt, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(prenomViptxt, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(prenomVip))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(civiliteVipbox, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(civiliteVip))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(naissaneViptxt, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(naissanceVip))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(datenaissanceVip, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(roleVip)
                    .addComponent(roleVipbox, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(nationaliteVip)
                    .addComponent(nationaliteVipbox, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(18, 18, 18)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(statutVip)
                    .addComponent(statutVipbox, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(34, 34, 34)
                .addGroup(jPanel1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(addBtn)
                    .addComponent(resetBtn))
                .addContainerGap(95, Short.MAX_VALUE))
        );

        eventTab.addTab("Gestion des listes", jPanel1);

        javax.swing.GroupLayout jPanel2Layout = new javax.swing.GroupLayout(jPanel2);
        jPanel2.setLayout(jPanel2Layout);
        jPanel2Layout.setHorizontalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 648, Short.MAX_VALUE)
        );
        jPanel2Layout.setVerticalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 453, Short.MAX_VALUE)
        );

        eventTab.addTab("Gestion des photos", jPanel2);

        javax.swing.GroupLayout jPanel3Layout = new javax.swing.GroupLayout(jPanel3);
        jPanel3.setLayout(jPanel3Layout);
        jPanel3Layout.setHorizontalGroup(
            jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 648, Short.MAX_VALUE)
        );
        jPanel3Layout.setVerticalGroup(
            jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 453, Short.MAX_VALUE)
        );

        eventTab.addTab("Evènements", jPanel3);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addGap(0, 2, Short.MAX_VALUE)
                .addComponent(eventTab, javax.swing.GroupLayout.PREFERRED_SIZE, 653, javax.swing.GroupLayout.PREFERRED_SIZE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(eventTab, javax.swing.GroupLayout.Alignment.TRAILING)
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void numViptxtActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_numViptxtActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_numViptxtActionPerformed

    private void nomViptxtActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_nomViptxtActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_nomViptxtActionPerformed

    private void civiliteVipboxActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_civiliteVipboxActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_civiliteVipboxActionPerformed

    private void roleVipboxActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_roleVipboxActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_roleVipboxActionPerformed

    private void nationaliteVipboxActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_nationaliteVipboxActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_nationaliteVipboxActionPerformed

    private void statutVipboxActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_statutVipboxActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_statutVipboxActionPerformed

    private void addBtnActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_addBtnActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_addBtnActionPerformed

    private void resetBtnActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_resetBtnActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_resetBtnActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {

        try {
            UIManager.setLookAndFeel("com.sun.java.swing.plaf.windows.WindowsLookAndFeel");
        } catch (ClassNotFoundException ex) {
            Logger.getLogger(MainScreen.class.getName()).log(Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            Logger.getLogger(MainScreen.class.getName()).log(Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            Logger.getLogger(MainScreen.class.getName()).log(Level.SEVERE, null, ex);
        } catch (UnsupportedLookAndFeelException ex) {
            Logger.getLogger(MainScreen.class.getName()).log(Level.SEVERE, null, ex);
        }

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new MainScreen().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton addBtn;
    private javax.swing.JLabel baseIndicTxt;
    private javax.swing.JLabel baseNameTxt;
    private javax.swing.JLabel civiliteVip;
    private javax.swing.JComboBox<String> civiliteVipbox;
    private javax.swing.JFormattedTextField datenaissanceVip;
    private javax.swing.JTabbedPane eventTab;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JPanel jPanel2;
    private javax.swing.JPanel jPanel3;
    private javax.swing.JSeparator jSeparator1;
    private javax.swing.JLabel naissanceVip;
    private javax.swing.JTextField naissaneViptxt;
    private javax.swing.JLabel nationaliteVip;
    private javax.swing.JComboBox<String> nationaliteVipbox;
    private javax.swing.JLabel nomVip;
    private javax.swing.JTextField nomViptxt;
    private javax.swing.JLabel numVip;
    private javax.swing.JTextField numViptxt;
    private javax.swing.JLabel prenomVip;
    private javax.swing.JTextField prenomViptxt;
    private javax.swing.JButton resetBtn;
    private javax.swing.JLabel roleVip;
    private javax.swing.JComboBox<String> roleVipbox;
    private javax.swing.JLabel statutVip;
    private javax.swing.JComboBox<String> statutVipbox;
    // End of variables declaration//GEN-END:variables
}