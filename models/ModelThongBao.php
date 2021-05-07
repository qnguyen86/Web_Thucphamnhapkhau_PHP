<?php 
    trait ModelThongBao{
        public function modelHotNews(){
            $conn = Connection::getInstance();
            $query = $conn->query("select * from news where hot=1 order by id desc limit 0,6");
            return $query->fetchAll();
        }
        public function modelGetSlide1($position){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from slides where position=$position order by id desc");
			$result = $query->fetchAll();
			return $result;
		}
    }
 ?>