import { Component } from '@angular/core';

import { MapPage } from '../map/map';
import { VisitePage } from '../visite/visite';

@Component({
  templateUrl: 'tabs.html'
})
export class TabsPage {

  tab1Root = MapPage;
  tab2Root = VisitePage;

  constructor() {

  }
}
