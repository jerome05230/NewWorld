import { Component, ViewChild, ElementRef } from '@angular/core';
import { NavController, IonicPage, NavParams } from 'ionic-angular';

import { AuthService } from '../../providers/auth-service/auth-service';
import { CarteService } from '../../providers/carte-service/carte-service';

import { LoginPage } from '../../pages/login/login';


declare var google;

@IonicPage()
@Component({
  selector: 'page-map',
  templateUrl: 'map.html'
})


export class MapPage {

@ViewChild('map') mapElement: ElementRef;
  map: any;
  start = 'gap, france';
  end = 'gap, france';
  directionsService = new google.maps.DirectionsService;
  directionsDisplay = new google.maps.DirectionsRenderer;

  
  username = '';
  email = '';

  //tableau des points de passage
  waypts = [];
  
  constructor(public nav: NavController, private auth: AuthService, public navParams: NavParams, private carte: CarteService) {
    let info = this.auth.getUserInfo();
    this.username = info['name'];
    this.email = info['email'];
    carte.load().subscribe(waypts =>{
      for (var item in waypts) {
      this.waypts[item]= {
      location:waypts[item]['location'],
      stopover:waypts[item]['stopover']
      };
      this.calculateAndDisplayRoute();
      }
    })

  }

  public logout() {
    this.auth.logout().subscribe(succ => {
      this.nav.push(LoginPage);
    });
  }

  ionViewDidLoad(){
    this.initMap();
  }

  initMap() {
    this.map = new google.maps.Map(this.mapElement.nativeElement, {
      zoom: 25,
      center: {lat: 44.556, lng: 6.079},
    });

    this.map.setTilt(45);
    this.directionsDisplay.setMap(this.map);
  }

  calculateAndDisplayRoute() {
    this.directionsService.route({
      origin: this.start,
      destination: this.end,
      waypoints: this.waypts,
      optimizeWaypoints: true,
      travelMode: 'DRIVING',
      drivingOptions: {departureTime: new Date(Date.now() + 1000*60*60),trafficModel: 'optimistic'}
    }, (response, status) => {
      if (status === 'OK') {
        this.directionsDisplay.setDirections(response);
      } else {
        window.alert('Directions request failed due to ' + status);
      }
    });
  }

}


