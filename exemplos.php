<?php
include_once("./PDO/db_banco.php");
include_once("./PDO/pdo_conexao.php");
$db = new DB();
//exemplo 01 SELECT;
$db->AbreConexao('portal');
    $qry_teste = $db->select("SELECT * FROM tb_teste ", "portal");
    if (count($qry_teste)) {
        foreach ($qry_teste as $conta_teste=>$res_teste) {
            echo  $res_teste["tes_descricao"]); echo '<br>';
        }
    }
$db->FechaConexao('portal');

//exemplo 02 UPDATE INSERT;

?>