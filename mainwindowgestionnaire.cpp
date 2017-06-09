#include "mainwindowgestionnaire.h"
#include "ui_mainwindowgestionnaire.h"
#include <QSqlQuery>
#include <QSqlRecord>
#include <QSqlError>
#include <QDebug>
#include <QTime>


MainWindowGestionnaire::MainWindowGestionnaire(QString idUtilisateur, QWidget *parent) :
    QMainWindow(parent),
    ui(new Ui::MainWindowGestionnaire)
{
    idGestionnaire=idUtilisateur;
    ui->setupUi(this);
    chargerEmployes();
    chargerRayons();
    chargerControleur();
    chargerProducteurs();
    //actDesactBoutonsAjouterEmploye
    connect(ui->lineEditNom, SIGNAL(textEdited(QString)),this, SLOT(actDesactBoutonsAjouterEmploye()));
    connect(ui->lineEditPrenom, SIGNAL(textEdited(QString)),this, SLOT(actDesactBoutonsAjouterEmploye()));
    connect(ui->lineEditCP,SIGNAL(textEdited(QString)),this, SLOT(actDesactBoutonsAjouterEmploye()));
    connect(ui->lineEditVille,SIGNAL(textEdited(QString)),this, SLOT(actDesactBoutonsAjouterEmploye()));
    connect(ui->lineEditAdresse,SIGNAL(textEdited(QString)),this, SLOT(actDesactBoutonsAjouterEmploye()));
    connect(ui->lineEditMail,SIGNAL(textEdited(QString)),this, SLOT(actDesactBoutonsAjouterEmploye()));
    connect(ui->lineEditTel, SIGNAL(textEdited(QString)),this, SLOT(actDesactBoutonsAjouterEmploye()));
    connect(ui->lineEditTelPort, SIGNAL(textEdited(QString)),this, SLOT(actDesactBoutonsAjouterEmploye()));
    connect(ui->lineEditLogin,SIGNAL(textEdited(QString)),this, SLOT(actDesactBoutonsAjouterEmploye()));
    //actDesactBoutonsUpdateEmploye
    connect(ui->lineEditNom, SIGNAL(textChanged(QString)),this, SLOT(actDesactBoutonsUpdateEmploye()));
    connect(ui->lineEditPrenom, SIGNAL(textChanged(QString)),this, SLOT(actDesactBoutonsUpdateEmploye()));
    connect(ui->lineEditCP,SIGNAL(textChanged(QString)),this, SLOT(actDesactBoutonsUpdateEmploye()));
    connect(ui->lineEditVille,SIGNAL(textChanged(QString)),this, SLOT(actDesactBoutonsUpdateEmploye()));
    connect(ui->lineEditAdresse,SIGNAL(textChanged(QString)),this, SLOT(actDesactBoutonsUpdateEmploye()));
    connect(ui->lineEditMail,SIGNAL(textChanged(QString)),this, SLOT(actDesactBoutonsUpdateEmploye()));
    connect(ui->lineEditTel, SIGNAL(textChanged(QString)),this, SLOT(actDesactBoutonsUpdateEmploye()));
    connect(ui->lineEditTelPort, SIGNAL(textChanged(QString)),this, SLOT(actDesactBoutonsUpdateEmploye()));
    connect(ui->lineEditLogin,SIGNAL(textChanged(QString)),this, SLOT(actDesactBoutonsUpdateEmploye()));
}

MainWindowGestionnaire::~MainWindowGestionnaire()
{
    delete ui;
}


