<?php

require'../assets/class/database.class.php';
require'../assets/class/function.class.php';


if($_GET)
{
$post=$_GET;

// echo "<pre>";
// print_r($post);


if ($post['id'] && $post['resume_id'] ){
    



    try{
        $query = "DELETE FROM Skills WHERE id={$post['id']} AND resume_id={$post['resume_id']}";
       
        
       
  $db->query($query);
  
  $fn->setAlert('Skills Deleted !');
  $fn->redirect('../updateresume.php?resume='.$post['slug']);
    }catch(Exception $error){
        $fn->setError($error->getMessage());
        $fn->redirect('../updateresume.php?resume='.$post['slug']);
    }

}else{
    $fn->setError('Please fill the form !');
    $fn->redirect('../updateresume.php?resume='.$post['slug']);
}
}else{
    $fn->redirect('../updateresume.php?resume='.$post['slug']);
}