<?php

interface AnimalInterface {
  public function walk();
  public function fly();
}

class Parrot implements AnimalInterface {
  public function walk() {
    echo 'im walking...';
  }

  public function fly() {
    echo 'im flying...';
  }
}

class Penguin implements AnimalInterface {
  public function walk() {
    echo 'im walking...';
  }

  public function fly() {
    throw new Exception('sorry i can not fly...');
  }
}
