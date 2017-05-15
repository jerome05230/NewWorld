#include "dialogajouteremploye.h"
#include "ui_dialogajouteremploye.h"
#include <QRadioButton>

DialogAjouterEmploye::DialogAjouterEmploye(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::DialogAjouterEmploye)
{
    ui->setupUi(this);
}
DialogAjouterEmploye::~DialogAjouterEmploye()
{
    delete ui;
}
QString DialogAjouterEmploye::getNomEmploye()
{
    return ui->lineEditNom->text();
}

QString DialogAjouterEmploye::getPrenomEmploye()
{
    return ui->lineEditPrenom->text();
}
QString DialogAjouterEmploye::getSexeEmploye()
{
    return ui->radioButtonFemelle->text();
}

QString DialogAjouterEmploye::getVilleEmploye()
{
    return ui->lineEditVille->text();
}

QString DialogAjouterEmploye::getCPEmploye()
{
    return ui->lineEditCP->text();
}

QString DialogAjouterEmploye::getTelEmploye()
{
    return ui->lineEditTel->text();
}

QString DialogAjouterEmploye::getDateEmploye()
{
    return ui->lineEditDN->text();
}


QString DialogAjouterEmploye::getTypeEmploye()
{
    if(ui->radioButtonGestionnaire->isChecked())
    {
        return "gestionnaire";
    }
    else
        return "contrôleur";

}


QString DialogAjouterEmploye::getLoginEmploye()
{
    return ui->lineEditLoginEmploye->text();
}
