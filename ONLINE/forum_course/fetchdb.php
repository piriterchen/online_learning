<?php

function expand_all(&$expanded) {
  // mark all threads with children as to be shown expanded
  $conn = db_connect();
  $query = "select postid from t_crforum_header where children = 1";
  $result = $conn->query($query);
  $num = $result->num_rows;
  for($i = 0; $i<$num; $i++)   {
    $this_row = $result->fetch_row();
    $expanded[$this_row[0]]=true;
  }
}

function get_post($postid) {
  // extract one post from the database and return as an array

  if(!$postid) {
    return false;
  }

  $conn = db_connect();

  //get all header information from 'header'
  $query = "select * from t_crforum_header where postid = '".$postid."'";
  $result = $conn->query($query);
  if($result->num_rows!=1) {
    return false;
  }
  $post = $result->fetch_assoc();

  // get message from body and add it to the previous result
  $query = "select * from t_crforum_body where postid = '".$postid."'";
  $result2 = $conn->query($query);
  if($result2->num_rows>0)  {
    $body = $result2->fetch_assoc();
    if($body) {
      $post['message'] = $body['message'];
    }
  }
  return $post;
}

function get_post_title($postid) {
  // extract one post's name from the database

  if(!$postid) {
    return '';
  }

  $conn = db_connect();

  //get all header information from 'header'
  $query = "select title from t_crforum_header where postid = '".$postid."'";
  $result = $conn->query($query);
  if($result->num_rows!=1) {
    return '';
  }
  $this_row = $result->fetch_array();
  return  $this_row[0];

}

function get_post_message($postid) {
  // extract one post's message from the database

  if(!$postid) {
    return '';
  }

  $conn = db_connect();

  $query = "select message from t_crforum_body where postid = '".$postid."'";
  $result = $conn->query($query);
  if($result->num_rows>0)   {
    $this_row = $result->fetch_array();
    return $this_row[0];
  }
}


function add_quoting($string, $pattern = '> ') {
  // add a quoting pattern to mark text quoted in your reply
  return $pattern.str_replace("\n", "\n$pattern", $string);
}

function store_new_post($post) {
  // validate clean and store a new post

  $conn = db_connect();
  // check no fields are blank
  if(!filled_out($post))  {
    return false;
  }
  $post = clean_all($post);

  //check parent exists
  if($post['parent']!=0)   {
    $query = "select postid from t_crforum_header where postid = '".$post['parent']."'";
    $result = $conn->query($query);
    if($result->num_rows!=1)  {
      return false;
    }
  }

  // check not a duplicate
  $query = "select t_crforum_header.postid from t_crforum_header, t_crforum_body where
            t_crforum_header.postid = t_crforum_body.postid and
            t_crforum_header.courseid = ".$post['courseid']." and
            t_crforum_header.parent = ".$post['parent']." and
            t_crforum_header.poster = '".$post['poster']."' and
            t_crforum_header.title = '".$post['title']."' and
            t_crforum_header.area = ".$post['area']." and
            t_crforum_body.message = '".$post['message']."'";

  $result = $conn->query($query);
  if (!$result) {
     return false;
  }

  if($result->num_rows>0) {
     $this_row = $result->fetch_array();
     return $this_row[0];
  }

  $query = "insert into t_crforum_header values
            ( null,
             '".$post['courseid']."',
             '".$post['parent']."',
             '".$post['poster']."',
             '".$post['title']."',
             0,
             '".$post['area']."',
             now()
            )";

  $result = $conn->query($query);
  if (!$result) {
     return false;
  }

  // note that our parent now has a child
  $query = "update t_crforum_header set children = 1 where postid = '".$post['parent']."'";
  $result = $conn->query($query);
  if (!$result) {
     return false;
  }

  // find our post id, note that there could be multiple headers
  // that are the same except for id and probably posted time
  $query = "select t_crforum_header.postid from t_crforum_header left join t_crforum_body on t_crforum_header.postid = t_crforum_body.postid
                   where parent = '".$post['parent']."'
                   and courseid = '".$post['courseid']."'
                   and poster = '".$post['poster']."'
                   and title = '".$post['title']."'
                   and t_crforum_body.postid is NULL";

  $result = $conn->query($query);
  if (!$result)  {
     return false;
  }

  if($result->num_rows>0) {
    $this_row = $result->fetch_array();
    $id = $this_row[0];
  }

  if($id) {
     $query = "insert into t_crforum_body values ($id, '".$post['message']."')";
     $result = $conn->query($query);
     if (!$result) {
       return false;
     }

    return $id;
  }

}

?>
