<?php

namespace KeywordSpinner\Spinner;

use KeywordSpinner\Dictionary;

class Spinner {
  public $word;
  private $replacementWords;

  public function __construct($word = null) {
    $this->word = $word;
    $this->dictionary = new Dictionary;
  }

  public function getReplacement() {
    $this->replacementWords = $this->dictionary->getChildWords($this->word);
    return $this->replacementWords;
  }

  public function getRandomReplacement() {
    $this->replacementWords = $this->dictionary->getChildWords($this->word);
    if (count($this->replacementWords) < 1) {
      return null;
    }

    return $this->replacementWords[mt_rand(0, count($this->replacementWords)-1)][0];
  }
}
