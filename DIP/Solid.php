<?php

interface DBConnectionInterface {
  public function connect();
}

class MYSQLConnection implements DBConnectionInterface {
  public function connect() {
    echo 'MYSQL database connected...';
  }
}

class User {
  private $connection;

  public function __construct(DBConnectionInterface $connection) {
    $this->$connection = $connection;
  }

  public function resetPassword() {
    $this->$connection->connect();
  }
}