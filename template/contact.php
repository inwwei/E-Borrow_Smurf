<?php 
	date_default_timezone_set("Asia/Bangkok");
	class Action {
    private $pdo;
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
    
    public function __construct(){
		$this->pdo = new PDO("mysql:host=$this->servername;dbname=naitongdb1;charset=utf8", $this->username, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	public function get_admin(){
		$get = $this->pdo->prepare("SELECT * FROM employee");
		$get->execute();		
		return $get->fetchAll();		
	}
	public function get_product(){
		$get = $this->pdo->prepare("SELECT * FROM product");
		$get->execute();
        return $get->fetchAll();
	}

	public function get_order(){
		$get = $this->pdo->prepare("SELECT 	product.pid,product.pname,product.price,product.pdetail,
											customer.cid,
											tables.tid,
											nt_orders.oid,nt_orders.quantity,nt_orders.cid,nt_orders.pid,
											booking.cid,booking.tid
									from product,nt_orders,customer,tables,booking
									where nt_orders.pid = product.pid
									AND nt_orders.tid = tables.tid
									AND booking.tid = tables.tid
									AND customer.cid = nt_orders.cid
									AND booking.cid = customer.cid
									AND booking.cid = nt_orders.cid
									AND tables.tid = '".$_GET['tid']."'
									");
		$get->execute();
		return $get->fetchAll();
	
	}
/*public function confirm($data){
	foreach($data)
	$get = $this->pdo->prepare("insert into nt_orders");
	$get->bindparam(1, $username);
	$get->execute();	
	$row=$get->fetch();
	return $row["cid"];


	public function cancle($tid){
		$get = $this->pdo->prepare("delete FROM booking where tid=?" );
		$get->bindparam(1, $tid);
		$get->execute();		
		return $get->fetchAll();		
}}*/
	public function get_booking(){
		$get = $this->pdo->prepare("SELECT * FROM booking");
		$get->execute();		
		return $get->fetchAll();		
	}
	public function get_user(){
		$get = $this->pdo->prepare("SELECT * FROM customer");
		$get->execute();		
		return $get->fetchAll();		
	}
	public function tables(){
		$get = $this->pdo->prepare("SELECT * FROM tables");
		$get->execute();		
		return $get->fetchAll();
		
	}public function get_cid($username){
		$get = $this->pdo->prepare("SELECT cid FROM customer where username=?");
		$get->bindparam(1, $username);
		$get->execute();	
		$row=$get->fetch();
		return $row["cid"];
	}
	public function get_name($username){
		$get = $this->pdo->prepare("SELECT cfname FROM customer where username=?");
		$get->bindparam(1, $username);
		$get->execute();	
		$row=$get->fetch();
        return $row["cfname"];
	}

	public function insert_table($data){
		$in = $this->pdo->prepare("INSERT INTO booking VALUES(NULL, ?, ?, ?,?, ?)");
		$in->bindparam(1, $data["tid"]);
		$in->bindparam(2, $data["cfname"]);
		$in->bindparam(3, $data["tel"]);
		$in->bindparam(4, date("Y-m-d H:i:s",strtotime("now")));
		$in->bindparam(5, $data["cid"]);		
		return $in->execute();
	}

	public function change_status($table , $status){
		$in = $this->pdo->prepare("UPDATE tables set tstatus = ? where tid = ?");
		$in->bindparam(1, $status);
		$in->bindparam(2, $table);
		return $in->execute();
	}
	public function update_order($table , $status){
		$in = $this->pdo->prepare("UPDATE tables set tstatus = ? where tid = ?");
		$in->bindparam(1, $status);
		$in->bindparam(2, $table);
		return $in->execute();
	}
	public function link_page($link){
		return "<script>location.replace('".$link."')</script>";
	}
	public function check_status($table){
		$in = $this->pdo->prepare("SELECT * From tables where tid = ? and tstatus='ว่าง'");
		$in->bindparam(1, $table);
		$in->execute();
		return $in->fetch();
	}
	public function reset_table($tname){
		$in=$this->pdo->prepare("ALTER TABLE $tname AUTO_INCREMENT = 1");
		return $in->execute();
	}
	public function login($username, $password){	
		$row = $this->get_user();
		$status = false;
		
		for($i=0;$i<count($row);$i++){
			if($username==$row[$i]['username']&&$password==$row[$i]['password']){
				$status = true;
			}
		}	
		return $status;
	}
	public function addlogin($efname, $elname){	
		$row = $this->get_admin();
		$status = false;
		
		for($i=0;$i<count($row);$i++){
			if($efname==$row[$i]['efname']&&$elname==$row[$i]['elname']){
				$status = true;
			}
		}	
		return $status;
	}
	public function delete($del_number){
		$in = $this->pdo->prepare("DELETE from booking where tid=?");
		$in->bindparam(1, $del_number);		
		return $in->execute();
	}	
	public function add($pid,$pname,$pdetail,$price){
		$in = $this->pdo->prepare("INSERT INTO product VALUES(?, ?, ?, ?)");
		$in->bindparam(1, $pid);
		$in->bindparam(2, $pname);
		$in->bindparam(3, $pdetail);
		$in->bindparam(4, $price);		
		return $in->execute();
	}	
	public function addtable($tid,$tstatus,$zone,$quantity){
		$in = $this->pdo->prepare("INSERT INTO tables VALUES(?, ?, ?, ?)");
		$in->bindparam(1, $tid);
		$in->bindparam(2, $tstatus);
		$in->bindparam(3, $zone);
		$in->bindparam(4, $quantity);
			
		return $in->execute();
	}
	public function show_cus(){
		$get = $this->pdo->prepare("SELECT 	booking.tid,booking.cfname,booking.cid,booking.tel,booking.time,
											customer.cid,
											tables.tid
									FROM booking,customer,tables
									WHERE booking.cid = customer.cid
									AND tables.tid = booking.tid
									AND tables.tid = '".$_GET['tid']."'
									");
		$get->execute();
		return $get->fetchAll();
	
	}
	public function clear_cus($table){
		$in = $this->pdo->prepare("DELETE FROM booking  WHERE booking.tid = $table ;");
		return $in-> execute();
	}
	public function register($cfname, $clname, $username, $password){	
		$row = $this->get_user();	
		$status = true;		
		for($i=0;$i<count($row);$i++){
			if($username==$row[$i]['username']){
				$status = false;
			}
		}
		if($status==true){
			$in = $this->pdo->prepare("INSERT INTO customer VALUES(NULL, ?, ?, ?, ?)");
			$in->bindparam(1, $cfname);
			$in->bindparam(2, $clname);
			$in->bindparam(3, $username);
			$in->bindparam(4, $password);			
			if($in->execute()){
				return true;
			}else{
				return false;
			}
		}		
	}
}
?>