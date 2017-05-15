#include "dialogconnexion.h"
#include "ui_dialogconnexion.h"
#include <QSqlRecord>

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
    QSqlQuery laRequete;
    QString requeteText="select type from utilisateurs where login=";
    requeteText+="'"+id+"' and";
    requeteText+=" password=";
    requeteText+="'"+mdp+"';";
    qDebug() << requeteText << endl;
    if (laRequete.exec(requeteText)){
            laRequete.next();
            QSqlRecord recConnexion=laRequete.record();
            type=recConnexion.value("type").toString();
            qDebug() << type << endl;
            accept();
    }
}
QString DialogConnexion::getType()
{
    return type;
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
