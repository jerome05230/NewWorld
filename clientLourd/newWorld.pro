#-------------------------------------------------
#
# Project created by QtCreator 2016-12-16T13:52:44
#
#-------------------------------------------------

QT       += core gui sql

greaterThan(QT_MAJOR_VERSION, 4): QT += widgets

TARGET = newWorld
TEMPLATE = app


SOURCES += main.cpp\
    mainwindowgestionnaire.cpp \
    mainwindowcontroleur.cpp \
    dialogconnexion.cpp

HEADERS  += \
    mainwindowgestionnaire.h \
    mainwindowcontroleur.h \
    dialogconnexion.h

FORMS    += \
    mainwindowgestionnaire.ui \
    mainwindowcontroleur.ui \
    dialogconnexion.ui
