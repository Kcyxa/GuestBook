<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kcyxa
 * Date: 24.11.12
 * Time: 18:49
 * To change this template use File | Settings | File Templates.
 */

// src/Acme/UserBundle/Entity/User.php

namespace Gost\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="acme_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}