<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Creintech extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 public function index()
	 {
	  $data['contenido']='noticias_view';
	  $this->load->view('index',$data); 
	 }
	 /////////////////////////////////////////////////////////////////////
	 public function cie()
	 {
	  $data['contenido']='cie_view';
	  $this->load->view('index',$data); 
	 }
	 public function sitios()
	 {
	  $data['contenido']='sitios_view';
	  $this->load->view('index',$data); 
	 }
	 /////////////////////////////////////////////////////////////////////////////////////
	 public function quienes()
	 {
	  $data['contenido']='Principal/quienesomos_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }	 
	 public function caphumano()
	 {
	  $data['contenido']='Principal/capital_humano_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function contacto()
	 {
	  $data['contenido']='Principal/contacto_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 ////////////////////////////////////////////////////////////////////////////////////////
	 public function agentes_inno()
	 {
	  $data['contenido']='Ecosistema/agentes_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }

	 public function centros()
	 {
	  $data['contenido']='Agentes/centros_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function empresas()
	 {
	  $data['contenido']='Agentes/empresas_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function finan()
	 {
	  $data['contenido']='Agentes/finan_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function ies()
	 {
	  $data['contenido']='Agentes/ies_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function nivelesgobierno()
	 {
	  $data['contenido']='Agentes/niveles_gobierno_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function orgciviles()
	 {
	  $data['contenido']='Agentes/orgciviles_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function poderesgobierno()
	 {
	  $data['contenido']='Agentes/poderes_gobierno_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function sociedad()
	 {
	  $data['contenido']='Agentes/sociedad_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function iden_agentes()
	 {
	  $data['contenido']='Agentes/iden_agentes_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 ///////////////////////////////////////////////////////////////////////////////////////////
	 public function solidos()
	 {
	  $data['contenido']='Residuos/solidos_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function electronicos()
	 {
	  $data['contenido']='Residuos/electronicos_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function reuso()
	 {
	  $data['contenido']='Residuos/recanalizacion_reuso_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 ///////////////////////////////////////////////////////////////////////////////////////////
	 public function proyecto()
	 {
	  $data['contenido']='Proyectos/proyectos_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function ecosistema()
	 {
	  $data['contenido']='Proyectos/ecosistema_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function maquinaria()
	 {
	  $data['contenido']='Proyectos/maquinariarsu_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function aprovechamiento()
	 {
	  $data['contenido']='Proyectos/programasrsu_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }	 
	 public function reciclaje()
	 {
	  $data['contenido']='Proyectos/reciclaje_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function recanalizacion()
	 {
	  $data['contenido']='Proyectos/reuso_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function cursos()
	 {
	  $data['contenido']='Proyectos/cursoscap_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function gestion()
	 {
	  $data['contenido']='Proyectos/sistegestion_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 ///////////////////////////////////////////////////////////////////////////////////////////	 
	 public function prog_ase()
	 {
	  $data['contenido']='Servicios/capayase_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function resi()
	 {
	  $data['contenido']='Servicios/residuos_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function disenio()
	 {
	  $data['contenido']='Servicios/disenio_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }		 
	 ////////////////////////////////////////////////////////////////////////////////////
	 public function tesis()
	 {
	  $data['contenido']='Idi/tesis_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function inves()
	 {
	  $data['contenido']='Idi/inves_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function idi()
	 {
	  $data['contenido']='Idi/idi_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function ie()
	 {
	  $data['contenido']='Idi/innovacionemp_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }
	 public function filosofia()
	 {
	  $data['contenido']='Idi/filosofias_view';//Nombre de carpeta y nombre de la vista
	  $this->load->view('index',$data); 
	 }	 	 
	 	 	
	 ////////////////////////////////////////////////////////////////////////////////////
	 public function principal_notice(){
	 	$data['contenido'] = 'Noticias/principal_notice_view';
	 	$this->load->view('index',$data);
	 }
	 public function second_notice(){
	 	$data['contenido'] = 'Noticias/second_notice_view';
	 	$this->load->view('index',$data);
	 }
	 public function third_notice(){
	 	$data['contenido'] = 'Noticias/third_notice_view';
	 	$this->load->view('index',$data);
	 }
	 public function fourth_notice(){
	 	$data['contenido'] = 'Noticias/fourth_notice_view';
	 	$this->load->view('index',$data);
	 }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */