#include "mainwindowgestionnaire.h"
#include "ui_mainwindowgestionnaire.h"
#include <QSqlQuery>
#include <QSqlRecord>
#include <QSqlError>
#include <QDebug>
#include <QTime>

MainWindowGestionnaire::MainWindowGestionnaire(QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::MainWindowGestionnaire)
{
    ui->setupUi(this);
    chargerEmployees();
    //actDesactBoutonsAjouterEmploye
    connect(ui->lineEditAdresse,SIGNAL(textEdited(QString)),this, SLOT(actDesactBoutonsAjouterEmploye()));
    connect(ui->lineEditCP,SIGNAL(textEdited(QString)),this, SLOT(actDesactBoutonsAjouterEmploye()));
    connect(ui->lineEditLogin,SIGNAL(textEdited(QString)),this, SLOT(actDesactBoutonsAjouterEmploye()));
    connect(ui->lineEditMail,SIGNAL(textEdited(QString)),this, SLOT(actDesactBoutonsAjouterEmploye()));
    connect(ui->lineEditNom, SIGNAL(textEdited(QString)),this, SLOT(actDesactBoutonsAjouterEmploye()));
    connect(ui->lineEditPrenom, SIGNAL(textEdited(QString)),this, SLOT(actDesactBoutonsAjouterEmploye()));
    connect(ui->lineEditTel, SIGNAL(textEdited(QString)),this, SLOT(actDesactBoutonsAjouterEmploye()));
    connect(ui->lineEditTelPort, SIGNAL(textEdited(QString)),this, SLOT(actDesactBoutonsAjouterEmploye()));
    connect(ui->lineEditVille,SIGNAL(textEdited(QString)),this, SLOT(actDesactBoutonsAjouterEmploye()));
    //actDesactBoutonsUpdateEmploye
    connect(ui->lineEditAdresse,SIGNAL(textChanged(QString)),this, SLOT(actDesactBoutonsUpdateEmploye()));
    connect(ui->lineEditCP,SIGNAL(textChanged(QString)),this, SLOT(actDesactBoutonsUpdateEmploye()));
    connect(ui->lineEditLogin,SIGNAL(textChanged(QString)),this, SLOT(actDesactBoutonsUpdateEmploye()));
    connect(ui->lineEditMail,SIGNAL(textChanged(QString)),this, SLOT(actDesactBoutonsUpdateEmploye()));
    connect(ui->lineEditNom, SIGNAL(textChanged(QString)),this, SLOT(actDesactBoutonsUpdateEmploye()));
    connect(ui->lineEditPrenom, SIGNAL(textChanged(QString)),this, SLOT(actDesactBoutonsUpdateEmploye()));
    connect(ui->lineEditTel, SIGNAL(textChanged(QString)),this, SLOT(actDesactBoutonsUpdateEmploye()));
    connect(ui->lineEditTelPort, SIGNAL(textChanged(QString)),this, SLOT(actDesactBoutonsUpdateEmploye()));
    connect(ui->lineEditVille,SIGNAL(textChanged(QString)),this, SLOT(actDesactBoutonsUpdateEmploye()));
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

    QSqlQuery reqIdMax("select ifnull(max(id),0)+1 from utilisateurs");
    QString idMax = reqIdMax.value(0).toString();
    QString nom= ui->lineEditNom->text();
    QString prenom= ui->lineEditPrenom->text();
    QString cp= ui->lineEditCP->text();
    QString ville= ui->lineEditVille->text();
    QString adresse= ui->lineEditAdresse->text();
    QString mail= ui->lineEditMail->text();
    if(ui->radioButtonGestionnaire->isChecked())
    {
        QString type= "gestionnaire";
    }
    else
    {
        QString type= "contrôleur";
    }
    QString tel= ui->lineEditTel->text();
    QString dn= ui->lineEditDN->text();
    QString login =ui->lineEditLogin->text();
    QString sqlUtilisateur="insert into utilisateurs (nom,prenom,cp,ville_id,adresse,mail) values ('";
    sqlUtilisateur+=nom+"','";
    sqlUtilisateur+=prenom+"','";
    sqlUtilisateur+=cp+"','";
    sqlUtilisateur+=ville+"','";
    sqlUtilisateur+=adresse+"','";
    sqlUtilisateur+=mail+"')";
    qDebug() << sqlUtilisateur << endl;
    QSqlQuery reqEmploye(sqlUtilisateur);
}



