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
                        <li>Formation de Consultant formateur</li>
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
                        Le consultant formateur est un prestataire de service intellectuel qui dispose d’une expérience
                        avérée dans l’entreprise et de certaines expertises éprouvées au cours des missions de conseil. A
                        partir de son expertise et son expérience en entreprise, il conçoit, réalise et anime des projets de
                        formation. <br>
                        Son rôle est de décrypter les besoins stratégiques des entreprises en matière de conseil et de la
                        formation et de concevoir les offres apportant une valeur ajoutée optimale à l’entreprise. <br>
                        Ces ensembles de mission du consultant formateur, nécessitent de sa part des connaissances et
                        compétences transversales de nombreux domaines de gestion et, du processus méthodologique
                        de l’ingénierie de l’intervention du consultant. <br>
                        Les consultants formateurs peuvent être employés par des entreprises ou, demeurer
                        indépendant. Il s’agit ici de la profession par excellence de tous ceux qui souhaitent une
                        reconversion professionnelle vers la prestation de service ou ceux qui voudrait mettre à profit
                        l’expérience acquise au cours de leurs années de travail. <br>
                        La formation de consultant formateur transfère un dispositif opérationnel de compétences à ceux
                        et à celles qui souhaitent se lancer dans le métier de consulting et la formation ainsi que pour les
                        consultants en activité qui veulent découvrir les nouveaux espaces de développement.
                    </p>
                </div>
            </div>

            <br>
            <div>
                <h3 style="color: #0DA4B5">Public visé</h3>
                <hr>
                <p>
                    Formateur, cadre fonctionnel, ingénieur, travailleur retraité, travailleur en reconversion
                    professionnelle, consultant indépendant et, à ceux ou celles qui souhaitent créer, adapter ou
                    développer leurs compétences et faire évoluer leur expertise vers le métier de consultant
                    formateur.
                </p>
            </div>

            <br>
            <div>
                <h3 style="color: #0DA4B5">Objectifs de la formation</h3>
                <hr>
                <p>Cette formation permettra aux stagiaires d’avoir la capacité d(e) :</p>
                <ul class="uk-list uk-list-square" style="margin-left: 20px">
                    <li>
                        Développer l’impact de son leadership de consultant formateur par la maîtrise des
                        mécanismes permettant de passer d'une logique d'expert à un processus du consulting
                        stratégique.
                    </li>
                    <li>
                        Définir son positionnement par rapport au référentiel métier de consultant formateur et à la
                        culture professionnelle en termes de valeurs, missions et prestations pour développer son
                        activité avec un maximum d’efficacité.
                    </li>
                    <li>
                        Conceptualiser une stratégie commerciale en cohérence avec son expertise de consulting et
                        élaborer une architecture de projet marketing compatible avec les besoins de clients cibles et
                        le réseau de business partenaires.
                    </li>
                    <li>
                        Maitriser les processus stratégiques d'entreprise en intégrant le maniement des leviers de la
                        performance de l’entreprise et accompagner leurs dirigeants à réussir leurs projets de
                        changement.
                    </li>
                    <li>
                        S’approprier des compétences et des outils de l’ingénierie d’intervention en consulting pour
                        concevoir des offres de conseil, réaliser les missions dans l’entreprise et fidéliser le client.
                    </li>
                    <li>
                        Finaliser son projet professionnel de consultant et valider sa faisabilité par rapport à ses
                        ressources en matière d'expertise ainsi qu'à son potentiel de développement commercial.
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
                                        Module 1. Définir la stratégie marketing et d’action commerciale
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            L’analyse et définition des attentes tangibles et intangibles des entreprises en matière des
                                            prestations immatérielles ainsi que de la part du consultant en tant qu’acteur
                                            d’accomplissement de la mission.
                                        </li>
                                        <li>
                                            La définition du plan marketing des prestations du consulting et l’identification des
                                            entreprises-cibles, leur profil d’achat des prestations de consulting situées dans le périmètre
                                            d’expertise du stagiaire.
                                        </li>
                                        <li>
                                            L’appropriation des outils de la connaissance du client permettant de réaliser le décodage de
                                            son profil professionnel et le discernement de ses besoins et attentes tangibles et intangibles
                                            de la part du consultant.
                                        </li>
                                        <li>
                                            Le marketing des prestations de conseil et les apports des nouvelles technologies
                                            d’information et de communication pour l’optimisation de la visibilité des offres
                                            commerciales.
                                        </li>
                                        <li>
                                            La conception d'une architecture numérique de présentation de son cabinet ou service et créer
                                            un dispositif de documentation commerciale destinée aux clients et aux prospects cibles.
                                        </li>
                                        <li>
                                            Le processus de la formalisation des offres commerciales de conseil, d’élaboration des plans
                                            d’action de prospection et de négociation des conditions tarifaires.
                                        </li>
                                        <li>
                                            Les stratégies d’animation des réseaux professionnels et le développement de partenariats sur
                                            les bases pluridisciplinaires, de la complémentarité fonctionnelle et/ou commerciale.
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
                                        Module 2: Développer le dispositif de l’ingénierie méthodologique de consultant
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            L’appropriation des méthodes de formalisation d’un modèle de cahier des charges et sa
                                            traduction en projets de consulting opérationnels en cohérence avec les objectifs de client.
                                        </li>
                                        <li>
                                            L'élaboration des outils de réalisation des diagnostics du système organisationnel de
                                            l'entreprise sur la base des référentiels fonctionnels de compétences et formalisation des
                                            préconisations opérationnelles.
                                        </li>
                                        <li>
                                            Les techniques d'entretien de conseil pour appréhender les réalités du client, définir le
                                            processus de l'analyse de la demande et lancer la conception du pré-projet de consulting.
                                        </li>
                                        <li>
                                            L’architecture, les principes et les méthodes d'organisation d’un projet de consulting et
                                            élaboration des scénarios stratégiques de sa présentation personnalisée au client ou à un
                                            comité de décideurs.
                                        </li>
                                        <li>
                                            Les conditions de réussite d’une opération de lancement d’un service de consultant
                                            fonctionnel dans l’entreprise ou d’un cabinet de consultant indépendant : les préconisations
                                            pratiques
                                        </li>
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
                                        Module 3. Accompagner les projets de changement dans l’entreprise
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            Les méthodes et outils de réalisation des diagnostics des profils socioprofessionnels afin
                                            d'effectuer une cartographie de populations directement ou indirectement impactées par le
                                            changement issu d’une action de consulting.
                                        </li>
                                        <li>
                                            Les caractéristiques spécifiques de la stratégie d’entreprise, de la conduite du changement et
                                            de la transition que chaque acteur impliqué doit intégrer pour favoriser la cohésion de l’action
                                            commune.
                                        </li>
                                        <li>
                                            Les outils d’analyse du changement et évaluation des impacts qu’il produit sur l’organisation,
                                            les compétences, le fonctionnement, les relations professionnelles, pendant et après la
                                            transition.
                                        </li>
                                        <li>
                                            Les modalités de cadrage du projet et déploiement des plans d'action visant à maitriser les
                                            impacts découlant du projet de changement afin d’éviter les réactions de résistance et de
                                            démotivation.
                                        </li>
                                        <li>
                                            L’entraînement à l’appropriation d’un processus méthodologique de la conduite du
                                            changement : la transition et ses résonances ainsi que les principes de réussite de toute stratégie
                                            du changement.
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
                                        Module 4. Evaluer les besoins en formation
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            La préparation d’un diagnostic des besoins en formation et les principes de construction d’un
                                            support méthodologique fondé sur les critères de performance recherchée,
                                        </li>
                                        <li>
                                            Les techniques d’évaluation des besoins en formation : les principaux outils d’entretien, les
                                            grilles d’analyse par métier, fonction ou activité,
                                        </li>
                                        <li>
                                            L’analyse des résultats du diagnostic et la définition des objectifs de formation à la création
                                            d'un véritable avantage concurrentiel pour l'entreprise,
                                        </li>
                                        <li>
                                            L’entraînement à l’identification et à la définition des besoins en formation à partir des sources
                                            <strong>RH</strong> concernant l’évolution des métiers, la gestion des carrières et des compétences <strong>GPEC</strong>,
                                        </li>
                                        <li>
                                            Les outils du formateur pour la mise en place d’un dispositif d'identification prévisionnelle
                                            des besoins en compétences à partir de la stratégie du développement de l’entreprise,
                                        </li>
                                        <li>
                                            La formalisation d’un processus méthodologique consistant à limiter les risques financiers,
                                            juridiques et sociaux afférant à un projet de formation,
                                        </li>
                                        <li>
                                            La dimension opérationnelle de stratégique de la formation pour l'entreprise et comment
                                            définir l'impact recherché d’une action de formation sur la performance des stagiaires formés.
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
                                        Module 5. Concevoir et développer l’ingénierie de formation
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            L’appropriation des méthodes d’élaboration et de traduction des cahiers des charges en
                                            projets de formation en cohérence avec les objectifs de compétences à développer,
                                        </li>
                                        <li>
                                            Le positionnement d'un projet de formation selon l’objectifs à atteindre : l'objectif de
                                            compétence, l’objectif de connaissances, l’objectif pédagogique, l'objectif de performance,
                                        </li>
                                        <li>
                                            L’élaboration d’un programme de formation opérationnel, en adéquation avec le public cible
                                            à former, qui débouche sur la conception et le déploiement d’un processus de formation,
                                        </li>
                                        <li>
                                            Les différents concepts et outils de pédagogies différentielles telles que : inductive,
                                            démonstrative, interrogative, par objectif ou par projet et leurs applications opérationnelles.
                                        </li>
                                        <li>
                                            Le cycle d’apprentissage des adultes et approches pédagogiques différentielles en cohérence
                                            avec différents profils de stagiaires et la spécificité des objectifs pédagogiques à traiter,
                                        </li>
                                        <li>
                                            L’appropriation des méthodes de maniement des supports pédagogiques servant de guide
                                            d’animation du formateur et de manuel du participant pendant la session de formation,
                                        </li>
                                        <li>
                                            Les modalités d’intégration des technologies numériques dans le processus de formation
                                            avant, pendant et après la formation et leur impact sur les performances de stagiaires.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 uk-tooltip="title:plus de détails ?; pos: top-left"> 
                            <img src="{{asset('icones/flecheDroit.png')}}" alt="fleche">
                            <span uk-toggle="target: #module6">
                                <a class="uk-link-heading" href="#">Module 6</a>
                            </span>
                        </h4>
                        <div id="module6" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <div>
                                    <h4> 
                                        Module 6: Animer des sessions de formation
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            L’évaluation de ses potentialités d'animateur à partir d’un autodiagnostic de son style
                                            d’animateur afin de développer ses points forts et d’améliorer ses points faibles,
                                        </li>
                                        <li>
                                            L’élaboration d’un plan de réalisation d’une action de formation incluant la préparation
                                            matérielle, logistique, pédagogique et psychologique,
                                        </li>
                                        <li>
                                            L’entraînement à la maîtrise des techniques de communication pédagogique au travers d'une
                                            articulation méthodique de l’enchaînement de ses idées, de sa voix, ses gestes pour être en
                                            phase avec son groupe,
                                        </li>
                                        <li>
                                            La maîtrise des techniques pour déjouer les tentatives de déstabilisation en repérant les
                                            procédés, parfois tordus et manipulatoires afin de s’imposer par la maîtrise de recadrage,
                                        </li>
                                        <li>
                                            Le maniement d’un dispositif d’évaluation pour mesurer les effets sur l'atteinte des objectifs
                                            de la formation, la pertinence des contenus, l'application des acquis, les compétences acquises.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 uk-tooltip="title:plus de détails ?; pos: top-left"> 
                            <img src="{{asset('icones/flecheDroit.png')}}" alt="fleche">
                            <span uk-toggle="target: #module7">
                                <a class="uk-link-heading" href="#">Module 7</a>
                            </span>
                        </h4>
                        <div id="module7" uk-modal>
                            
                            <div class="uk-modal-dialog uk-modal-body">
                                <div>
                                    <h4> 
                                        Module 7: Formaliser et mettre en œuvre son projet professionnel
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            La définition des missions de consultant, l'identification des offres de conseil à partir de son
                                            expertise, l'élaboration des fiches de prestations et la formalisation de l'ingénierie de consulting
                                            et la formalisation des projets professionnels.
                                        </li>
                                        <li>
                                            La définition d’une stratégie marketing dans le cadre de son métier de consultant formateur
                                            pour chaque offre de conseil, potentielle en cohérence avec son expertise initiale et au choix
                                            du développement professionnel.
                                        </li>
                                        <li>
                                            La formalisation des plans d'action opérationnels pour déployer et réussir la réalisation de son
                                            projet professionnel et qui feront l'objet de suivi et d'évaluation post-formation.
                                        </li>
                                        <li>
                                            La validation du projet professionnel sur le plan de la maîtrise opératoire de sa mise en œuvre,
                                            par le stagiaire et apporter les correctifs de progression préconisés par le formateur.
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
                                            <td>66</td>
                                            <td>488 000</td>
                                        </tr>
                                        <tr>
                                            <td>Total net</td>
                                            <td>66</td>
                                            <td>538 000</td>
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
                            <img src="{{ asset('icones/forward_16px.png') }}" alt="">  05 Février 2021
                        </p>
                        <p class="phone" style="font-size: 15px; margin-top:-15px; color: whitesmoke">
                            <img src="{{ asset('icones/forward_16px.png') }}" alt="">  5 Mai 2021
                        </p>
                        <p class="phone" style="font-size: 15px; margin-top:-15px; color: whitesmoke">
                            <img src="{{ asset('icones/forward_16px.png') }}" alt="">  4 Septembre 2021
                        </p>
                        <p class="phone" style="font-size: 15px; margin-top:-15px; color: whitesmoke">
                            <img src="{{ asset('icones/forward_16px.png') }}" alt="">  1 er Décembre 2021
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