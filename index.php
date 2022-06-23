<?php

// ビットコインの価格をAPIで取得してみた | imoniの開発Blog https://imoni.net/blog/00xx/0053.html
// ファイルの中身を文字列で読み込む
$content = file_get_contents("https://api.bitflyer.jp/v1/ticker?product_code=BTC_JPY");
// json形式でデコード。第2引数をtrueにして連想配列化。
$data = json_decode($content);
date_default_timezone_set('Asia/Tokyo');
echo date("Y/m/d H:i:s")."現在のビットコイン価格は"."<br>";
echo number_format($data->ltp)."円。";

