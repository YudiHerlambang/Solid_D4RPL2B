<?php

require_once('SocialMedia.php');
require_once('VideoGroupManager.php');
require_once('WhatsApp.php');
require_once('PostMediaManager.php');
require_once('Instagram.php');

// Menggunakan WhatsApp
$whatsapp = new WhatsApp();
$whatsapp->chat();
$whatsapp->sendPhotosAndVideos();
$whatsapp->callGroupVideo();

// Menggunakan Instagram
$instagram = new Instagram();
$instagram->chat();
$instagram->sendPhotosAndVideos();
$instagram->publishPost();

?>
