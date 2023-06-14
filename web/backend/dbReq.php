<?php
session_start();
require'connection.php';

function insert($table, $params) {
    global $pdo;

    $i = 0;
    $column = '';
    $mask = '';
    foreach($params as $key => $value) {
        if($i === 0) {
            $column = $column . "$key";
            $mask = $mask . "'$value'";
        } else {
            $column = $column . ", $key";
            $mask = $mask . ", '$value'";
        }
        $i++;
    }

    $sql = "INSERT INTO `$table` ($column) VALUES ($mask)";
    $query = $pdo->prepare($sql);
    $query->execute();

    return $pdo->lastInsertId();
}

function selectOne($table, $params) {
    global $pdo;

    $sql = "SELECT * FROM $table";

    $i = 0;
    $column = '';
    $mask = '';
    foreach($params as $key => $value) {
        if($i === 0) {
            $column = $column . "$key";
            $mask = $mask . "'$value'";
        } else {
            $column = $column . ", $key";
            $mask = $mask . ", '$value'";
        }
        $i++;
    }

    $query = $pdo->prepare($sql);
    $query->execute();

    return $query->fetch();
}

