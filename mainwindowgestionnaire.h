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
    explicit MainWindowGestionnaire(QString idUtilisateur, QWidget *parent = 0);
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

    void chargerEmployes();
    void chargerRayons();
    void chargerCategories();
    void chargerProduits();    
    void chargerControleur();
    void chargerProducteurs();
    void chargerVisites();
    QString GetRandomString() const;
    void clearChamps();


private slots:

    void on_actionQUit_triggered();
    void on_pushButtonMDP_clicked();
    void on_pushButtonValider_clicked();

    void on_pushButtonSupprimer_clicked();

    void on_pushButtonMaj_clicked();

    void on_tableWidgetEmployees_clicked();
    void actDesactBoutonsAjouterEmploye();
    void actDesactBoutonsUpdateEmploye();

    void on_pushButtonAddRayon_clicked();

    void on_pushButtonAddCategorie_clicked();

    void on_pushButtonAddProduit_clicked();

    void on_tableWidgetRayons_itemClicked();
    void on_tableWidgetCategories_itemClicked();
    void on_pushButtonDelRayon_clicked();

    void on_pushButtonDelCategorie_clicked();

    void on_pushButtonDelProduit_clicked();

    void on_pushButtonAddVisite_clicked();

    void on_tableWidgetControleurs_itemClicked();

    void on_dateEditVisite_editingFinished();

    void on_tableWidgetVisites_itemClicked();

    void on_pushButtonRmVisite_clicked();

private:
    Ui::MainWindowGestionnaire *ui;
    QString idGestionnaire;
};

#endif // MAINWINDOWGESTIONNAIRE_H
