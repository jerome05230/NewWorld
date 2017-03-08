#include "mainwindowgestionnaire.h"
#include "ui_mainwindowgestionnaire.h"

MainWindowGestionnaire::MainWindowGestionnaire(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::MainWindowGestionnaire)
{
    ui->setupUi(this);
}

MainWindowGestionnaire::~MainWindowGestionnaire()
{
    delete ui;
}

void MainWindowGestionnaire::on_actionQUit_triggered()
{
    QMessageBox msgBox;
    msgBox.setInformativeText("Voulez-vous vraiment quitter");
    msgBox.setStandardButtons(QMessageBox::Yes | QMessageBox::No);
    msgBox.setDefaultButton(QMessageBox::No);
    int ret = msgBox.exec();

    if (ret==QMessageBox::Yes)
    close();
}

//personnel
void MainWindowGestionnaire::on_pushButtonValider_clicked()
{
    QString nom= ui->lineEditNom->text();
    QString prenom= ui->lineEditPrenom->text();
    if(ui->radioButtonFemelle->isChecked())
     {
         QString sexe= "F";
     }
     else
     {
         QString sexe= "M";
     }
    QString region= ui->comboBoxRegion->currentText();
    QString departement= ui->comboBoxDepartement->currentText();
    QString cp= ui->lineEditCP->text();
    QString ville= ui->lineEditVille->text();
    QString adresse= ui->lineEditAdresse->text();
    QString mail= ui->lineEditMail->text();
    if(ui->radioButtonGestionnaire->isChecked())
     {
         QString nom= "gestionnaire";
     }
     else
     {
         QString nom= "contrôleur";
     }
    QString tel= ui->lineEditTel->text();
    QString dn= ui->lineEditDN->text();
    QString login =ui->lineEditLogin->text();
}
