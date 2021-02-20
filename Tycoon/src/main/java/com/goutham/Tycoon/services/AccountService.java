package com.goutham.Tycoon.services;

import com.goutham.Tycoon.model.User;
import com.goutham.Tycoon.repository.AccountRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class AccountService {

    @Autowired
    AccountRepository accountRepository;

    public User getByUserName(String userName){
        return  accountRepository.findByUserName(userName);
    }
    public  User saveUser(User user){
        return accountRepository.save(user);
    }
}
