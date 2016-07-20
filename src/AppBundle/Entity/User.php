<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @Vich\Uploadable
 */
class User extends BaseUser
{
    /**
     * The identifier of the product.
     *
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id = null;

    /**
     * The creation date of the product.
     *
     * @var \DateTime
     * @ORM\Column(type="date", name="created_at", nullable=true)
     */
    private $createdAt = null;

    /**
     *
     * @var string
     * @ORM\Column(type="string")
     */
    private $poste;

    /**
     * Le nom de jeune fille
     *
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $nomjeunefille;

    /**
     * L'adresse
     *
     * @var string
     * @ORM\Column(type="string")
     */
    private $adresse;

    /**
     *
     * @var string
     * @ORM\Column(type="string")
     */
    private $codepostal;

    /**
     *
     * @var string
     * @ORM\Column(type="string")
     */
    private $ville;

    /**
     *
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $telfixe;

    /**
     *
     * @var string
     * @ORM\Column(type="string")
     */
    private $telport;


    /**
     *
     * @var \DateTime
     * @ORM\Column(type="date", name="datenaissance")
     */
    private $datenaissance = null;

    /**
     *
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $lieunaissance;

    /**
     *
     * @var string
     * @ORM\Column(type="bigint")
     */
    private $secu;

    /**
     *
     * @var string
     * @ORM\Column(type="string")
     */
    private $nationalite;

    /**
     *
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $cartedesejour;

    /**
     *
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $delivreepar;

    /**
     *
     *
     * @var \DateTime
     * @ORM\Column(type="date", name="dateexpiration", nullable=true)
     */
    private $dateexpiration = null;

    /**
     *
     * @var string
     * @ORM\Column(type="string")
     */
    private $situation;

    /**
     *
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $obligationemploi = false;

    /**
     * List langues (niveau)
     *
     * @var string[]
     * @ORM\Column(type="simple_array", nullable=true)
     */
    private $tags = array();

    /**
     *
     * @var string
     * @ORM\Column(type="string")
     */
    private $niveauetude;



    /**
     *
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $permis = false;

    /**
     *
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $voiture = false;

    /**
     *
     *
     * @var \DateTime
     * @ORM\Column(type="date", name="dateobtention", nullable=true)
     */
    private $dateobtention = null;

    /**
     *
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $prefecture;

    /**
     *
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $deuxroues = false;

    /**
     *
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $roller = false;

    /**
     *
     * @var int
     * @ORM\Column(type="integer")
     */
    private $taille;

    /**
     *
     * @var int
     * @ORM\Column(type="integer", nullable=true)
     */
    private $taillejupe;

    /**
     *
     * @var string
     * @ORM\Column(type="string")
     */
    private $couleurcheveux;

    /**
     *
     * @var string
     * @ORM\Column(type="string")
     */
    private $couleuryeux;

    /**
     *
     * @var int
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tourpoitrine;

    /**
     *
     * @var int
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tailleveste;

    /**
     *
     * @var int
     * @ORM\Column(type="integer")
     */
    private $pointure;

    /**
     *
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $experiencehote = false;

    /**
     *
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $experiencehotedetail;

    /**
     *
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $bar = false;

    /**
     *
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $animation = false;

    /**
     *
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $micro = false;

    /**
     *
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $vente = false;

    /**
     *
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $service = false;

    /**
     *
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $distribution = false;

    /**
     *
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $traduction = false;

    /**
     *
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $saisie = false;

    /**
     *
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $commentconnuagence;

    /**
     *
     * @var string
     * @ORM\Column(type="string")
     */
    private $disponibilite;

    /**
     *
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $dispojourshoraires;

    /**
     *
     * @var string[]
     * @ORM\Column(type="simple_array", nullable=true)
     */
    private $villehebergement = array();

    /**
     *
     * @var string
     * @ORM\Column(type="string")
     */
    private $personneaprevenir;

    /**
     *
     * @var string
     * @ORM\Column(type="string")
     */
    private $adressetelaccident;



    /**
     * It only stores the name of the image associated with the product.
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     * @var string
     */
    private $image;

    /**
     * This unmapped property stores the binary contents of the image file
     * associated with the product.
     *
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image", nullable=true)
     *
     * @var File
     */
    private $imageFile;


    /**
     * The name of the user.
     *
     * @var string
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * The firstname of the user.
     *
     * @var string
     * @ORM\Column(type="string")
     */
    private $prenom;


    /**
     * List of events where the products is
     * (Owning side).
     *
     * @var Evenement[]
     * @ORM\ManyToMany(targetEntity="Evenement", inversedBy="users")
     * @ORM\JoinTable(name="user_evenement")
     */
    private $evenements;


    /**
     * Constructor of the Category class.
     * (Initialize some fields).
     */
    public function __construct()
    {
        parent::__construct();
        $this->evenements = new ArrayCollection();
        $this->createdAt = new \DateTime(date('Y-m-d'));
    }

    /**
     * Add an event in the user association.
     * (Owning side).
     *
     * @param $evenement Evenement the event to associate
     */
    public function addEvenement($evenement)
    {
        $evenement->addUser($this);

        if (!$this->evenements->contains($evenement)) {
            $this->evenements->add($evenement);
        }
    }

    /**
     * Remove an event in the user association.
     * (Owning side).
     *
     * @param $evenement Evenement the event to associate
     */
    public function removeEvenement($evenement)
    {
        $evenement->removeUser($this);
        $this->evenements->removeElement($evenement);
    }


    /**
     * @param File $image
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the product name.
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Retrieve the name of the product.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Set the list of the tags.
     *
     * @param \string[] $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * Get the list of tags associated to the product.
     *
     * @return \string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Get all associated categories.
     *
     * @return Evenement[]
     */
    public function getEvenements()
    {
        return $this->evenements;
    }

    /**
     * Set all categories of the product.
     *
     * @param Evenement[] $evenements
     */
    public function setEvenements($evenements)
    {
        // This is the owning side, we have to call remove and add to have change in the category side too.
        foreach ($this->getEvenements() as $evenement) {
            $this->removeEvenement($evenement);
        }
        foreach ($evenements as $evenement) {
            $this->addEvenement($evenement);
        }
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get the id of the product.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return $this->getName();
    }



    /**
     * Set poste
     *
     * @param string $poste
     *
     * @return User
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get poste
     *
     * @return string
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set nomjeunefille
     *
     * @param string $nomjeunefille
     *
     * @return User
     */
    public function setNomjeunefille($nomjeunefille)
    {
        $this->nomjeunefille = $nomjeunefille;

        return $this;
    }

