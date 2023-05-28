<?php
if(!function_exists('friendlyUrlPath')){
    /**
     * Cleaning url/path to be friendly.
     * Even tho urls can include a space,
     * it's a better practice to replace them with dashes (-).
     *
     * @param $url
     * @return string|string[]
     */
    function friendlyUrlPath($url){
        return str_replace(' ', '-', $url);
    }
}
