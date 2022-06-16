<?php
//exmeplo simples efetuado com PDO, podemos melhorar esses recursos.
$db_valida = "srv_portal";
include_once("./PDO/db_banco.php");
include_once("./PDO/pdo_conexao.php");
$db = new DB();
//exemplo 01 SELECT;
echo '<br>Exemplo 01 -> select <br>';
$db->AbreConexao('portal');
    $qry=null;$row=null;$conta=null;
    $qry = $db->select("SELECT tes_nome FROM tb_teste ", "portal");
    if (count($qry)) {
        foreach ($qry as $conta=>$row) {
            echo  $row["tes_nome"]; echo '<br>';
        }
    }
$db->FechaConexao('portal');
//exemplo 02 UPDATE;
echo '<br>Exemplo 02 -> insert e update <br>';
$db->AbreConexao('portal');
    $qry=null;
    $qry = $db->query("UPDATE tb_teste SET tes_nome = 'TESTE PDO' WHERE tes_id = 1 ", "portal");
    echo $qry;
$db->FechaConexao('portal');
//exemplo 03 INSERT;
echo '<br>Exemplo 02 -> insert e update <br>';
$db->AbreConexao('portal');
    $qry=null;
    $qry = $db->query("INSERT INTO tb_teste (tes_nome, tes_del)VALUES('TESTE05','') ", "portal");
    echo $qry;
$db->FechaConexao('portal');

?>