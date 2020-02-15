<?php

class Action{
	
	private $pdo;
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	
	public function __construct(){
		$this->pdo = new PDO("mysql:host=$this->servername;dbname=db;charset=utf8", $this->username, $this->password);
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	public function get_user(){
		$get = $this->pdo->prepare("SELECT * FROM user");
		$get->execute();
		
		return $get->fetchAll();
		
	}
	public function get_table(){
		$get = $this->pdo->prepare("SELECT * FROM table");
		$get->execute();
		
		return $get->fetchAll();
		
	}
	public function detail(){
		$get = $this->pdo->prepare("SELECT * FROM detail");
		$get->execute();
		
		return $get->fetchAll();
	}
	
	public function login($user, $pass){
		
		$row = $this->get_user();
	
		$status = false;
		
		for($i=0;$i<count($row);$i++){
			if($user==$row[$i]['user']&&$pass==$row[$i]['password']){
				$status = true;
			}
		}
		
		return $status;
	}
	
	public function register($user, $pass, $phone_no, $uname){
		
		$row = $this->get_user();
		
		$status = true;
		
		for($i=0;$i<count($row);$i++){
			if($user==$row[$i]['user']){
				$status = false;
			}
		}
		if($status==true){
			$in = $this->pdo->prepare("INSERT INTO user VALUES(NULL, ?, ?, ?, ?)");
			$in->bindparam(1, $user);
			$in->bindparam(2, $pass);
			$in->bindparam(3, $phone_no);
			$in->bindparam(4, $uname);
			
			if($in->execute()){
				return true;
			}else{
				return false;
			}

		}
			
	}
	public function sentdetail($data){
		
		$row = $this->detail();
		
		$status = true;
		for($i=0;$i<count($row);$i++){
			if($phone_no==$row[$i]['dphone_no']){
				$status = false;
			}
		}
		
		if($status==true){
			$in = $this->pdo->prepare("INSERT INTO detail VALUES(NULL, ?, ?, ?)");
			$in->bindparam(1, $data['phone']);
			$in->bindparam(2, $data['name']);
			$in->bindparam(3, $data['quantity']);
			return $in->execute();
		}
	}
	
	public function link_page($link){
		return "<script>location.replace('".$link."')</script>";
	}
}
?>