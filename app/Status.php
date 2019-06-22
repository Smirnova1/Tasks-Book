<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    const NEW = 1;
    const FEEDBACK = 2;
    const IN_PROGRESS = 3;
    const REVIEW = 4;
    const READY_FOR_TESTING = 5;
    const PASSED = 6;
}
