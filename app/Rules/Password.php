<?php
// filepath: app/Rules/Password.php
Password::defaults(function () {
    return Password::min(8)
        ->letters()
        ->mixedCase()
        ->numbers()
        ->uncompromised();
});
