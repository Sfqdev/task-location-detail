<?php
namespace includes;

class maps {
    private $conf;
    function __construct() {
        $this->conf = parse_ini_file('config/mapsetting.ini', true);
    }

    /**
     * Searches the user given address
     */
    function searchAddress($address = '') : string {
        $address = $_POST['search'] ?? null;
        $result = array();
        if ($address) {
            $factory = new mapsFactory();
            foreach($this->conf as $conf) {
                $map = $factory->getMapAdapter($conf['name']);
                $data = $this->retrieveData($map, $conf['url'], $address);
                $result[$conf['title']] = $map->parseData($data);
            }
        }
        return json_encode($result);
    }

    /**
     * Loads the homepage
     */
    function retrieveData(maptype\mapinterface $map, $url, $address) : string {
        return $map->fetchData($url, $address);
    }
}

?>
