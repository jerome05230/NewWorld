/********************************************************************************
** Form generated from reading UI file 'mainwindowcontroleur.ui'
**
** Created by: Qt User Interface Compiler version 5.3.2
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_MAINWINDOWCONTROLEUR_H
#define UI_MAINWINDOWCONTROLEUR_H

#include <QtCore/QVariant>
#include <QtWidgets/QAction>
#include <QtWidgets/QApplication>
#include <QtWidgets/QButtonGroup>
#include <QtWidgets/QHeaderView>
#include <QtWidgets/QMainWindow>
#include <QtWidgets/QMenu>
#include <QtWidgets/QMenuBar>
#include <QtWidgets/QStatusBar>
#include <QtWidgets/QWidget>

QT_BEGIN_NAMESPACE

class Ui_MainWindowControleur
{
public:
    QAction *actionQuit;
    QWidget *centralwidget;
    QMenuBar *menubar;
    QMenu *menuFile;
    QStatusBar *statusbar;

    void setupUi(QMainWindow *MainWindowControleur)
    {
        if (MainWindowControleur->objectName().isEmpty())
            MainWindowControleur->setObjectName(QStringLiteral("MainWindowControleur"));
        MainWindowControleur->resize(800, 600);
        actionQuit = new QAction(MainWindowControleur);
        actionQuit->setObjectName(QStringLiteral("actionQuit"));
        centralwidget = new QWidget(MainWindowControleur);
        centralwidget->setObjectName(QStringLiteral("centralwidget"));
        MainWindowControleur->setCentralWidget(centralwidget);
        menubar = new QMenuBar(MainWindowControleur);
        menubar->setObjectName(QStringLiteral("menubar"));
        menubar->setGeometry(QRect(0, 0, 800, 27));
        menuFile = new QMenu(menubar);
        menuFile->setObjectName(QStringLiteral("menuFile"));
        MainWindowControleur->setMenuBar(menubar);
        statusbar = new QStatusBar(MainWindowControleur);
        statusbar->setObjectName(QStringLiteral("statusbar"));
        MainWindowControleur->setStatusBar(statusbar);

        menubar->addAction(menuFile->menuAction());
        menuFile->addAction(actionQuit);

        retranslateUi(MainWindowControleur);

        QMetaObject::connectSlotsByName(MainWindowControleur);
    } // setupUi

    void retranslateUi(QMainWindow *MainWindowControleur)
    {
        MainWindowControleur->setWindowTitle(QApplication::translate("MainWindowControleur", "MainWindow", 0));
        actionQuit->setText(QApplication::translate("MainWindowControleur", "Quit", 0));
        menuFile->setTitle(QApplication::translate("MainWindowControleur", "File", 0));
    } // retranslateUi

};

namespace Ui {
    class MainWindowControleur: public Ui_MainWindowControleur {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_MAINWINDOWCONTROLEUR_H
