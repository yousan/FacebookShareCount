<?php
/**
 * Created by PhpStorm.
 * User: yousan
 * Date: 9/21/16
 * Time: 9:32 AM
 */
include 'FacebookShareCount.php';

main();


function main() {
	$appid = '';
	$secret = '';
	$url = 'http://www.yahoo.co.jp';
	$fsc = new FacebookShareCount($appid, $secret);
	$count = $fsc->get_fb_like_count($url);
	var_dump($count);
}