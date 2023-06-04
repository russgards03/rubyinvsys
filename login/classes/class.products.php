<?php
class Product{
	private $DB_SERVER='localhost';
	private $DB_USERNAME='root';
	private $DB_PASSWORD='';
	private $DB_DATABASE='db_wbapp';
	private $conn;
	public function __construct(){
		$this->conn = new PDO("mysql:host=".$this->DB_SERVER.";dbname=".$this->DB_DATABASE,$this->DB_USERNAME,$this->DB_PASSWORD);
		
	}
	public function new_product($productname, $producttype, $productprice){
		
		/* Setting Timezone for DB */
		$NOW = new DateTime('now', new DateTimeZone('Asia/Manila'));
		$NOW = $NOW->format('Y-m-d H:i:s');

		$data = [
			[$productname, $producttype, $productprice],
		];
		$stmt = $this->conn->prepare("INSERT INTO tbl_products (product_name, product_type, product_price) VALUES (?,?,?)");
		try {
			$this->conn->beginTransaction();
			foreach ($data as $row)
			{
				$stmt->execute($row);
			}
			$this->conn->commit();
		}catch (Exception $e){
			$this->conn->rollback();
			throw $e;
		}

		return true;

	}

	public function update_product($productname, /*$producttype,*/ $productprice, $id){
		
		/* Setting Timezone for DB */

		$NOW = new DateTime('now', new DateTimeZone('Asia/Manila'));
		$NOW = $NOW->format('Y-m-d H:i:s');

		$sql = "UPDATE tbl_products SET product_name=:product_name, /*product_type=:product_type,*/ product_price=:product_price WHERE product_id=:product_id";

		$q = $this->conn->prepare($sql);
		$q->execute(array(':product_name'=>$productname, /*':product_type'=>$producttype,*/ ':product_price'=>$productprice, ':product_id'=>$id));
		return true;
	}

	public function list_product_search($keyword) 
	{
		try 
		{
			$keyword = "%{$keyword}%";
			$q = $this->conn->prepare('SELECT * FROM `tbl_products` WHERE `product_name` LIKE ?');
			$q->bindValue(1, $keyword, PDO::PARAM_STR);
			$q->execute();
	
			$data = array();
			while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
				$data[] = $r;
			}
	
			if (empty($data)) 
			{
				return false;
			} else {
				return $data;
			}
		} 
		
		catch (PDOException $e) 
		{
			// Handle the exception, log or display an error message
			// Example: return an empty array or throw a custom exception
			return array();
		}
	}
	

	public function list_products(){
		$sql="SELECT * FROM tbl_products";
		$q = $this->conn->query($sql) or die("failed!");
		while($r = $q->fetch(PDO::FETCH_ASSOC)){
		$data[]=$r;
		}
		if(empty($data)){
		   return false;
		}else{
			return $data;	
		}
	}

	public function delete_product($id){
		$sql = "DELETE FROM tbl_products WHERE product_id=:product_id";

		$q = $this->conn->prepare($sql);
		$q->execute(array(':product_id'=>$id));
		return true;
	}

	function get_product_id($productname){
		$sql="SELECT product_id FROM tbl_products WHERE product_id = :id";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $product_id]);
		$product_id = $q->fetchColumn();
		return $product_id;
	}
	function get_product_name($id){
		$sql="SELECT product_name FROM tbl_products WHERE product_id = :id";	
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$product_name = $q->fetchColumn();
		return $product_name;
	}

	function get_product_type($id){
		$sql="SELECT product_type FROM tbl_products WHERE product_id = :id";		
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$product_type = $q->fetchColumn();
		return $product_type;
	}

	function get_product_price($id){
		$sql="SELECT product_price FROM tbl_products WHERE product_id = :id";		
		$q = $this->conn->prepare($sql);
		$q->execute(['id' => $id]);
		$product_price = $q->fetchColumn();
		return $product_price;
	}

	function get_product_image($id){
		$sql="SELECT product_image FROM tbl_products WHERE product_id = :id";
        $q = $this->conn->prepare($sql);
        $q->execute(['id' => $id]);
        $product_image	= $q->fetchColumn();
        return $product_image;
	}

}