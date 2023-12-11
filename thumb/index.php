<?php

$es_movil = "0";
if (
    preg_match(
        "/(android|wap|phone|ipad)/i",
        strtolower($_SERVER["HTTP_USER_AGENT"])
    )
) {
    $es_movil++;
}
if ($es_movil > 0) {
    header("Location: /");
} else {
    header("Location: /");
}

?>