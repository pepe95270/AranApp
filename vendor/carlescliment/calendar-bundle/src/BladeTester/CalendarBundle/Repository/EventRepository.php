<?php

namespace BladeTester\CalendarBundle\Repository;

use Doctrine\ORM\EntityRepository;
use BladeTester\CalendarBundle\Model\EventRepositoryInterface,
    BladeTester\CalendarBundle\Model\DatesTransformer;

class EventRepository Extends EntityRepository implements EventRepositoryInterface {

    private $class;

    public function setClass($class) {
        $this->class = $class;
    }

    public function findAll() {
        $q = $this->getEntityManager()
                    ->createQuery("SELECT e
                                   FROM $this->class e
                                   ORDER BY e.start ASC, e.end ASC");
        return $q->getResult();
    }

    public function findNext() {
        $q = $this->getEntityManager()
                    ->createQuery("SELECT e
                                   FROM $this->class e
                                   WHERE e.end >= :now
                                   ORDER BY e.start ASC, e.end ASC")
                    ->setParameter(':now', new \DateTime);
        return $q->getResult();
    }

    public function findBetween(\DateTime $start, \DateTime $end) {
        $q = $this->getEntityManager()
                    ->createQuery("SELECT e
                                   FROM $this->class e
                                   WHERE e.start >= :start
                                   AND e.end <= :end
                                   ORDER BY e.start ASC, e.end ASC")
                    ->setParameter(':start', $start)
                    ->setParameter(':end', $end);
        return $q->getResult();
    }

    public function findAllByDay(\DateTime $date) {
        $start = new \DateTime($date->format('Y-m-d 00:00'));
        $end = new \DateTime($date->format('Y-m-d 23:59:59'));
        return $this->findAllByDates($start, $end);
    }

    public function findAllByWeek(\DateTime $date) {
        $monday = DatesTransformer::toMonday($date)->setTime(0, 0);
        $sunday = DatesTransformer::toSunday($date)->setTime(23, 59, 59);
        return $this->findAllByDates($monday, $sunday);
    }

    public function findAllByMonth(\DateTime $date) {
        $start = DatesTransformer::toFirstMonthDay($date)->setTime(0, 0);
        $end = DatesTransformer::toLastMonthDay($date)->setTime(23, 59, 59);
        return $this->findAllByDates($start, $end);
    }

    public function findAllByDates(\DateTime $start, \DateTime $end) {
        $q = $this->getEntityManager()->createQuery("SELECT e
                                     FROM $this->class e
                                     WHERE e.start >= :start
                                     AND e.start <= :end
                                     ORDER BY e.start ASC, e.end ASC")
                ->setParameter(':start', $start)
                ->setParameter(':end', $end);
        return $q->getResult();
    }

    public function findAllByUser($user) {
        $q = $this->getEntityManager()
            ->createQuery("SELECT e
                                   FROM $this->class e
                                   WHERE e.user = :user
                                   ORDER BY e.start ASC, e.end ASC")
            ->setParameter(':user', $user);
        return $q->getResult();
    }

    public function findNextByUser($user) {
        $q = $this->getEntityManager()
            ->createQuery("SELECT e
                                   FROM $this->class e
                                   WHERE e.end >= :now
                                   AND e.user = :user
                                   ORDER BY e.start ASC, e.end ASC")
            ->setParameter(':now', new \DateTime)
            ->setParameter(':user', $user);
        return $q->getResult();
    }

    public function findBetweenByUser(\DateTime $start, \DateTime $end, $user) {
        $q = $this->getEntityManager()
            ->createQuery("SELECT e
                                   FROM $this->class e
                                   WHERE e.start >= :start
                                   AND e.end <= :end
                                   AND e.user = :user
                                   ORDER BY e.start ASC, e.end ASC")
            ->setParameter(':start', $start)
            ->setParameter(':end', $end)
            ->setParameter(':user', $user);
        return $q->getResult();
    }

    public function findAllByDayByUser(\DateTime $date, $user) {
        $start = new \DateTime($date->format('Y-m-d 00:00'));
        $end = new \DateTime($date->format('Y-m-d 23:59:59'));
        return $this->findAllByDatesByUser($start, $end, $user);
    }

    public function findAllByWeekByUser(\DateTime $date, $user) {
        $monday = DatesTransformer::toMonday($date)->setTime(0, 0);
        $sunday = DatesTransformer::toSunday($date)->setTime(23, 59, 59);
        return $this->findAllByDatesByUser($monday, $sunday, $user);
    }

    public function findAllByMonthByUser(\DateTime $date, $user) {
        $start = DatesTransformer::toFirstMonthDay($date)->setTime(0, 0);
        $end = DatesTransformer::toLastMonthDay($date)->setTime(23, 59, 59);
        return $this->findAllByDatesByUser($start, $end, $user);
    }

    public function findAllByDatesByUser(\DateTime $start, \DateTime $end, $user) {
        $q = $this->getEntityManager()->createQuery("SELECT e
                                     FROM $this->class e
                                     WHERE e.start >= :start 
                                     AND e.start <= :end 
                                     AND e.user = :user
                                     ORDER BY e.start ASC, e.end ASC")
            ->setParameter(':start', $start)
            ->setParameter(':end', $end)
            ->setParameter(':user', $user);
        return $q->getResult();
    }

}
