<?php

namespace KeywordSpinner;

use KeywordSpinner\DB;

class Dictionary {
  public $DB = null;

  public function __construct($dictionary = null) {
    $this->DB = new DB($dictionary);
  }

  public function getChildWords($word) {
    $sql = "
      SELECT c.word
      FROM (
        SELECT id FROM words
        WHERE id IN (SELECT id FROM parent_words)
        AND word = '$word'
      ) a
      , child_words b
      , words c
      WHERE a.id = b.parentWordId
      AND b.childWordId = c.id
    ";
    return $this->DB->sql($sql);
  }
}
