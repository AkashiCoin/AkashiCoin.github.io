<?php
    $context_options = array(
    'http' =>
        array(
            'method' => "GET",
            'header' => "User-Agent:Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.115 Safari/537.36\r\nReferer:https://haremu.com/\r\n",
            'timeout' => 120,
        )
    $context = stream_context_create($context_options);
    $img=file_get_contents("https://acg.sx/images", false, $context);
    header("Content-Type: image/jpeg;text/html; charset=utf-8");
    echo $img;