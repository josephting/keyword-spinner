<?php

namespace KeywordSpinner\Spinner;

class AnalyzerPayload {
  public $analyzer = "kuromoji";
  public $text = null;

  public function __construct($text) {
    $this->text = $text;
  }

  public function json() {
    return json_encode($this);
  }
}
