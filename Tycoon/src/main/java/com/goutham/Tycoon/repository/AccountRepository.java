package com.goutham.Tycoon.repository;

import com.goutham.Tycoon.model.User;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface AccountRepository extends JpaRepository<User,Integer> {
    User findByUserName(String userName);
}
