<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DetailsController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('studentdetailsmodel');
	}

	 public function index() {
        //how many interviews will be shown in a page
        $studentID = $this->uri->segment(3);
        $result = $this->studentdetailsmodel->getInformation($studentID);
        $data['info'] = $result['rows'];
        $config['base_url'] = site_url("studentinterview/detail/");
        $this->load->view('feedback/feedbackdetail', $data);
    }

}