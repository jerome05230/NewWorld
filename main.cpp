#include "dialogconnexion.h"
#include "mainwindowcontroleur.h"
#include "mainwindowgestionnaire.h"
#include <QApplication>
#include <QSqlDatabase>
#include <QDebug>
int main(int argc, char *argv[])
{
    QApplication a(argc, argv);
    QSqlDatabase dbContact=QSqlDatabase::addDatabase("QMYSQL");
    dbContact.setHostName("localhost");
    dbContact.setDatabaseName("dbNewWorld");
    dbContact.setUserName("adminDbNewWorld");
    dbContact.setPassword("123456789");
    if(dbContact.open())
    {
        DialogConnexion dialogCo;
        if (dialogCo.exec() ==QDialog::Accepted)
        {
            if(dialogCo.getType().trimmed()=="C")
            {
                QString id=dialogCo.getId();
                MainWindowControleur w(id);
                w.show();
                return a.exec();
            }
            else if(dialogCo.getType().trimmed()=="G")
            {
                QString id=dialogCo.getId();
                MainWindowGestionnaire w(id);
                w.show();
                return a.exec();
            }
            else
            {

            }
        }

    }
    else
    {
        qDebug() << "erreur de connexion à la base de donnée" << endl;
        return -125;
    }
}