void MainWindowGestionnaire::on_pushButtonSupprimer_clicked()
{
    qDebug() << "void MainWindowGestionnaire::on_pushButtonSupprimer_clicked()" << endl;
    QString pEmploye = ui->tableWidgetEmployees->currentItem()->data(32).toString();
    QString txtReqInfo ="select nom, prenom from utilisateurs where id="+pEmploye;
    QSqlQuery reqInfo(txtReqInfo);
    reqInfo.first();
    QSqlRecord recInfo=reqInfo.record();
    QString info=recInfo.value("nom").toString()+" "+recInfo.value("prenom").toString();
    int reponse = QMessageBox::question(this, "Interrogatoire", "are you sure that you want to fire "+info+"?", QMessageBox ::Yes | QMessageBox::No);
    if (reponse == QMessageBox::Yes)
    {
        QMessageBox::critical(this, "Interrogatoire", "user "+info+" have been Fire!");
        QSqlQuery reqEmploye("update utilisateurs set verifiacation=F where ide="+pEmploye+" ;");
        ui->tableWidgetEmployees->removeRow(ui->tableWidgetEmployees->currentRow());
    }
    else if (reponse == QMessageBox::No)
    {
        QMessageBox::information(this, "Interrogatoire", "user "+info+" hasn't been fire yet!");
    }
}
void MainWindowGestionnaire::chargerEmployees(){
    QSqlQuery reqEmploye("select id,nom,prenom,sexe,cp,ville_id,adresse,type,mail,telephone_fixe,telephone_portable,login from utilisateurs order by nom,prenom asc;");
    QSqlRecord recEmploye=reqEmploye.record();
    if (!recEmploye.isEmpty())
    {
        int id = recEmploye.indexOf("id");
        QStringList listCol;
        int nbLigne=reqEmploye.size();
        int nbCol=recEmploye.count();
        for(int col=-1; col<= nbCol; col++)
        {
            QString nomCol=recEmploye.fieldName(col);
            listCol.push_back(nomCol);
        }
        ui->tableWidgetEmployees->setRowCount(0);
        ui->tableWidgetEmployees->setRowCount(nbLigne);
        ui->tableWidgetEmployees->setColumnCount(nbCol);
        ui->tableWidgetEmployees->setHorizontalHeaderLabels(listCol);
        int cptL=0;
        while (reqEmploye.next())
        {
            int lId = reqEmploye.value(id).toInt();
            qDebug() << "id" << lId << endl ;
            int cptC=0;
            while(cptC < nbCol)
            {
                QString Employees=reqEmploye.value(cptC).toString();
                QTableWidgetItem *itemEmployees=new QTableWidgetItem(Employees);
                itemEmployees->setData(Qt::UserRole, lId);
                ui->tableWidgetEmployees->setItem(cptL,cptC,itemEmployees);
                itemEmployees->setData(32,lId);
                cptC++;
            }
            cptL++;
        }
    }
    else
    {
        ui->tableWidgetEmployees->clear();
        ui->tableWidgetEmployees->setRowCount(0);
        ui->tableWidgetEmployees->setColumnCount(0);
    }
}

void MainWindowGestionnaire::on_tableWidgetEmployees_activated()
{
}

void MainWindowGestionnaire::on_pushButtonMaj_clicked()
{
}

