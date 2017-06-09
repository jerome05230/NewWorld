#include "dialogconnexion.h"
#include "ui_dialogconnexion.h"
#include <QSqlRecord>
#include <QCryptographicHash>

DialogConnexion::DialogConnexion(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::DialogConnexion)


{
    ui->setupUi(this);
}

DialogConnexion::~DialogConnexion()
{
    delete ui;
}

void DialogConnexion::on_pushButtonCancel_clicked()
{
    reject();
}

void DialogConnexion::on_pushButtonLogin_clicked()
{
    QString id=ui->lineEditID->text();
    QString mdp=ui->lineEditMDP->text();
    QString hashMDP=  QCryptographicHash::hash(mdp.toUtf8(), QCryptographicHash::Sha1).toHex();
    qDebug() << hashMDP;
    QSqlQuery laRequete;
    QString requeteText="select id, type from utilisateurs where login=";
    requeteText+="'"+id+"' and";
    requeteText+=" password=";
    requeteText+="'"+hashMDP+"';";
    qDebug() << requeteText << endl;
    if (laRequete.exec(requeteText)){
            laRequete.next();
            QSqlRecord recConnexion=laRequete.record();
            type=recConnexion.value("type").toString();
            id=recConnexion.value("id").toString();
            qDebug() << type << endl;
            accept();
    }
}
QString DialogConnexion::getType()
{
    return type;
}
QString DialogConnexion::getId()
{
    return id;
}
void DialogConnexion::activatedConnexionButton(){
    ui->pushButtonLogin->setEnabled(ui->lineEditID->text()!=""&& ui->lineEditMDP->text()!="");
}
void DialogConnexion::on_lineEditMDP_textChanged()
{
    activatedConnexionButton();
}

void DialogConnexion::on_lineEditID_textChanged()
{
    activatedConnexionButton();
}
