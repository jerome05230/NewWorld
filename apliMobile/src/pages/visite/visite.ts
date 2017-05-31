import { Component,} from '@angular/core';
import { NavController, NavParams } from 'ionic-angular';

import { AuthService } from '../../providers/auth-service/auth-service';
import { VisiteService } from '../../providers/visite-service/visite-service';

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

  constructor(public nav: NavController, private auth: AuthService, public navParams: NavParams, private visiteService: VisiteService) {
  let info = this.auth.getUserInfo();
    this.username = info['name'];
    this.email = info['email'];
    visiteService.load().subscribe(waypts =>{
      this.waypts = waypts;
      console.log (waypts);
    })
  }

public logout() {
    this.auth.logout().subscribe(succ => {
      this.nav.push(LoginPage);
    });
  }

}