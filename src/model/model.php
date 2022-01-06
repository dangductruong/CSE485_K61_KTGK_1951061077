<?php
    require_once 'config/db.php';
    class model{
        private $mamh, $ten_mh, $sotinchi, $sotietlt, $sotietbt, $sotietthtn, $sogiotuhoc;

        public function connectDb() {
            $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
            return $connection;
        }
    
        public function closeDb($connection = null) {
            mysqli_close($connection);
        }

        public function getAllUsers(){
            $conn = $this->connectDb();
            $sql = "SELECT * FROM monhoc";
            $result = mysqli_query($conn,$sql);
            $datas = [];
            if(mysqli_num_rows($result) > 0){
                $arr_users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            }
            $this->closeDb($conn);

            return $arr_users;
        }
        public function addUsers( $mamh, $ten_mh, $sotinchi, $sotiet_lt, $sotiet_bt, $sotiet_thtn, $sogio_tuhoc){
            $conn = $this->connectDb();
            $sql = "INSERT INTO monhoc(mamh, ten_mh, sotinchi, sotiet_lt, sotiet_bt, sotiet_thtn, sogio_tuhoc) VALUES ('$mamh',' $ten_mh',' $sotinchi',' $sotiet_lt',' $sotiet_bt',' $sotiet_thtn',' $sogio_tuhoc')";
            $result = mysqli_query($conn,$sql);
            $this->closeDb($conn);
            return $result;
        }
        public function getUser($id){
            $conn = $this->connectDb();
            $sql = "SELECT * FROM monhoc WHERE mamh = '$id'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0)
                $user = mysqli_fetch_assoc($result);
            $this->closeDb($conn);
            return $user;
        }

        public function updateUser($mamh, $ten_mh, $sotinchi, $sotiet_lt, $sotiet_bt, $sotiet_thtn, $sogio_tuhoc){
            $conn = $this->connectDb();
            $sql = "UPDATE monhoc SET mamh='$mamh', ten_mh='$ten_mh', sotinchi='$sotinchi', sotiet_lt='$sotiet_lt', sotiet_bt='$sotiet_bt', sotiet_thtn='$sotiet_thtn', sogio_tuhoc='$sogio_tuhoc'  WHERE bd_id = '$id'";
            $result = mysqli_query($conn,$sql);
            $this->closeDb($conn);
            return $result;
        }

        function deleteUser($id){
            $conn = $this->connectDb();

            $sql = "DELETE FROM monhoc WHERE mamh = '$id'";
            $result = mysqli_query($conn,$sql);

            $this->closeDb($conn);
            return $result;
        }
    }
?>