//****************************************
//*              employes                *
//****************************************

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
void MainWindowGestionnaire::chargerEmployes(){
    qDebug()<<"void MainWindow::actDesactBoutonsUpdateEmploye()";
    QSqlQuery reqEmploye("select id,nom,prenom,cp,ville,adresse,type,mail,telephone_fixe,telephone_portable,login from utilisateurs where verification = 'Y' order by nom,prenom asc;");
    QSqlRecord recEmploye=reqEmploye.record();
    if (!recEmploye.isEmpty())
    {
        int id = recEmploye.indexOf("id");
        QStringList listCol;
        int nbLigne=reqEmploye.size();
        int nbCol=recEmploye.count();
        for(int col=0; col<= nbCol; col++)
        {
            QString nomCol=recEmploye.fieldName(col);
            listCol.push_back(nomCol);
        }
        ui->tableWidgetEmployes->setRowCount(0);
        ui->tableWidgetEmployes->setRowCount(nbLigne);
        ui->tableWidgetEmployes->setColumnCount(nbCol);
        ui->tableWidgetEmployes->setHorizontalHeaderLabels(listCol);
        int cptL=0;
        while (reqEmploye.next())
        {
            int lId = reqEmploye.value(id).toInt();
            qDebug() << "id" << lId << endl ;
            int cptC=0;
            while(cptC < nbCol)
            {
                QString Employe=reqEmploye.value(cptC).toString();
                QTableWidgetItem *itemEmploye=new QTableWidgetItem(Employe);
                itemEmploye->setData(Qt::UserRole, lId);
                ui->tableWidgetEmployes->setItem(cptL,cptC,itemEmploye);
                itemEmploye->setData(32,lId);
                cptC++;
            }
            cptL++;
        }
    }
    else
    {
        ui->tableWidgetEmployes->clear();
        ui->tableWidgetEmployes->setRowCount(0);
        ui->tableWidgetEmployes->setColumnCount(0);
    }
}
void MainWindowGestionnaire::on_pushButtonValider_clicked()
{
    qDebug() << "void MainWindowGestionnaire::on_pushButtonValider_clicked()" ;
    QString idMax;
    QSqlQuery reqIdMax("select ifnull(max(id),0)+1 from utilisateurs");
    if(reqIdMax.next() == true)
       {
           idMax = reqIdMax.value(0).toString();
       }
    QString nom= ui->lineEditNom->text();
    QString prenom= ui->lineEditPrenom->text();
    QString cp= ui->lineEditCP->text();
    QString ville= ui->lineEditVille->text();
    QString adresse= ui->lineEditAdresse->text();
    QString mail= ui->lineEditMail->text();
    QString type="";
    if(ui->radioButtonGestionnaire->isChecked())
    {
        type= "gestionnaire";
    }
    else
    {
        type= "contrôleur";
    }
    QString telephone_fixe= ui->lineEditTel->text();
    QString telephone_portable= ui->lineEditTelPort->text();
    QString login =ui->lineEditLogin->text();
    QString sqlUtilisateur="insert into utilisateurs (id,nom,prenom,cp,ville,adresse,mail,type,telephone_fixe,telephone_portable,login,verification) values (";
    sqlUtilisateur+=idMax+",'";
    sqlUtilisateur+=nom+"','";
    sqlUtilisateur+=prenom+"','";
    sqlUtilisateur+=cp+"','";
    sqlUtilisateur+=ville+"','";
    sqlUtilisateur+=adresse+"','";
    sqlUtilisateur+=mail+"','";
    sqlUtilisateur+=type+"','";
    sqlUtilisateur+=telephone_fixe+"','";
    sqlUtilisateur+=telephone_portable+"','";
    sqlUtilisateur+=login+"','";
    sqlUtilisateur+="Y')";
    //sqlUtilisateur+=verification+"')";
    qDebug() << sqlUtilisateur << endl;
    QSqlQuery reqEmploye(sqlUtilisateur);
    chargerEmployes();
}

