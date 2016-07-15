<?php

// ---getLoadedExtension
if (!function_exists('getLoadedExtension')) {
    function getLoadedExtension() {
        $i = 0;
        $result = array();
        $loaded = get_loaded_extensions();

        foreach ($loaded as $i => $ext) {
            $result[$i]['charset'] = $ext;
            $result[$i]['version'] =  phpversion($ext);
            $i++;
        }
    }
}

// ---printLoadedExtension
if (!function_exists('printLoadedExtension')) {
    function printLoadedExtension() {
        print "<div class=\"web_page_lang\"><h4 style=\"align-content: center;\">code Php_v";
        print phpversion();
        print "</h4>";

        foreach (get_loaded_extensions() as $i => $ext) {
            print "<p>". $ext .",  ver.".phpversion($ext)."</p>";
        }

        print "<div/>";
    }
}



printLoadedExtension();