<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *"); // allow access for cross-domain origin sharing

class ListController_Others extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('studentsfeedback/listmodel_others');
        $this->load->library("pagination");
	}

	public function index() {

        $config = array();
        $limit = 3; //number of students per page
        $config["base_url"] = "/studentinterview/Others";
        $config["total_rows"] = $this->listmodel_others->recordCount();
        $config["uri_segment"] = 3;
        $config['per_page'] = $limit;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 3; //max pagination links number will be shown
        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';
        $config['first_tag_open'] = '&nbsp;<span class="first">';
        $config['first_tag_close'] = '</span>';
        $config['first_link'] = 'First';
        $config['last_tag_open'] = '&nbsp;<span class="last">';
        $config['last_tag_close'] = '</span>';
        $config['last_link'] = 'Last';
        $config['prev_tag_open'] = '&nbsp;<span class="prev">';
        $config['prev_tag_close'] = '</span>';
        $config['prev_link'] = '上一页';
        $config['next_tag_open'] = '&nbsp;<span class="next">';
        $config['next_tag_close'] = '</span>';
        $config['next_link'] = '下一页';
        $config['cur_tag_open'] = '&nbsp;<span class="current">';
        $config['cur_tag_close'] = '</span>';
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->listmodel_others->getInterviews($limit, $page);
        $data["links"] = $this->pagination->create_links();
        if($this->input->post('ajax')) {
         $this->load->view('categorylist/ajax/othersajax',$data);
        } 
        else {
         $this->load->view('categorylist/others',$data);
       }
    }

}
