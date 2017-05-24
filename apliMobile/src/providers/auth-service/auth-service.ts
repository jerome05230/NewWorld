import { Injectable } from '@angular/core';
import {Observable} from 'rxjs/Observable';
import 'rxjs/add/operator/map';
 
export class User {
  id: string;
  nom: string;
  prenom:string;
  email: string;
 
  constructor(nom: string, prenom:string, email: string, id: string) {
    this.nom = nom;
    this.prenom = prenom;
    this.email = email;
    this.id = id;
  }
}
 
@Injectable()
export class AuthService {
  currentUser: User;
  jsonApiUrl = 'http://172.29.56.3/~jbaroncampos/public_html/NewWorld-JSON/visite.php';
 
  public login(credentials) {
      if (credentials.username === null || credentials.password === null) {
      return Observable.throw("Please insert credentials");
    } else {
      return Observable.create(observer => {
        // At this point make a request to your backend to make a real check!
        let access = (credentials.username === "pass" && credentials.password === "pass");
        var nom="bonjour"; //a compléter;
        var prenom="bonjour"; //a compléter;
        var email="bonjour"; //a compléter;
        var id="bonjour"; //a compléter;

        this.currentUser = new User(nom, prenom, email, id);

        observer.next(access);
        observer.complete();
      });
    }
  }
 
  public register(credentials) {
    if (credentials.email === null || credentials.password === null) {
      return Observable.throw("Please insert credentials");
    } else {
      // At this point store the credentials to your backend!
      return Observable.create(observer => {
        observer.next(true);
        observer.complete();
      });
    }
  }
 
  public getUserInfo() : User {
    return this.currentUser;
  }
 
  public logout() {
    return Observable.create(observer => {
      this.currentUser = null;
      observer.next(true);
      observer.complete();
    });
  }
}



