<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	protected $data = array();

	public function layout(){
		$this->template['Carrusel'] = $this->load->view('Diseno/Parciales/Carrusel', $this->data, TRUE);
		$this->template['Footer'] = $this->load->view('Diseno/Parciales/Footer', $this->data, TRUE);
		$this->template['HTMLheader'] = $this->load->view('Diseno/Parciales/HTMLheader', $this->data, TRUE);
		$this->template['Navegacion'] = $this->load->view('Diseno/Parciales/Navegacion', $this->data, TRUE);
		$this->template['scripts'] = $this->load->view('Diseno/Parciales/scripts', $this->data, TRUE);
		$this->template['Seccion1'] = $this->load->view('Diseno/Parciales/Seccion1', $this->data, TRUE);
		$this->template['Seccion2'] = $this->load->view('Diseno/Parciales/Seccion2', $this->data, TRUE);
		$this->template['Seccion3'] = $this->load->view('Diseno/Parciales/Seccion3', $this->data, TRUE);
		$this->template['Seccion4'] = $this->load->view('Diseno/Parciales/Seccion4', $this->data, TRUE);
		$this->template['Seccion5'] = $this->load->view('Diseno/Parciales/Seccion5', $this->data, TRUE);
		$this->template['Seccion6'] = $this->load->view('Diseno/Parciales/Seccion6', $this->data, TRUE);
		$this->template['Seccion7'] = $this->load->view('Diseno/Parciales/Seccion7', $this->data, TRUE);
		$this->template['page'] = $this->load->view($this->page, $this->data, TRUE);
		$this->load->view('Diseno/app', $this->template);
	}

	public function index(){
		$this->page = "Vistas/Home";
		$this->layout();
	}

}
