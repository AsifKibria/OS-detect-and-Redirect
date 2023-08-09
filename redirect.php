<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Check for iOS devices (iPhone and iPad)
if (preg_match('/iP(hone|ad)/i', $user_agent)) {
    header('Location: https://ios.example.com');
    exit;
} 
// Check for Android devices (mobile and tablet)
elseif (preg_match('/Android/i', $user_agent)) {
    header('Location: https://android.example.com');
    exit;
} 
// Assume all others are desktop
else {
    header('Location: https://desktop.example.com');
    exit;
}
?>