package com.goutham.Tycoon.repository;

import com.goutham.Tycoon.model.User;
import org.springframework.data.jpa.repository.JpaRepository;

public interface AccountRepository extends JpaRepository<User,Integer> {
}
