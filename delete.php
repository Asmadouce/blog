<?php 
include "header.php";
require "fonction.php";
if (!empty($_GET['id']))
{
    $id= checkInput($_GET['id']);
    //var_dump($_GET['id']);
}
if (!empty($_POST['id']))
{
    $id= checkInput($_POST['id']);
    $reponse = $bdd->prepare('DELETE FROM posts WHERE id='.$id.'');
    $requete = $reponse->execute(array($id));
    //var_dump($id);
    
    header("location:index.php");

}

?>

<h1 class="text-center col-12"><strong>Supprimer l'article</strong></h1>
<form class="form container" role="form" action="delete.php" method="post" >

    <p class="alert alert-warning">Etes vous sur de vouloir supprimer?</p>
    <input type="hidden" name="id" value="<?php echo $id?>"/>
    <div class="row form-actions">
        <button class="col-3 btn btn" type="submit">
        OUI
        </button>

        <a class="col-3 btn btn-default" id="a" href="index.php" >
        NON
        </a>
    </div>
</form>

<?php include "footer.php";?>