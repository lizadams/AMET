package ametjavagui;

import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author mmorto01
 */
public class WelcomeScreen extends javax.swing.JFrame {

    /**
     * Creates new form WelcomeScreen
     */
    public WelcomeScreen() {
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

        Header = new javax.swing.JLabel();
        Footer = new javax.swing.JLabel();
        WelcomePanel = new javax.swing.JPanel();
        WelcomeLabel = new javax.swing.JLabel();
        WelcomeInfoLabel = new javax.swing.JLabel();
        ButtonsPanel = new javax.swing.JPanel();
        AirQualityButton = new javax.swing.JButton();
        MeteorologyButton = new javax.swing.JButton();
        Left = new javax.swing.JPanel();
        Hyperlink = new javax.swing.JLabel();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("Welcome to AMET");
        setBackground(new java.awt.Color(255, 255, 255));
        setResizable(false);

        Header.setIcon(new javax.swing.ImageIcon(getClass().getResource("/Pictures/top_2022.png"))); // NOI18N

        Footer.setIcon(new javax.swing.ImageIcon(getClass().getResource("/Pictures/bottom_2022.png"))); // NOI18N

        WelcomePanel.setBackground(new java.awt.Color(255, 255, 255));
        WelcomePanel.setForeground(new java.awt.Color(255, 255, 255));

        WelcomeLabel.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        WelcomeLabel.setText("Welcome to AMET");
        WelcomeLabel.setBackground(new java.awt.Color(255, 255, 255));
        WelcomeLabel.setFont(new java.awt.Font("Serif", 1, 40)); // NOI18N
        WelcomeLabel.setForeground(new java.awt.Color(0, 112, 185));
        WelcomeLabel.setHorizontalTextPosition(javax.swing.SwingConstants.CENTER);

        WelcomeInfoLabel.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        WelcomeInfoLabel.setText("Select Evaluation Mode");
        WelcomeInfoLabel.setBackground(new java.awt.Color(255, 255, 255));
        WelcomeInfoLabel.setFont(new java.awt.Font("Serif", 1, 28)); // NOI18N
        WelcomeInfoLabel.setForeground(new java.awt.Color(38, 161, 70));
        WelcomeInfoLabel.setHorizontalTextPosition(javax.swing.SwingConstants.CENTER);

        ButtonsPanel.setBackground(new java.awt.Color(255, 255, 255));
        ButtonsPanel.setForeground(new java.awt.Color(255, 255, 255));

        AirQualityButton.setText("Air Quality");
        AirQualityButton.setBackground(new java.awt.Color(191, 182, 172));
        AirQualityButton.setFont(new java.awt.Font("Serif", 1, 28)); // NOI18N
        AirQualityButton.setForeground(new java.awt.Color(0, 63, 105));
        AirQualityButton.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                AirQualityButtonActionPerformed(evt);
            }
        });

        MeteorologyButton.setText("Meteorology");
        MeteorologyButton.setBackground(new java.awt.Color(191, 182, 172));
        MeteorologyButton.setFont(new java.awt.Font("Serif", 1, 28)); // NOI18N
        MeteorologyButton.setForeground(new java.awt.Color(0, 63, 105));
        MeteorologyButton.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                MeteorologyButtonActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout ButtonsPanelLayout = new javax.swing.GroupLayout(ButtonsPanel);
        ButtonsPanel.setLayout(ButtonsPanelLayout);
        ButtonsPanelLayout.setHorizontalGroup(
            ButtonsPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(ButtonsPanelLayout.createSequentialGroup()
                .addContainerGap()
                .addGroup(ButtonsPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(ButtonsPanelLayout.createSequentialGroup()
                        .addComponent(MeteorologyButton)
                        .addGap(0, 0, Short.MAX_VALUE))
                    .addComponent(AirQualityButton, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                .addContainerGap())
        );
        ButtonsPanelLayout.setVerticalGroup(
            ButtonsPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, ButtonsPanelLayout.createSequentialGroup()
                .addGap(20, 20, 20)
                .addComponent(AirQualityButton)
                .addGap(40, 40, 40)
                .addComponent(MeteorologyButton)
                .addGap(20, 20, 20))
        );

        Left.setBackground(new java.awt.Color(174, 211, 232));
        Left.setPreferredSize(new java.awt.Dimension(24, 348));

        javax.swing.GroupLayout LeftLayout = new javax.swing.GroupLayout(Left);
        Left.setLayout(LeftLayout);
        LeftLayout.setHorizontalGroup(
            LeftLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 24, Short.MAX_VALUE)
        );
        LeftLayout.setVerticalGroup(
            LeftLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 373, Short.MAX_VALUE)
        );

        Hyperlink.setBackground(new java.awt.Color(255, 255, 255));
        Hyperlink.setFont(new java.awt.Font("Serif", 1, 18)); // NOI18N
        Hyperlink.setForeground(new java.awt.Color(0, 112, 185));
        Hyperlink.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        Hyperlink.setText("AMET User Guide");
        Hyperlink.setCursor(new java.awt.Cursor(java.awt.Cursor.HAND_CURSOR));
        Hyperlink.setHorizontalTextPosition(javax.swing.SwingConstants.CENTER);
        Hyperlink.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                HyperlinkMouseClicked(evt);
            }
            public void mouseEntered(java.awt.event.MouseEvent evt) {
                HyperlinkMouseEntered(evt);
            }
            public void mouseExited(java.awt.event.MouseEvent evt) {
                HyperlinkMouseExited(evt);
            }
        });

        javax.swing.GroupLayout WelcomePanelLayout = new javax.swing.GroupLayout(WelcomePanel);
        WelcomePanel.setLayout(WelcomePanelLayout);
        WelcomePanelLayout.setHorizontalGroup(
            WelcomePanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(WelcomePanelLayout.createSequentialGroup()
                .addComponent(Left, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(282, 282, 282)
                .addGroup(WelcomePanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.CENTER)
                    .addComponent(WelcomeLabel)
                    .addComponent(WelcomeInfoLabel)
                    .addComponent(ButtonsPanel, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(Hyperlink))
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );
        WelcomePanelLayout.setVerticalGroup(
            WelcomePanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(WelcomePanelLayout.createSequentialGroup()
                .addGroup(WelcomePanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(WelcomePanelLayout.createSequentialGroup()
                        .addGap(19, 19, 19)
                        .addComponent(WelcomeLabel)
                        .addGap(18, 18, 18)
                        .addComponent(WelcomeInfoLabel)
                        .addGap(18, 18, 18)
                        .addComponent(ButtonsPanel, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(18, 18, 18)
                        .addComponent(Hyperlink))
                    .addGroup(WelcomePanelLayout.createSequentialGroup()
                        .addGap(0, 0, 0)
                        .addComponent(Left, javax.swing.GroupLayout.PREFERRED_SIZE, 373, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addGap(0, 0, Short.MAX_VALUE))
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addComponent(Header, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(Footer, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(WelcomePanel, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                .addGap(0, 0, Short.MAX_VALUE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addComponent(Header)
                .addGap(0, 0, 0)
                .addComponent(WelcomePanel, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(0, 0, 0)
                .addComponent(Footer))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void AirQualityButtonActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_AirQualityButtonActionPerformed
        new AirQualityForm().setVisible(true);
        setVisible(false);
        dispose();
    }//GEN-LAST:event_AirQualityButtonActionPerformed

    private void MeteorologyButtonActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_MeteorologyButtonActionPerformed
        new MeteorologyForm().setVisible(true);
        setVisible(false);
        dispose();
    }//GEN-LAST:event_MeteorologyButtonActionPerformed

    private void HyperlinkMouseEntered(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_HyperlinkMouseEntered
        // TODO add your handling code here:
        Hyperlink.setText("<html><a href=''>" + "AMET Users Guide" + "</a></html>");
    }//GEN-LAST:event_HyperlinkMouseEntered

    private void HyperlinkMouseExited(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_HyperlinkMouseExited
        // TODO add your handling code here:
        Hyperlink.setText("AMET Users Guide");
    }//GEN-LAST:event_HyperlinkMouseExited

    private void HyperlinkMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_HyperlinkMouseClicked
        try {
            // TODO add your handling code here:
            
            if (Runtime.getRuntime().exec(new String[] { "which", "xdg-open" }).getInputStream().read() != -1) {
                Runtime.getRuntime().exec(new String[] { "xdg-open", "https://github.com/USEPA/AMET/blob/master/docs/AMET_Users_Guide_v14.md" });
            }       
        } 
        catch (IOException ex) {
            Logger.getLogger(WelcomeScreen.class.getName()).log(Level.SEVERE, null, ex);
        }

    }//GEN-LAST:event_HyperlinkMouseClicked

    /**
     * @param args the command line arguments
     */
   

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton AirQualityButton;
    private javax.swing.JPanel ButtonsPanel;
    private javax.swing.JLabel Footer;
    private javax.swing.JLabel Header;
    private javax.swing.JLabel Hyperlink;
    private javax.swing.JPanel Left;
    private javax.swing.JButton MeteorologyButton;
    private javax.swing.JLabel WelcomeInfoLabel;
    private javax.swing.JLabel WelcomeLabel;
    private javax.swing.JPanel WelcomePanel;
    // End of variables declaration//GEN-END:variables

    void run() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
}
