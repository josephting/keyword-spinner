<?php

require_once __DIR__ . "/vendor/autoload.php";

use KeywordSpinner\Spinner\WordAnalyzer;
use KeywordSpinner\Spinner\Spinner;

$wa = new WordAnalyzer("未経験OK 上場・大手企業 制服有り 残業多め 急募 禁煙 土日祝日が休み 週5勤務 第2新卒歓迎 ブランクOK 英語不要 OAスキル不要 20代活躍中 30代活躍中 派遣スタッフさん活躍中 メーカー関連");
$wa = $wa->analyze();
var_dump($wa);
foreach ($wa->tokens as $w) {
  // var_dump($w);
  $spinner = new Spinner($w->token);
  $result = $spinner->getRandomReplacement();
  // if (count($result) > 0) {
    var_dump($result);
  // }
}
// $result = $wa->getReplacement();
// var_dump($wa);
