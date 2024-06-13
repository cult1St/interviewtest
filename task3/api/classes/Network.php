
<?php 
require_once "Db.php";

class Network extends Db{
    private $dbconn;
    public function __construct()
    {
        $this->dbconn = $this->connect();
    }
    public function insert_network($number, $network, $message, $ref_code){
        try{
            $sql = "INSERT INTO network(phone_number, mobile_network, message, ref_code) VALUES(?, ?, ?, ?)";
            $stmt = $this->dbconn->prepare($sql);
           return  $stmt->execute([$number, $network, $message, $ref_code]);
        }catch(PDOException $e){
            $e->getMessage();
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}