<?php 

function getTodo() {
try
{
    $db = dbConnect();
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$req = $db->query('SELECT * FROM todo ORDER BY statut DESC');
return $req;
}

function updateTodo($todoId)
{
    try
    {
        $db = dbConnect();
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $lesDonnees = $db->prepare('UPDATE `todo` SET `statut` = 1 WHERE id = :id;');
        
    // On lie les valeurs 
    $lesDonnees->bindValue(':id', $todoId, PDO::PARAM_STR);

    $updateTodo = $lesDonnees->execute();
}

function resetTodo()
{
    try
    {
        $db = dbConnect();
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $lesDonnees = $db->prepare('UPDATE `todo` SET `statut` = 2');


    $updateTodo = $lesDonnees->execute();
}

function deleteTodo($todoId)
{
    try
    {
        $db = dbConnect();
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $lesDonnees = $db->prepare('UPDATE `todo` SET `statut` = 3 WHERE id = :id;');

    // On lie les valeurs 
    $lesDonnees->bindValue(':id', $todoId, PDO::PARAM_STR);

    $updateTodo = $lesDonnees->execute();
}

function insertInTodo()
{
    try
    {
        $db = dbConnect();
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $lesDonnees = $db->prepare("INSERT INTO `todo` (`id`, `nom`, `statut`, `date`) VALUES (NULL, :nom , '2', CURRENT_TIMESTAMP)");

    $lesDonnees->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
    $updateTodo = $lesDonnees->execute();
}

// Nouvelle fonction qui nous permet d'éviter de répéter du code
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=todolist;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}


?>