void MainWindowGestionnaire::on_tableWidgetEmployees_clicked()
{
    qDebug() << "void MainWindowGestionnaire::on_tableWidgetEmployees_activated()" ;
    QString id =ui->tableWidgetEmployees->currentItem()->data(Qt::UserRole).toString();
    QSqlQuery reqEmploye("select nom,prenom,cp,ville_id,adresse,type,mail,telephone_fixe,telephone_portable,login from utilisateurs where id="+id+";");
    QSqlRecord recEmploye=reqEmploye.record();
    int nom = recEmploye.indexOf("nom");
    int prenom= recEmploye.indexOf("prenom");
    int cp = recEmploye.indexOf("cp");
    int ville_id = recEmploye.indexOf("ville_id");
    int adresse = recEmploye.indexOf("adresse");
    int type = recEmploye.indexOf("type");
    int mail = recEmploye.indexOf("mail");
    int telephone_fixe = recEmploye.indexOf("telephone_fixe");
    int telephone_portable = recEmploye.indexOf("telephone_portable");
    int login = recEmploye.indexOf("login");

    while (reqEmploye.next()) {
        QStringList listCol;
        //int nbLigne=reqEmploye.size()-1;
        int nbCol=recEmploye.count();
        for(int col=0; col<= nbCol; col++)
        {
            QString nomCol=recEmploye.fieldName(col);
            listCol.push_back(nomCol);
        }
        ui->pushButtonSupprimer->setEnabled(true);
        ui->lineEditAdresse->setText(reqEmploye.value(adresse).toString());
        ui->lineEditCP->setText(reqEmploye.value(cp).toString());
        ui->lineEditLogin->setText(reqEmploye.value(login).toString());
        ui->lineEditMail->setText(reqEmploye.value(mail).toString());
        ui->lineEditNom->setText(reqEmploye.value(nom).toString());
        ui->lineEditPrenom->setText(reqEmploye.value(prenom).toString());
        ui->lineEditTel->setText(reqEmploye.value(telephone_fixe).toString());
        ui->lineEditTelPort->setText(reqEmploye.value(telephone_portable).toString());
        ui->lineEditVille->setText(reqEmploye.value(ville_id).toString());
        if(reqEmploye.value(type).toString() == "G")
        {
            ui->radioButtonGestionnaire->setChecked(true);
        }
        else
        {
            ui->radioButtonControleur->setChecked(true);
        }
    }
}
void MainWindowGestionnaire::actDesactBoutonsAjouterEmploye()
{
    qDebug()<<"void MainWindow::actDesactBoutonsAjouterEmploye()";
    bool activerAjoutEmploye=true;
    activerAjoutEmploye=activerAjoutEmploye&& !ui->lineEditAdresse->text().isEmpty();
    activerAjoutEmploye=activerAjoutEmploye&& !ui->lineEditCP->text().isEmpty();
    activerAjoutEmploye=activerAjoutEmploye&& !ui->lineEditLogin->text().isEmpty();
    activerAjoutEmploye=activerAjoutEmploye&& !ui->lineEditMail->text().isEmpty();
    activerAjoutEmploye=activerAjoutEmploye&& !ui->lineEditNom->text().isEmpty();
    activerAjoutEmploye=activerAjoutEmploye&& !ui->lineEditPrenom->text().isEmpty();
    activerAjoutEmploye=activerAjoutEmploye&& !ui->lineEditTel->text().isEmpty();
    activerAjoutEmploye=activerAjoutEmploye&& !ui->lineEditTelPort->text().isEmpty();
    activerAjoutEmploye=activerAjoutEmploye&& !ui->lineEditVille->text().isEmpty();
    qDebug()<<"bool" << activerAjoutEmploye;
    ui->pushButtonValider->setEnabled(activerAjoutEmploye);
}

void MainWindowGestionnaire::actDesactBoutonsUpdateEmploye()
{
    qDebug()<<"void MainWindow::actDesactBoutonsUpdateEmploye()";
    bool activerUpdateEmploye=true;
    activerUpdateEmploye=activerUpdateEmploye&& !ui->lineEditAdresse->text().isEmpty();
    activerUpdateEmploye=activerUpdateEmploye&& !ui->lineEditCP->text().isEmpty();
    activerUpdateEmploye=activerUpdateEmploye&& !ui->lineEditLogin->text().isEmpty();
    activerUpdateEmploye=activerUpdateEmploye&& !ui->lineEditMail->text().isEmpty();
    activerUpdateEmploye=activerUpdateEmploye&& !ui->lineEditNom->text().isEmpty();
    activerUpdateEmploye=activerUpdateEmploye&& !ui->lineEditPrenom->text().isEmpty();
    activerUpdateEmploye=activerUpdateEmploye&& !ui->lineEditTel->text().isEmpty();
    activerUpdateEmploye=activerUpdateEmploye&& !ui->lineEditTelPort->text().isEmpty();
    activerUpdateEmploye=activerUpdateEmploye&& !ui->lineEditVille->text().isEmpty();
    qDebug()<<"bool" << activerUpdateEmploye;
    ui->pushButtonMaj->setEnabled(activerUpdateEmploye);
}

void MainWindowGestionnaire::on_pushButton_clicked()
{
    QString mdp=GetRandomString();
    qDebug() << "void MainWindowGestionnaire::on_pushButtonSupprimer_clicked()" << endl;
    QString pEmploye = ui->tableWidgetEmployees->currentItem()->data(32).toString();
    QString txtReqInfo ="select nom, prenom from utilisateurs where id="+pEmploye;
    QSqlQuery reqInfo(txtReqInfo);
    reqInfo.first();
    QSqlRecord recInfo=reqInfo.record();
    QSqlQuery reqEmploye("update utilisateurs set password="+mdp+" where id="+pEmploye);
}

QString MainWindowGestionnaire::GetRandomString() const
{
    const QString possibleCharacters("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789");
    const int randomStringLength = 12;

    QTime time;
    qsrand(time.currentTime().msec());
    QString randomString;
    for(int i=0; i<randomStringLength; ++i)
    {
        int index = qrand() % possibleCharacters.length();
        QChar nextChar = possibleCharacters.at(index);
        randomString.append(nextChar);
    }
    return randomString;
}
