<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>XAV_NETTOYAGE_MULTI-SERVICE</title>
        <link rel="icon" href="nettoyeur.png" />
</head>

<body>

<!-- Bloc page -->
<div class="bloc_page">
        <!-- Titres et images -->
        <div class="premiereLigne">

                <div class ="imageGauche">
                        <img src="nettoyeur.png" alt="Nettoyage" title="Nettoyage" width="100%" />


                </div>

                <div class ="imageCentrale">
                        <img src="titre.png" alt="titre" title="titre" width="100%"/>


                </div>

                <div class ="imageDroite">
                        <img src="bricolage.png" alt="bricolage" title="bricolage" width="100%" />


                </div>

        </div>
        
        <!-- Mail -->
        <div class="mail">
                <a href="mailto:xavierrambeau6@gmail.com">xavierrambeau6@gmail.com</a>

        </div>
        <div class="espace">

        </div>
        
        <!-- Contenu -->
        <div class="contenu">
                
                <div class="colloneGauche">
                        
                        <div class=cell2>
                                
                                
                                <h1>NETTOYAGE</h1>
                                <h2>Entretien tous chantiers, toutes résidences-syndics</h2>
                                <h3>LAVAGE VITRES ENTREPRISE</h3>
                                <h3>NETTOYAGE HAUTE PRESSION</h3>
                                <h4>Tous chantiers extérieurs</h4>
                                <h4 class="decalage2">Bardage Murette - Allée - Autres...</h4>
                                <h3>JARDINAGE</h3>
                                <h4>Espaces verts - Taille - Haies...</h4>
                        
                        </div>
                                <img src="nettoyeur.png" alt="Nettoyage" title="Nettoyage" width="100%" class ="nettoyage"/>
                        

                </div>

                <div class="colloneDroite">
                        
                        
                        <div class="decalageImg">
                                <div class="cell1">
                                                <h1>SERVICE, AIDE A LA PERSONNE</h1>
                                                <h3>MENAGE</h3>
                                                <h3>REPASSAGE</h3>
                                                <h3>ADMINISTRATION</h3>
                                                <h3>LAVAGE VITRES PARTICULIERS</h3>
                                                
                                </div>
                                <img src="prom.png" alt="Devis" title="Devis" width="100%" class = "prom" />
                                <img src="test.png" alt="Devis" title="Devis" width="100%" class = "test" />
                        </div>
                                <div class="depannage">
                                        <div class="h3suppl">PETIT DEPANNAGE</div>
                                        <h4>Tous travaux tout etat Ext/Int Reno/Neuf/Batiments </h4>
                                        
                                        
                                        <h4>Plomberie - Ouverture porte - Sanitaire - Electricité...</h4>
                                        
                                        <h4>Reseaux Artisans</h4>
                                </div>
                                






                </div>
        </div>
        <br>
        <div class="telephone">
                <img src="telephone.png" alt="telephone" title="telephone" width="100%"/>
        </div>
        <footer>
                
                <div class="numSIRET"><B>Numero SIRET:</B><I>51482391300017</I></div>
                <div class="visites">
                <?php
                $fp=fopen("comptage.txt","r+");
                $nbvisites = fgets($fp,4);
                $nbvisites++;
                fseek($fp,0);
                fputs($fp,$nbvisites);
                fclose($fp);
                print("$nbvisites visiteurs");?></div>
                <!--<div class="num....."><B>Numero S....:</B><I>XXXXXX</I></div>-->
        </footer>



</div>