import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import { Observable } from 'rxjs/Rx';
import 'rxjs/add/operator/map';

import { ModelVisite } from '../../models/ModelVisite';

import { AuthService } from '../../providers/auth-service/auth-service';

/*
  Generated class for the CarteServiceProvider provider.

  See https://angular.io/docs/ts/latest/guide/dependency-injection.html
  for more info on providers and Angular 2 DI.
*/
@Injectable()
export class CarteService {

  id = '';

  jsonApiUrl = 'http://172.29.56.3/~jbaroncampos/NewWorld-JSON/carte.php';

  constructor(public http: Http, private auth: AuthService) {
  let info = this.auth.getUserInfo();
    this.id = info['id'];
  }

  load(): Observable<ModelVisite[]>{
  	return this.http.get(`${this.jsonApiUrl}?id=${this.id}`).map(res => <ModelVisite[]>res.json());
  }

}
