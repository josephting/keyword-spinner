<?php

namespace KeywordSpinner;

use \PDO;

class DB {
  private $file = __DIR__ . '/../keywords.db';
  private $db = null;

  public function __construct($dictionary = null) {
    if (isset($dictionary)) {
      $this->file = $dictionary;
    }

    $this->db = new PDO('sqlite:' . $this->file);
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public function getDBConnection() {
    return $this->db;
  }

  public function sql($sql) {
    $stmt = $this->db->query($sql);
    return $stmt->fetchAll();
  }
}
