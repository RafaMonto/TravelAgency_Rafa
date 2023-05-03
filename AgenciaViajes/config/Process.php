<?php

 
include_once('DatabaseProces.php');
include_once('Functions.php');



if(isset($_POST['login'])){
$user = $_POST['user'];
$pass = $_POST['pass'];
//instanciar el objeto
$users = new DatabaseProcess();
// llamado función de loguin
$users->login($user,$pass);

$response = $users->login($user,$pass);

 echo $response; 

 if ($response==="verdadero") {
    header("Location: ../home.php"); 
 }

 else{
    echo '<script language="javascript">alert("Error En Datos");window.location.href = "../index.php";</script>';
    
}
}

if(isset($_POST['add'])){
$id = $_POST['id'];
$name = $_POST['name'];
$ln = $_POST['last'];
$mail = $_POST['mail'];
$passw = $_POST['contra'];
$phone = $_POST['phone'];
$origin = $_POST['ori'];
$destiny = $_POST['des'];


$ticket = new Functions();
$ticket->insertTicket($id,$name,$ln,$mail,$passw,$phone,$origin,$destiny);

$added = $ticket->insertTicket($id,$name,$ln,$mail,$passw,$phone,$origin,$destiny);

echo $added;

if ($added==="verdadero") {
   echo '<script language="javascript">alert("Datos agregados correctamente");window.location.href = "../home.php";</script>';
}else{
   echo '<script language="javascript">alert("Error En Datos");window.location.href = "../home.php";</script>';
   
}

}

if(isset($_POST['delete'])){
$id = $_POST['id'];

$delete = new Functions();
$delete->deleteTicket($id);

$deleted = $delete->deleteTicket($id);

echo $deleted;

if ($deleted==="verdadero") {
   echo '<script language="javascript">alert("Datos deliminados correctamente");window.location.href = "../home.php";</script>';
}

if ($deleted==="Falso") {
   echo '<script language="javascript">alert("Datos deliminados correctamente");window.location.href = "../home.php";</script>';
}

}

if(isset($_POST['update'])){
   $id = $_POST['id'];
   $name = $_POST['name'];
   $ln = $_POST['last'];
   $mail = $_POST['mail'];
   $passw = $_POST['contra'];
   $phone = $_POST['phone'];
   $origin = $_POST['ori'];
   $destiny = $_POST['des'];
   
   
   $update = new Functions();
   $update->updateTicket($id,$name,$ln,$mail,$passw,$phone,$origin,$destiny);
   
   $updated = $update->updateTicket($id,$name,$ln,$mail,$passw,$phone,$origin,$destiny);
   
   echo $updated;
   
   if ($updated==="verdadero") {
      echo '<script language="javascript">alert("Datos actualizados correctamente");window.location.href = "../home.php";</script>';
   }else{
      echo '<script language="javascript">alert("Datos actualizados correctamente");window.location.href = "../home.php";</script>';
  
  }
   
   }
