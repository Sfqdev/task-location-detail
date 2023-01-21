<?php
namespace includes\maptype;

interface mapinterface {
    public function fetchData($url, $address);
    
    public function parseData($data);
}
