<?php

namespace App\Helpers;
use Core\Tools\Mailer;

class Contacto{

  protected $mailer;
  protected $receivers=[];

  public function __construct(Mailer $mailer)
  {
    
    $this->mailer = $mailer;

  }

  public function setMessage(array $request){

    //
    $nombre     =  $request['nombre'];
    $email      =  $request['email'];
    $estado     =  $request['estado'];
    $empresa    =  $request['empresa'];
    $cotizacion =  $request['cotizacion'];
    $mensaje    =  $request['mensaje'];
    
    //
    $message = 
    '<h4> Nombre: '.$nombre.'</h4>'.
    '<h4> Email: '.$email.'</h4>'.
    '<h4> Estado: '.$estado.'</h4>'.
    '<h4> Empresa: '.$empresa.'</h4>'.
    '<h4> Cotizacion: '.$cotizacion.'</h4>'.
    '<h4> Mensaje: </h4>'.
    '<p>'.$mensaje.'</p>';

    //
    $this->mailer->setMessage($message);

  }

  public function setSubject(string $subject){

    $this->mailer->setSubject($subject);

  }

  public function setReceivers(array $receivers){

    $this->mailer->setReceivers($receivers);

  }

  public function send(){

    $this->mailer->send();

  }

}