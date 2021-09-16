<?php
/***************************************************************************
*
*   Kriptolist Script v1
*   -------------------------------------
*   Bu script platformumuzda ücretsiz olarak sunulmuştur.
*   -------------------------------------
*   Copyright 2021 - www.scriptler.org
*
***************************************************************************/
require_once __DIR__ . "/functions.php";

// site url
$config['site_url'] = 'https://kripto.local/';

// site üst menü linkleri - menüde yönlendirmek istediğiniz linkleri yazabilirsiniz.
$config['header_links'] = [
	'BLOG' => '#',
	'FORUM' => '#',
];

// site genel başlık
$config['site_title'] = 'Kriptolist';

// site genel açıklama
$config['site_description'] = 'Güncel Kripto Piyasası';

// site genel anahtar kelimeler
$config['site_keywords'] = 'kripto para,bitcoin';

// site genel borsa seçimi
$config['market'] = 'HUOBI';

// site genel coin dönüştürme karşılığı
$config['exchange'] = 'USDT';

// anasayfa coin listeleme limiti (json dosyası başlangıç-bitiş şeklinde çalışır)
$config['coinlist_limit'] = 25;
?>
