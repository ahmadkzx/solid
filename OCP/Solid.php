<?php

interface PaymentInterface {
  public function pay();
}

class BitcoinPaymentMethod implements PaymentInterface {
  public function pay() {
    echo 'Paid with Bitcoin';
  }
}

class CashPaymentMethod implements PaymentInterface {
  public function pay() {
    echo 'Paid with Cash';
  }
}

/* Adding new payment method:

class CardPaymentMethod implements PaymentInterface {
  public function pay() {
    echo 'Paid with Card';
  }
}

*/

class Payment {
  public function begin(PaymentInterface $payment) {
    $payment->pay();
  }
}