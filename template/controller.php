<?php 
	date_default_timezone_set("Asia/Bangkok");
	class Action {
    private $pdo;
	private $servername = "10.199.66.227";
    private $username = "20S2_g4";
	private $password = "Dwg7Q6UQ";
	
	//private $servername = "localhost";
    //private $username = "root";
	//private $password = "";
	
    
    public function __construct(){
		$this->pdo = new PDO("mysql:host=$this->servername;dbname=20s2_g4;charset=utf8", $this->username, $this->password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	
	// public function get_item(){
	// 	$get = $this->pdo->prepare("SELECT item.ID,item.ItemID,item.ItemName,type.TypeName,item.Status,item.Building FROM item , type where item.TypeID = type.ID");
	// 	$get->execute();		
	// 	return $get->fetchAll();
		
	// }
	public function get_item_edit($ItemID){
		$get = $this->pdo->prepare("SELECT *  FROM item where ID = $ItemID");
		$get->execute();		
		return $get->fetchAll();
		
	}

    }
?>