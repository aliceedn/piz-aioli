<?php

namespace Pizza\Entity;

use Doctrine\ORM\Mapping as ORM;
//use Zend\InputFilter\InputFilterAwareInterface;
//use Zend\InputFilter\InputFilter;

/**
 * TbUsers
 *
 * @ORM\Table(name="tb_users") 
 * @ORM\Entity(repositoryClass="Pizza\Repository\Repository") */
class TbUsers {
    
    public function exchangeArray($data) {
        $this->userId = (isset($data['userId'])) ? $data['userId'] : null;
        $this->email = (isset($data['email'])) ? $data['email'] : null;
        $this->password = (isset($data['password'])) ? $data['password'] : null;
        $this->nom = (isset($data['nom'])) ? $data['nom'] : null;
        $this->prenom = (isset($data['prenom'])) ? $data['prenom'] : null;
        $this->numrue = (isset($data['numrue'])) ? $data['numrue'] : null;
        $this->role = (isset($_SESSION['role'])) ? $_SESSION['role'] : 'user';
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=10, nullable=false)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=128, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=128, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=128, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="numrue", type="string", length=128, nullable=false)
     */
    private $numrue;

    /**
     * @ORM\ManyToOne(targetEntity="TbVilles", cascade={"persist"})
     * @ORM\JoinColumn(name="ville", referencedColumnName="id", nullable=false)
     */
    private $ville;

    function getUserId() {
        return $this->userId;
    }

    function getEmail() {
        return $this->email;
    }

    function getRole() {
        return $this->role;
    }

    function getPassword() {
        return $this->password;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getNumrue() {
        return $this->numrue;
    }

    function getVille() {
        return $this->ville;
    }

    function setUserId($userId) {
        $this->userId = $userId;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setRole($role) {
        $this->role = $role;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setNumrue($numrue) {
        $this->numrue = $numrue;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

}
