<?php

namespace retval;

use retval\Exc\Exc;

function fail(Exc $exception): Result {
    return new Result(false, null, $exception);
}