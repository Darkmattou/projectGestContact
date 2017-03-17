<?php 
    include_once("../layouts/layout.php");
?>

<div class="row">
    <div class="col-lg-12">
        <h2 class="titleRed">Candidature</h2>
    </div>                       
</div>

    <!-- Début du formulaire -->
<div class="row">
    <div class="col-lg-12 cadre_formulaire">
        

    <!-- contiendra une barre de progression qui se remplira suivant l'avancé de l'inscription // en cours, pour l'instant non fonctionnelle , juste une barre "vitrine" -->
        <div class="row">
            <div class="col-lg-12">
                <div class="progressbar">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" 
                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:100%"> 100%
                    </div>
                </div>
            </div>
        </div>


    <!-- Début du slider contenant des formulaires avec des boutons "suivant" - "précédent" pour passer aux étapes d'inscriptions suivantes. -->

        <div class="row">
            <div class="slider">
                <ul>
                                <!-- première li -->
                    <li>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="titleBlue">Campus</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="selectCampus" action="">
                                    <input type="checkbox" name="">
                                    <label>Nantes</label>
                                    <input type="checkbox" name="">
                                    <label>Angers</label>
                                    <input type="checkbox" name="">
                                    <label>Rennes</label>
                                    <input type="checkbox" name="">
                                    <label>Laval</label>
                                    <input type="checkbox" name="">
                                    <label>Le Mans</label>
                                    <input type="checkbox" name="">
                                    <label>Caen</label>                                   
                                    <input type="checkbox" name="">
                                    <label>Paris</label>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="titleBlue">Informations</h2>
                            </div>
                        </div>
                        <form action="" class="selectInfo">
                            <div class="row">
                                <div class="col-lg-12 selectInfo1">
                                    <label>Nom : </label>
                                    <input type="text" name="">
                                    <label>Prenom : </label>
                                    <input type="text" name="">
                                    <label>Date de naissance : </label>
                                    <input type="text" name="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 selectInfo2">
                                    <label>Ville :</label>
                                    <input type="text" name="">
                                    <label>Téléphone : </label>
                                    <input type="text" name="">
                                    <label>Code postal : </label>
                                    <input type="text" name="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 selectInfo3">
                                    <label>E-mail : </label>
                                    <input type="text" name="">
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-12">
                                <button class="suivant pull-right">Suivant</button>
                            </div>
                        </div>
                    </li>
                             <!-- deuxième li -->
                    <li>
                       <div class="row">
                            <div class="col-lg-12">
                                <h2 class="titleBlue">Situation</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="" class="selectSituation">
                                    <input type="checkbox" name="">
                                    <label>En formation</label>                                    
                                    <input type="checkbox" name="">
                                    <label>Salarié</label>
                                    <input type="checkbox" name="">
                                    <label>Demandeur d'emploi</label>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="titleBlue">Réorientation</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="" class="selectReorientation">
                                    <input type="checkbox" name="">
                                    <label>Oui</label>
                                    <input type="checkbox" name="">
                                    <label>Non</label>
                                </form>
                            </div>
                        </div>
                        <div class="row pad">
                            <div class="col-lg-12">
                                <button class="precedent pull-left">Précédent</button>
                                <button class="suivant pull-right">Suivant</button>
                            </div>
                        </div>
                    </li>
                                <!-- troisième li -->
                    <li>
                        <!-- Contient la troisème partie de l'inscription, contiendra: 

                                    -La derniere partie du formulaire
                                    -Bouton précédent pour revenir au formulaire d'avant
                                    -Bouton valider pour l'envoie des données -->
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


                                    
                                    