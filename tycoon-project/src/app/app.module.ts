import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { AccountComponent } from './components/account/account.component';
import { StartupComponent } from './components/startup/startup.component';
import { GrowthanalyzerComponent } from './components/growthanalyzer/growthanalyzer.component';
import { RevenuemodelComponent } from './components/revenuemodel/revenuemodel.component';
import { AppRoutingModule } from './app-routing.module';
import { NavbarModule,WavesModule} from 'angular-bootstrap-md'; 
import {HttpClientModule} from '@angular/common/http';
import { CarouselModule } from 'ngx-bootstrap/carousel';
@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    AccountComponent,
    StartupComponent,
    GrowthanalyzerComponent,
    RevenuemodelComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    NavbarModule,
    WavesModule,
    HttpClientModule,
    CarouselModule

  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
