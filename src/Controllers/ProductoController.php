<?php
//espacio de controladores
namespace App\Controllers;

use App\Entities\Producto;
use App\Entities\Categoria;
use Psr\Container\ContainerInterface as ContainerInterface;
use \Psr\Http\Message\ServerRequestInterface as RequestInterface;
use \Psr\Http\Message\ResponseInterface as ResponseInterface;
use \Core\Controllers\Controller as Controller;

//controlador de inicio
class ProductoController extends Controller{

  public function __construct(ContainerInterface $container){

    //contenedor
    $this->container=$container;
    $this->twig=$this->container['twig'];
    $this->app=$this->container['app'];
    $this->contacto =$this->container['contacto'];
    
    //orm y entidades
    $this->entityManager = $this->container['entity-manager'];
    $this->categoriaRepository = $this->entityManager->getRepository(Categoria::class);
    $this->productoRepository = $this->entityManager->getRepository(Producto::class);

  }

  public function index(RequestInterface $request, $response){

    //vista de modelo vacía por default
    $viewModel=[];
    $categorias = $this->categoriaRepository->findAll();
    $viewModel['categorias']=$categorias;
    $viewModel['socialNetworks']=$this->app['socialNetworks'];
    $this->twig->render($response,'layouts/producto-index.php',$viewModel);

  }

  public function categoria(RequestInterface $request, $response, Array $args){

    //vista de modelo vacía por default
    $viewModel = [];
    
    //mandamos llamar ORM
    $idCategoria = intval($args['id']);    
    $categoria = $this->categoriaRepository->find($idCategoria);
    $productos = $categoria->getProductos();

    //poblamos vista del modelo
    $viewModel['categoria'] = $categoria;
    $viewModel['productos'] = $productos;
    $viewModel['socialNetworks']=$this->app['socialNetworks'];
    $this->twig->render($response,'layouts/producto-categoria.php',$viewModel);

  }

  public function producto(RequestInterface $request, $response, Array $args){

    //vista de modelo vacía por default
    $viewModel = [];

    //mandamos llamar ORM
    $idProducto = intval($args['id']);    
    $producto = $this->productoRepository->find($idProducto);
    $categoria = $producto->getCategoria();
    $viewModel['socialNetworks']=$this->app['socialNetworks'];
    $viewModel['producto']=$producto;
    //rendereamos
    $this->twig->render($response,'layouts/producto-detalle.php',$viewModel);

  }

}

?>