<?php
namespace includes;

class mapsFactory {
    /**
     * Retrieves the configured class objects
     */
    function getMapAdapter($type = '') : object {
        $type = 'includes\\maptype\\'.$type;
        return new $type();
    }
}