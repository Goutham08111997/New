import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { LoginSignupService } from 'src/app/services/login-signup.service';

@Component({
  selector: 'app-account',
  templateUrl: './account.component.html',
  styleUrls: ['./account.component.css']
})
export class AccountComponent implements OnInit {
  username: string;
  password: string;
  requestObj;
  errorMessage;
  constructor(private accountService: LoginSignupService, private router: Router) { }

  ngOnInit() {
  }
  login() {
    this.requestObj.username = this.username;
    this.requestObj.password = this.password;
    this.accountService.login(this.requestObj).subscribe(response => {
      if (response === "Success") {
        this.router.navigate(['startup']);
      }
      else {
        this.errorMessage = response;
      }
    });
  }
}
