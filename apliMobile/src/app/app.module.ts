import { ErrorHandler, NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { IonicApp, IonicErrorHandler, IonicModule } from 'ionic-angular';
import { MyApp } from './app.component';
import { HttpModule } from '@angular/http';

import { AsyncLocalStorageModule } from 'angular-async-local-storage';

import { SplashScreen } from '@ionic-native/splash-screen';
import { StatusBar } from '@ionic-native/status-bar';

import { AuthService } from './../providers/auth-service/auth-service';
import { CarteService } from '../providers/carte-service/carte-service';
import { ValidateService } from '../providers/validate-service/validate-service';

import { LoginPage } from '../pages/login/login';
import { TabsPage } from '../pages/tabs/tabs';
import { MapPage } from '../pages/map/map';
import { VisitePage } from '../pages/visite/visite';
import { ModalContentPage } from '../pages/visite/visite';


@NgModule({
  declarations: [
    MyApp,
    VisitePage,
    MapPage,
    TabsPage,
    LoginPage, 
    ModalContentPage
  ],
  imports: [
    BrowserModule,
    IonicModule.forRoot(MyApp), 
    AsyncLocalStorageModule,
    HttpModule
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    VisitePage,
    MapPage,
    TabsPage,
    LoginPage, 
    ModalContentPage
  ],
  providers: [
    StatusBar,
    SplashScreen,
    {provide: ErrorHandler, useClass: IonicErrorHandler},
    AuthService,
    CarteService,
    ValidateService
  ]
})
export class AppModule {}