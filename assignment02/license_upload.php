<?php

session_start();

 require 'config.php';
 require 'classes/Page.php';
 require 'classes/Model.php';
 require 'classes/AbstractView.php';
 require 'classes/LicenseUploadController.php';
 require 'classes/Validator.php';

 // create the registration page object
 $licupload = new LicenseUploadController;

 // view indicates the HTML file to use and display
 $view = $licUpload->makeView();
 $model = $licUpload->makeModel();

if (empty($_POST)) {
    $view->setTemplate('license_upload.tpl.php');
    $view->display();
}
else{
    $validator = new Validator($_POST);
    $result = $validator->validate();

    //Check if Upload button was clicked
    if (isset($_POST['add_lic_img']))
    {
        $result = true;
    }

    if (!$result) { // validation failed, errors were generated
        $errors = $validator->getErrors();  // an array of strings
        $view->setTemplate('license_upload.tpl.php');
        $view->addVar('errors', $errors);
        $view->display();
    }

    if($model->update('citizen',$_POST))
    {
        header('Location:public_console.php');
    }
    else{
        header('Location:cover_note_upload.html');
    }
}

