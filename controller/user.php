<?php
require_once "model/model.php";

class user
{
    protected $model;
    public function __construct()
    {
        $this->model= new model();
    }
    public function index($page){
        $lt = $this->model->getdata();
        $lt2 = array_chunk($lt, 3);
        $pr = $lt2[$page-1];
        $b = count($lt2);
        require "view/User/user.html";

    }

}
/*$a = new admin();
$a->upload(1,'gi do','mo ta buc anh','../anh1.png',1)*/

?>