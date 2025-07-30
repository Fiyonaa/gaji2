<?php
class LandingPage extends CI_Controller {

	public function index() 
	{
		$this->load->view('landingPage');
	}
	public function saran()
    {
        $data['content'] = 'saran'; 
        $this->load->view('landingPage', $data);
    }
}
