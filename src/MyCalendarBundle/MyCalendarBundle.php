<?php

namespace MyCalendarBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MyCalendarBundle extends Bundle
{
    public function getParent()
    {
        return 'BladeTesterCalendarBundle';
    }
}
