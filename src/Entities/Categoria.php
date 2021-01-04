<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
/**
 * @ORM\Entity(repositoryClass="App\Repositories\CategoriaRepository")
 * @ORM\Table(name="categorias")
 */
class Categoria{
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
   * @ORM\OneToMany(targetEntity="Producto", mappedBy="categoria")
   */
  private $productos;

  public function __construct(){
    $this->productos = new ArrayCollection();
  }
  public function getId():int{
    return $this->id;
  }
  public function getNombre():string{
    return $this->nombre;
  }
  public function getImg():string{
    return $this->img;
  }
  /**
   * @return Collection|Producto[]
   */
  public function getProductos():Collection{
    return $this->productos;
  }

}