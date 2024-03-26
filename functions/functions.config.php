<?php



function getAllNurse()
{
    global $con;
    try {
        $req = $con->prepare("SELECT * FROM medecin");
        $req->execute();
        $res  =  $req->fetchAll(PDO::FETCH_ASSOC);
        return $res ? $res : [];
        //code...
    } catch (\Throwable $th) {
        throw $th;
    }
}
