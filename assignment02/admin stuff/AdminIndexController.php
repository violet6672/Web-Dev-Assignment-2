<?php
require 'AdminModel.php';
require 'AdminView.php';

class AdminIndexController extends Page
{
    public function makeModel() : Model
    {
        return new AdminModel(DB_USER, DB_PASS, DB_NAME, DB_HOST);
    }

    public function makeView() : AbstractView
    {
        return new AdminView();
    }
}