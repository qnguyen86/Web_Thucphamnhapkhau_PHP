<?php 
	trait ModelSearch{
		public function modelAjaxSearch(){
			$conn = Connection::getInstance();
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			$query = $conn->query("select id,name,photo from products where name like '%$key%'");
			return $query->fetchAll();
		}
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			$fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"] : 0;
			$toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"] : 0;
			//lay bien page truyen tu url
			$page = isset($_GET["page"])&&$_GET["page"]>0 ? $_GET["page"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where price >= $fromPrice and price <= $toPrice order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
			//--- 
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			$fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"] : 0;
			$toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select id from products where price >= $fromPrice and price <= $toPrice");
			//tra ve so ban ghi
			return $query->rowCount();
		}
		public function modelHotNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where hot=1 order by id desc limit 0,3");
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