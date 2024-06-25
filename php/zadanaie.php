<?php
    switch ($_GET['url']){
        case "https://www.bing.com/":
            $isQueryEmpty = (empty($_GET['query'])) ? true : false;
            if(!$isQueryEmpty){
                $url = "https://www.bing.com/search?q=".$_GET['query'];
                header("Location: $url");
            }
            else{
                header("Location: ".$_GET['url']);
            }
            break;
        case "https://yahoo.com/":
            $isQueryEmpty = (empty($_GET['query'])) ? true : false;
            if(!$isQueryEmpty){
                $url = "https://search.yahoo.com/search?p=".$_GET['query'];
                header("Location: $url");
            }
            else{
                header("Location: ".$_GET['url']);
            }
            break;
        case "https://swisscows.com":
            $isQueryEmpty = (empty($_GET['query'])) ? true : false;
            if(!$isQueryEmpty){
                $url = "https://swisscows.com/en/web?query=".$_GET['query'];
                header("Location: $url");
            }
            else{
                header("Location: ".$_GET['url']);
            }
            break;
        case "https://yandex.kz/":
            $isQueryEmpty = (empty($_GET['query'])) ? true : false;
            if(!$isQueryEmpty){
                $url = "https://yandex.kz/search/?text=".$_GET['query'];
                header("Location: $url");
            }
            else{
                header("Location: ".$_GET['url']);
            }
            break;
        case "https://mail.ru":
            $isQueryEmpty = (empty($_GET['query'])) ? true : false;
            if(!$isQueryEmpty){
                $url = "https://go.mail.ru/search?q=".$_GET['query'];
                header("Location: $url");
            }
            else{
                header("Location: ".$_GET['url']);
            }
            break;
        default:
            header("Location: ".$_GET['url']);
    }
?>