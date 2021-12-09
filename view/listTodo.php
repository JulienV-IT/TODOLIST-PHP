<?php $title = 'Mon super blog'; ?>

<?php ob_start(); ?>

<div class="row">
    <h1>Ma todolist</h1>
</div>



<div class="row">
    <?php
    while ($data = $posts->fetch()) {
    ?> <div class="row <?php
    if ($data['statut'] == 3) {
        echo " cache";
    } ?>">
        <div class="col-1">
            <!-- <i class="far fa-square fa-2x"> -->
            <a href="index.php?action=update&id=<?php echo $data['id']; ?>">
            <?php
                                        if ($data['statut'] == 2) {
                                            echo '<i class="far fa-check-square fa-2x "></i>';
                                        } 
                                        else {
                                            echo '<i class="far fa-square fa-2x"></i>';
                                        }
                                        ?>
                                        </a>
        </div>
        <div class="card col-10 bordure <?php
                                        if ($data['statut'] == 1) {
                                            echo " hidden";
                                        } ?>">
            <h3>
                <?= $data['nom'] ?>

            </h3>


        </div>

        <div class="col-1"><a href="index.php?action=delete&id=<?php echo $data['id']; ?>"><i class="fas fa-trash-alt icone fa-3x"></a></i>
            </a></i>
        </div>
    </div>
    <?php
    }
    $posts->closeCursor();
    ?>
    <div class="col-12 boutons"><a href="index.php?action=reset"><button type="button" class="btn btn-success btn-lg">Tout afficher</button>
        </a><button type="button" class="btn btn-danger btn-lg">Tout supprimer</button>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>