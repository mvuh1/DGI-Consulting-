@extends('layouts.master')

@section('content')

<div role="main" class="main">
    <section class="parallax section section-parallax parallax-disabled section-parallax-cms"
        data-plugin-parallax data-image-src="{{ asset('images/formation2.png') }}"
        style="height: 350px"></section>

    <section class="section section-no-background section-no-border mt-none pt-none mb-none pb-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <ul class="breadcrumb mt-none pt-sm pl-none mb-none pb-sm">
                        <li>DGi</li>
                        <li>Responsable en ingénieurie formation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="uk-section uk-section-default container mt-none mb-md">
        <div class="uk-container">
    
            <h3 style="color: #0DA4B5">Contexte</h3>
            <hr>
            <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
                <div>
                    <p>
                        Répondre aux attentes de formation des individus et des entreprises est un travail de consulting
                        qui nécessite de comprendre un système, identifier les besoins explicites, et construire un
                        scénario de changement. <br>
                        Le rôle du responsable d’ingénierie formation s’apparente à celui du monteur de projet. Il doit
                        maîtriser toutes les attentes de l’entreprise ou des individus et concevoir un projet qui satisfaira
                        chacun de leurs objectifs. Il tient donc une fonction centrale dans la recherche de l’efficacité des
                        individus et de l’entreprise. De ce fait, il est considéré comme l’un des principaux leviers pour
                        favoriser le développement des compétences, servant de support de la capitalisation et vecteur
                        de transfert des compétences professionnelles dans l’entreprise. <br>
                        Cette formation confèrera au stagiaire un ensemble cohérent des méthodes, des pratiques et des
                        outils lui permettant concevoir des projets de formation. Il pourra à partir des besoins et des
                        objectifs stratégiques de l’entreprise, définir des plans de formation ayant pour but de produire
                        une valeur ajoutée en matière de performance.
                    </p>
                </div>
            </div>

            <br>
            <div>
                <h3 style="color: #0DA4B5">Public visé</h3>
                <hr>
                <p>
                    <strong>Cette formation s’adresse :</strong>
                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                        <li>Formateur,</li>
                        <li>Responsable ressources humaines,</li>
                        <li>Manager,</li>
                        <li>Cadres fonctionnels,</li>
                        <li>Responsable Formation,</li>
                        <li>Conseillers en formation,</li>
                        <li>Concepteurs en ingénierie de formation,</li>
                        <li>Pédagogues, formateurs internes ou indépendants,</li>
                        <li>
                            A tous ceux et celles qui souhaitent adapter, perfectionner ou développer les nouvelles
                            compétences pour faire évoluer leur expertise ou expérience professionnelle vers la fonction
                            de responsable en ingénierie de formation.
                        </li>
                    </ul>
                </p>
            </div>

            <br>
            <div>
                <h3 style="color: #0DA4B5">Objectifs de la formation</h3>
                <hr>
                <p>Cette formation a pour but :</p>
                <ul class="uk-list uk-list-square" style="margin-left: 20px">
                    <li>Identifier les besoins réel d’un individu et d’un système ;</li>
                    <li>Définir les stratégies d’accompagnement, les objectifs et le cadre de l’intervention ;</li>
                    <li>Construire un scénario de consulting/formation ;</li>
                    <li>
                        Modéliser son leadership par la maîtrise des mécanismes permettant de passer d’une logique
                        d’expert à un processus fédérateur de partage des pratiques et de connaissances par le biais de
                        l’ingénierie de formation
                    </li>
                    <li>
                        Évaluer les besoins en compétences dans l’entreprise par rapport aux objectifs stratégiques de
                        l’entreprise, traduire en politique de formation à tous les niveaux de l’organisation pour
                        qu’elles deviennent des véritables leviers de développement
                    </li>
                    <li>
                        Manager efficacement les projets de formation sur le plan logistique, économique, stratégique
                        et pédagogique et évaluer les effets en termes de retour sur investissement des projets de
                        formation
                    </li>
                </ul>
            </div>
            
            <br>
            <div>
                <h3 style="color: #0DA4B5"> Programme de formation</h3>
                <hr>
                <div class="uk-grid-match uk-child-width-1-5@m" uk-grid>
                    <div>
                        <h4 uk-tooltip="title:plus de détails ?; pos: top-left"> 
                            <img src="{{asset('icones/flecheDroit.png')}}" alt="fleche">
                            <span uk-toggle="target: #module1">
                                <a class="uk-link-heading" href="#">Module 1</a>
                            </span>
                        </h4>
                        <div id="module1" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <div>
                                    <h4> 
                                        Module 1. Comprendre les besoins du client
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>Qualifier le besoin et élaborer le cahier des charges</li>
                                        <li>Utiliser un protocole d’entretien avec les commanditaires.</li>
                                        <li>Construire le cahier des charges : structure, enjeux.</li>
                                        <li>Définir les critères de réussite.</li>
                                    </ul>
                                    <hr>
                                    <h4>Contenu</h4>
                                    <ul class="uk-list uk-list-circle" style="margin-left: 20px">
                                        <li>Analyser la demande et identifier les besoins explicites et implicites ;</li>
                                        <li>Prendre en compte les enjeux du système, les jeux de pouvoir, les résistances ;</li>
                                        <li>Partager et échanger sur les pratiques et modéliser les stratégies gagnantes.</li>
                                        <li>
                                            Analyser l’appropriation des méthodes d’élaboration et de traduction des cahiers des charges
                                            en projets de formation en cohérence avec les objectifs de compétences à développer
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 uk-tooltip="title:plus de détails ?; pos: top-left"> 
                            <img src="{{asset('icones/flecheDroit.png')}}" alt="fleche">
                            <span uk-toggle="target: #module2">
                                <a class="uk-link-heading" href="#">Module 2</a>
                            </span>
                        </h4>
                        <div id="module2" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <div>
                                    <h4> 
                                        Module 2: Construire l'architecture du dispositif pédagogique (12h)
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>Identifier les modalités de formation.</li>
                                        <li>
                                            Anticiper le coût, les avantages et inconvénients de chaque modalité : formation présentielle,
                                            à distance, formation terrain.
                                        </li>
                                        <li>Intégrer les usages du digital : modules, vidéos, classes virtuelles, digital en présentiel …</li>
                                        <li>Intégrer les situations de travail réelles et le collaboratif : le "modèle 70-20-10".</li>
                                        <li>Bien mixer les modalités, en salle et à distance.</li>
                                        <li>Utiliser le digital pour enrichir l'expérience des apprenants et renforcer l'efficacité.</li>
                                        <li>Choisir les modalités d'évaluation.</li>
                                    </ul>
                                    <hr>
                                    <h4>Contenu</h4>
                                    <ul class="uk-list uk-list-circle" style="margin-left: 20px">
                                        <li>Construire un scénario de consulting de formation</li>
                                        <li>Comprendre les niveaux d’apprentissage de Bateson ;</li>
                                        <li>Bâtir l’ingénierie du changement avec le modèle SOAR de DILT ;</li>
                                        <li>Créer des exercices et des supports d’apprentissage</li>
                                        <li>Construire le Story-board avec le Micro TOTE et échange de pratique et modélisation.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 uk-tooltip="title:plus de détails ?; pos: top-left"> 
                            <img src="{{asset('icones/flecheDroit.png')}}" alt="fleche">
                            <span uk-toggle="target: #module3">
                                <a class="uk-link-heading" href="#">Module 3</a>
                            </span>
                        </h4>
                        <div id="module3" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <div>
                                    <h4> 
                                        Module 3.  Lancer un appel d’offres et sélectionner un prestataire (8h)
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>Lister les prestataires potentiels.</li>
                                        <li>Rédiger l'appel d'offre.</li>
                                        <li>Définir les critères pertinents de sélection sur appel d’offres.</li>
                                    </ul>
                                    <hr>
                                    <h4>Contenu</h4>
                                    <ul class="uk-list uk-list-circle" style="margin-left: 20px">
                                        <li>Définir les objectifs et le cadre d’intervention</li>
                                        <li>Créer l’alliance avec le prestataire et le client et établir un contrat triangulaire ;</li>
                                        <li>Concevoir la stratégie globale.</li>
                                        <li>
                                            Analyser les techniques, les processus d’achat, la mise au point des modalités de
                                            collaboration, et s’entraîner à l’élaboration d’un cahier des charges
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h4 uk-tooltip="title:plus de détails ?; pos: top-left"> 
                            <img src="{{asset('icones/flecheDroit.png')}}" alt="fleche">
                            <span uk-toggle="target: #module4">
                                <a class="uk-link-heading" href="#">Module 4</a>
                            </span>
                        </h4>
                        <div id="module4" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <div>
                                    <h4> 
                                        Module 4. Valider les supports de formation et piloter le déploiement du dispositif
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>Définir les livrables attendus.</li>
                                        <li>Utiliser une grille de validation : d'un module en salle, d'un module à distance.</li>
                                        <li>Définir le plan de communication.</li>
                                        <li>Organiser les instances de pilotage.</li>
                                        <li>Surveiller les paramètres coûts-qualité-délais.</li>
                                        <li>Valoriser les résultats.</li>
                                    </ul>
                                    <hr>
                                    <h4>Contenu</h4>
                                    <ul class="uk-list uk-list-circle" style="margin-left: 20px">
                                        <li>
                                            Etudier les méthodes d’évaluation d’offres de formation à l’aide des outils d’analyse pour
                                            mesurer les performances pédagogiques, économiques et opérationnelles de la formation
                                        </li>
                                        <li>
                                            Etudier le dispositif des obligations réglementaires des organismes de formation vis à vis de
                                            leurs clients, des organismes financeurs et des stagiaires pour mieux négocier les modalités
                                            contractuelles
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 uk-tooltip="title:plus de détails ?; pos: top-left"> 
                            <img src="{{asset('icones/flecheDroit.png')}}" alt="fleche">
                            <span uk-toggle="target: #module5">
                                <a class="uk-link-heading" href="#">Module 5</a>
                            </span>
                        </h4>
                        <div id="module5" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <div>
                                    <h4> 
                                        Module 5: Finaliser et déployer son projet professionnel
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            La formalisation et modélisation collaborative du projet professionnel et sa mise en forme
                                            avec le stagiaire, en cohérence avec le référentiel d’ingénierie de formation
                                        </li>
                                        <li>
                                            L'élaboration des plans d’action opérationnels pour déployer et réussir la réalisation de son
                                            projet professionnel dans les délais impartis et dans les conditions optimales.
                                        </li>
                                        <li>
                                            La validation de son projet professionnel sur le plan de la maîtrise opératoire de sa mise en
                                            œuvre, de sa faisabilité technique ainsi que sur le plan des capacités du stagiaire à le réaliser
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>                      
            </div>
            
            <br>
            <div>            
                <h3 style="color: #0DA4B5">Ingénierie de formation</h3>
                <hr>
                <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
                    <div>
                        <p>
                            DGI-Consulting fourni aux stagiaires une documentation complète (support de formation). Il
                            s’agit d’un guide méthodologique qui leurs servira de référentiel dans l’élaboration de leurs outils.
                            La formation se tiendra en téléconférence à partir de la plateforme du cabinet dédiée à cet effet.
                            Les stagiaires qui le souhaitent peuvent solliciter des séances en présentiel dans un des sites du
                            cabinet.
                            Chaque stagiaire est mis en situation pratique réelle, guidé par un coach.
                        </p>
                    </div>
                </div>
            </div>
             
            <br>
            <div>            
                <h3 style="color: #0DA4B5">Organisation de la formation</h3>
                <hr>
                <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
                    <div>
                        <p>
                            La durée de la formation et le volume du contenu, lui confère un caractère intensif. Le
                            déroulement des cours à distance nécessite une certaine concentration et un calme soutenu.
                            Toutes ces conditionnalités impliquent de la part des stagiaires de réunir des compétences
                            physiques et psychologiques optimales. Pour une meilleure performance des stagiaires un haut
                            débit de connexion est mis à leurs disposition chaque semaine. <br>
                            Les horaires de cours sont convenues à l’avance entre les stagiaires et le formateur.</p>
                        <p><strong>Le démarrage du cours</strong> <br>
                            Nous suggérons aux participants de se préparer au moins 15 minutes en avance : ils ont ainsi la
                            possibilité de bien vérifier leurs matériels et de s’assurer de la fluidité de la formation.
                        </p>
                        <p><strong>Les horaires et la durée de la formation</strong> <br>
                            La durée est de 14 jours séquencés en 4 semaines consécutives / 3 jours/ semaine et 3 heures par
                            jour soit 42 heures
                        </p>
                        <p><strong>Le lieu de la formation :</strong> <br>
                            La formation se déroule à distance en téléconférence mais peut se tenir en présentiel selon les
                            préférences des stagiaires dans les locaux de la DGI-Consulting aménagés à cet effet.
                            L'information concernant la plateforme de formation et son paramétrage est communiquée aux
                            participants dès leur inscription effective.
                        </p>
                    </div>
                </div>
            </div>
             
            <br>
            <div>            
                <h3 style="color: #0DA4B5">Processus pédagogique et évaluatif</h3>
                <hr>
                <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                Pour faciliter l’assimilation, le contenu sera assez démonstratif constitué à 80% de schéma,
                                Template et figures. <br>
                                Elle utilisera comme mode pédagogique : 
                            </p>
                            <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                <li>
                                    La pédagogie à cerveau total en application du modèle Hermann (magistral, démonstratif,
                                    participatif, découverte) ;
                                </li>
                                <li>La démarche Metaplan ;</li>
                                <li>La documentation papier (et informatique) directement opérationnelle ;</li>
                                <li>Les études de cas, l’expérience et les échanges avec les autres participants ;</li>
                                <li>La maïeutique pour l’expression du projet personnel.</li>
                            </ul>

                        </div>
                        <div class="col-md-6">
                            <p><strong>Évaluation en cours et fin de formation</strong> <br>
                                Un temps d’échange sera consacré aux échanges avec les stagiaires en fin de chaque module ; en
                                fin de formation, une fiche d’évaluation globale permet d’apprécier pour le formateur intervenant
                                les point acquis et ceux à améliorer pour les autres sessions
                            </p>
                            <p><strong> - Mise en situation d’analyse</strong> <br>
                                Chaque stagiaire aura l’occasion de présenter dans un document de quelques pages, son projet,
                                de l’analyser, l’organiser et de présenter son plan de développement ; ces études seront
                                capitalisées par le groupe de formation. <br>
                                En fin de formation, une évaluation à chaud est effectuée et une attestation de présence ainsi
                                qu’une attestation de fin de formation sont remises au stagiaire. Cette formation ne donne pas
                                lieu à une évaluation formalisée ni académique des acquis de la formation devant un jury.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
             
            <br>
            <div>            
                <h3 style="color: #0DA4B5">Modalités d’inscription</h3>
                <hr>
                <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
                    <div>
                        <p>
                            A réception de l’inscription effectuée en ligne ou par téléphone, nous vous adressons par email,
                            une confirmation d’inscription avec le règlement intérieur à transmettre au participant. Par
                            courrier ou email, selon votre choix, nous adressons une convention de formation en 2
                            exemplaires pour une entreprise ou un contrat de formation professionnelle, si c’est une
                            inscription à titre personnel, ainsi qu’une convocation, une plaquette de présentation du lieu de
                            la formation et les modalités d’accès, le programme de formation indiquant le lieu et la date de
                            la session retenue. <br>
                            N’hésitez pas à nous contacter pour toute demande d’information complémentaire.
                        </p>
                        <p><strong> Date limite d’inscription : </strong> 
                            5 jours ouvrés et dans la mesure où il reste des places.
                        </p>
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <table class="uk-table uk-table-divider">
                                    <caption><strong>Prix de formation pour 1 stagiaire</strong></caption>
                                    <thead>
                                        <tr>
                                            <th>Intitulé du budget</th>
                                            <th>Nombre d’heure</th>
                                            <th>Coût</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Inscription</td>
                                            <td> </td>
                                            <td>50 000</td>
                                        </tr>
                                        <tr>
                                            <td>Session de formation</td>
                                            <td>54</td>
                                            <td>369 000</td>
                                        </tr>
                                        <tr>
                                            <td>Total net</td>
                                            <td>54</td>
                                            <td>419 000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <p>
                            <strong>NB : tous nos montants sont en FCFA Pour</strong> 
                            toute inscription, télécharger la fiche <strong>d’inscription</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="call-to-action pt-xl mb-none call-to-action-in-footer" 
        style="background-color: #575756; border-radius: 30px 30px 0 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 text-left">
                    <h5 class="mb-md phone">Nous contacter</h5>
                    <p class="phone" style="font-size: 15px; color: whitesmoke"><strong>NELIE TOUKAM</strong></p>
                    <p class="phone" style="font-size: 15px; margin-top:-15px; color: whitesmoke">Tél : +237 693389250</p>
                    <p class="phone" style="font-size: 15px; margin-top:-15px; color: whitesmoke">E-mail : infos@dgi-consultingcm.com</p>
                </div>
                <div class="col-md-4 col-xs-12 text-left">
                    <h5 class="mb-md phone">DATES DE DEMMARRAGE DES SESSIONS</h5>
                    <div style="margin-left: 15px">
                        <p class="phone" style="font-size: 15px; color: whitesmoke">
                            <img src="{{ asset('icones/forward_16px.png') }}" alt="">  29 Janvier 2021
                        </p>
                        <p class="phone" style="font-size: 15px; margin-top:-15px; color: whitesmoke">
                            <img src="{{ asset('icones/forward_16px.png') }}" alt="">  30 Avril 2021
                        </p>
                        <p class="phone" style="font-size: 15px; margin-top:-15px; color: whitesmoke">
                            <img src="{{ asset('icones/forward_16px.png') }}" alt="">  10 Octobre 2021
                        </p>
                        <p class="phone" style="font-size: 15px; margin-top:-15px; color: whitesmoke">
                            <img src="{{ asset('icones/forward_16px.png') }}" alt="">  6 Décembre 2021
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 text-left">
                    <h5 class="mb-md phone">DGI-Consulting Cameroun</h5>
                    <p class="phone" style="font-size: 15px; color: whitesmoke">
                        Rue Foé, Montée nouvelle route Omnisport,
                    </p>
                    <p class="phone" style="font-size: 15px; margin-top:-15px; color: whitesmoke">
                        Hôtel FELIDAC Rez-de-chaussée Yaoundé
                    </p>
                    <p class="phone" style="font-size: 15px; margin-top:-15px; color: whitesmoke">
                        <a href="#" target="_blank" rel="noopener noreferrer">www.dgi-consultingcm.com</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection