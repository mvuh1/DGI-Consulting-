@extends('layouts.master')

@section('content')

<div role="main" class="main">
    <section class="parallax section section-parallax parallax-disabled section-parallax-cms"
        data-plugin-parallax data-image-src="{{ asset('public/images/formation2.png') }}"
        style="height: 350px"></section>

    <section class="section section-no-background section-no-border mt-none pt-none mb-none pb-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <ul class="breadcrumb mt-none pt-sm pl-none mb-none pb-sm">
                        <li>DGi</li>
                        <li>Formation de formateur d'adulte</li>
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
                        Former, c’est savoir communiquer en sachant qu’il ne suffit pas de bien dire une chose pour être
                        compris, il faut vérifier que le public a bien compris et lui donner l’envie d’écouter la suite.
                        Former, c’est faciliter l’assimilation des connaissances par les stagiaires et pour cela mesurer leur
                        possibilité d’apprentissage. La formation suppose d’animer un groupe qui est une entité vivante
                        avec sa logique et évolution propres, on parle de la dynamique du groupe.
                        Cela suppose la maîtrise de l’art et la science d’enseigner aux adultes et, la maîtrise d’un ensemble
                        de techniques d’enseignement et de transmission de savoir.
                        Si votre passion consiste à aider les autres à réussir dans leur métier, alors cette formation est
                        conçue pour vous. Elle met à votre disposition des techniques de formation pour transférer avec
                        efficacité votre savoir-faire et votre expertise aux personnes qui envisagent de créer ou d'étendre
                        leurs compétences ou leurs connaissances.
                    </p>
                </div>
            </div>

            <br>
            <div>
                <h3 style="color: #0DA4B5">Public visé</h3>
                <hr>
                <ul class="uk-list uk-list-circle" style="margin-left: 20px">
                    <li>Formateur,</li>
                    <li>Responsable ressources humaines,</li>
                    <li>Manager</li>
                    <li>Cadres fonctionnels</li>
                    <li>Responsable Formation</li>
                    <li>Conseillers en formation</li>
                    <li>
                        Tous ceux et celles qui souhaitent créer, adapter, perfectionner ou développer leurs
                        compétences et faire évoluer leur expertise ou leur expérience professionnelle vers le métier
                        de formateur.
                    </li>
                </ul>
            </div>

            <br>
            <div>
                <h3 style="color: #0DA4B5">Objectifs de la formation</h3>
                <hr>
                <p>Cette formation permettra aux stagiaires d’avoir la capacité d(e) :</p>
                <ul class="uk-list uk-list-square" style="margin-left: 20px">
                    <li>
                        Modéliser son leadership de formateur pour trouver sa juste place dans un groupe de stagiaires
                        en formation et utiliser son professionnalisme pour les aider à réussir dans leur métier.
                    </li>
                    <li>
                        Evaluer les besoins en formation à l’aide des méthodes d’analyse et d'évaluation des
                        demandes de formation en les situant dans leur contexte économique, organisationnel et
                        socioprofessionnel des cibles à former.
                    </li>
                    <li>
                        Concevoir et développer les dispositifs de l’ingénierie de formation différentielle et construire
                        des sessions de formation destinées aux différents profils socioprofessionnels des populations.
                    </li>
                    <li>
                        Traduire les ressources et outils de l’ingénierie de formation en processus d’action
                        pédagogique adapté au contexte professionnel dans lequel il va être appliqué.
                    </li>
                    <li>
                        Animer des sessions de formation et développer ses capacités professionnelles de préparation,
                        d’animation et d’évaluation des actions de formation relevant de votre domaine de
                        compétence.
                    </li>
                    <li>
                        S'approprier le maniement des outils d’évaluations des sessions de formation et de progression
                        des stagiaires pendant et après le processus de cours.
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
                            <img src="{{asset('public/icones/flecheDroit.png')}}" alt="fleche">
                            <span uk-toggle="target: #module1">
                                <a class="uk-link-heading" href="#">Module 1</a>
                            </span>
                        </h4>
                        <div id="module1" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <div>
                                    <h4> 
                                        Module 1. Faire exprimer un besoin de formation
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>La notion de besoin de formation</li>
                                        <li>Comment faire exprimer un besoin : le cahier des charges d’une action de formation</li>
                                        <li>Conduire un entretien avec le demandeur d’une formation</li>
                                        <li>Les enjeux des différents acteurs de la formation</li>
                                        <li>Évaluer le véritable coût de revient d’une formation</li>
                                        <li>Du besoin aux objectifs pédagogiques</li>
                                        <li>Formuler un objectif pédagogique</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 uk-tooltip="title:plus de détails ?; pos: top-left"> 
                            <img src="{{asset('public/icones/flecheDroit.png')}}" alt="fleche">
                            <span uk-toggle="target: #module2">
                                <a class="uk-link-heading" href="#">Module 2</a>
                            </span>
                        </h4>
                        <div id="module2" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <div>
                                    <h4> 
                                        Module 2. Figer les grandes orientations de la formation
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>Le niveau d’une formation</li>
                                        <li>Les prérequis</li>
                                        <li>Le nombre de stagiaires à former</li>
                                        <li>La durée d’une formation interne ou intra-entreprise</li>
                                        <li>Choisir le bon moment pour planifier une formation</li>
                                        <li>Démultiplier une formation</li>
                                        <li>Former les personnels travaillant en équipe (travail posté)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 uk-tooltip="title:plus de détails ?; pos: top-left"> 
                            <img src="{{asset('public/icones/flecheDroit.png')}}" alt="fleche">
                            <span uk-toggle="target: #module3">
                                <a class="uk-link-heading" href="#">Module 3</a>
                            </span>
                        </h4>
                        <div id="module3" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <div>
                                    <h4> 
                                        Module 3. Définir dans le détail le contenu de la formation (l’ingénierie de la formation)
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>La technique de l’arborescence ou de l’organigramme technique</li>
                                        <li>La technique de la carte mentale</li>
                                        <li>Du contenu au plan de la formation</li>
                                        <li>La progression pédagogique</li>
                                        <li>La technique de l’hélicoptère</li>
                                        <li>Le découpage en modules élémentaires</li>
                                        <li>De la formation modulaire à la formation à la carte</li>
                                        <li>La pédagogie différenciée</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h4 uk-tooltip="title:plus de détails ?; pos: top-left"> 
                            <img src="{{asset('public/icones/flecheDroit.png')}}" alt="fleche">
                            <span uk-toggle="target: #module4">
                                <a class="uk-link-heading" href="#">Module 4</a>
                            </span>
                        </h4>
                        <div id="module4" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <div>
                                    <h4> 
                                        Module 4. Choisir les méthodes pédagogiques
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>Qu’est-ce qui pousse un adulte à apprendre ?</li>
                                        <li>Les quatre principales méthodes pédagogiques</li>
                                        <li>L’exposé et l’interrogation, deux méthodes centrées sur la parole</li>
                                        <li>La démonstration et la découverte, deux méthodes centrées sur l’action</li>
                                        <li>Les techniques « post-it »</li>
                                        <li>Utiliser un tableau papier</li>
                                        <li>Créer et animer une étude de cas</li>
                                        <li>Les exercices d’application Fiche</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 uk-tooltip="title:plus de détails ?; pos: top-left"> 
                            <img src="{{asset('public/icones/flecheDroit.png')}}" alt="fleche">
                            <span uk-toggle="target: #module5">
                                <a class="uk-link-heading" href="#">Module 5</a>
                            </span>
                        </h4>
                        <div id="module5" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <div>
                                    <h4> 
                                        Module 5. Concevoir un support de formation
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>Les différents types de supports pédagogiques</li>
                                        <li>Mettre au point un guide pratique</li>
                                        <li>Le format du document distribué aux stagiaires</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 uk-tooltip="title:plus de détails ?; pos: top-left"> 
                            <img src="{{asset('public/icones/flecheDroit.png')}}" alt="fleche">
                            <span uk-toggle="target: #module6">
                                <a class="uk-link-heading" href="#">Module 6</a>
                            </span>
                        </h4>
                        <div id="module6" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <div>
                                    <h4> 
                                        Module 6. Lancer une formation
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>La phase introductive</li>
                                        <li>Présenter le programme et recueillir les attentes</li>
                                        <li>La feuille de présence ou feuille d’émargement</li>
                                        <li>L’hétérogénéité des stagiaires à l’arrivée en formation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 uk-tooltip="title:plus de détails ?; pos: top-left"> 
                            <img src="{{asset('public/icones/flecheDroit.png')}}" alt="fleche">
                            <span uk-toggle="target: #module7">
                                <a class="uk-link-heading" href="#">Module 7</a>
                            </span>
                        </h4>
                        <div id="module7" uk-modal>
                            
                            <div class="uk-modal-dialog uk-modal-body">
                                <div>
                                    <h4> 
                                        Module  7. Animer une formation
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>Soigner la qualité de sa communication</li>
                                        <li>Les outils du formateur </li>
                                        <li>La gestion du temps d’animation</li>
                                        <li>Les techniques de questionnement et de reformulation</li>
                                        <li>Les erreurs d’écoute du formateur</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 uk-tooltip="title:plus de détails ?; pos: top-left"> 
                            <img src="{{asset('public/icones/flecheDroit.png')}}" alt="fleche">
                            <span uk-toggle="target: #module8">
                                <a class="uk-link-heading" href="#">Module 8</a>
                            </span>
                        </h4>
                        <div id="module8" uk-modal>
                            
                            <div class="uk-modal-dialog uk-modal-body">
                                <div>
                                    <h4> 
                                        Module 8. Évaluer une formation
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>Comment conclure une session de formation ?</li>
                                        <li>Pourquoi et quand évaluer ?</li>
                                        <li>Le bilan de fin de journée</li>
                                        <li>L’évaluation à chaud, en fin de stage</li>
                                        <li>L’évaluation intermédiaire</li>
                                        <li>L’évaluation à froid</li>
                                        <li>Les autres formes d’évaluation</li>
                                        <li>Rester en contact avec les stagiaires à l’issue de la formation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div>
                        <h4 uk-tooltip="title:plus de détails ?; pos: top-left"> 
                            <img src="{{asset('public/icones/flecheDroit.png')}}" alt="fleche">
                            <span uk-toggle="target: #module9">
                                <a class="uk-link-heading" href="#">Module 9</a>
                            </span>
                        </h4>
                        <div id="module9" uk-modal>
                            
                            <div class="uk-modal-dialog uk-modal-body">
                                <div>
                                    <h4> 
                                        Module  9. Elaborer son projet de professionnalisation au métier de formateur
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            La définition des missions de formateur, l'identification des offres de formation à partir de son
                                            expertise, l'élaboration des programmes de formation et la formalisation de l'ingénierie de
                                            formation conduisant à la modélisation des projets professionnels,
                                        </li>
                                        <li>
                                            La définition d’une stratégie marketing dans le cadre de son métier de formateur pour chaque
                                            offre de formation potentielle, conformément aux choix du développement professionnel,
                                        </li>
                                        <li>
                                            La formalisation des plans d'action opérationnels pour déployer et réussir la réalisation de son
                                            projet professionnel et qui feront l'objet de suivi et d'évaluation post-formation,
                                        </li>
                                        <li>
                                            La validation des projets individuels sur le plan de la maîtrise opératoire de leur mise en
                                            œuvre, par les stagiaires et apporter les correctifs préconisés par leur formateur,
                                        </li>
                                        <li>
                                            La mise au point des modalités d’accompagnement des plans d’action de professionnalisation
                                            post formation par leur formateur sous forme des sessions de télécoaching individualisé.
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
                    <div>
                        <p>
                            Pour faciliter l’assimilation, le contenu sera assez démonstratif constitué à 80% de schéma,
                            Template et figures, de cas pratiques. Le formateur utilisera beaucoup de supports numériques
                            et visuels. <br>
                        <p><strong> - Évaluation en cours et fin de formation</strong> <br>
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
                                            <td>42</td>
                                            <td>388 000</td>
                                        </tr>
                                        <tr>
                                            <td>Total net</td>
                                            <td>42</td>
                                            <td>438 000</td>
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
                            <img src="{{ asset('public/icones/forward_16px.png') }}" alt="">  21 Janvier 2021
                        </p>
                        <p class="phone" style="font-size: 15px; margin-top:-15px; color: whitesmoke">
                            <img src="{{ asset('public/icones/forward_16px.png') }}" alt="">  18 Mars 2021
                        </p>
                        <p class="phone" style="font-size: 15px; margin-top:-15px; color: whitesmoke">
                            <img src="{{ asset('public/icones/forward_16px.png') }}" alt="">  21 Juin 2021
                        </p>
                        <p class="phone" style="font-size: 15px; margin-top:-15px; color: whitesmoke">
                            <img src="{{ asset('public/icones/forward_16px.png') }}" alt="">  20 Octobre 2021
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
                        www.dgi-consultingcm.com
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection