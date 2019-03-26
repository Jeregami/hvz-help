<?php
class Condition
{
  private $type, $table, $var, $value, $operation;

  function __construct($var, $operation, $value, $type, $table){
    $this->type = $type;
    $this->table = $table;
    $this->var = $var;
    $this->value = $value;
    $this->operation = $operation;  
  }
}
 ?>
