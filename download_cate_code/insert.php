<?php
/**
 * Created by PhpStorm.
 * User: DaMao
 * Date: 2016/10/11 0011
 * Time: 19:51
 */
$pdo = new PDO('mysql:host=localhost;dbname=360buy;charset=utf8;','root','');

$cate = $_GET['cate'];
//var_dump($_POST);
$data = $_POST['data'];
$pid = $_POST['pid'];
$tid = $_POST['tid'];
if($cate==1)
{
    $sql = 'insert into cate (name,pid,path)VALUE(\''.$data.'\',0,0)';
    $pdo->exec ($sql);
    echo $pdo->lastInsertId();
}elseif($cate==2)
{
    $path = '0,'.$tid;
    $sql = 'insert into cate (name,pid,path)VALUE(\''.$data.'\',\''.$tid.'\',\''.$path.'\')';
    $pdo->exec ($sql);
    echo $pdo->lastInsertId();
}else{
    $path = '0,'.$tid.','.$pid;
    $sql = 'insert into cate (name,pid,path)VALUE(\''.$data.'\',\''.$pid.'\',\''.$path.'\')';
    $pdo->exec ($sql);
    echo $pdo->lastInsertId();
}
