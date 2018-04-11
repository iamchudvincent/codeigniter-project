<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class StudentDetailsModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    //fetch specific user interview information
    function getInformation($studentID) {
        $this->db->select('student_interview.*,student_type.type_name,province.province_name,course_type.course_name');
        $this->db->from('student_interview');    // student_interview table
        $this->db->where('student_interview.id =', $studentID);
        $this->db->join('student_type', 'student_type.type_id = student_interview.student_type');
        $this->db->join('course_type', 'course_type.course_id = student_interview.course_type');
        $this->db->join('province', 'province.id = student_interview.from_city');
        $result['rows']=$this->db->get(); 
        return $result;
    }

}