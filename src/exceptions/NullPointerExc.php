<?php

namespace retval\Exc;

require_once __DIR__ . "/Exc.php";

class NullPointerExc extends Exc {
    public function __construct($msg) {
        parent::__construct($msg);
    }
}