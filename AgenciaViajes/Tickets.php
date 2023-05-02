<?php

class Tickets{
    public $id;
    public $name;
    public $lname;
    public $email;
    public $password;
    public $phonenum;
    public $origin;
    public $destiny;

    public function Create(){
        $this->Connect();
        $add = mysqli_prepare($this->conn, "INSERT INTO `tickets`(`ID`, `Identification card`, `Name`, `Last name`, `Email`, `Password`, `Phone number`, `Origin`, `Destiny`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')");
        $add->execute();
    }

    public function Delete(){
        $this->Connect();
        $del = mysqli_prepare($this->conn, "DELETE FROM `tickets` WHERE Identification card = "); 
        $del->execute();
    }

    public function Uptdate(){
        $this->Connect();
        $up = mysqli_prepare($this->conn, "UPDATE `tickets` SET `ID`='[value-1]',`Identification card`='[value-2]',`Name`='[value-3]',`Last name`='[value-4]',`Email`='[value-5]',`Password`='[value-6]',`Phone number`='[value-7]',`Origin`='[value-8]',`Destiny`='[value-9]' WHERE 1");
        $up->execute();
    }

    public function Search(){
        $this->Connect();

    }
}