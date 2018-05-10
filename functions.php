<?php
/*
 * 快速查詢 IP
 * https://myip.reh.tw/
 *
 * Developed by 張文相 (Zhang Wenxiang)
 * https://www.facebook.com/GoneToneDY
 */
// file_get_contents to curl
function file_get_contents_curl($url, $retries=5) {
    $ua = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.82 Safari/537.36';
    if (extension_loaded('curl') === true) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url); // The URL to fetch. This can also be set when initializing a session with curl_init().
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10); // The number of seconds to wait while trying to connect.
        curl_setopt($ch, CURLOPT_USERAGENT, $ua); // The contents of the "User-Agent: " header to be used in a HTTP request.
        curl_setopt($ch, CURLOPT_FAILONERROR, TRUE); // To fail silently if the HTTP code returned is greater than or equal to 400.
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); // To follow any "Location: " header that the server sends as part of the HTTP header.
        curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE); // To automatically set the Referer: field in requests where it follows a Location: redirect.
        curl_setopt($ch, CURLOPT_TIMEOUT, 10); // The maximum number of seconds to allow cURL functions to execute.
        curl_setopt($ch, CURLOPT_MAXREDIRS, 5); // The maximum number of redirects
        $result = curl_exec($ch);
        curl_close($ch);
    } else {
        $result = file_get_contents($url);
    }

    if (empty($result) === true) {
        $result = false;
        if ($retries >= 1) {
            sleep(1);
            return file_get_contents_curl($url, --$retries);
        }
    }

    return $result;
}
?>
