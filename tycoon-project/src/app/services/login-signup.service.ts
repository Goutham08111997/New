import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class LoginSignupService {

  constructor(private http:HttpClient) { }
  login(){
    const url="htt[://localhost";
   this.http.post<any>(url,null);
  }
}
