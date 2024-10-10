<?php

require'../assets/class/database.class.php';
require'../assets/class/function.class.php';


if($_POST)
{
$post=$_POST;


if ($post['resume_id'] && $post['font']){


$font=$db->real_escape_string($post['font']); 


    try{
        $query = "UPDATE resumes SET ";
        $query.="font ='$font'";
        $query.="WHERE id={$post['id']}'";
       
       
  $db->query($query);
  

}
}