void MainWindowGestionnaire::on_pushButtonMaj_clicked()
{
    qDebug() << "void MainWindowGestionnaire::on_pushButtonMaj_clicked()" ;
    QString id =ui->tableWidgetEmployes->currentItem()->data(Qt::UserRole).toString();
    QString nom= ui->lineEditNom->text();
    QString prenom= ui->lineEditPrenom->text();
    QString cp= ui->lineEditCP->text();
    QString ville= ui->lineEditVille->text();
    QString adresse= ui->lineEditAdresse->text();
    QString mail= ui->lineEditMail->text();
    QString type="";
    if(ui->radioButtonGestionnaire->isChecked())
    {
        type= "gestionnaire";
    }
    else
    {
        type= "contrôleur";
    }
    QString telephone_fixe= ui->lineEditTel->text();
    QString telephone_portable= ui->lineEditTelPort->text();
    QString login =ui->lineEditLogin->text();
    QString sqlUpdateUtilisateur="update utilisateurs set";
    sqlUpdateUtilisateur+=" nom='"+nom+"',";
    sqlUpdateUtilisateur+="prenom='"+prenom+"',";
    sqlUpdateUtilisateur+="cp='"+cp+"',";
    sqlUpdateUtilisateur+="ville='"+ville+"',";
    sqlUpdateUtilisateur+="adresse='"+adresse+"',";
    sqlUpdateUtilisateur+="mail='"+mail+"',";
    sqlUpdateUtilisateur+="type='"+type+"',";
    sqlUpdateUtilisateur+="telephone_fixe='"+telephone_fixe+"',";
    sqlUpdateUtilisateur+="telephone_portable='"+telephone_portable+"',";
    sqlUpdateUtilisateur+="login='"+login+"'";
    sqlUpdateUtilisateur+=" where id="+id;

    qDebug() << sqlUpdateUtilisateur << endl;
    QSqlQuery reqUpdateEmploye(sqlUpdateUtilisateur);
    if (reqUpdateEmploye.exec())
    {
        chargerEmployes();
    }
    clearChamps();
}

