import { NgModule } from '@angular/core';

import { Routes, RouterModule } from '@angular/router';
import { AccountComponent } from './components/account/account.component';
import { GrowthanalyzerComponent } from './components/growthanalyzer/growthanalyzer.component';
import { RevenuemodelComponent } from './components/revenuemodel/revenuemodel.component';
import { StartupComponent } from './components/startup/startup.component';

const routes: Routes = [
    { path: '', redirectTo: '/login', pathMatch: 'full' },
    { path: 'login', component: AccountComponent },
    { path: 'startup', component: StartupComponent },
    { path: 'revenuemodel', component: RevenuemodelComponent },
    { path: 'analyzegrowth', component: GrowthanalyzerComponent },


];

@NgModule({

    imports: [RouterModule.forRoot(routes)],

    exports: [RouterModule]

})

export class AppRoutingModule { }