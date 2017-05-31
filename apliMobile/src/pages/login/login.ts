import { Component } from '@angular/core';
import { NavController, AlertController, LoadingController, Loading, IonicPage } from 'ionic-angular';
import { AuthService } from '../../providers/auth-service/auth-service';


import { TabsPage } from '../../pages/tabs/tabs';

 
@IonicPage()
@Component({
  selector: 'page-login',
  templateUrl: 'login.html',
})
export class LoginPage {
  loading: Loading;
  registerCredentials = { username: '', password: '' };


  constructor(private nav: NavController, private auth: AuthService, private alertCtrl: AlertController, private loadingCtrl: LoadingController) {
   }


  public login() {
    this.showLoading()

	var userData = [];
   	this.auth.load(this.registerCredentials.username,this.registerCredentials.password).subscribe(usrData =>{
      userData = usrData;
	    this.auth.login(this.registerCredentials,userData).subscribe(allowed => {
	      if (allowed) {        
	       this.nav.push(TabsPage);
	      } else {
	        this.showError("Access Denied");
	      }
	    },
	      error => {
	        this.showError(error);
	      });
	})
  }
 
  showLoading() {
    this.loading = this.loadingCtrl.create({
      content: 'Please wait...',
      dismissOnPageChange: true
    });
    this.loading.present();
  }
 
  showError(text) {
    this.loading.dismiss();
 
    let alert = this.alertCtrl.create({
      title: 'Fail',
      subTitle: text,
      buttons: ['OK']
    });
    alert.present(prompt);
  }
}






