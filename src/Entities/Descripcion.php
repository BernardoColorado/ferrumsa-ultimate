<?php

namespace App\Entities;
use App\Entities\Producto;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="descripciones")
 */
class Descripcion{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer", name="id")
   * @ORM\GeneratedValue
   */
  protected $id;
  /**
   * @ORM\Column(type="string", length=256, name="texto") 
   */
  protected $texto;
  /**
   * @ORM\ManyToOne(targetEntity="Producto", inversedBy="descripciones")
   * @ORM\JoinColumn(name="id_producto",referencedColumnName="id", onDelete="CASCADE")
   */
  protected $producto;

  public function getId():int{
    return $this->id;
  }
  public function getTexto():string{
    return $this->texto;
  }
  public function getProducto():Producto{
    return $this->producto;
  }

}