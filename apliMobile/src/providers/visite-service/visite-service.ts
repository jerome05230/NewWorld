import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import { Observable } from 'rxjs/Rx';
import 'rxjs/add/operator/map';

import { ModelVisite } from '../../models/ModelVisite';

/*
  Generated class for the VisiteServiceProvider provider.

  See https://angular.io/docs/ts/latest/guide/dependency-injection.html
  for more info on providers and Angular 2 DI.
*/
@Injectable()
export class VisiteService {

  jsonApiUrl = 'http://172.29.56.3/~jbaroncampos/public_html/NewWorld-JSON/visite.php';

  constructor(public http: Http) {
    console.log('Hello VisiteServiceProvider Provider');
  }

  load(): Observable<ModelVisite[]>{
  	return this.http.get(`${this.jsonApiUrl}?idControleur=2`).map(res => <ModelVisite[]>res.json());
  }

}
