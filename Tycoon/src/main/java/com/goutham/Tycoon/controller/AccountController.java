package com.goutham.Tycoon.controller;

import com.goutham.Tycoon.model.User;
import com.goutham.Tycoon.services.AccountService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("users")
public class AccountController {

    @Autowired
    AccountService accountService;
    @PostMapping("/")
    public User signup(@RequestBody User newUser){
       User user= accountService.getByUserName(newUser.getUserName());
       if(user!=null){
         return  null;
       }
       else{
           return  accountService.saveUser(user);
       }



    }
}
