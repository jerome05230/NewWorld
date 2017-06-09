/********************************************************************************
** Form generated from reading UI file 'mainwindowgestionnaire.ui'
**
** Created by: Qt User Interface Compiler version 5.3.2
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_MAINWINDOWGESTIONNAIRE_H
#define UI_MAINWINDOWGESTIONNAIRE_H

#include <QtCore/QVariant>
#include <QtWidgets/QAction>
#include <QtWidgets/QApplication>
#include <QtWidgets/QButtonGroup>
#include <QtWidgets/QDateEdit>
#include <QtWidgets/QGridLayout>
#include <QtWidgets/QHBoxLayout>
#include <QtWidgets/QHeaderView>
#include <QtWidgets/QLabel>
#include <QtWidgets/QLineEdit>
#include <QtWidgets/QMainWindow>
#include <QtWidgets/QMenu>
#include <QtWidgets/QMenuBar>
#include <QtWidgets/QPushButton>
#include <QtWidgets/QRadioButton>
#include <QtWidgets/QSpacerItem>
#include <QtWidgets/QStatusBar>
#include <QtWidgets/QTabWidget>
#include <QtWidgets/QTableWidget>
#include <QtWidgets/QVBoxLayout>
#include <QtWidgets/QWidget>

QT_BEGIN_NAMESPACE

class Ui_MainWindowGestionnaire
{
public:
    QAction *actionQUit;
    QWidget *centralwidget;
    QTabWidget *tabWidgetGestionnaire;
    QWidget *tabPersonnel;
    QGridLayout *gridLayout;
    QLineEdit *lineEditLogin;
    QTableWidget *tableWidgetEmployes;
    QLabel *labelNomEmploye_2;
    QLineEdit *lineEditNom;
    QLineEdit *lineEditPrenom;
    QLabel *labelPrenomEmploye;
    QPushButton *pushButtonSupprimer;
    QHBoxLayout *codepostal;
    QLabel *labelCodePostal;
    QLineEdit *lineEditCP;
    QHBoxLayout *horizontalLayout_2;
    QLabel *labelVilleEmploye;
    QLineEdit *lineEditVille;
    QLabel *labelRueEmploye;
    QLineEdit *lineEditAdresse;
    QLabel *labelMail;
    QLineEdit *lineEditMail;
    QLabel *labelTypeEmploye;
    QHBoxLayout *horizontalLayout;
    QRadioButton *radioButtonGestionnaire;
    QRadioButton *radioButtonControleur;
    QLineEdit *lineEditTel;
    QLineEdit *lineEditTelPort;
    QPushButton *pushButtonMaj;
    QLabel *labelTelEmploye_2;
    QLabel *labelLoginEmploye;
    QLabel *labelCaracteresExiges;
    QPushButton *pushButtonValider;
    QSpacerItem *horizontalSpacer_2;
    QPushButton *pushButtonMDP;
    QSpacerItem *horizontalSpacer;
    QLabel *labelTelEmploye;
    QWidget *tabProduits;
    QGridLayout *gridLayout_5;
    QGridLayout *gridLayout_2;
    QTableWidget *tableWidgetProduits;
    QLabel *label;
    QPushButton *pushButtonRefuserProduit;
    QPushButton *pushButtonValiderProduit;
    QLabel *label_2;
    QLineEdit *lineEditProduit;
    QPushButton *pushButtonAddProduit;
    QPushButton *pushButtonDelProduit;
    QLabel *label_5;
    QGridLayout *gridLayout_3;
    QLabel *label_6;
    QTableWidget *tableWidgetCategories;
    QLabel *label_4;
    QLineEdit *lineEditCategorie;
    QPushButton *pushButtonAddCategorie;
    QPushButton *pushButtonDelCategorie;
    QGridLayout *gridLayout_4;
    QLabel *label_7;
    QTableWidget *tableWidgetRayons;
    QLabel *label_3;
    QLineEdit *lineEditRayon;
    QPushButton *pushButtonAddRayon;
    QPushButton *pushButtonDelRayon;
    QWidget *tabVisites;
    QGridLayout *gridLayout_6;
    QLabel *labelControleur;
    QVBoxLayout *verticalLayout_2;
    QDateEdit *dateEditVisite;
    QPushButton *pushButtonAddVisite;
    QPushButton *pushButtonRmVisite;
    QLabel *labelProducteur;
    QTableWidget *tableWidgetControleurs;
    QTableWidget *tableWidgetProducteurs;
    QLabel *labelVIsite;
    QTableWidget *tableWidgetVisites;
    QWidget *tabStatistiques;
    QMenuBar *menubar;
    QMenu *menuFile;
    QStatusBar *statusbar;

    void setupUi(QMainWindow *MainWindowGestionnaire)
    {
        if (MainWindowGestionnaire->objectName().isEmpty())
            MainWindowGestionnaire->setObjectName(QStringLiteral("MainWindowGestionnaire"));
        MainWindowGestionnaire->resize(934, 665);
        actionQUit = new QAction(MainWindowGestionnaire);
        actionQUit->setObjectName(QStringLiteral("actionQUit"));
        centralwidget = new QWidget(MainWindowGestionnaire);
        centralwidget->setObjectName(QStringLiteral("centralwidget"));
        tabWidgetGestionnaire = new QTabWidget(centralwidget);
        tabWidgetGestionnaire->setObjectName(QStringLiteral("tabWidgetGestionnaire"));
        tabWidgetGestionnaire->setGeometry(QRect(9, 9, 865, 600));
        tabPersonnel = new QWidget();
        tabPersonnel->setObjectName(QStringLiteral("tabPersonnel"));
        gridLayout = new QGridLayout(tabPersonnel);
        gridLayout->setObjectName(QStringLiteral("gridLayout"));
        lineEditLogin = new QLineEdit(tabPersonnel);
        lineEditLogin->setObjectName(QStringLiteral("lineEditLogin"));

        gridLayout->addWidget(lineEditLogin, 10, 2, 2, 2);

        tableWidgetEmployes = new QTableWidget(tabPersonnel);
        tableWidgetEmployes->setObjectName(QStringLiteral("tableWidgetEmployes"));
        tableWidgetEmployes->setEnabled(true);
        tableWidgetEmployes->verticalHeader()->setVisible(false);

        gridLayout->addWidget(tableWidgetEmployes, 0, 0, 1, 6);

        labelNomEmploye_2 = new QLabel(tabPersonnel);
        labelNomEmploye_2->setObjectName(QStringLiteral("labelNomEmploye_2"));

        gridLayout->addWidget(labelNomEmploye_2, 1, 1, 1, 1);

        lineEditNom = new QLineEdit(tabPersonnel);
        lineEditNom->setObjectName(QStringLiteral("lineEditNom"));

        gridLayout->addWidget(lineEditNom, 1, 2, 1, 2);

        lineEditPrenom = new QLineEdit(tabPersonnel);
        lineEditPrenom->setObjectName(QStringLiteral("lineEditPrenom"));

        gridLayout->addWidget(lineEditPrenom, 2, 2, 1, 2);

        labelPrenomEmploye = new QLabel(tabPersonnel);
        labelPrenomEmploye->setObjectName(QStringLiteral("labelPrenomEmploye"));

        gridLayout->addWidget(labelPrenomEmploye, 2, 1, 1, 1);

        pushButtonSupprimer = new QPushButton(tabPersonnel);
        pushButtonSupprimer->setObjectName(QStringLiteral("pushButtonSupprimer"));
        pushButtonSupprimer->setEnabled(false);

        gridLayout->addWidget(pushButtonSupprimer, 3, 0, 1, 1);

        codepostal = new QHBoxLayout();
        codepostal->setObjectName(QStringLiteral("codepostal"));
        labelCodePostal = new QLabel(tabPersonnel);
        labelCodePostal->setObjectName(QStringLiteral("labelCodePostal"));

        codepostal->addWidget(labelCodePostal);

        lineEditCP = new QLineEdit(tabPersonnel);
        lineEditCP->setObjectName(QStringLiteral("lineEditCP"));

        codepostal->addWidget(lineEditCP);


        gridLayout->addLayout(codepostal, 3, 1, 1, 1);

        horizontalLayout_2 = new QHBoxLayout();
        horizontalLayout_2->setObjectName(QStringLiteral("horizontalLayout_2"));
        labelVilleEmploye = new QLabel(tabPersonnel);
        labelVilleEmploye->setObjectName(QStringLiteral("labelVilleEmploye"));

        horizontalLayout_2->addWidget(labelVilleEmploye);

        lineEditVille = new QLineEdit(tabPersonnel);
        lineEditVille->setObjectName(QStringLiteral("lineEditVille"));

        horizontalLayout_2->addWidget(lineEditVille);


        gridLayout->addLayout(horizontalLayout_2, 3, 2, 1, 3);

        labelRueEmploye = new QLabel(tabPersonnel);
        labelRueEmploye->setObjectName(QStringLiteral("labelRueEmploye"));

        gridLayout->addWidget(labelRueEmploye, 4, 1, 1, 1);

        lineEditAdresse = new QLineEdit(tabPersonnel);
        lineEditAdresse->setObjectName(QStringLiteral("lineEditAdresse"));

        gridLayout->addWidget(lineEditAdresse, 4, 2, 1, 2);

        labelMail = new QLabel(tabPersonnel);
        labelMail->setObjectName(QStringLiteral("labelMail"));

        gridLayout->addWidget(labelMail, 5, 1, 1, 1);

        lineEditMail = new QLineEdit(tabPersonnel);
        lineEditMail->setObjectName(QStringLiteral("lineEditMail"));

        gridLayout->addWidget(lineEditMail, 5, 2, 1, 2);

        labelTypeEmploye = new QLabel(tabPersonnel);
        labelTypeEmploye->setObjectName(QStringLiteral("labelTypeEmploye"));

        gridLayout->addWidget(labelTypeEmploye, 6, 1, 1, 1);

        horizontalLayout = new QHBoxLayout();
        horizontalLayout->setObjectName(QStringLiteral("horizontalLayout"));
        radioButtonGestionnaire = new QRadioButton(tabPersonnel);
        radioButtonGestionnaire->setObjectName(QStringLiteral("radioButtonGestionnaire"));

        horizontalLayout->addWidget(radioButtonGestionnaire);

        radioButtonControleur = new QRadioButton(tabPersonnel);
        radioButtonControleur->setObjectName(QStringLiteral("radioButtonControleur"));

        horizontalLayout->addWidget(radioButtonControleur);


        gridLayout->addLayout(horizontalLayout, 6, 2, 1, 4);

        lineEditTel = new QLineEdit(tabPersonnel);
        lineEditTel->setObjectName(QStringLiteral("lineEditTel"));

        gridLayout->addWidget(lineEditTel, 7, 2, 2, 2);

        lineEditTelPort = new QLineEdit(tabPersonnel);
        lineEditTelPort->setObjectName(QStringLiteral("lineEditTelPort"));

        gridLayout->addWidget(lineEditTelPort, 9, 2, 1, 2);

        pushButtonMaj = new QPushButton(tabPersonnel);
        pushButtonMaj->setObjectName(QStringLiteral("pushButtonMaj"));
        pushButtonMaj->setEnabled(false);

        gridLayout->addWidget(pushButtonMaj, 8, 0, 2, 1);

        labelTelEmploye_2 = new QLabel(tabPersonnel);
        labelTelEmploye_2->setObjectName(QStringLiteral("labelTelEmploye_2"));

        gridLayout->addWidget(labelTelEmploye_2, 9, 1, 1, 1);

        labelLoginEmploye = new QLabel(tabPersonnel);
        labelLoginEmploye->setObjectName(QStringLiteral("labelLoginEmploye"));

        gridLayout->addWidget(labelLoginEmploye, 10, 1, 1, 1);

        labelCaracteresExiges = new QLabel(tabPersonnel);
        labelCaracteresExiges->setObjectName(QStringLiteral("labelCaracteresExiges"));
        QFont font;
        font.setFamily(QStringLiteral("Monospace"));
        font.setPointSize(9);
        font.setItalic(true);
        labelCaracteresExiges->setFont(font);

        gridLayout->addWidget(labelCaracteresExiges, 10, 4, 1, 2);

        pushButtonValider = new QPushButton(tabPersonnel);
        pushButtonValider->setObjectName(QStringLiteral("pushButtonValider"));
        pushButtonValider->setEnabled(false);

        gridLayout->addWidget(pushButtonValider, 11, 0, 2, 1);

        horizontalSpacer_2 = new QSpacerItem(184, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        gridLayout->addItem(horizontalSpacer_2, 12, 2, 1, 1);

        pushButtonMDP = new QPushButton(tabPersonnel);
        pushButtonMDP->setObjectName(QStringLiteral("pushButtonMDP"));

        gridLayout->addWidget(pushButtonMDP, 12, 3, 1, 2);

        horizontalSpacer = new QSpacerItem(110, 20, QSizePolicy::Expanding, QSizePolicy::Minimum);

        gridLayout->addItem(horizontalSpacer, 12, 5, 1, 1);

        labelTelEmploye = new QLabel(tabPersonnel);
        labelTelEmploye->setObjectName(QStringLiteral("labelTelEmploye"));

        gridLayout->addWidget(labelTelEmploye, 8, 1, 1, 1);

        tabWidgetGestionnaire->addTab(tabPersonnel, QString());
        tabProduits = new QWidget();
        tabProduits->setObjectName(QStringLiteral("tabProduits"));
        gridLayout_5 = new QGridLayout(tabProduits);
        gridLayout_5->setObjectName(QStringLiteral("gridLayout_5"));
        gridLayout_2 = new QGridLayout();
        gridLayout_2->setObjectName(QStringLiteral("gridLayout_2"));
        tableWidgetProduits = new QTableWidget(tabProduits);
        tableWidgetProduits->setObjectName(QStringLiteral("tableWidgetProduits"));
        tableWidgetProduits->setEnabled(false);
        tableWidgetProduits->verticalHeader()->setVisible(false);

        gridLayout_2->addWidget(tableWidgetProduits, 1, 1, 1, 4);

        label = new QLabel(tabProduits);
        label->setObjectName(QStringLiteral("label"));

        gridLayout_2->addWidget(label, 2, 1, 1, 2);

        pushButtonRefuserProduit = new QPushButton(tabProduits);
        pushButtonRefuserProduit->setObjectName(QStringLiteral("pushButtonRefuserProduit"));
        pushButtonRefuserProduit->setEnabled(false);

        gridLayout_2->addWidget(pushButtonRefuserProduit, 2, 3, 1, 1);

        pushButtonValiderProduit = new QPushButton(tabProduits);
        pushButtonValiderProduit->setObjectName(QStringLiteral("pushButtonValiderProduit"));
        pushButtonValiderProduit->setEnabled(false);

        gridLayout_2->addWidget(pushButtonValiderProduit, 2, 4, 1, 1);

        label_2 = new QLabel(tabProduits);
        label_2->setObjectName(QStringLiteral("label_2"));

        gridLayout_2->addWidget(label_2, 3, 1, 1, 1);

        lineEditProduit = new QLineEdit(tabProduits);
        lineEditProduit->setObjectName(QStringLiteral("lineEditProduit"));
        lineEditProduit->setEnabled(false);

        gridLayout_2->addWidget(lineEditProduit, 3, 2, 1, 3);

        pushButtonAddProduit = new QPushButton(tabProduits);
        pushButtonAddProduit->setObjectName(QStringLiteral("pushButtonAddProduit"));
        pushButtonAddProduit->setEnabled(false);

        gridLayout_2->addWidget(pushButtonAddProduit, 4, 1, 1, 2);

        pushButtonDelProduit = new QPushButton(tabProduits);
        pushButtonDelProduit->setObjectName(QStringLiteral("pushButtonDelProduit"));
        pushButtonDelProduit->setEnabled(false);

        gridLayout_2->addWidget(pushButtonDelProduit, 4, 3, 1, 1);

        label_5 = new QLabel(tabProduits);
        label_5->setObjectName(QStringLiteral("label_5"));

        gridLayout_2->addWidget(label_5, 0, 1, 1, 1);


        gridLayout_5->addLayout(gridLayout_2, 0, 2, 1, 1);

        gridLayout_3 = new QGridLayout();
        gridLayout_3->setObjectName(QStringLiteral("gridLayout_3"));
        label_6 = new QLabel(tabProduits);
        label_6->setObjectName(QStringLiteral("label_6"));

        gridLayout_3->addWidget(label_6, 0, 0, 1, 1);

        tableWidgetCategories = new QTableWidget(tabProduits);
        tableWidgetCategories->setObjectName(QStringLiteral("tableWidgetCategories"));
        tableWidgetCategories->setEnabled(false);
        tableWidgetCategories->verticalHeader()->setVisible(false);

        gridLayout_3->addWidget(tableWidgetCategories, 1, 0, 1, 3);

        label_4 = new QLabel(tabProduits);
        label_4->setObjectName(QStringLiteral("label_4"));

        gridLayout_3->addWidget(label_4, 2, 0, 1, 1);

        lineEditCategorie = new QLineEdit(tabProduits);
        lineEditCategorie->setObjectName(QStringLiteral("lineEditCategorie"));
        lineEditCategorie->setEnabled(false);

        gridLayout_3->addWidget(lineEditCategorie, 2, 1, 1, 2);

        pushButtonAddCategorie = new QPushButton(tabProduits);
        pushButtonAddCategorie->setObjectName(QStringLiteral("pushButtonAddCategorie"));
        pushButtonAddCategorie->setEnabled(false);

        gridLayout_3->addWidget(pushButtonAddCategorie, 3, 0, 1, 2);

        pushButtonDelCategorie = new QPushButton(tabProduits);
        pushButtonDelCategorie->setObjectName(QStringLiteral("pushButtonDelCategorie"));
        pushButtonDelCategorie->setEnabled(false);

        gridLayout_3->addWidget(pushButtonDelCategorie, 3, 2, 1, 1);


        gridLayout_5->addLayout(gridLayout_3, 0, 1, 1, 1);

        gridLayout_4 = new QGridLayout();
        gridLayout_4->setObjectName(QStringLiteral("gridLayout_4"));
        label_7 = new QLabel(tabProduits);
        label_7->setObjectName(QStringLiteral("label_7"));

        gridLayout_4->addWidget(label_7, 0, 0, 1, 1);

        tableWidgetRayons = new QTableWidget(tabProduits);
        tableWidgetRayons->setObjectName(QStringLiteral("tableWidgetRayons"));
        tableWidgetRayons->verticalHeader()->setVisible(false);

        gridLayout_4->addWidget(tableWidgetRayons, 1, 0, 1, 3);

        label_3 = new QLabel(tabProduits);
        label_3->setObjectName(QStringLiteral("label_3"));

        gridLayout_4->addWidget(label_3, 2, 0, 1, 1);

        lineEditRayon = new QLineEdit(tabProduits);
        lineEditRayon->setObjectName(QStringLiteral("lineEditRayon"));

        gridLayout_4->addWidget(lineEditRayon, 2, 1, 1, 2);

        pushButtonAddRayon = new QPushButton(tabProduits);
        pushButtonAddRayon->setObjectName(QStringLiteral("pushButtonAddRayon"));

        gridLayout_4->addWidget(pushButtonAddRayon, 3, 0, 1, 2);

        pushButtonDelRayon = new QPushButton(tabProduits);
        pushButtonDelRayon->setObjectName(QStringLiteral("pushButtonDelRayon"));

        gridLayout_4->addWidget(pushButtonDelRayon, 3, 2, 1, 1);


        gridLayout_5->addLayout(gridLayout_4, 0, 0, 1, 1);

        tabWidgetGestionnaire->addTab(tabProduits, QString());
        tabVisites = new QWidget();
        tabVisites->setObjectName(QStringLiteral("tabVisites"));
        gridLayout_6 = new QGridLayout(tabVisites);
        gridLayout_6->setObjectName(QStringLiteral("gridLayout_6"));
        labelControleur = new QLabel(tabVisites);
        labelControleur->setObjectName(QStringLiteral("labelControleur"));

        gridLayout_6->addWidget(labelControleur, 0, 0, 1, 1);

        verticalLayout_2 = new QVBoxLayout();
        verticalLayout_2->setObjectName(QStringLiteral("verticalLayout_2"));
        dateEditVisite = new QDateEdit(tabVisites);
        dateEditVisite->setObjectName(QStringLiteral("dateEditVisite"));

        verticalLayout_2->addWidget(dateEditVisite);

        pushButtonAddVisite = new QPushButton(tabVisites);
        pushButtonAddVisite->setObjectName(QStringLiteral("pushButtonAddVisite"));

        verticalLayout_2->addWidget(pushButtonAddVisite);

        pushButtonRmVisite = new QPushButton(tabVisites);
        pushButtonRmVisite->setObjectName(QStringLiteral("pushButtonRmVisite"));
        pushButtonRmVisite->setEnabled(false);

        verticalLayout_2->addWidget(pushButtonRmVisite);


        gridLayout_6->addLayout(verticalLayout_2, 0, 1, 2, 1);

        labelProducteur = new QLabel(tabVisites);
        labelProducteur->setObjectName(QStringLiteral("labelProducteur"));

        gridLayout_6->addWidget(labelProducteur, 0, 2, 1, 1);

        tableWidgetControleurs = new QTableWidget(tabVisites);
        tableWidgetControleurs->setObjectName(QStringLiteral("tableWidgetControleurs"));
        tableWidgetControleurs->verticalHeader()->setVisible(false);

        gridLayout_6->addWidget(tableWidgetControleurs, 1, 0, 1, 1);

        tableWidgetProducteurs = new QTableWidget(tabVisites);
        tableWidgetProducteurs->setObjectName(QStringLiteral("tableWidgetProducteurs"));
        tableWidgetProducteurs->verticalHeader()->setVisible(false);

        gridLayout_6->addWidget(tableWidgetProducteurs, 1, 2, 1, 1);

        labelVIsite = new QLabel(tabVisites);
        labelVIsite->setObjectName(QStringLiteral("labelVIsite"));

        gridLayout_6->addWidget(labelVIsite, 2, 0, 1, 1);

        tableWidgetVisites = new QTableWidget(tabVisites);
        tableWidgetVisites->setObjectName(QStringLiteral("tableWidgetVisites"));
        tableWidgetVisites->verticalHeader()->setVisible(false);

        gridLayout_6->addWidget(tableWidgetVisites, 3, 0, 1, 3);

        tabWidgetGestionnaire->addTab(tabVisites, QString());
        tabStatistiques = new QWidget();
        tabStatistiques->setObjectName(QStringLiteral("tabStatistiques"));
        tabWidgetGestionnaire->addTab(tabStatistiques, QString());
        MainWindowGestionnaire->setCentralWidget(centralwidget);
        menubar = new QMenuBar(MainWindowGestionnaire);
        menubar->setObjectName(QStringLiteral("menubar"));
        menubar->setGeometry(QRect(0, 0, 934, 24));
        menuFile = new QMenu(menubar);
        menuFile->setObjectName(QStringLiteral("menuFile"));
        MainWindowGestionnaire->setMenuBar(menubar);
        statusbar = new QStatusBar(MainWindowGestionnaire);
        statusbar->setObjectName(QStringLiteral("statusbar"));
        MainWindowGestionnaire->setStatusBar(statusbar);
        QWidget::setTabOrder(tableWidgetEmployes, pushButtonSupprimer);
        QWidget::setTabOrder(pushButtonSupprimer, pushButtonMaj);
        QWidget::setTabOrder(pushButtonMaj, pushButtonValider);
        QWidget::setTabOrder(pushButtonValider, lineEditNom);
        QWidget::setTabOrder(lineEditNom, lineEditPrenom);
        QWidget::setTabOrder(lineEditPrenom, lineEditCP);
        QWidget::setTabOrder(lineEditCP, lineEditVille);
        QWidget::setTabOrder(lineEditVille, lineEditAdresse);
        QWidget::setTabOrder(lineEditAdresse, lineEditMail);
        QWidget::setTabOrder(lineEditMail, radioButtonGestionnaire);
        QWidget::setTabOrder(radioButtonGestionnaire, radioButtonControleur);
        QWidget::setTabOrder(radioButtonControleur, lineEditTel);
        QWidget::setTabOrder(lineEditTel, lineEditTelPort);
        QWidget::setTabOrder(lineEditTelPort, lineEditLogin);

        menubar->addAction(menuFile->menuAction());
        menuFile->addAction(actionQUit);

        retranslateUi(MainWindowGestionnaire);

        tabWidgetGestionnaire->setCurrentIndex(2);


        QMetaObject::connectSlotsByName(MainWindowGestionnaire);
    } // setupUi

    void retranslateUi(QMainWindow *MainWindowGestionnaire)
    {
        MainWindowGestionnaire->setWindowTitle(QApplication::translate("MainWindowGestionnaire", "MainWindow", 0));
        actionQUit->setText(QApplication::translate("MainWindowGestionnaire", "Quit", 0));
        labelNomEmploye_2->setText(QApplication::translate("MainWindowGestionnaire", "Last Name", 0));
        labelPrenomEmploye->setText(QApplication::translate("MainWindowGestionnaire", "First Name", 0));
        pushButtonSupprimer->setText(QApplication::translate("MainWindowGestionnaire", "Fire", 0));
        labelCodePostal->setText(QApplication::translate("MainWindowGestionnaire", "Postal code", 0));
        labelVilleEmploye->setText(QApplication::translate("MainWindowGestionnaire", "City", 0));
        labelRueEmploye->setText(QApplication::translate("MainWindowGestionnaire", "Address", 0));
        labelMail->setText(QApplication::translate("MainWindowGestionnaire", "Mail", 0));
        labelTypeEmploye->setText(QApplication::translate("MainWindowGestionnaire", "Type", 0));
        radioButtonGestionnaire->setText(QApplication::translate("MainWindowGestionnaire", "Gestionnaire", 0));
        radioButtonControleur->setText(QApplication::translate("MainWindowGestionnaire", "Contr\303\264leur", 0));
        pushButtonMaj->setText(QApplication::translate("MainWindowGestionnaire", "Update", 0));
        labelTelEmploye_2->setText(QApplication::translate("MainWindowGestionnaire", "Cellphone", 0));
        labelLoginEmploye->setText(QApplication::translate("MainWindowGestionnaire", "Login", 0));
        labelCaracteresExiges->setText(QApplication::translate("MainWindowGestionnaire", "min.3 caract\303\250res ", 0));
        pushButtonValider->setText(QApplication::translate("MainWindowGestionnaire", "Add", 0));
        pushButtonMDP->setText(QApplication::translate("MainWindowGestionnaire", "update password", 0));
        labelTelEmploye->setText(QApplication::translate("MainWindowGestionnaire", "Phone", 0));
        tabWidgetGestionnaire->setTabText(tabWidgetGestionnaire->indexOf(tabPersonnel), QApplication::translate("MainWindowGestionnaire", "Employees", 0));
        label->setText(QApplication::translate("MainWindowGestionnaire", "validation :", 0));
        pushButtonRefuserProduit->setText(QApplication::translate("MainWindowGestionnaire", "\342\234\227", 0));
        pushButtonValiderProduit->setText(QApplication::translate("MainWindowGestionnaire", "\342\234\224", 0));
        label_2->setText(QApplication::translate("MainWindowGestionnaire", "nom :", 0));
        pushButtonAddProduit->setText(QApplication::translate("MainWindowGestionnaire", "+", 0));
        pushButtonDelProduit->setText(QApplication::translate("MainWindowGestionnaire", "-", 0));
        label_5->setText(QApplication::translate("MainWindowGestionnaire", "Product : ", 0));
        label_6->setText(QApplication::translate("MainWindowGestionnaire", "Categorie :", 0));
        label_4->setText(QApplication::translate("MainWindowGestionnaire", "nom :", 0));
        pushButtonAddCategorie->setText(QApplication::translate("MainWindowGestionnaire", "+", 0));
        pushButtonDelCategorie->setText(QApplication::translate("MainWindowGestionnaire", "-", 0));
        label_7->setText(QApplication::translate("MainWindowGestionnaire", "Shelf :", 0));
        label_3->setText(QApplication::translate("MainWindowGestionnaire", "nom :", 0));
        pushButtonAddRayon->setText(QApplication::translate("MainWindowGestionnaire", "+", 0));
        pushButtonDelRayon->setText(QApplication::translate("MainWindowGestionnaire", "-", 0));
        tabWidgetGestionnaire->setTabText(tabWidgetGestionnaire->indexOf(tabProduits), QApplication::translate("MainWindowGestionnaire", "Products", 0));
        labelControleur->setText(QApplication::translate("MainWindowGestionnaire", "Controleur", 0));
        pushButtonAddVisite->setText(QApplication::translate("MainWindowGestionnaire", "+", 0));
        pushButtonRmVisite->setText(QApplication::translate("MainWindowGestionnaire", "-", 0));
        labelProducteur->setText(QApplication::translate("MainWindowGestionnaire", "Producteur", 0));
        labelVIsite->setText(QApplication::translate("MainWindowGestionnaire", "Visite", 0));
        tabWidgetGestionnaire->setTabText(tabWidgetGestionnaire->indexOf(tabVisites), QApplication::translate("MainWindowGestionnaire", "Visits", 0));
        tabWidgetGestionnaire->setTabText(tabWidgetGestionnaire->indexOf(tabStatistiques), QApplication::translate("MainWindowGestionnaire", "Statistics", 0));
        menuFile->setTitle(QApplication::translate("MainWindowGestionnaire", "File", 0));
    } // retranslateUi

};

namespace Ui {
    class MainWindowGestionnaire: public Ui_MainWindowGestionnaire {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_MAINWINDOWGESTIONNAIRE_H
