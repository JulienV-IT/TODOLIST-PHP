<?php

require('./model/model.php');

function upDate($id){
    $update = updateTodo($id);
    $posts = getTodo();
    require('./view/listTodo.php');

}

function resetTo(){
$reset = resetTodo();
$posts = getTodo();
require('./view/listTodo.php');
}

function listTodo()
{
    $posts = getTodo();

    require('./view/listTodo.php');
}

function insertTodo(){
    $insert = insertInTodo();
    $posts = getTodo();
    require('./view/listTodo.php');
}

function delete($id){
    $insert = deleteTodo($id);
    $posts = getTodo();
    require('./view/listTodo.php');
}