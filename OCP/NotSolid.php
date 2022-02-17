<?php

class Payment {
  public function begin($receipt) {
    if ($receipt->method == 'bitcoin') {
      $this->payWithBitcoin();

    } else if ($receipt->method == 'cash') {
      $this->payWithCash();

    } /* Adding new payment method: 

    else if ($receipt->method == 'card') {
      $this->payWithCard();
    }

    */
  }

  public function payWithBitcoin() {
    echo 'Paid with Bitcoin';
  }

  public function payWithCash() {
    echo 'Paid with Cash';
  }

  /* Adding new payment method: 

  public function payWithCard() {
    echo 'Paid with Card';
  }

  */
}