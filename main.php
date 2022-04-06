<?php
//tangkap request di url
$req = isset($_REQUEST['hal']) ? $_REQUEST['hal'] : '';
//jika ada request di url, arahkan ke halaman tujuan
if(!empty($req)){
    include_once $req.'.php';
}
//jika tidak ada request di url, arahkan ke halaman home
else{
    include_once 'home.php';
}    