<?php
require_once 'model/model.php';
class controller{
    function index (){
        $model = new model;
        $datas = $model->getallUsers();
        require_once('view/index.php');
    }
    function details(){
        $model = new model;
        $id = $_GET['id'];
        $data = $model -> getuser($id);
        if($data)
            header("location:index.php");
            else
            header("error.php");
    }
    function add(){
        require_once ' view/add.php';
        if(isset($_POST['txtmamh'])){
            $mamh = $_POST['txtmamh'];
            $ten_mh = $_POST['txttenmh'];
            $sotinchi = $_POST['txtsotinchi'];
            $sotiet_lt = $_POST['txtsotiet_lt'];
            $sotiet_bt = $_POST['txtsotietbt'];
            $sotiet_bt = $_POST['txtsotietbt'];
            $sogio_tuhoc = $_POST['txtsogiotuhoc'];
            $model = new model;
            $result = $model ->addUsers($mamh , $ten_mh, $sotinchi,$sotiet_lt ,$sotiet_bt ,$sotiet_thtn,$sogio_tuhoc);
            if($result)
            header("location:index.php");
            else
            header("error.php");

        }
    }
    function edit(){
        $model = new model;
        $id = $_GET['id'];
        $data = $model ->getUser($id);
        require_once('view/edit.php');
        if(isset($_POST['txtmamh'])){
            $mamh = $_POST['txtmamh'];
            $ten_mh = $_POST['txttenmh'];
            $sotinchi = $_POST['txtsotinchi'];
            $sotiet_lt = $_POST['txtsotiet_lt'];
            $sotiet_bt = $_POST['txtsotietbt'];
            $sotiet_bt = $_POST['txtsotietbt'];
            $sogio_tuhoc = $_POST['txtsogiotuhoc'];
            $model = new model;
            $result = $model ->addUsers($mamh , $ten_mh, $sotinchi,$sotiet_lt ,$sotiet_bt ,$sotiet_thtn,$sogio_tuhoc);
            if($result)
            header("location:index.php");
            else
            header("error.php");
        }
        }
        function delete(){
            $model = new model;
            $id = $_GET['id'];
            $result = $model -> deleteUser($id);
            if($result)
                header("location:index.php");
                else
                header("error.php");
        }
}
?>