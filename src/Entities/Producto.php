<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
/**
 * @ORM\Entity(repositoryClass="App\Repositories\ProductoRepository")
 * @ORM\Table(name="productos")
 */
class Producto {
  /**
   * @ORM\Id
   * @ORM\Column(type="integer", name="id")
   * @ORM\GeneratedValue
   */
  protected $id;
  /**
   * @ORM\Column(type="string", length=256, name="nombre") 
   */
  protected $nombre;
  /**
   * @ORM\Column(type="string", length=256, name="img") 
   */
  protected $img;
  /**
   * @ORM\ManyToOne(targetEntity="Categoria", inversedBy="productos")
   * @ORM\JoinColumn(name="id_categoria",referencedColumnName="id", onDelete="CASCADE")
   */
  protected $categoria;
  /**
   * @ORM\OneToMany(targetEntity="Subproducto", mappedBy="producto")
   */
  private $subproductos;

  public function __construct(){
    $this->subproductos = new ArrayCollection();
  }
  public function getId():int{
    return $this->id;
  }
  public function getDescripcion():string{
    return $this->descripcion;
  }
  public function getNombre():string{
    return $this->nombre;
  }
  public function getImg():string{
    return $this->img;
  }
  /**
   * @return Collection|Subproducto[]
   */
  public function getSubproductos():Collection{
    return $this->subproductos;
  }

}