<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ListModel_Others extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    //fetch interviews
    public function getInterviews($limit, $offset) {

        if ($offset > 0) {
                $offset = ($offset - 1) * $limit;
            }
 
        $course_not_included = array(KIDSCOURSEID,DAILYCONVOID,TOPICID,QQONEONONEID,CALLANID);
        $this->db->select('student_interview.*,student_type.type_name,province.province_name,course_type.course_name');
        $this->db->from('student_interview');
        $this->db->join('student_type', 'student_type.type_id = student_interview.student_type');
        $this->db->join('course_type', 'course_type.course_id = student_interview.course_type');
        $this->db->join('province', 'province.id = student_interview.from_city');
        $this->db->where_not_in('course_type',$course_not_included);
        $this->db->order_by("interview_date", "desc");
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function recordCount(){
        $course_not_included = array(KIDSCOURSEID,DAILYCONVOID,TOPICID,QQONEONONEID,CALLANID);
        return $this->db->select('student_name')->where_not_in('course_type',$course_not_included)->from("student_interview")->count_all_results();
    }


}