<?php

namespace BladeTester\CalendarBundle\Model;

interface EventRepositoryInterface {

    public function setClass($class);

    public function findAll();

    public function findNext();

    public function findBetween(\DateTime $start, \DateTime $end);

    public function findAllByDay(\DateTime $date);

    public function findAllByWeek(\DateTime $date);

    public function findAllByMonth(\DateTime $date);

    public function findAllByUser($user);

    public function findNextByUser($user);

    public function findBetweenByUser(\DateTime $start, \DateTime $end, $user);

    public function findAllByDayByUser(\DateTime $date, $user);

    public function findAllByWeekByUser(\DateTime $date, $user);

    public function findAllByMonthByUser(\DateTime $date, $user);
}
