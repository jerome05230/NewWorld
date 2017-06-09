import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import {Observable} from 'rxjs/Observable';
import 'rxjs/add/operator/map';
 
import { ModelConnexion } from '../../models/ModelConnexion';

export class User {
  id: string;
  nom: string;
  prenom:string;
  email: string;
  username:string;
  password:string;
 
  constructor(nom: string, prenom:string, email: string, id: string, username: string, password: string) {
    this.nom = nom;
    this.prenom = prenom;
    this.email = email;
    this.id = id;
    this.username = username;
    this.password = password;
  }
}
 
@Injectable()
export class AuthService {
  
  jsonApiUrl = 'http://172.29.56.3/~jbaroncampos/NewWorld-JSON/connexion.php';

  currentUser: User;

  constructor(public http: Http) {
  }
 
  public login(credentials,userData) {
      if (credentials.username === null || credentials.password === null) {
      return Observable.throw("Please insert credentials");
    } else {
      return Observable.create(observer => {

        var id=userData.id; 
        var nom=userData.nom; 
        var prenom=userData.prenom; 
        var email=userData.mail;
        var username=userData.login;
        var password=userData.password;
  
        this.currentUser = new User(nom, prenom, email, id, username, password);

        let access = (credentials.username === username );

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

  load(usr,passwd): Observable<ModelConnexion[]>{
    return this.http.get(`${this.jsonApiUrl}?username=${usr}&password=${passwd}`).map(res => <ModelConnexion[]>res.json());
  }
}



