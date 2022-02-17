<?php

class MYSQLConnection {
  public function connect() {
    echo 'MYSQL database connected...';
  }
}

class User {
  private $connection;

  public function __construct(MYSQLConnection $connection) {
    $this->$connection = $connection;
  }

  public function resetPassword() {
    $this->$connection->connect();
  }
}