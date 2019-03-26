<?php
class Querry{
  private $fields, $values, $type, $table;
  public $conditions;

  function __construct($type, $fields, $table, $values) {
    $this->type = $type;
    $this->fields = $fields;
    $this->table = $table;
    $this->values = $values;
  }

  private function buildFields() {

  }

  private function buildValues() {

  }

  private function buildConditions() {

  }

  public function getFields() {
    return $fields;
  }

  public function getvalues() {
    return $values;
  }

  public function getType() {
    return $type;
  }

  public function getTable() {
    return $table;
  }

  public function getQuerry() {

  }

  public function andCondition($condition) {

  }

  public function orCondition($condition) {

  }

  public function setCondition($condition) {
    
  }
}
 ?>
