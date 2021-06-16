<!DOCTYPE html>
<?php
include_once './racine.php';
include_once RACINE.'/services/FiliereService.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GestionFiliére</title>
    </head>
    <body>
        <form method="GET" action="controller/addFiliere.php">

            <fieldset>
                <legend>Ajouter une nouvelle filiére</legend>

                <table border="0">

                    <tr>
                        <td>Code Filiére : </td>
                        <td><input type="text" name="code" value="" /></td>
                    </tr>
                    <tr>
                        <td> Libelle :</td>
                        <td><input type="text" name="libelle" value="" /></td>
                    </tr>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Envoyer" />
                            <input type="reset" value="Effacer" />
                        </td>
                    </tr>


                </table>


            </fieldset>
        </form>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Code filiére</th>
                    <th>Libelle</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once RACINE . '/services/FiliereService.php';
                $es = new FiliereService();
                foreach ($es->findAll() as $e) {
                    ?>
                    <tr>
                        <td><?php echo $e->getId(); ?></td>
                        <td><?php echo $e->getCode(); ?></td>
                        <td><?php echo $e->getLibelle(); ?></td>
                        <td>      
                            <a href="controller/deleteFiliere.php?id=
<?php echo $e->getId();?> ">Supprimer </a> </td>
                    </tr>>
                <?php } ?>
            </tbody>
        </table>


    </body>
</html> 