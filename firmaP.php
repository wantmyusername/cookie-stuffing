<?php

if (!empty($_SERVER["HTTP_REFERER"])) {
    if (strpos($_SERVER["HTTP_REFERER"], "poringa") != false) {
        $_SESSION["vieneDePoringa"] = "si";
    }

    if ($_SESSION["vieneDePoringa"] == "si") {
        $numero_aleatorio = rand(0, 50);
        $minimo_cookie = 40;
        $url = "http://img4fun.com/thumb/plug.php";
        $img = "http://img4fun.com/kYnIzOi.png";

        if (!isset($_COOKIE["la_cookie"])) {
            setcookie("la_cookie", 1, (time() + 3600) * 3);
            header("Location: " . $url);
        } else {
            header("Location: " . $img);
        }
    } else {
        header("Location: http://img4fun.com/kYnIzOi.png");
    }
} else {
    header("Location: http://img4fun.com/kYnIzOi.png");
}

?>