void MainWindowGestionnaire::on_tableWidgetEmployees_clicked()
{
    qDebug() << "void MainWindowGestionnaire::on_tableWidgetEmployees_clicked()" ;
    QString id =ui->tableWidgetEmployes->currentItem()->data(Qt::UserRole).toString();
    QSqlQuery reqEmploye("select nom,prenom,cp,ville,adresse,type,mail,telephone_fixe,telephone_portable,login from utilisateurs where id="+id+";");
    QSqlRecord recEmploye=reqEmploye.record();
    int nom = recEmploye.indexOf("nom");
    int prenom= recEmploye.indexOf("prenom");
    int cp = recEmploye.indexOf("cp");
    int ville_id = recEmploye.indexOf("ville");
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

void MainWindowGestionnaire::on_pushButtonSupprimer_clicked()
{
    qDebug() << "void MainWindowGestionnaire::on_pushButtonSupprimer_clicked()" << endl;
    QString pEmploye = ui->tableWidgetEmployes->currentItem()->data(32).toString();
    QString txtReqInfo ="select nom, prenom from utilisateurs where id="+pEmploye;
    QSqlQuery reqInfo(txtReqInfo);
    reqInfo.first();
    QSqlRecord recInfo=reqInfo.record();
    QString info=recInfo.value("nom").toString()+" "+recInfo.value("prenom").toString();
    int reponse = QMessageBox::question(this, "Interrogatoire", "are you sure that you want to fire "+info+"?", QMessageBox ::Yes | QMessageBox::No);
    if (reponse == QMessageBox::Yes)
    {
        QMessageBox::critical(this, "Interrogatoire", "user "+info+" have been Fire!");
        QSqlQuery reqEmploye("update utilisateurs set verification= 'F' where id="+pEmploye+" ;");
        ui->tableWidgetEmployes->removeRow(ui->tableWidgetEmployes->currentRow());
    }
    else if (reponse == QMessageBox::No)
    {
        QMessageBox::information(this, "Interrogatoire", "user "+info+" hasn't been fire yet!");
    }
}
void MainWindowGestionnaire::on_pushButtonMDP_clicked()
{
    qDebug() << "void MainWindowGestionnaire::on_pushButtonMDP_clicked" << endl;

    QString pEmploye = ui->tableWidgetEmployes->currentItem()->data(32).toString();
    QString mdp=GetRandomString();
    QString txtReqMdp = "update utilisateurs set password='"+mdp+"' where id="+pEmploye;
    QSqlQuery reqMdp(txtReqMdp);
    qDebug() << txtReqMdp << endl;
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
void MainWindowGestionnaire::clearChamps()
{
    ui->pushButtonSupprimer->setEnabled(true);
    ui->lineEditAdresse->clear();
    ui->lineEditCP->clear();
    ui->lineEditLogin->clear();
    ui->lineEditMail->clear();
    ui->lineEditNom->clear();
    ui->lineEditPrenom->clear();
    ui->lineEditTel->clear();
    ui->lineEditTelPort->clear();
    ui->lineEditVille->clear();
    ui->radioButtonGestionnaire->setChecked(false);
    ui->radioButtonControleur->setChecked(false);
    }
//****************************************
//*              rayons                  *
//****************************************

void MainWindowGestionnaire::chargerRayons(){
    QSqlQuery reqRayons("select id_rayon, libelle, etat from rayons where etat = 'Y' order by libelle asc;");
    QSqlRecord recRayons=reqRayons.record();
    if (!recRayons.isEmpty())
    {
        int id = recRayons.indexOf("id_rayon");
        QStringList listCol;
        int nbLigne=reqRayons.size();
        int nbCol=recRayons.count();
        for(int col=0; col<= nbCol; col++)
        {
            QString nomCol=recRayons.fieldName(col);
            listCol.push_back(nomCol);
        }
        ui->tableWidgetRayons->setRowCount(0);
        ui->tableWidgetRayons->setRowCount(nbLigne);
        ui->tableWidgetRayons->setColumnCount(nbCol);
        ui->tableWidgetRayons->setHorizontalHeaderLabels(listCol);
        int cptL=0;
        while (reqRayons.next())
        {
            int lId = reqRayons.value(id).toInt();
            qDebug() << "id" << lId << endl ;
            int cptC=0;
            while(cptC < nbCol)
            {
                QString rayon=reqRayons.value(cptC).toString();
                QTableWidgetItem *itemRayon=new QTableWidgetItem(rayon);
                itemRayon->setData(Qt::UserRole, lId);
                ui->tableWidgetRayons->setItem(cptL,cptC,itemRayon);
                itemRayon->setData(32,lId);
                cptC++;
            }
            cptL++;
        }
    }
    else
    {
        ui->tableWidgetRayons->clear();
        ui->tableWidgetRayons->setRowCount(0);
        ui->tableWidgetRayons->setColumnCount(0);
    }
}

void MainWindowGestionnaire::on_pushButtonAddRayon_clicked()
{
QString idMax;
QSqlQuery reqIdMax("select ifnull(max(id_rayon),0)+1 from rayons");
if(reqIdMax.next() == true)
   {
       idMax = reqIdMax.value(0).toString();
   }
QString nom= ui->lineEditRayon->text();
QString sqlRayon="insert into rayons (id_rayon,libelle,etat) values (";
sqlRayon+=idMax+",'";
sqlRayon+=nom+"','";
sqlRayon+="Y')";
qDebug() << sqlRayon << endl;
QSqlQuery reqRayon(sqlRayon);
chargerRayons();
}

void MainWindowGestionnaire::on_pushButtonDelRayon_clicked()
{
    QString rayon=ui->tableWidgetRayons->currentItem()->data(Qt::UserRole).toString();
    QSqlQuery reqDelRayon("update rayons set etat='N' where id_rayon="+rayon);
    QSqlQuery reqSelectCategories("select id_categorie from categories where id_rayon ="+rayon);
    QSqlRecord recSelectCategories=reqSelectCategories.record();
    int id_categorie = recSelectCategories.indexOf("id_categorie");
    while (reqSelectCategories.next()){
        QString categorie=reqSelectCategories.value(id_categorie).toString();
        QSqlQuery reqDelCategorie("update categories set etat='N' where id_categorie="+categorie);
        QSqlQuery reqSelectProduits("select id_produit from produits where id_categorie ="+categorie);
        QSqlRecord recSelectProduits=reqSelectProduits.record();
        int id_produit = recSelectProduits.indexOf("id_produit");
        //qDebug() << "categorie"+categorie;
        while (reqSelectProduits.next()){
            QString produit=reqSelectProduits.value(id_produit).toString();
            QSqlQuery reqDelProduit("update produits set etat='N' where id_produit="+produit);
            //qDebug() << "produit"+produit ;
        }
    }
chargerRayons();
}

//****************************************
//*              categories              *
//****************************************

void MainWindowGestionnaire::chargerCategories(){

    QString rayon=ui->tableWidgetRayons->currentItem()->data(Qt::UserRole).toString();
    QString sqlCategories="select id_categorie, libelle, etat from categories where etat = 'Y' and id_rayon ="+rayon+" order by libelle asc;";
    qDebug() << sqlCategories << endl;
    QSqlQuery reqCategories(sqlCategories);
    QSqlRecord recCategories=reqCategories.record();
    if (!recCategories.isEmpty())
    {
        int id = recCategories.indexOf("id_categorie");
        QStringList listCol;
        int nbLigne=reqCategories.size();
        int nbCol=recCategories.count();
        for(int col=0; col<= nbCol; col++)
        {
            QString nomCol=recCategories.fieldName(col);
            listCol.push_back(nomCol);
        }
        ui->tableWidgetCategories->setRowCount(0);
        ui->tableWidgetCategories->setRowCount(nbLigne);
        ui->tableWidgetCategories->setColumnCount(nbCol);
        ui->tableWidgetCategories->setHorizontalHeaderLabels(listCol);
        int cptL=0;
        while (reqCategories.next())
        {
            int lId = reqCategories.value(id).toInt();
            qDebug() << "id" << lId << endl ;
            int cptC=0;
            while(cptC < nbCol)
            {
                QString categorie=reqCategories.value(cptC).toString();
                QTableWidgetItem *itemCategorie=new QTableWidgetItem(categorie);
                itemCategorie->setData(Qt::UserRole, lId);
                ui->tableWidgetCategories->setItem(cptL,cptC,itemCategorie);
                itemCategorie->setData(32,lId);
                cptC++;
            }
            cptL++;
        }
    }
    else
    {
        ui->tableWidgetCategories->clear();
        ui->tableWidgetCategories->setRowCount(0);
        ui->tableWidgetCategories->setColumnCount(0);
    }
}

void MainWindowGestionnaire::on_pushButtonAddCategorie_clicked()
{
    QString idMax;
    QSqlQuery reqIdMax("select ifnull(max(id_categorie),0)+1 from categories");
    if(reqIdMax.next() == true)
       {
           idMax = reqIdMax.value(0).toString();
       }
    QString nom= ui->lineEditCategorie->text();
    QString rayon= ui->tableWidgetRayons->currentItem()->data(Qt::UserRole).toString();
    QString sqlCategorie="insert into categories (id_categorie,libelle,id_rayon,etat) values (";
    sqlCategorie+=idMax+",'";
    sqlCategorie+=nom+"',";
    sqlCategorie+=rayon+",";
    sqlCategorie+="'Y')";
    qDebug() << sqlCategorie << endl;
    QSqlQuery reqCategorie(sqlCategorie);
    chargerCategories();
}

void MainWindowGestionnaire::on_pushButtonDelCategorie_clicked()
{
    QString categorie=ui->tableWidgetCategories->currentItem()->data(Qt::UserRole).toString();
    QSqlQuery reqDelCategorie("update categories set etat='N' where id_categorie="+categorie);
    QSqlQuery reqSelectProduits("select id_produit from produits where id_categorie ="+categorie);
    QSqlRecord recSelectProduits=reqSelectProduits.record();
    int id_produit = recSelectProduits.indexOf("id_produit");
    //qDebug() << "categorie"+categorie;
    while (reqSelectProduits.next()){
        QString produit=reqSelectProduits.value(id_produit).toString();
        QSqlQuery reqDelProduit("update produits set etat='N' where id_produit="+produit);
        //qDebug() << "produit"+produit ;
    }
}

//****************************************
//*              produits                *
//****************************************


void MainWindowGestionnaire::chargerProduits(){

    QString categorie=ui->tableWidgetCategories->currentItem()->data(Qt::UserRole).toString();
    QString sqlProduits="select id_produit, libelle, etat from produits where etat = 'Y' and id_categorie ="+categorie+" order by libelle asc;";
    qDebug() << sqlProduits << endl;
    QSqlQuery reqProduits(sqlProduits);
    QSqlRecord recProduits=reqProduits.record();
    if (!recProduits.isEmpty())
    {
        int id = recProduits.indexOf("id_produit");
        QStringList listCol;
        int nbLigne=reqProduits.size();
        int nbCol=recProduits.count();
        for(int col=0; col<= nbCol; col++)
        {
            QString nomCol=recProduits.fieldName(col);
            listCol.push_back(nomCol);
        }
        ui->tableWidgetProduits->setRowCount(0);
        ui->tableWidgetProduits->setRowCount(nbLigne);
        ui->tableWidgetProduits->setColumnCount(nbCol);
        ui->tableWidgetProduits->setHorizontalHeaderLabels(listCol);
        int cptL=0;
        while (reqProduits.next())
        {
            int lId = reqProduits.value(id).toInt();
            qDebug() << "id" << lId << endl ;
            int cptC=0;
            while(cptC < nbCol)
            {
                QString produit=reqProduits.value(cptC).toString();
                QTableWidgetItem *itemProduit=new QTableWidgetItem(produit);
                itemProduit->setData(Qt::UserRole, lId);
                ui->tableWidgetProduits->setItem(cptL,cptC,itemProduit);
                itemProduit->setData(32,lId);
                cptC++;
            }
            cptL++;
        }
    }
    else
    {
        ui->tableWidgetProduits->clear();
        ui->tableWidgetProduits->setRowCount(0);
        ui->tableWidgetProduits->setColumnCount(0);
    }
}


void MainWindowGestionnaire::on_pushButtonAddProduit_clicked()
{
    QString idMax;
    QSqlQuery reqIdMax("select ifnull(max(id_produit),0)+1 from produits");
    if(reqIdMax.next() == true)
       {
           idMax = reqIdMax.value(0).toString();
       }
    QString nom= ui->lineEditProduit->text();
    QString categorie= ui->tableWidgetCategories->currentItem()->data(Qt::UserRole).toString();
    QString sqlProduit="insert into produits (id_produit,libelle,id_categorie,etat) values (";
    sqlProduit+=idMax+",'";
    sqlProduit+=nom+"',";
    sqlProduit+=categorie+",";
    sqlProduit+="'Y')";
    qDebug() << sqlProduit << endl;
    QSqlQuery reqProduit(sqlProduit);
    chargerProduits();
}


void MainWindowGestionnaire::on_tableWidgetRayons_itemClicked()
{
    ui->tableWidgetCategories->setEnabled(true);
    ui->lineEditCategorie->setEnabled(true);
    ui->pushButtonAddCategorie->setEnabled(true);
    ui->pushButtonDelCategorie->setEnabled(true);
    chargerCategories();
}
void MainWindowGestionnaire::on_tableWidgetCategories_itemClicked()
{
    ui->tableWidgetProduits->setEnabled(true);
    ui->lineEditProduit->setEnabled(true);
    ui->pushButtonValiderProduit->setEnabled(true);
    ui->pushButtonRefuserProduit->setEnabled(true);
    ui->pushButtonAddProduit->setEnabled(true);
    ui->pushButtonDelProduit->setEnabled(true);
    chargerProduits();
}

void MainWindowGestionnaire::on_pushButtonDelProduit_clicked()
{
    QString produit=ui->tableWidgetProduits->currentItem()->data(Qt::UserRole).toString();
    QSqlQuery reqDelProduit("update produits set etat='N' where id_produit="+produit);
}

//****************************************
//*              Producteurs                 *
//****************************************
void MainWindowGestionnaire::chargerControleur(){
    qDebug()<<"MainWindowGestionnaire::chargerControleur()";
    QSqlQuery reqControleur("select id,nom,prenom,ville from utilisateurs where verification = 'Y' and type='C' order by nom,prenom asc;");
    QSqlRecord recControleur=reqControleur.record();
    if (!recControleur.isEmpty())
    {
        int id = recControleur.indexOf("id");
        QStringList listCol;
        int nbLigne=reqControleur.size();
        int nbCol=recControleur.count();
        for(int col=0; col<= nbCol; col++)
        {
            QString nomCol=recControleur.fieldName(col);
            listCol.push_back(nomCol);
        }
        ui->tableWidgetControleurs->setRowCount(0);
        ui->tableWidgetControleurs->setRowCount(nbLigne);
        ui->tableWidgetControleurs->setColumnCount(nbCol);
        ui->tableWidgetControleurs->setHorizontalHeaderLabels(listCol);
        int cptL=0;
        while (reqControleur.next())
        {
            int lId = reqControleur.value(id).toInt();
            qDebug() << "id" << lId << endl ;
            int cptC=0;
            while(cptC < nbCol)
            {
                QString Controleur=reqControleur.value(cptC).toString();
                QTableWidgetItem *itemControleur=new QTableWidgetItem(Controleur);
                itemControleur->setData(Qt::UserRole, lId);
                ui->tableWidgetControleurs->setItem(cptL,cptC,itemControleur);
                itemControleur->setData(32,lId);
                cptC++;
            }
            cptL++;
        }
    }
    else
    {
        ui->tableWidgetControleurs->clear();
        ui->tableWidgetControleurs->setRowCount(0);
        ui->tableWidgetControleurs->setColumnCount(0);
    }
}
void MainWindowGestionnaire::chargerProducteurs(){
    qDebug()<<"void MainWindowGestionnaire::chargerProducteurs()";
    QSqlQuery reqControleur("select id_client from clients where type like '%P%' and id_client not in (select id_client from ligne_visite) union select * from (select distinct c.id_client from clients c inner join ligne_visite lv on c.id_client=lv.id_client inner join visites v on lv.id_visite=v.id_visite order by lv.id_visite desc) as AVisite;");
    QSqlRecord recControleur=reqControleur.record();
    qDebug() <<recControleur;
    if (!recControleur.isEmpty())
    {
        int id = recControleur.indexOf("id_client");
        QStringList listCol;
        int nbLigne=reqControleur.size();
        int nbCol=recControleur.count();
        for(int col=0; col<= nbCol; col++)
        {
            QString nomCol=recControleur.fieldName(col);
            listCol.push_back(nomCol);
        }
        ui->tableWidgetProducteurs->setRowCount(0);
        ui->tableWidgetProducteurs->setRowCount(nbLigne);
        ui->tableWidgetProducteurs->setColumnCount(nbCol);
        ui->tableWidgetProducteurs->setHorizontalHeaderLabels(listCol);
        int cptL=0;
        while (reqControleur.next())
        {
            int lId = reqControleur.value(id).toInt();
            qDebug() << "id" << lId << endl ;
            int cptC=0;
            while(cptC < nbCol)
            {
                QString Controleur=reqControleur.value(cptC).toString();
                QTableWidgetItem *itemControleur=new QTableWidgetItem(Controleur);
                itemControleur->setData(Qt::UserRole, lId);
                ui->tableWidgetProducteurs->setItem(cptL,cptC,itemControleur);
                itemControleur->setData(32,lId);
                cptC++;
            }
            cptL++;
        }
    }
    else
    {
        ui->tableWidgetProducteurs->clear();
        ui->tableWidgetProducteurs->setRowCount(0);
        ui->tableWidgetProducteurs->setColumnCount(0);
    }
}
void MainWindowGestionnaire::chargerVisites(){
    qDebug()<<"void MainWindowGestionnaire::chargerVisites()";
    QString date=ui->dateEditVisite->date().toString("yyyy-MM-dd");
    QString id=ui->tableWidgetControleurs->currentItem()->data(32).toString();
    QString requeteTxt= "select nom, prenom, adresse, cp, ville from clients c inner join ligne_visite lv on c.id_client=lv.id_client inner join visites v on lv.id_visite=v.id_visite where jour=";
    requeteTxt+="'"+date+"' and id_controleur=";
    requeteTxt+=id;
    QSqlQuery reqControleur(requeteTxt);
    QSqlRecord recControleur=reqControleur.record();
    qDebug() << requeteTxt << recControleur;
    if (!recControleur.isEmpty())
    {
        int id = recControleur.indexOf("id_client");
        QStringList listCol;
        int nbLigne=reqControleur.size();
        int nbCol=recControleur.count();
        for(int col=0; col<= nbCol; col++)
        {
            QString nomCol=recControleur.fieldName(col);
            listCol.push_back(nomCol);
        }
        ui->tableWidgetVisites->setRowCount(0);
        ui->tableWidgetVisites->setRowCount(nbLigne);
        ui->tableWidgetVisites->setColumnCount(nbCol);
        ui->tableWidgetVisites->setHorizontalHeaderLabels(listCol);
        int cptL=0;
        while (reqControleur.next())
        {
            int lId = reqControleur.value(id).toInt();
            qDebug() << "id" << lId << endl ;
            int cptC=0;
            while(cptC < nbCol)
            {
                QString Controleur=reqControleur.value(cptC).toString();
                QTableWidgetItem *itemControleur=new QTableWidgetItem(Controleur);
                itemControleur->setData(Qt::UserRole, lId);
                ui->tableWidgetVisites->setItem(cptL,cptC,itemControleur);
                itemControleur->setData(32,lId);
                cptC++;
            }
            cptL++;
        }
    }
    else
    {
        ui->tableWidgetVisites->clear();
        ui->tableWidgetVisites->setRowCount(0);
        ui->tableWidgetVisites->setColumnCount(0);
    }
}

void MainWindowGestionnaire::on_pushButtonAddVisite_clicked()
{
if ( ui->tableWidgetVisites->rowCount()==0)
{
    QString id = idGestionnaire;
    //insert into visite+ligne_visite
}
else
{
    QString idVisite = ui->tableWidgetVisites->currentItem()->data(32).toString();
    //insert ligne_visite
}
}

void MainWindowGestionnaire::on_tableWidgetControleurs_itemClicked()
{
    chargerVisites();
}
void MainWindowGestionnaire::on_dateEditVisite_editingFinished()
{
    chargerVisites();
}

void MainWindowGestionnaire::on_tableWidgetVisites_itemClicked()
{
    ui->pushButtonRmVisite->setVisible(true);
}

void MainWindowGestionnaire::on_pushButtonRmVisite_clicked()
{
    qDebug()<<"void MainWindowGestionnaire::chargerVisites()";
    QString id=ui->tableWidgetVisites->currentItem()->data(32).toString();
    QString requeteTxt= "delete from ligne_visite=";
    QSqlQuery reqControleur(requeteTxt);
    QSqlRecord recControleur=reqControleur.record();
    qDebug() << requeteTxt << recControleur;
    if (!recControleur.isEmpty())
    {}
}
