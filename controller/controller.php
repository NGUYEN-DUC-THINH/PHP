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
class admin extends user
{
    public function index($page)
    {
        $lt = $this->model->getdata();
        $lt2 = array_chunk($lt, 3);
        $pr = $lt2[$page - 1];
        $b = count($lt2);
        require "view/admin/admin.html";

    }
    public function show($id){
        $b = $this->model->get($id);
        $title = $b["title"];
        $img = $b["image"];
        $des = $b["description"];
        $create = (string)$b["create_at"];
        $update = (string)$b["update_at"];
        if($b["status"]==0){
            $status = "Disnable";
        }
        else{
            $status = "Enable";
        };
        require "view/admin/show.html";
    }
    public function del($id,$page){
        $this->model->delete($id);
        $lt = $this->model->getdata();
        $lt2 = array_chunk($lt, 3);
        $pr = $lt2[$page - 1];
        $b = count($lt2);
        require_once "view/admin/admin.html";
    }
    public function edit($id){
        $b = $this->model->get($id);
        $img = $b["image"];
        require "view/admin/edit.html";
        return $img;
    }
    public function upload($id,$title,$des,$status){
        $this->model->update($id,$title,$des,$status);
        $this->index(1);
    }
    public function addview(){
        require_once "view/admin/add.html";
    }
    public function add($title,$des,$img,$status){
        $this->model->add($title,$des,$img,$status);
    }


}
/*$a = new admin();
$a->upload(1,'gi do','mo ta buc anh','../anh1.png',1)*/

?>