<?php
function LayLoai($kn)
{
    $sql = "SELECT * FROM loai";
    return mysqli_query($kn, $sql);
}
function LaySp($kn)
{
    $sql = "SELECT * FROM sanpham";
    return mysqli_query($kn, $sql);
}

function LayTenLoai($kn, $id)
{
    $sql = "SELECT DISTINCT * 
          FROM loai,sanpham 
         WHERE sanpham.id_loai=loai.id_loai
         AND id_sp = $id";
    return mysqli_query($kn, $sql);
}

?>