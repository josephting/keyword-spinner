<?php

require_once __DIR__ . "/vendor/autoload.php";

use KeywordSpinner\Spinner\WordAnalyzer;
use KeywordSpinner\Spinner\Spinner;

$input = json_decode(file_get_contents('php://input'), true);

if (isset($input['key']) && $input['key'] == 'hresocia') {
  if (isset($input['text'])) {
    $text = $input['text'];
    $wa = new WordAnalyzer($text);
    $wa = $wa->analyze();
    foreach ($wa->tokens as $w) {
      $spinner = new Spinner($w->token);
      $result = $spinner->getRandomReplacement();
      if (!is_null($result)) {
        $text = mb_substr_replace($text, $result, $w->start_offset, $w->end_offset - $w->start_offset);
      }
    }

    echo json_encode(array(
      "success" => true,
      "original" => $input['text'],
      "spun" => $text
    ), JSON_UNESCAPED_UNICODE);
  } else {
    echo json_encode(array(
      "success" => false,
      "error" => "text parameter not found"
    ));
  }
}

function mb_substr_replace($str, $replace, $offset, $length) {
  return mb_substr($str, 0, $offset) . $replace . mb_substr($str, $offset + $length);
}
