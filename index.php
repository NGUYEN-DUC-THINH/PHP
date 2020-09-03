<?php
require_once "controller/user.php";
require_once "controller/admin.php";
if (isset($_GET["controller"])){
    $con =$_GET["controller"];
}
else{
    $con ='user';
}
$class = $con;
$a = new $class();
if (isset($_GET["action"])) {
    $c = $_GET["action"];
    }
else{
    $c ="addview";
}
if (isset($_GET["id"])) {
    $d = $_GET["id"];
}
$a->$c();

/*if($con == 'admin')
{
    $a =new admin();
    if (isset($_GET["action"])) {
        $c = $_GET["action"];
        switch($c) {
            case "show":
                $id = (int)$_GET["id"];
                $a->show($id);
                break;
            case "edit":
                $id = (int)$_GET["id"];
                $b=$a->edit($id);
                break;
            case "delete":
                if(isset($_POST['submit'])){
                    $select1 = $_POST['page'];
                }
                else{
                    $select1="1";
                }
                $id = (int)$_GET["id"];
                $page=1;
                $a->del($id,(int)$select1);
                break;
            case "upload":
                if (isset($_POST['upload'])){
                    $id = $_GET['id'];
                    $title = $_POST["Title"];
                    $des = $_POST["Description"];
                    $status = $_POST["status"];
                    $a->upload($id,$title,$des,$status);
                    break;
                }
            case "add":
                $a->addview();
                break;

            case "adddone":
                if(isset($_POST["add"]))
                {
                    $title = $_POST["Title"];
                    $img = $_POST["myfile"];
                    $des = $_POST["Description"];
                    $status = $_POST["status"];
                    $a->add($title,$des,$img,$status);
                    $a->index("1");
                }
        }
    }
    else{
        if(isset($_POST['submit'])){
            $select1 = $_POST['page'];
        }
        else{
            $select1="1";
        }
        $a->index((int)$select1);
    }
}

else{
    if(isset($_POST['submit'])){
        $select1 = $_POST['page'];
    }
    else{
        $select1="1";
    }
    $a =new user();
    $a->index((int)$select1);
}
*/
?>