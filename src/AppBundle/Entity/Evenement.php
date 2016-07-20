<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EvenementRepository")
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * The event name.
     *
     * @var string
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * User in the event.
     *
     * @var User[]
     * @ORM\ManyToMany(targetEntity="User", mappedBy="evenements")
     **/
    protected $users;

    /**
     * The event parent.
     *
     * @var Evenement
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", nullable=true)
     **/
    protected $parent;

    /**
     * Constructor of the Evenement class.
     * (Initialize array field).
     */
    public function __construct()
    {
        //Initialize user as a Doctrine Collection
        $this->users = new ArrayCollection();
    }

    /** {@inheritdoc} */
    public function __toString()
    {
        return $this->getName();
    }

    /**
     * Get the id of the event.
     * Return null if the event is new and not saved.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the name of the event.
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get the name of the event.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the parent event.
     *
     * @param Evenement $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get the parent event.
     *
     * @return Evenement
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Return all product associated to the event.
     *
     * @return User[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set all users in the event.
     *
     * @param User[] $users
     */
    public function setUsers($users)
    {
        $this->users->clear();
        $this->users = new ArrayCollection($users);
    }

    /**
     * Add a user in the event.
     *
     * @param $user User The user to associate
     */
    public function addUser($user)
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
        }
    }

    /**
     * @param User $user
     */
    public function removeUser($user)
    {
        $this->products->removeElement($user);
    }
}

