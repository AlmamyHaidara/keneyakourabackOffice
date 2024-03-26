<?php



function getAllNurse()
{
    global $con;
    try {
        $req = $con->prepare("SELECT * FROM medecin ORDER BY id_med DESC ");
        $req->execute();
        $res  =  $req->fetchAll(PDO::FETCH_ASSOC);
        return $res ? $res : [];
        //code...
    } catch (\Throwable $th) {
        throw $th;
    }
}

function getNurse($tablename, $id)
{
    global $con;
    try {
        $req = $con->prepare("SELECT * FROM " . $tablename . "  where id_med=?");
        $req->execute(array($id));
        $res  =  $req->fetchAll(PDO::FETCH_ASSOC);
        return $res ? $res : [];
    } catch (\Throwable $th) {
        throw $th;
    }
}
