<?php 
	trait ModelWishlist{
		public function modelAdd($id){
		    if(!isset($_SESSION['Wishlist'][$id])) {        
		        //---
		        //PDO
		        $conn = Connection::getInstance();
		        $query = $conn->prepare("select * from products where id=:id");
		        $query->execute(array("id"=>$id));
		        $query->setFetchMode(PDO::FETCH_OBJ);
		        $product = $query->fetch();
		        //---
		        
		        $_SESSION['Wishlist'][$id] = array(
		            'id' => $id,
		            'name' => $product->name,
		            'photo' => $product->photo
		        );
		    }
		}
		public function modelDelete($id){
		    unset($_SESSION['Wishlist'][$id]);
		}
		public function modelHotNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where hot=1 order by id desc limit 0,2");
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