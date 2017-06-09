import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import {Observable} from 'rxjs/Observable';
import 'rxjs/add/operator/map';
 
import { ModelConnexion } from '../../models/ModelConnexion';

 
@Injectable()
export class ValidateService {
  
  jsonApiUrl = 'http://172.29.56.3/~jbaroncampos/NewWorld-JSON/validation.php';

  constructor(public http: Http) {
  }
 
  validate(commentaire,id){
   console.log(id,commentaire);
    return this.http.get(`${this.jsonApiUrl}?commentaire=${commentaire}&valide=1&id=${id}`);
  }
}



