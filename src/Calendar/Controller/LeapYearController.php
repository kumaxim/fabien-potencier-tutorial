<?php

namespace Calendar\Controller;

use Symfony\Component\HttpFoundation\Request;

class LeapYearController
{
    public function indexAction(Request $request, $year): string
    {
        $leap_year = new \Calendar\Model\LeapYear();

        if ($leap_year->isLeapYear($year)) {
            return 'Yes, this year is leap';
        }

        return 'Nope, this is not leap year. >> ' . rand();
    }
}
