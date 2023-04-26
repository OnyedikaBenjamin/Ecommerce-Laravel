<?php

namespace App\Enums;

enum CustomerStatus: string
{
    case Active = 'active';
    case Disabled = 'disabled';
}
