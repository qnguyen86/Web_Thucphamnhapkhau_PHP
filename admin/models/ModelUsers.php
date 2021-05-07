<?php 
trait ModelUsers{
	//lây về danh sách các bản ghi
	public function modelRead($recordPerPage){
       
		//lấy biến page truyền từ url
		$page=isset($_GET["page"])&&$_GET["page"]>0 ? $_GET["page"]-1 : 0;
		//lấy từ bản ghi nào
		$from=$page * $recordPerPage;
		//lấy biến kết nối csdl
		$conn= Connection::getInstance();
		//thuc hien truy van 
		$query=$conn->query("select * from users order by id desc limit $from,$recordPerPage");
		//trả về nhiều bản ghi
		return $query->fetchAll();
	}
	//tính tống số bản ghi
	public function modelTotalRecord(){
		//lấy biến kết nối csdl
		$conn=Connection::getInstance();
		//thực hiện truy vâbs
		$query=$conn->query("select id from users ");
		// trả về số bản ghi
		return $query->rowCount();
	}
	//lay mot ban ghi tuong ung voi id truyen vao
	public function modelGetRecord(){
		$id=isset($_GET["id"])&&$_GET["id"]>0 ? $_GET["id"]: 0;
		//lấy biến kết nối csdl
		$conn= Connection::getInstance();
		//thuc hien truy van 
		$query=$conn->query("select * from users where id=$id");
		//trả về mot bản ghi
		return $query->fetch();
	}
	public function modelUpdate(){
		$id=isset($_GET["id"])&&$_GET["id"] >0 ? $_GET["id"] : 0;
		$name=$_POST["name"];
		$password=$_POST["password"];
		//update name
		//lay bien ket noi csdl
		$conn=Connection::getInstance();
		$query=$conn->prepare("update users set name=:var_name where id=$id");
			$query->execute(array("var_name"=>$name));
			//neu password ko rong thi update password
			if($password != "")
				//ma hoa password
				$password=md5($password);
			$query=$conn->prepare("update users set password=:var_password where id=$id");
			$query->execute(array("var_password"=>$password));
	}
	public function modelCreate(){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            // mã hóa password
            $password = md5($password);
            // lấy biến kết nối csdl
            $conn = Connection::getInstance();
            $query = $conn->prepare("insert into users set name=:var_name, email=:var_email, password=:var_password");
            $query->execute(array("var_name"=>$name,"var_email"=>$email, "var_password"=>$password));
        }
     public function modelDelete(){
            $id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
            // lấy biến kết nối csdl
            $conn = Connection::getInstance();
            $conn->query("delete from users where id=$id");
        }
	// public function modelCreate(){
	// 	$name=$_POST["name"];
	// 	$email=$_POST["email"];
	// 	$password=$_POST["password"];
	// 			//ma hoa password
	// 			$password=md5($password);
	// 			//lay bien ket noi csdl
	// 	$conn=Connection::getInstance();
	// 		$query=$conn->prepare("insert into users set name=:var_name, email=:var_email,password=:var_password ");
	// 		$query->execute(array("var_name"=>$name,"var_email"=>$email,"var_password"=>$password));
	// }
} ?>