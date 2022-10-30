<?php namespace Bee2;

class Version {
    
    const MAJOR = 1;
    const MINOR = 0;
    const SEQUENCE = 7;

    private $major;
    private $minor;
    private $sequence;

    public function __construct( $major = Version::MAJOR, 
                        $minor = Version::MINOR,
                        $sequence = Version::SEQUENCE) {

        $this->major = $major;
        $this->minor = $minor;
        $this->sequence = $sequence;
    }

    public function __toString() {
        return "V_" . $this->major . "." . $this->minor . "." . $this->sequence;
    }
    
}