<?php

session_start();

 require 'config.php';
 require 'classes/Page.php';
 require 'classes/Model.php';
 require 'classes/AbstractView.php';
 require 'classes/AdminIndexController.php';
 require 'classes/Validator.php';

 // create the Login/Index page object
$adminLogin = new AdminIndexController;
// view indicates the HTML file to use and display
$view = $adminLogin->makeView();

// model stores all of our database queries
$model = $adminLogin->makeModel();

// check to see if the user has posted data to the form
if (empty($_POST)) {
   $findAdmin = $model ->find('admin',$_SESSION['empid']);
  
   if($findAdmin){
       $view->setTemplate('admin/admin_console.tpl.php');
       $view->display();
   }
   else{
       header('Location: license_upload.php');
   }
}
// data was posted so we must do the following
else {
   // 1. Validate the data if JavaScript didn't do it
   $validator = new Validator($_POST);
   $result = $validator->validate();
   // 2. If the data is invalid, get and display error messages
   if (!$result) { // validation failed, errors were generated
       $errors = $validator->getErrors();  // an array of strings
       $view->setTemplate('admin/admin_console.tpl.php');
       $view->addVar('errors', $errors);
       $view->addVars($_POST);
       $view->display();
   }
// 3. If the data is valid, update the database and go to next page
   else {
       if ($model->find('admin', $_POST['empid'], $_POST['passwd']) == true){
           header('Location: admin/admin_console.tpl.php');
       }
       else {
           $view->setTemplate('admin/admin_console.tpl.php');
           $view->addVar('errors', 'Invalid national id or password');
           $view->addVars($_POST);
           $view->display();            
       }
      
   }
}