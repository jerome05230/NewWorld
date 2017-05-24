/****************************************************************************
** Meta object code from reading C++ file 'mainwindowgestionnaire.h'
**
** Created by: The Qt Meta Object Compiler version 67 (Qt 5.3.2)
**
** WARNING! All changes made in this file will be lost!
*****************************************************************************/

#include "mainwindowgestionnaire.h"
#include <QtCore/qbytearray.h>
#include <QtCore/qmetatype.h>
#if !defined(Q_MOC_OUTPUT_REVISION)
#error "The header file 'mainwindowgestionnaire.h' doesn't include <QObject>."
#elif Q_MOC_OUTPUT_REVISION != 67
#error "This file was generated using the moc from 5.3.2. It"
#error "cannot be used with the include files from this version of Qt."
#error "(The moc has changed too much.)"
#endif

QT_BEGIN_MOC_NAMESPACE
struct qt_meta_stringdata_MainWindowGestionnaire_t {
    QByteArrayData data[15];
    char stringdata[417];
};
#define QT_MOC_LITERAL(idx, ofs, len) \
    Q_STATIC_BYTE_ARRAY_DATA_HEADER_INITIALIZER_WITH_OFFSET(len, \
    qptrdiff(offsetof(qt_meta_stringdata_MainWindowGestionnaire_t, stringdata) + ofs \
        - idx * sizeof(QByteArrayData)) \
    )
static const qt_meta_stringdata_MainWindowGestionnaire_t qt_meta_stringdata_MainWindowGestionnaire = {
    {
QT_MOC_LITERAL(0, 0, 22),
QT_MOC_LITERAL(1, 23, 23),
QT_MOC_LITERAL(2, 47, 0),
QT_MOC_LITERAL(3, 48, 24),
QT_MOC_LITERAL(4, 73, 28),
QT_MOC_LITERAL(5, 102, 30),
QT_MOC_LITERAL(6, 133, 24),
QT_MOC_LITERAL(7, 158, 31),
QT_MOC_LITERAL(8, 190, 30),
QT_MOC_LITERAL(9, 221, 29),
QT_MOC_LITERAL(10, 251, 29),
QT_MOC_LITERAL(11, 281, 33),
QT_MOC_LITERAL(12, 315, 31),
QT_MOC_LITERAL(13, 347, 32),
QT_MOC_LITERAL(14, 380, 36)
    },
    "MainWindowGestionnaire\0on_actionQUit_triggered\0"
    "\0on_pushButtonMDP_clicked\0"
    "on_pushButtonValider_clicked\0"
    "on_pushButtonSupprimer_clicked\0"
    "on_pushButtonMaj_clicked\0"
    "on_tableWidgetEmployees_clicked\0"
    "actDesactBoutonsAjouterEmploye\0"
    "actDesactBoutonsUpdateEmploye\0"
    "on_pushButtonAddRayon_clicked\0"
    "on_pushButtonAddCategorie_clicked\0"
    "on_pushButtonAddProduit_clicked\0"
    "on_tableWidgetRayons_itemClicked\0"
    "on_tableWidgetCategories_itemClicked"
};
#undef QT_MOC_LITERAL

static const uint qt_meta_data_MainWindowGestionnaire[] = {

 // content:
       7,       // revision
       0,       // classname
       0,    0, // classinfo
      13,   14, // methods
       0,    0, // properties
       0,    0, // enums/sets
       0,    0, // constructors
       0,       // flags
       0,       // signalCount

 // slots: name, argc, parameters, tag, flags
       1,    0,   79,    2, 0x08 /* Private */,
       3,    0,   80,    2, 0x08 /* Private */,
       4,    0,   81,    2, 0x08 /* Private */,
       5,    0,   82,    2, 0x08 /* Private */,
       6,    0,   83,    2, 0x08 /* Private */,
       7,    0,   84,    2, 0x08 /* Private */,
       8,    0,   85,    2, 0x08 /* Private */,
       9,    0,   86,    2, 0x08 /* Private */,
      10,    0,   87,    2, 0x08 /* Private */,
      11,    0,   88,    2, 0x08 /* Private */,
      12,    0,   89,    2, 0x08 /* Private */,
      13,    0,   90,    2, 0x08 /* Private */,
      14,    0,   91,    2, 0x08 /* Private */,

 // slots: parameters
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,
    QMetaType::Void,

       0        // eod
};

void MainWindowGestionnaire::qt_static_metacall(QObject *_o, QMetaObject::Call _c, int _id, void **_a)
{
    if (_c == QMetaObject::InvokeMetaMethod) {
        MainWindowGestionnaire *_t = static_cast<MainWindowGestionnaire *>(_o);
        switch (_id) {
        case 0: _t->on_actionQUit_triggered(); break;
        case 1: _t->on_pushButtonMDP_clicked(); break;
        case 2: _t->on_pushButtonValider_clicked(); break;
        case 3: _t->on_pushButtonSupprimer_clicked(); break;
        case 4: _t->on_pushButtonMaj_clicked(); break;
        case 5: _t->on_tableWidgetEmployees_clicked(); break;
        case 6: _t->actDesactBoutonsAjouterEmploye(); break;
        case 7: _t->actDesactBoutonsUpdateEmploye(); break;
        case 8: _t->on_pushButtonAddRayon_clicked(); break;
        case 9: _t->on_pushButtonAddCategorie_clicked(); break;
        case 10: _t->on_pushButtonAddProduit_clicked(); break;
        case 11: _t->on_tableWidgetRayons_itemClicked(); break;
        case 12: _t->on_tableWidgetCategories_itemClicked(); break;
        default: ;
        }
    }
    Q_UNUSED(_a);
}

const QMetaObject MainWindowGestionnaire::staticMetaObject = {
    { &QMainWindow::staticMetaObject, qt_meta_stringdata_MainWindowGestionnaire.data,
      qt_meta_data_MainWindowGestionnaire,  qt_static_metacall, 0, 0}
};


const QMetaObject *MainWindowGestionnaire::metaObject() const
{
    return QObject::d_ptr->metaObject ? QObject::d_ptr->dynamicMetaObject() : &staticMetaObject;
}

void *MainWindowGestionnaire::qt_metacast(const char *_clname)
{
    if (!_clname) return 0;
    if (!strcmp(_clname, qt_meta_stringdata_MainWindowGestionnaire.stringdata))
        return static_cast<void*>(const_cast< MainWindowGestionnaire*>(this));
    return QMainWindow::qt_metacast(_clname);
}

int MainWindowGestionnaire::qt_metacall(QMetaObject::Call _c, int _id, void **_a)
{
    _id = QMainWindow::qt_metacall(_c, _id, _a);
    if (_id < 0)
        return _id;
    if (_c == QMetaObject::InvokeMetaMethod) {
        if (_id < 13)
            qt_static_metacall(this, _c, _id, _a);
        _id -= 13;
    } else if (_c == QMetaObject::RegisterMethodArgumentMetaType) {
        if (_id < 13)
            *reinterpret_cast<int*>(_a[0]) = -1;
        _id -= 13;
    }
    return _id;
}
QT_END_MOC_NAMESPACE
