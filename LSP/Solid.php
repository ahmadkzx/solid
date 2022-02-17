<?php

class Car {
  public function getHealthStatus($isHaveScratch) {
    $healthStatus = 100;

    if ($isHaveScratch) {
      $healthStatus = $healthStatus - 10;
    }

    return $healthStatus;
  }
}

class PorscheCar extends Car {
  public function getHealthStatus($isHaveScratch) {
    $healthStatus = 100;

    if ($isHaveScratch) {
      $healthStatus = $healthStatus - 30;
    }

    return $healthStatus;
  }
}

function getCarHealthStatus(Car $car, $carName) {
  $healthStatus = $car->getHealthStatus(true);

  echo 'Your '.$carName.' health status is: '.$healthStatus;
}

getCarHealthStatus(new car(), 'BMW');
getCarHealthStatus(new PorscheCar(), 'Porsche');