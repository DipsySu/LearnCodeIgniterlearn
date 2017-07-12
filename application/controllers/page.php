<?php

class Page extends CI_Controller {

	function view($page){
	  if ( ! file_exists(APPPATH.'views/page/'.$page.'.php'))
	    {
	        // Whoops, we don't have a page for that!
	        show_404();
	    }

	    $data['title'] = ucfirst($page); // Capitalize the first letter

	    $this->load->view('templates/header', $data);
	    // $this->load->view('page/'.$page, $data);
	    $this->load->view('page/'.$page, $data);
	    $this->load->view('templates/footer', $data);

	}


}
