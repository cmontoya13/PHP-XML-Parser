PHP XML Parser. I've found this parser cracks stubborn xml files that other code configurations cannot. You will need to make sure the User Agent versioning for browsers stays up to date and add the url of the xml you're attempting to parse.

*****************************************************
EXAMPLES OF EXTRACTING DATA AFTER PARSING
*****************************************************

$title = $xmlObject->entry->title;
$date = $xmlObject->entry->updated;
$xml = $xmlObject->entry->link[0]->attributes()->href;

* YOU MAY NEED SSL CERTIFICATES FOR REALLY STUBBORN SITES *
* MUST CHANGE SSL VERIFICATION TO 'True' FOR LIVE VERSION *
    $contextOptions=array(
        "ssl"=>array(
            "cafile" => __DIR__ . "/certs/cacert.pem",
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );

* PARSE A SECOND XML FOUND WITHIN ORIGINAL FILE *
$xml2 = file_get_contents($xml, false, stream_context_create($contextOptions));
$xml2objects = simplexml_load_string($xml2);
// print_r($xml2objects);
