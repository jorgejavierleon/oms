<?php

namespace App\Enums;

enum JobListingStatus : int
{
    case OPEN = 1;
    case CLOSED = 2;
    case ARCHIVED = 3;
}
