#ifndef MAINWINDOWGESTIONNAIRE_H
#define MAINWINDOWGESTIONNAIRE_H
#include <QMainWindow>
#include <QMessageBox>

namespace Ui {
class MainWindowGestionnaire;
}

class MainWindowGestionnaire : public QMainWindow
{
    Q_OBJECT

public:
    explicit MainWindowGestionnaire(QWidget *parent = 0);
    ~MainWindowGestionnaire();
//personnel
    QString getNomEmploye();
    QString getPrenomEmploye();
    QString getRueEmploye();
    QString getVilleEmploye();
    QString getCPEmploye();
    QString getTelEmploye();
    QString getDateEmploye();
    QString getTypeEmploye();
    QString getLoginEmploye();
    QString getSexeEmploye();
//visites
//produits
    //statistiques

private slots:
    void on_actionQUit_triggered();

    void on_pushButtonValider_clicked();

private:
    Ui::MainWindowGestionnaire *ui;
};

#endif // MAINWINDOWGESTIONNAIRE_H
