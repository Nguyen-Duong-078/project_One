<?php
function insert_flight($Flight_Number, $Start_City, $Arrival_City)
{
    $sql = "INSERT INTO flights (Flight_Number, Start_City, Arrival_City) VALUES ('$Flight_Number','$Start_City','$Arrival_City')";
    pdo_execute($sql);
}

function deleta_danhmuc($ID_danhmuc)
{
    $sql = "DELETE FROM tb_danhmuc WHERE ID_danhmuc =" . $ID_danhmuc;
    pdo_execute($sql);
}

function loadAll_danhmuc()
{
    $sql = "SELECT * FROM tb_danhmuc order by ID_danhmuc desc";
    $list_dm = pdo_query($sql);
    return $list_dm;
}

function loadOne_danhmuc()
{
    $sql = "SELECT * FROM tb_danhmuc WHERE ID_danhmuc=" . $_GET['id'];
    $update_dm = pdo_query_one($sql);
    return $update_dm;
}

function Update_danhmuc($ID_danhmuc, $tenloai)
{
    $sql = "UPDATE tb_danhmuc SET Ten_danhmuc = '" . $tenloai . "' WHERE ID_danhmuc=" . $ID_danhmuc;
    pdo_execute($sql);
}
