<?php

  class UserService {

    protected $userData;
    protected $userId;
    public function __construct($userData){
      $this->userData = $userData;
      $this->userId = 0;
    }

    public function call(){
      $this->create();
    }

    public function create(){
      try {
      } catch (Exception $e) {

      }
    }

    public function sendMail(){
      try {
        if($this->userId > 0){
          return $this->userId;
        }else{
          return 0;
        }
      } catch (Exception $e) {

      }
    }
  }