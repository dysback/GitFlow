<?php

class Version {
    const MAJOR = 0;
    const MINOR = 3;
    const SEQUENCE = 3;

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