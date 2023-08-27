<?php

use retval\Result;

function success($value): Result {
    return new Result($value, null);
}