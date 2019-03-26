<?php
class Code{
  private $name, $locationID, $hex, $effect, $sideEffect, $singleUse, $numUsers, $expiration, $used, $userID, $codeID, $timeUsed;

  function __construct($name, $hex, $effect){
    $this->name = $name;
    $this->hex = $hex;
    $this->effect = $effect;
  }

  public function getName() {
    return $name;
  }

  public function getLocationID() {
    return $locationID;
  }

  public function getHex() {
    return $locationID;
  }

  public function getEffect() {
    return $effect;
  }

  public function getSideEffect() {
    return $sideEffect;
  }

  public function getSingleUse() {
    return $singleUse;
  }

  public function getNumUsers() {
    return $numUsers;
  }

  public function getExpiration() {
    return $expiration;
  }

  public function getUsed() {
    return $used;
  }

  public function getUserID() {
    return $userID;
  }

  public function getCodeID() {
    return $codeID;
  }

  public function getTimeUsed() {
    return $timeUsed;
  }

  public function setCode($data) {

  }

  public function getQuerry() {

  }
}

 ?>
