/********************************************************************************
** Form generated from reading UI file 'dialogconnexion.ui'
**
** Created by: Qt User Interface Compiler version 5.3.2
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_DIALOGCONNEXION_H
#define UI_DIALOGCONNEXION_H

#include <QtCore/QVariant>
#include <QtWidgets/QAction>
#include <QtWidgets/QApplication>
#include <QtWidgets/QButtonGroup>
#include <QtWidgets/QDialog>
#include <QtWidgets/QFormLayout>
#include <QtWidgets/QHeaderView>
#include <QtWidgets/QLabel>
#include <QtWidgets/QLineEdit>
#include <QtWidgets/QPushButton>

QT_BEGIN_NAMESPACE

class Ui_DialogConnexion
{
public:
    QFormLayout *formLayout_2;
    QFormLayout *formLayout;
    QLabel *labelID;
    QLineEdit *lineEditID;
    QLabel *labelMDP;
    QLineEdit *lineEditMDP;
    QPushButton *pushButtonCancel;
    QPushButton *pushButtonLogin;

    void setupUi(QDialog *DialogConnexion)
    {
        if (DialogConnexion->objectName().isEmpty())
            DialogConnexion->setObjectName(QStringLiteral("DialogConnexion"));
        DialogConnexion->resize(274, 129);
        formLayout_2 = new QFormLayout(DialogConnexion);
        formLayout_2->setObjectName(QStringLiteral("formLayout_2"));
        formLayout = new QFormLayout();
        formLayout->setObjectName(QStringLiteral("formLayout"));
        labelID = new QLabel(DialogConnexion);
        labelID->setObjectName(QStringLiteral("labelID"));

        formLayout->setWidget(0, QFormLayout::LabelRole, labelID);

        lineEditID = new QLineEdit(DialogConnexion);
        lineEditID->setObjectName(QStringLiteral("lineEditID"));

        formLayout->setWidget(0, QFormLayout::FieldRole, lineEditID);

        labelMDP = new QLabel(DialogConnexion);
        labelMDP->setObjectName(QStringLiteral("labelMDP"));

        formLayout->setWidget(1, QFormLayout::LabelRole, labelMDP);

        lineEditMDP = new QLineEdit(DialogConnexion);
        lineEditMDP->setObjectName(QStringLiteral("lineEditMDP"));

        formLayout->setWidget(1, QFormLayout::FieldRole, lineEditMDP);


        formLayout_2->setLayout(0, QFormLayout::SpanningRole, formLayout);

        pushButtonCancel = new QPushButton(DialogConnexion);
        pushButtonCancel->setObjectName(QStringLiteral("pushButtonCancel"));

        formLayout_2->setWidget(1, QFormLayout::LabelRole, pushButtonCancel);

        pushButtonLogin = new QPushButton(DialogConnexion);
        pushButtonLogin->setObjectName(QStringLiteral("pushButtonLogin"));
        pushButtonLogin->setEnabled(false);

        formLayout_2->setWidget(1, QFormLayout::FieldRole, pushButtonLogin);

        QWidget::setTabOrder(lineEditID, lineEditMDP);
        QWidget::setTabOrder(lineEditMDP, pushButtonLogin);
        QWidget::setTabOrder(pushButtonLogin, pushButtonCancel);

        retranslateUi(DialogConnexion);

        QMetaObject::connectSlotsByName(DialogConnexion);
    } // setupUi

    void retranslateUi(QDialog *DialogConnexion)
    {
        DialogConnexion->setWindowTitle(QApplication::translate("DialogConnexion", "Connection", 0));
        labelID->setText(QApplication::translate("DialogConnexion", "Identifiant :", 0));
        labelMDP->setText(QApplication::translate("DialogConnexion", "Mot de Passe : ", 0));
        pushButtonCancel->setText(QApplication::translate("DialogConnexion", "Cancel", 0));
        pushButtonLogin->setText(QApplication::translate("DialogConnexion", "&Login", 0));
    } // retranslateUi

};

namespace Ui {
    class DialogConnexion: public Ui_DialogConnexion {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_DIALOGCONNEXION_H
