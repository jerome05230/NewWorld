#include "mainwindowcontroleur.h"
#include "ui_mainwindowcontroleur.h"

MainWindowControleur::MainWindowControleur(QString idUtilisateur, QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::MainWindowControleur)
{
    idControleur=idUtilisateur;
    ui->setupUi(this);
}

MainWindowControleur::~MainWindowControleur()
{
    delete ui;
}
void MainWindowControleur::on_actionQuit_triggered()
{
    QMessageBox msgBox;
    msgBox.setInformativeText("Voulez-vous vraiment quitter");
    msgBox.setStandardButtons(QMessageBox::Yes | QMessageBox::No);
    msgBox.setDefaultButton(QMessageBox::No);
    int ret = msgBox.exec();

    if (ret==QMessageBox::Yes)
    close();
}




