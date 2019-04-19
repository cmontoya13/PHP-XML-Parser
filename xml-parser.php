<?php
    // Enter current User Agent details
    $context = stream_context_create(array('http' => array('header' => 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.67 Safari/537.36')));
    $PacURL = "https://www.WEBSITE.xml";
    $xml = file_get_contents($PacURL, false, $context);
    // echo $xml;
    $xmlObject = simplexml_load_string($xml);
    // print_r($xmlObject);
?>