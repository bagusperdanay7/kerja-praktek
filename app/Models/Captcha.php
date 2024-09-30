<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Captcha extends Model
{
    use HasFactory;
    session_start();
$captcha = '';
$captchaHeight = 60;
$captchaWidth = 140;
$totalCharacters = 6; 
$possibleLetters = '123456789mnbvcxzasdfghjklpoiuytrewwq';
$captchaFont = 'monofont.ttf'; 
$randomDots = 50;
$randomLines = 25;
$textColor = "6d87cf";
$noiseColor = "6d87cf"; 
$character = 0;
while ($character < $totalCharacters) { 
	$captcha .= substr($possibleLetters, mt_rand(0, strlen($possibleLetters)-1), 1);
	$character++;
} 
$captchaFontSize = $captchaHeight * 0.65;
$captchaImage = @imagecreate(
	$captchaWidth,
	$captchaHeight
); 
$backgroundColor = imagecolorallocate(
 $captchaImage,
 255,
 255,
 255
); 
$arrayTextColor = hextorgb($textColor);
$textColor = imagecolorallocate(
 $captchaImage,
 $arrayTextColor['red'],
 $arrayTextColor['green'],
 $arrayTextColor['blue']
); 
$arrayNoiseColor = hextorgb($noiseColor);
$imageNoiseColor = imagecolorallocate(
 $captchaImage,
 $arrayNoiseColor['red'],
 $arrayNoiseColor['green'],
 $arrayNoiseColor['blue']
); 
for( $captchaDotsCount=0; $captchaDotsCount<$randomDots; $captchaDotsCount++ ) {
imagefilledellipse(
	 $captchaImage,
	 mt_rand(0,$captchaWidth),
	 mt_rand(0,$captchaHeight),
	 2,
	 3,
	 $imageNoiseColor
 );
}
for( $captchaLinesCount=0; $captchaLinesCount<$randomLines; $captchaLinesCount++ ) {
	imageline(
		$captchaImage,
		mt_rand(0,$captchaWidth),
		mt_rand(0,$captchaHeight),
		mt_rand(0,$captchaWidth),
		mt_rand(0,$captchaHeight),
		$imageNoiseColor
	);
} 
$text_box = imagettfbbox(
	$captchaFontSize,
	0,
	$captchaFont,
	$captcha
); 
$x = ($captchaWidth - $text_box[4])/2;
$y = ($captchaHeight - $text_box[5])/2;
imagettftext(
	$captchaImage,
	$captchaFontSize,
	0,
	$x,
	$y,
	$textColor,
	$captchaFont,
	$captcha
); 
header('Content-Type: image/jpeg'); 
imagejpeg($captchaImage); 
imagedestroy($captchaImage);
$_SESSION['captcha'] = $captcha; 
function hextorgb ($hexstring){
	$integar = hexdec($hexstring);
	return array(
		"red" => 0xFF & ($integar >> 0x10),
		"green" => 0xFF & ($integar >> 0x8),
		"blue" => 0xFF & $integar
	);
}
