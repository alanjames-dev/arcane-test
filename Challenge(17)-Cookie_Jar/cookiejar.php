<?php
$cookie_name = "flag";
$cookie_value = "QXJjYW5le2MwMGsxM3NfNHIzX3Q0c3R5fQ==";
setcookie($cookie_name, $cookie_value, time()+10, '/');
?>
<html>
<head>
    <style>
        img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
        display: none;}
    </style>
</head>
<body bgcolor="black">
    <img src="cookie.png" alt="Cookie Missing" style="display:block; margin-left: auto; margin-right: auto; vertical-align:middle">
</body>
</html>