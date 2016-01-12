<?php
function get_coursename($course_id){
    $conn = db_connect();
    $conn->query("set names utf8");
  $result = $conn->query("select m_course
                          from t_course
                          where m_courseid = '".$course_id."'");
    if($result->num_rows!=1) {
      return '';
    }
    $this_row = $result->fetch_array();
    $course_name = $this_row[0];
    return  $this_row[0];
}
function get_teacher($course_id){
    $conn = db_connect();
    $conn->query("set names utf8");
    $result = $conn->query("select m_teacher
                          from t_course
                          where m_courseid = '".$course_id."'");
    if($result->num_rows!=1) {
      return '';
    }
    $this_row = $result->fetch_array();
    return  $this_row[0];
}
function get_num_concern($course_id){
    $conn = db_connect();
  $result = $conn->query("select m_numconcern
                          from t_course
                          where m_courseid = '".$course_id."'");
    if($result->num_rows!=1) {
      return '';
    }
    $this_row = $result->fetch_array();
    return  $this_row[0];
}
function get_post_body($postid){
    $conn = db_connect();
    $result = $conn->query("select message
                          from t_crforum_body
                          where postid = '".$postid."'");
    if($result->num_rows!=1) {
      return '';
    }
    $this_row = $result->fetch_array();
    return  $this_row[0];
}
?>