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
   * @ORM\Column(type="string", length=256, name="pdf") 
   */
  protected $pdf;
  /**
   * @ORM\ManyToOne(targetEntity="Categoria", inversedBy="productos")
   * @ORM\JoinColumn(name="id_categoria",referencedColumnName="id", onDelete="CASCADE")
   */
  protected $categoria;
  /**
   * @ORM\OneToMany(targetEntity="Descripcion", mappedBy="producto")
   */
  private $descripciones;
  /**
   * @ORM\ManyToMany(targetEntity="Acabado", inversedBy="productos")
   * @ORM\JoinTable(name="productos_acabados")
   */
  protected $acabados;
   
  public function __construct(){
    $this->descripciones = new ArrayCollection();
    $this->acabados = new ArrayCollection();
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
  public function getPdf():string{
    return $this->pdf;
  }
  public function getCategoria():Categoria{
    return $this->categoria;
  }
  /**
   * @return Collection|Descripcion[]
   */
  public function getDescripciones():Collection{
    return $this->descripciones;
  }
  /**
   * @return Collection|Acabado[]
   */
  public function getAcabados():Collection{
    return $this->acabados;
  }

}