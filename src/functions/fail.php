<?php

use retval\Exc\Exc;
use retval\Result;

function fail(Exc $exception): Result {
    return new Result(null, $exception);
}