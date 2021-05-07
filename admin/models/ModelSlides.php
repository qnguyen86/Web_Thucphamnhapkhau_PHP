<?php 
	trait ModelSlides{
		//lay ve danh sach cac ban ghi
		public function modelRead($recordPerPage){
			//lay bien page truyen tu url
			$page = isset($_GET["page"])&&$_GET["page"]>0 ? $_GET["page"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from slides order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
			//--- 
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select id from slides");
			//tra ve so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord(){
			$id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from slides where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelUpdate(){
			$id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
			$name = $_POST["name"];
			$description = $_POST["description"];
			$position = $_POST["position"];
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("update slides set name=:var_name,description=:var_description, position=:var_position where id=$id");
			$query->execute(array("var_name"=>$name,"var_description"=>$description,"var_position"=>$position));	
			//---
			//neu user upload anh thi thuc hien upload
			
			$photo = "";
			if($_FILES["photo"]["name"] != ""){
				//---
				//lay anh cu de xoa
				$oldPhoto = $conn->query("select photo from slides where id=$id");
				if($oldPhoto->rowCount() > 0){
					$record = $oldPhoto->fetch();
					//xoa anh
					if($record->photo != "" && file_exists("../assets/upload/slides/".$record->photo))
						unlink("../assets/upload/slides/".$record->photo);
				}
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/slides/$photo");
				$query = $conn->prepare("update slides set photo=:var_photo where id=$id");
				$query->execute(array("var_photo"=>$photo));
			}
			//---		
		}
		public function modelCreate(){
			$id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
			$name = $_POST["name"];
			$description = $_POST["description"];
			$photo = "";
			$position = $_POST["position"];
			if($_FILES["photo"]["name"] != ""){
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/slides/$photo");
			}
			//update name
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert slides set name=:var_name,description=:var_description,photo=:var_photo, position=:var_position");
			$query->execute(array("var_name"=>$name,"var_description"=>$description,"var_photo"=>$photo,"var_position"=>$position));
			//---
		}
		public function modelDelete(){
			$id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//---
			//lay anh cu de xoa
			$oldPhoto = $conn->query("select photo from slides where id=$id");
			if($oldPhoto->rowCount() > 0){
				$record = $oldPhoto->fetch();
				//xoa anh
				if($record->photo != "" && file_exists("../assets/upload/slides/".$record->photo))
					unlink("../assets/upload/slides/".$record->photo);
			}
			//---
			//thuc hien truy van
			$conn->query("delete from slidess where id=$id");
		}
		
	}
 ?>