<?php

class Instagram implements PostMediaManager {
    public function chat(): void {
        echo "Instagram: Chatting...\n";
    }

    public function sendPhotosAndVideos(): void {
        echo "Instagram: Sending photos and videos...\n";
    }

    public function publishPost(): void {
        echo "Instagram: Publishing a post...\n";
    }
}

?>
