<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Plataforma Tecnologica TOC</title>
</head>
<body>
  
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cregistro extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('muser','',TRUE);
   $this->load->library("encrypt");
 }

 function index()
 {
   //El método tiene la validación de credenciales o usuarios
   $this->load->library('form_validation');

    $this->form_validation->set_rules('nom','Nombre','required|trim|xss_clean');        
    $this->form_validation->set_rules('ape','Apellidos','required|trim|xss_clean');
    $this->form_validation->set_rules('correo','Correo','required|valid_email|trim|xss_clean|callback_check_database');
    $this->form_validation->set_rules('contra','Contraseña','required|trim|xss_clean|min_length[5]');
    $this->form_validation->set_rules('contra2','Repetir contraseña','required|trim|xss_clean|min_length[5]|matches[contra]');                
    

    if($this->form_validation->run() == FALSE)
     {
       //Validación de campo fallado. Usuario redirigido a la página iniciar sesión
        $data['contenido']='registro_view';
        $this->load->view('index',$data);
     }
     else
     {
        $nombre = $this->input->post('nom');
        $apellido = $this->input->post('ape');
        $correo_e = $this->input->post('correo');
        $contrasenia = $this->input->post('contra'); 
        $p = $this->encrypt->encode($contrasenia);
                //ENVÍAMOS LOS DATOS AL MODELO CON LA SIGUIENTE LÍNEA
        $result = $this->muser->new_user($nombre,$apellido,$correo_e,$p);//SE GUARDA EL USUARIO EN LA BASE DE DATOS 
        if ($result) {
          $this->session->set_userdata('usuario', $nombre);               
          $data['contenido']='noticias_view';
          $this->load->view('session_view',$data);
        }
        else{
          //Validación de registro fallada
          $data['contenido']='registro_view';
          $this->load->view('index',$data);
        }
        
     }

 }

 function check_database($correo)
 {
    //consultar la base de datos
   $result = $this->muser->consulta_user($correo);

   if($result)
   {
      return TRUE;      
   }
   else  { 
     $this->form_validation->set_message('check_database', 'La cuenta de correo ya se encuentra en uso');
     return FALSE;
   }
 }

 function logout()
 {     
    $this->session->sess_destroy();
    $data['contenido']='noticias_view';
    $this->load->view('index',$data);
 }
}
?>
</body>
</html>