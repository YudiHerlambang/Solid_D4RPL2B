<?php

class WhatsApp implements VideoGroupManager {
    public function chat(): void {
        echo "WhatsApp: Chatting...\n";
    }

    public function sendPhotosAndVideos(): void {
        echo "WhatsApp: Sending photos and videos...\n";
    }

    public function callGroupVideo(): void {
        echo "WhatsApp: Calling group video...\n";
    }
}

?>