    /**
     * Get nomjeunefille
     *
     * @return string
     */
    public function getNomjeunefille()
    {
        return $this->nomjeunefille;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     *
     * @return User
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     *
     * @return User
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set lieunaissance
     *
     * @param string $lieunaissance
     *
     * @return User
     */
    public function setLieunaissance($lieunaissance)
    {
        $this->lieunaissance = $lieunaissance;

        return $this;
    }

    /**
     * Get lieunaissance
     *
     * @return string
     */
    public function getLieunaissance()
    {
        return $this->lieunaissance;
    }

    /**
     * Set secu
     *
     * @param integer $secu
     *
     * @return User
     */
    public function setSecu($secu)
    {
        $this->secu = $secu;

        return $this;
    }

    /**
     * Get secu
     *
     * @return integer
     */
    public function getSecu()
    {
        return $this->secu;
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     *
     * @return User
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set cartedesejour
     *
     * @param string $cartedesejour
     *
     * @return User
     */
    public function setCartedesejour($cartedesejour)
    {
        $this->cartedesejour = $cartedesejour;

        return $this;
    }

    /**
     * Get cartedesejour
     *
     * @return string
     */
    public function getCartedesejour()
    {
        return $this->cartedesejour;
    }

    /**
     * Set delivreepar
     *
     * @param string $delivreepar
     *
     * @return User
     */
    public function setDelivreepar($delivreepar)
    {
        $this->delivreepar = $delivreepar;

        return $this;
    }

    /**
     * Get delivreepar
     *
     * @return string
     */
    public function getDelivreepar()
    {
        return $this->delivreepar;
    }

    /**
     * Set dateexpiration
     *
     * @param \DateTime $dateexpiration
     *
     * @return User
     */
    public function setDateexpiration($dateexpiration)
    {
        $this->dateexpiration = $dateexpiration;

        return $this;
    }

    /**
     * Get dateexpiration
     *
     * @return \DateTime
     */
    public function getDateexpiration()
    {
        return $this->dateexpiration;
    }

    /**
     * Set situation
     *
     * @param string $situation
     *
     * @return User
     */
    public function setSituation($situation)
    {
        $this->situation = $situation;

        return $this;
    }

    /**
     * Get situation
     *
     * @return string
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
     * Set obligationemploi
     *
     * @param boolean $obligationemploi
     *
     * @return User
     */
    public function setObligationemploi($obligationemploi)
    {
        $this->obligationemploi = $obligationemploi;

        return $this;
    }

    /**
     * Get obligationemploi
     *
     * @return boolean
     */
    public function getObligationemploi()
    {
        return $this->obligationemploi;
    }

    /**
     * Set niveauetude
     *
     * @param string $niveauetude
     *
     * @return User
     */
    public function setNiveauetude($niveauetude)
    {
        $this->niveauetude = $niveauetude;

        return $this;
    }

    /**
     * Get niveauetude
     *
     * @return string
     */
    public function getNiveauetude()
    {
        return $this->niveauetude;
    }

    /**
     * Set permis
     *
     * @param boolean $permis
     *
     * @return User
     */
    public function setPermis($permis)
    {
        $this->permis = $permis;

        return $this;
    }

    /**
     * Get permis
     *
     * @return boolean
     */
    public function getPermis()
    {
        return $this->permis;
    }

    /**
     * Set voiture
     *
     * @param boolean $voiture
     *
     * @return User
     */
    public function setVoiture($voiture)
    {
        $this->voiture = $voiture;

        return $this;
    }

    /**
     * Get voiture
     *
     * @return boolean
     */
    public function getVoiture()
    {
        return $this->voiture;
    }

    /**
     * Set dateobtention
     *
     * @param \DateTime $dateobtention
     *
     * @return User
     */
    public function setDateobtention($dateobtention)
    {
        $this->dateobtention = $dateobtention;

        return $this;
    }

    /**
     * Get dateobtention
     *
     * @return \DateTime
     */
    public function getDateobtention()
    {
        return $this->dateobtention;
    }

    /**
     * Set prefecture
     *
     * @param string $prefecture
     *
     * @return User
     */
    public function setPrefecture($prefecture)
    {
        $this->prefecture = $prefecture;

        return $this;
    }

    /**
     * Get prefecture
     *
     * @return string
     */
    public function getPrefecture()
    {
        return $this->prefecture;
    }

    /**
     * Set deuxroues
     *
     * @param boolean $deuxroues
     *
     * @return User
     */
    public function setDeuxroues($deuxroues)
    {
        $this->deuxroues = $deuxroues;

        return $this;
    }

    /**
     * Get deuxroues
     *
     * @return boolean
     */
    public function getDeuxroues()
    {
        return $this->deuxroues;
    }

    /**
     * Set roller
     *
     * @param boolean $roller
     *
     * @return User
     */
    public function setRoller($roller)
    {
        $this->roller = $roller;

        return $this;
    }

    /**
     * Get roller
     *
     * @return boolean
     */
    public function getRoller()
    {
        return $this->roller;
    }

    /**
     * Set taille
     *
     * @param integer $taille
     *
     * @return User
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return integer
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set taillejupe
     *
     * @param integer $taillejupe
     *
     * @return User
     */
    public function setTaillejupe($taillejupe)
    {
        $this->taillejupe = $taillejupe;

        return $this;
    }

    /**
     * Get taillejupe
     *
     * @return integer
     */
    public function getTaillejupe()
    {
        return $this->taillejupe;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }



    /**
     * Set couleurcheveux
     *
     * @param string $couleurcheveux
     *
     * @return User
     */
    public function setCouleurcheveux($couleurcheveux)
    {
        $this->couleurcheveux = $couleurcheveux;

        return $this;
    }

    /**
     * Get couleurcheveux
     *
     * @return string
     */
    public function getCouleurcheveux()
    {
        return $this->couleurcheveux;
    }

    /**
     * Set couleuryeux
     *
     * @param string $couleuryeux
     *
     * @return User
     */
    public function setCouleuryeux($couleuryeux)
    {
        $this->couleuryeux = $couleuryeux;

        return $this;
    }

    /**
     * Get couleuryeux
     *
     * @return string
     */
    public function getCouleuryeux()
    {
        return $this->couleuryeux;
    }

    /**
     * Set tourpoitrine
     *
     * @param integer $tourpoitrine
     *
     * @return User
     */
    public function setTourpoitrine($tourpoitrine)
    {
        $this->tourpoitrine = $tourpoitrine;

        return $this;
    }

    /**
     * Get tourpoitrine
     *
     * @return integer
     */
    public function getTourpoitrine()
    {
        return $this->tourpoitrine;
    }

    /**
     * Set tailleveste
     *
     * @param integer $tailleveste
     *
     * @return User
     */
    public function setTailleveste($tailleveste)
    {
        $this->tailleveste = $tailleveste;

        return $this;
    }

    /**
     * Get tailleveste
     *
     * @return integer
     */
    public function getTailleveste()
    {
        return $this->tailleveste;
    }

    /**
     * Set pointure
     *
     * @param integer $pointure
     *
     * @return User
     */
    public function setPointure($pointure)
    {
        $this->pointure = $pointure;

        return $this;
    }

    /**
     * Get pointure
     *
     * @return integer
     */
    public function getPointure()
    {
        return $this->pointure;
    }

    /**
     * Set experiencehote
     *
     * @param boolean $experiencehote
     *
     * @return User
     */
    public function setExperiencehote($experiencehote)
    {
        $this->experiencehote = $experiencehote;

        return $this;
    }

    /**
     * Get experiencehote
     *
     * @return boolean
     */
    public function getExperiencehote()
    {
        return $this->experiencehote;
    }

    /**
     * Set experiencehotedetail
     *
     * @param string $experiencehotedetail
     *
     * @return User
     */
    public function setExperiencehotedetail($experiencehotedetail)
    {
        $this->experiencehotedetail = $experiencehotedetail;

        return $this;
    }

    /**
     * Get experiencehotedetail
     *
     * @return string
     */
    public function getExperiencehotedetail()
    {
        return $this->experiencehotedetail;
    }

    /**
     * Set bar
     *
     * @param boolean $bar
     *
     * @return User
     */
    public function setBar($bar)
    {
        $this->bar = $bar;

        return $this;
    }

    /**
     * Get bar
     *
     * @return boolean
     */
    public function getBar()
    {
        return $this->bar;
    }

    /**
     * Set animation
     *
     * @param boolean $animation
     *
     * @return User
     */
    public function setAnimation($animation)
    {
        $this->animation = $animation;

        return $this;
    }

    /**
     * Get animation
     *
     * @return boolean
     */
    public function getAnimation()
    {
        return $this->animation;
    }

    /**
     * Set micro
     *
     * @param boolean $micro
     *
     * @return User
     */
    public function setMicro($micro)
    {
        $this->micro = $micro;

        return $this;
    }

    /**
     * Get micro
     *
     * @return boolean
     */
    public function getMicro()
    {
        return $this->micro;
    }

    /**
     * Set vente
     *
     * @param boolean $vente
     *
     * @return User
     */
    public function setVente($vente)
    {
        $this->vente = $vente;

        return $this;
    }

    /**
     * Get vente
     *
     * @return boolean
     */
    public function getVente()
    {
        return $this->vente;
    }

    /**
     * Set service
     *
     * @param boolean $service
     *
     * @return User
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return boolean
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set distribution
     *
     * @param boolean $distribution
     *
     * @return User
     */
    public function setDistribution($distribution)
    {
        $this->distribution = $distribution;

        return $this;
    }

    /**
     * Get distribution
     *
     * @return boolean
     */
    public function getDistribution()
    {
        return $this->distribution;
    }

    /**
     * Set traduction
     *
     * @param boolean $traduction
     *
     * @return User
     */
    public function setTraduction($traduction)
    {
        $this->traduction = $traduction;

        return $this;
    }

    /**
     * Get traduction
     *
     * @return boolean
     */
    public function getTraduction()
    {
        return $this->traduction;
    }

    /**
     * Set saisie
     *
     * @param boolean $saisie
     *
     * @return User
     */
    public function setSaisie($saisie)
    {
        $this->saisie = $saisie;

        return $this;
    }

    /**
     * Get saisie
     *
     * @return boolean
     */
    public function getSaisie()
    {
        return $this->saisie;
    }

    /**
     * Set commentconnuagence
     *
     * @param string $commentconnuagence
     *
     * @return User
     */
    public function setCommentconnuagence($commentconnuagence)
    {
        $this->commentconnuagence = $commentconnuagence;

        return $this;
    }

    /**
     * Get commentconnuagence
     *
     * @return string
     */
    public function getCommentconnuagence()
    {
        return $this->commentconnuagence;
    }

    /**
     * Set disponibilite
     *
     * @param string $disponibilite
     *
     * @return User
     */
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    /**
     * Get disponibilite
     *
     * @return string
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * Set dispojourshoraires
     *
     * @param string $dispojourshoraires
     *
     * @return User
     */
    public function setDispojourshoraires($dispojourshoraires)
    {
        $this->dispojourshoraires = $dispojourshoraires;

        return $this;
    }

    /**
     * Get dispojourshoraires
     *
     * @return string
     */
    public function getDispojourshoraires()
    {
        return $this->dispojourshoraires;
    }



    /**
     * Set personneaprevenir
     *
     * @param string $personneaprevenir
     *
     * @return User
     */
    public function setPersonneaprevenir($personneaprevenir)
    {
        $this->personneaprevenir = $personneaprevenir;

        return $this;
    }

    /**
     * Get personneaprevenir
     *
     * @return string
     */
    public function getPersonneaprevenir()
    {
        return $this->personneaprevenir;
    }

    /**
     * Set adressetelaccident
     *
     * @param string $adressetelaccident
     *
     * @return User
     */
    public function setAdressetelaccident($adressetelaccident)
    {
        $this->adressetelaccident = $adressetelaccident;

        return $this;
    }

    /**
     * Get adressetelaccident
     *
     * @return string
     */
    public function getAdressetelaccident()
    {
        return $this->adressetelaccident;
    }

    /**
     * Set villehebergement
     *
     * @param array $villehebergement
     *
     * @return User
     */
    public function setVillehebergement($villehebergement)
    {
        $this->villehebergement = $villehebergement;

        return $this;
    }

    /**
     * Get villehebergement
     *
     * @return array
     */
    public function getVillehebergement()
    {
        return $this->villehebergement;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return User
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set telfixe
     *
     * @param string $telfixe
     *
     * @return User
     */
    public function setTelfixe($telfixe)
    {
        $this->telfixe = $telfixe;

        return $this;
    }

    /**
     * Get telfixe
     *
     * @return string
     */
    public function getTelfixe()
    {
        return $this->telfixe;
    }

    /**
     * Set telport
     *
     * @param string $telport
     *
     * @return User
     */
    public function setTelport($telport)
    {
        $this->telport = $telport;

        return $this;
    }

    /**
     * Get telport
     *
     * @return string
     */
    public function getTelport()
    {
        return $this->telport;
    }
}
