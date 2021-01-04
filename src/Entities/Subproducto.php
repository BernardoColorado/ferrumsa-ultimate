<?php

namespace App\Entities;
use App\Entities\Producto;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="subproductos")
 */
class Subproducto{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer", name="id")
   * @ORM\GeneratedValue
   */
  protected $id;
  /**
   * @ORM\Column(type="string", length=128, name="nombre") 
   */
  protected $nombre;
  /**
   * @ORM\Column(type="string", length=64, name="img") 
   */
  protected $img;
  /**
   * @ORM\Column(type="string", length=64, name="pdf") 
   */
  protected $pdf;
  /**
   * @ORM\ManyToOne(targetEntity="Producto", inversedBy="subproductos")
   * @ORM\JoinColumn(name="id_producto",referencedColumnName="id", onDelete="CASCADE")
   */
  protected $producto;

  public function getNombre():string{
    return $this->nombre;
  }
  public function getImg():string{
    return $this->img;
  }
  public function getPdf():string{
    return $this->pdf;
  }
  public function getProducto():Producto{
    return $this->producto;
  }

}