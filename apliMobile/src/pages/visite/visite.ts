import { Component,} from '@angular/core';
import { NavController, NavParams, ModalController, Platform, ViewController } from 'ionic-angular';

import { AuthService } from '../../providers/auth-service/auth-service';
import { CarteService } from '../../providers/carte-service/carte-service';
import { ValidateService } from '../../providers/validate-service/validate-service';

import { LoginPage } from '../../pages/login/login';

@Component({
  selector: 'page-visite',
  templateUrl: 'visite.html'
})


export class VisitePage {

  username = '';
  email = '';

  //tableau des points de passage
  waypts = [];

  constructor(public nav: NavController,
  private auth: AuthService,
  public navParams: NavParams,
  private carteService: CarteService,
  public modalCtrl: ModalController) {
    let info = this.auth.getUserInfo();
      this.username = info['name'];
      this.email = info['email'];
      carteService.load().subscribe(waypts =>{
        this.waypts = waypts;
      })
    }

  public logout() {
    this.auth.logout().subscribe(succ => {
      this.nav.push(LoginPage);
    });
  }

  openModal(visiteNum) {
    let modal = this.modalCtrl.create(ModalContentPage, visiteNum);
    modal.present();
  }

}

@Component({
  templateUrl: 'modal-content.html'
})

export class ModalContentPage {
  
  //tableau des points de passage
  validationVisite = {commentaire: '' };
  waypts = [];
  visite = [];
  constructor(
    public platform: Platform,
    public params: NavParams,
    public viewCtrl: ViewController, 
    private carteService: CarteService, 
    private validateService: ValidateService
  ) {
    carteService.load().subscribe(waypts =>{
        this.waypts = waypts;
        var visites = this.waypts;
        console.log("visites:", this.waypts);
        this.visite = visites[this.params.get('visId')];
        console.log(this.visite)
    })
  };

  dismiss() {
    this.viewCtrl.dismiss();
  }

 public validate(id) {
    this.validateService.validate(this.validationVisite.commentaire,id);
  }
}