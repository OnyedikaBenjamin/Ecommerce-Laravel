<?php
/**
 * User: Ben-Billion
 * Date: 04/26/2023
 */

namespace App\Enums;


/**
 * Class PaymentStatus
 *
 * @author  Onyedika Benjamin udegbunamonyedikabenjamin@gmail.com>
 * @package App\Enums
 */
enum PaymentStatus: string
{
    case Pending = 'pending';
    case Paid = 'paid';
    case Failed = 'failed';
}
