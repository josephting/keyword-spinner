<?php

namespace KeywordSpinner\Spinner;

use KeywordSpinner\Spinner\AnalyzerPayload;
use Curl\Curl;

class WordAnalyzer {
  public $text;
  private $analyzerEndpoint = 'http://localhost:9200/_analyze';
  // private $analyzerEndpoint = 'http://requestb.in/q7g9wtq7';
  private $curl;

  public function __construct($text = null) {
    $this->text = $text;
    $this->curl = new Curl;
    $this->curl->setHeader('Content-Type', 'application/json');
  }

  public function analyze() {
    $payload = new AnalyzerPayload($this->text);
    $this->curl->post($this->analyzerEndpoint, $payload->json());
    return json_decode($this->curl->response);
  }
}
