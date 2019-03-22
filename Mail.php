<?php
/**
 *
 */
class Mail
{
  private $to, $body, $subject;
  private $From = "cuhvz@cuhvz.com";
  public $WordWrap = 75;

  public static $ACTIVATION = 1;
  public static $PASS_RESET = 2;
  public static $USERNAME = 3;

  function __construct($to, $subject = "", $body = ""){
    $this->to = $to;
    $this->subject = $subject;
    $this->body = $body;
  }

  public function setTo($to) {
    $this->to = $to;
  }

  public function setFrom($from) {
    $this->From = $from;
  }

  public function setBody($body) {
    $this->body = $body;
  }

  public function setSubject($subject) {
    $this->subject = $subject;
  }

  public function send() {

  }

  public function build($emailCode) {
    $returnValue;
    switch ($emailCode) {
      case 1:
        self::sendActivation();
        break;
      case 2:
        self::sendPassReset();
        break;
      case 3:
        self::sendUsername();
        break;
    }
  }

  private function sendActivation() {
    print_r("Activation\n");
  }

  private function sendPassReset() {
    print_r("PassReset\n");
  }

  private function sendUsername() {
    print_r("Username\n");
  }

  public function toString() {
    $to = $this->to;
    $from = $this->From;
    $subject = $this->subject;
    $body = $this->body;
    $line1 = "To: $to     From: $from";
    $line2 = "Subject: $subject";
    $line3 = "Body: $body";
    return "$line1\n$line2\n$line3\n";
  }
}

 ?>
