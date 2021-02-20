package com.goutham.Tycoon.controller;

import com.goutham.Tycoon.model.User;
import com.goutham.Tycoon.services.AccountService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

@RestController
@RequestMapping("/users")
public class AccountController {

    @Autowired
    AccountService accountService;

    @PostMapping("/signup")
    public User signup(@RequestBody User newUser) {
        User user = accountService.getByUserName(newUser.getUserName());
        if (user != null) {
            return null;
        } else {
            return accountService.saveUser(user);
        }
    }
    @PostMapping("/login")
    public String login(@RequestBody User user) {
        User requestedUser=accountService.getByUserName(user.getUserName());

        if(requestedUser!=null){
            if(requestedUser.getPassword().equals(user.getPassword())){
                return "Success";
            }
            else
                return "Invalid Password";
        }
        else
            return   "Invalid user";
    }
}
