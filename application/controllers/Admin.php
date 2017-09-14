<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	protected $data = array();

	public function layout(){
		$this->template['BarraLateralAdmin'] = $this->load->view('admin/Diseno/Parciales/BarraLateralAdmin', $this->data, TRUE);
		$this->template['FooterAdmin'] = $this->load->view('admin/Diseno/Parciales/FooterAdmin', $this->data, TRUE);
		$this->template['HeaderAdmin'] = $this->load->view('admin/Diseno/Parciales/HeaderAdmin', $this->data, TRUE);
		$this->template['HTMLheaderAdmin'] = $this->load->view('admin/Diseno/Parciales/HTMLheaderAdmin', $this->data, TRUE);
		$this->template['RightSidebar'] = $this->load->view('admin/Diseno/Parciales/RightSidebar', $this->data, TRUE);
		$this->template['scriptsAdmin'] = $this->load->view('admin/Diseno/Parciales/scriptsAdmin', $this->data, TRUE);
		$this->template['SmallChat'] = $this->load->view('admin/Diseno/Parciales/SmallChat', $this->data, TRUE);
		$this->template['SmallChatBox'] = $this->load->view('admin/Diseno/Parciales/SmallChatBox', $this->data, TRUE);
		$this->template['WidgetsAdmin'] = $this->load->view('admin/Diseno/Parciales/WidgetsAdmin', $this->data, TRUE);
		$this->template['page'] = $this->load->view($this->page, $this->data, TRUE);
		$this->load->view('admin/Diseno/appAdmin', $this->template);
	}

	public function index(){
		$this->page = "admin/Vistas/PaginaPrincipal";
		$this->layout();
		//$this->load->view('admin/appAdmin');
	}

	public function widgets(){
		$this->page = "admin/Vistas/Widgets";
		$this->layout();
		//URL: http://127.0.0.1/BibliotecaVirtual/index.php/admin/widgets
	}

}
