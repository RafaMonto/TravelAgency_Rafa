<?php 

include_once('db.php');

class Functions extends DatabasePDO {

    public $iden;
    public $nm;
    public $ln;
    public $mail;
    public $pass;
    public $phone;
    public $origin;
    public $destiny;

    public function insertTicket($id,$name,$ln,$mail,$pass,$phone,$ori,$des)
    {
        try {
            $cnn = $this->conn();

            $this->iden = $id;
            $this->nm = $name;
            $this->ln = $ln;
            $this->mail = $mail;
            $this->pass = $pass;
            $this->phone = $phone;
            $this->origin = $ori;
            $this->destiny = $des;

            // set the PDO error mode to exception
            $stmt = $cnn->prepare(
                    "INSERT INTO `tickets`(`IdentificationCard`, `Name`, `LastName`, `Email`, `Pass`, `PhoneNumber`, `Origin`, `Destiny`) 
                    VALUES (:iden,:nm,:ln,:mail,:pass,:phone,:origin,:destiny)");
                    $stmt->bindParam("iden", $this->iden,PDO::PARAM_STR) ;
                    $stmt->bindParam("nm", $this->nm,PDO::PARAM_STR) ;
                    $stmt->bindParam("ln", $this->ln,PDO::PARAM_STR) ;
                    $stmt->bindParam("mail", $this->mail,PDO::PARAM_STR) ;
                    $stmt->bindParam("pass", $this->pass,PDO::PARAM_STR) ;
                    $stmt->bindParam("phone", $this->phone,PDO::PARAM_STR) ;
                    $stmt->bindParam("origin", $this->origin,PDO::PARAM_STR) ;
                    $stmt->bindParam("destiny", $this->destiny,PDO::PARAM_STR) ;
            $stmt->execute();
            $count=$stmt->rowCount();
            $data=$stmt->fetch(PDO::FETCH_OBJ);
            $db = null;
            $mesage= "";
            if($count)
            {
                $mesage = "verdadero";
            }
            else
            {
                $mesage = "Falso";
            } 
            }
            catch(PDOException $e) {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $mesage;
}

    public function deleteTicket($id){
        {
            try {
                $cnn = $this->conn();
    
                $this->iden = $id;
    
                // set the PDO error mode to exception
                $stmt = $cnn->prepare("DELETE FROM `tickets` WHERE IdentificationCard=:iden");
                $stmt->bindParam("iden", $this->iden,PDO::PARAM_STR) ;
                $stmt->execute();
                $count=$stmt->rowCount();
                $data=$stmt->fetch(PDO::FETCH_OBJ);
                $db = null;
                $mesage= "";
                if($count)
                {
                    $mesage = "verdadero";
                }
                else
                {
                    $mesage = "Falso";
                } 
                }
                catch(PDOException $e) {
                echo '{"error":{"text":'. $e->getMessage() .'}}';
                }
                return $mesage;

    }
}

public function updateTicket($id,$name,$ln,$mail,$pass,$phone,$ori,$des)
{
    try {
        $cnn = $this->conn();

        $this->iden = $id;
        $this->nm = $name;
        $this->ln = $ln;
        $this->mail = $mail;
        $this->pass = $pass;
        $this->phone = $phone;
        $this->origin = $ori;
        $this->destiny = $des;

        // set the PDO error mode to exception
        $stmt = $cnn->prepare(
                "UPDATE `tickets` SET `Name`=:nm,`LastName`=:ln,`Email`=:mail,`Pass`=:pass,`PhoneNumber`=:phone,`Origin`=:origin,`Destiny`=:destiny WHERE IdentificationCard=:iden");
                $stmt->bindParam("iden", $this->iden,PDO::PARAM_STR) ;
                $stmt->bindParam("nm", $this->nm,PDO::PARAM_STR) ;
                $stmt->bindParam("ln", $this->ln,PDO::PARAM_STR) ;
                $stmt->bindParam("mail", $this->mail,PDO::PARAM_STR) ;
                $stmt->bindParam("pass", $this->pass,PDO::PARAM_STR) ;
                $stmt->bindParam("phone", $this->phone,PDO::PARAM_STR) ;
                $stmt->bindParam("origin", $this->origin,PDO::PARAM_STR) ;
                $stmt->bindParam("destiny", $this->destiny,PDO::PARAM_STR) ;
        $stmt->execute();
        $count=$stmt->rowCount();
        $data=$stmt->fetch(PDO::FETCH_OBJ);
        $db = null;
        $mesage= "";
        if($count)
        {
            $mesage = "verdadero";
        }
        else
        {
            $mesage = "Falso";
        } 
        }
        catch(PDOException $e) {
        echo '{"error":{"text":'. $e->getMessage() .'}}';
        }
        return $mesage;
}
}