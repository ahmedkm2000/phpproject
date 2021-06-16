<!DOCTYPE html>
<?php
include_once './racine.php';
include_once RACINE.'/services/ClasseService.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GestionFiliére</title>
    </head>
    <body>
        <form method="GET" action="controller/addClasse.php">

            <fieldset>
                <legend>Ajouter une nouvelle Classe</legend>

                <table border="0">

                    <tr>
                        <td> Code Classe : </td>
                       <td>
                            <select name="code">
                                <option value="FYEAR">FYEAR</option>
                                <option value="SYEAR">SYEAR</option>
                                <option value="TYEAR">TYEAR</option>
                            </select>
                       </td>
                    </tr>
                    <tr>
                        <td> ID_Filiére :</td>
                        <td><input type="text" name="ID_F" value="" /></td>
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
                    <th>ID_Classe</th>
                    <th>Code Classe </th>
                    <th>ID_Filiére</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once RACINE . '/services/ClasseService.php';
                $es = new ClasseService();
                foreach ($es->findAll() as $e) {
                    ?>
                    <tr>
                        <td><?php echo $e->getId(); ?></td>
                        <td><?php echo $e->getCode(); ?></td>
                        <td><?php echo $e->getId_f(); ?></td>
                        <td>      
                            <a href="controller/deleteClasse.php?id=
<?php echo $e->getId();?> ">Supprimer </a> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>


    </body>
</html> 