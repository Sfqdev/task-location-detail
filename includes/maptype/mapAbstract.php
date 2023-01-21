<?php
namespace includes\maptype;

class mapAbstract {
    private $query = 'SEARCHTEXT';

    /**
     * Retrieves the configured class objects
     */
    function fetchData($url, $address) : string {
        $search_url = str_replace($this->query, urlencode($address), $url);

        $httpOptions = [
            "http" => [
                "method" => "GET",
                "header" => "User-Agent: Nominatim-Test"
            ]
        ];

        set_error_handler(function ($err_severity, $err_msg, $err_file, $err_line, array $err_context)
        {
            return [];
        }, E_WARNING);

        $streamContext = stream_context_create($httpOptions);
        $json = file_get_contents($search_url, false, $streamContext);
        return ($json);

        restore_error_handler();
    }
}