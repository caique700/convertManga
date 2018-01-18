<?php
include "config.php";
use src\Services\CaptureTextImage;

$args = $argv;
$path = $args[1];

$captureTextImage = new CaptureTextImage();

$captureTextImage->captureBalon($path);

