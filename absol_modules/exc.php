<?php

foreach (glob(__DIR__ . "/../src/exceptions/*.php") as $exc) {
    require_once $exc;
}