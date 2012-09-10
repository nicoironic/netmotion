<?php
	class Pages extends CI_Controller
	{
		public final function view($page = 'home')
		{
			if(!file_exists('application/views/pages/' . $page . '.php'))
			{
				show_404();
			}
			
			$data['title'] = ucfirst($page);
			
			if($page == 'home')
			{
				$this->load->view('templates/index-header', $data);
				$this->load->view('pages/' . $page, $data);
				$this->load->view('templates/index-footer', $data);

			}
			else
			{
				$this->load->helper('html');
				$this->load->view('templates/header', $data);
				$this->load->view('pages/' . $page, $data);
				$this->load->view('templates/footer', $data);
			}
		}
	}
?>