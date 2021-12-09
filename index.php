<?php
require('controller/controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listTodo();
    }
    elseif ($_GET['action'] == 'insert') {
        if (isset($_POST['nom'])) {
            insertTodo();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'update')
    {
        upDate($_GET['id']);
    }
    elseif ($_GET['action'] == 'reset')
    {
        resetTo();
    }

    elseif ($_GET['action'] == 'delete')
    {
        delete($_GET['id']);
    }
}
else {
    listTodo();
}
