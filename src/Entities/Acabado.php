<?php

namespace App\Entities;
use App\Entities\Producto;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="acabados")
 */
class Acabado{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer", name="id")
   * @ORM\GeneratedValue
   */
  protected $id;
  /**
   * @ORM\Column(type="string", length=64, name="img") 
   */
  protected $img;
  /**
   * @ORM\Column(type="string", length=64, name="nombre") 
   */
  protected $nombre;

  public function getId():int{
    return $this->id;
  }
  public function getNombre():string{
    return $this->nombre;
  }
  public function getImg():string{
    return $this->img;
  }

}