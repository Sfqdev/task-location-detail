<?php
namespace includes\maptype;

class osm extends mapAbstract implements mapinterface{
    /**
     * Parses the data according to the current API response
     */
    public function parseData($data) : array {
        $data = json_decode($data);
        $formData = array();
        foreach($data as $dat) {
            $temp['lat'] = $dat->lat;
            $temp['lon'] = $dat->lon;
            $formData[] = $temp;
        }
        return $formData;
    }
}