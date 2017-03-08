#ifndef DIALOGCONNEXION_H
#define DIALOGCONNEXION_H

#include <QDialog>
#include <QSqlQuery>
#include <QDebug>

namespace Ui {
class DialogConnexion;
}

class DialogConnexion : public QDialog
{
    Q_OBJECT

public:
    explicit DialogConnexion(QWidget *parent = 0);
    ~DialogConnexion();

    QString getType();
    void setType(const QString &value);

    void activatedConnexionButton();
private slots:
    void on_pushButtonCancel_clicked();
    void on_pushButtonLogin_clicked();
    void on_lineEditMDP_textChanged();
    void on_lineEditID_textChanged();

private:
    Ui::DialogConnexion *ui;
    QString type;
};

#endif // DIALOGCONNEXION_H
