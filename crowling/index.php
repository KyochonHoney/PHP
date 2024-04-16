<?
    ini_set("allow_url_fopen",1);

    $url = "https://news.daum.net/";

    include "simple_html_dom.php";

    $data = file_get_html($url);

    echo $data;
?>