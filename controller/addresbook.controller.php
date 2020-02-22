<?php
require_once 'model/addresbook.php';

class addresbookController{
  private $model;
    
  public function __CONSTRUCT(){
        $this->model = new addresbook();
  }
    
  public function index(){
    require_once 'view/header.php';
    require_once 'view/addresbook/addresbook.php';
       
  }
    
  public function edit(){
    $addresbook = new addresbook(); 
    if(isset($_REQUEST['id'])){
      $addresbook = $this->model->search($_REQUEST['id']);
    }
        
    require_once 'view/header.php';
    require_once 'view/addresbook/addresbook-edit.php';
        
  }
    
  public function create(){
    $addresbook = new addresbook();
        
    $addresbook->id      = $_REQUEST['id'];
    $addresbook->name    = $_REQUEST['name'];
    $addresbook->email   = $_REQUEST['email'];
    $addresbook->address = $_REQUEST['address']; 
    $addresbook->phone   = $_REQUEST['phone'];    
      

    $addresbook->id > 0 
      ? $this->model->update($addresbook)
      : $this->model->create($addresbook);
        
    header('Location: index.php');
  }
    
  public function delete(){
    $response = $this->model->delete($_REQUEST['id']);
  }
}