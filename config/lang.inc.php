<?php

    /*!
     * ifsoft.co.uk v1.0
     *
     * http://ifsoft.com.ua, http://ifsoft.co.uk
     * qascript@ifsoft.co.uk, qascript@mail.ru
     *
     * Copyright 2012-2015 Demyanchuk Dmitry (https://vk.com/dmitry.demyanchuk)
     */

    if (isset($_COOKIE['lang'])) {

        $language = $_COOKIE['lang'];

        $result = "ru";

        if (in_array($language, $LANGS)) {

            $result = $language;
        }

        @setcookie("lang", $result, time() + 14 * 24 * 3600, "/");
        include_once($_SERVER['DOCUMENT_ROOT']."/lang/".$result.".php");

    }  else {

        $language = "ru";

        if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {

            $language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        }

        $result = "ru";

        if (in_array($language, $LANGS)) {

            $result = $language;
        }

        @setcookie("lang", $result, time() + 14 * 24 * 3600, "/");
        include_once($_SERVER['DOCUMENT_ROOT']."/lang/".$result.".php");
    }

    $LANG = $TEXT;
