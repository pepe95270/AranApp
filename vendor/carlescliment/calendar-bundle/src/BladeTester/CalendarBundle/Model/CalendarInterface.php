<?php

namespace BladeTester\CalendarBundle\Model;

interface CalendarInterface {

    public function createEvent($userid);
    public function getSettings();
}