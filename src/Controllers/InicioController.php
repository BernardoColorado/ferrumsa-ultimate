<?php
//espacio de controladores
namespace App\Controllers;
//
use Psr\Container\ContainerInterface as ContainerInterface;
use Psr\Http\Message\ServerRequestInterface as RequestInterface;
use Psr\Http\Message\ResponseInterface as ResponseInterface;
use Core\Controllers\Controller as Controller;
//controlador de inicio
class InicioController extends Controller{

  public function __construct(ContainerInterface $container){

    $this->container=$container;
    $this->twig=$this->container['twig'];
    $this->app=$this->container['app'];
    $this->contacto =$this->container['contacto'];
    
    $this->entityManager = $this->container['entity-manager'];

  }

  public function index(RequestInterface $request, $response){

    $viewModel=[];
    $viewModel['mailed']=false;
    $viewModel['socialNetworks']=$this->app['socialNetworks'];
    
    $this->twig->render($response,'layouts/inicio.php',$viewModel);

  }

  public function construccion(RequestInterface $request, $response){

    $viewModel=[];
    $viewModel['socialNetworks']=$this->app['socialNetworks'];
    $this->twig->render($response,'layouts/construccion.php',$viewModel);

  }

}

?>