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
                        <li>Consultant en Management</li>
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
                        L'action transformative du consultant en management vise à déplacer le champ des
                        représentations pour accompagner le déploiement des transformations créatrices de valeur au
                        sein des entreprises. Elle porte une forte ambition stratégique, quelle que soit la nature des
                        changements à opérer : transformation des perceptions et des attitudes des salariés, des
                        comportements et usages au sein des équipes, de la culture et du métier de management ou
                        encore du modèle économique de l'entreprise. <br>
                        Cette vision est portée par le professionnalisme et le leadership du consultant en management
                        afin de favoriser et accompagner des transformations créatrices au sein des entreprises ou
                        institutions publiques. Elle s’emploie à enrichir les compétences en matière du management dans
                        les entreprises, ce qui facilite et rend possible et acceptable, les processus de transformation des
                        métiers et par la même de l’organisation toute entière. Dans cette perspective, le consultant en
                        management est amené à connaitre le marché du client, analyser l’existant de son organisation,
                        poser un diagnostic stratégique, rechercher et proposer des solutions opérationnelles.
                    </p>
                </div>
            </div>

            <br>
            <div>
                <h3 style="color: #0DA4B5">Public visé</h3>
                <hr>
                <p>
                    <strong>Cette formation s’adresse :</strong> <br>
                    Cette formation s'adresse aux consultants en management, cadres fonctionnels, ingénieurs,
                    managers en reconversion professionnelle, organisateurs, managers commerciaux, responsables
                    des ressources humaines, scientifiques, consultants d’entreprise ou indépendants et à tous ceux
                    et celles qui souhaitent adapter, perfectionner ou développer leurs compétences et faire évoluer
                    leur expertise ou expérience professionnelle vers le métier de consultant en management
                </p>
            </div>

            <br>
            <div>
                <h3 style="color: #0DA4B5">Objectifs de la formation</h3>
                <hr>
                <p>Cette formation de consultant en management vous permettra d'avoir la capacité d(e) :</p>
                <ul class="uk-list uk-list-square" style="margin-left: 20px">
                    <li>
                        Définir la stratégie commerciale du consultant en management en cohérence avec son
                        expertise et élaborer une architecture de projet marketing compatible avec les besoins de
                        clients cibles et le réseau de business partenaires.
                    </li>
                    <li>
                        Développer l'ingénierie de l'intervention de consultant en s’appropriant des compétences et
                        des outils pour concevoir des offres de commerciales de conseil, réaliser les missions dans
                        l’entreprise et fidéliser le client.
                    </li>
                    <li>
                        Concevoir les systèmes de management de l'entreprise compétitive en intégrant le maniement
                        des leviers de la performance de l’entreprise et accompagner leurs dirigeants à réussir leurs
                        projets de changement
                    </li>
                    <li>
                        Accompagner la mise en œuvre de la stratégie de l'entreprise, formaliser les processus de
                        transformation managériale en cohérence avec le modèle stratégique et l’interaction entre
                        expertises fonctionnelles et relationnelles.
                    </li>
                    <li>
                        Piloter les projets du changement et de la transition, animer les équipes de pilotage en assurant
                        le suivi, l’évaluation et la pérennisation transformatrice du management dans l’entreprise.
                    </li>
                    <li>
                        Déployer son projet professionnel du consultant en management et valider sa faisabilité par
                        rapport à ses ressources en matière d'expertise ainsi qu'à son potentiel de développement.
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
                                        Module 1: Affirmer son leadership du consultant en management
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            Les différents aspects du métier de consultant en management et la polycompétence
                                            nécessaire pour assurer avec efficacité les missions qui lui sont confiées.
                                        </li>
                                        <li>
                                            Les grandes composantes du métier de consultant et les compétences nécessaires pour
                                            créer et développer son activité dans le cadre d'une charte éthique.
                                        </li>
                                        <li>
                                            L'analyse de son leadership de consultant en management sur la base d’un référentiel des
                                            compétences méthodologiques, relationnelles, informationnelles et communicatives.
                                        </li>
                                        <li>
                                            Le discernement de son champ de performance optimale et de sa capacité à transmettre
                                            aux autres, ses connaissances, ses convictions et ses compétences opérationnelles.
                                        </li>
                                        <li>
                                            La mise en phase de son leadership avec le référentiel de compétences du consultant en
                                            management et le synchroniser avec la spécificité de ses missions et ses clients.
                                        </li>
                                        <li>
                                            L'intégration des comportements en situation de consulting pour recueillir les bonnes
                                            informations tout en donnant une image de grand professionnel.
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
                                        Module 2: Définir la stratégie commerciale du consultant en management
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            La définition de la stratégie commerciale des prestations du consulting et la mise en place
                                            d’un marketing relationnel en cohérence avec les besoins des entreprises.
                                        </li>
                                        <li>
                                            Le positionnement de son activité de consultant en management et la segmentation de la
                                            clientèle, interne et/ou externe par type de prestations ou des offres de conseil.
                                        </li>
                                        <li>
                                            La conception d'une architecture numérique de présentation de son cabinet ou service et
                                            créer un dispositif de documentation commerciale destinée aux clients et aux prospects
                                            cibles.
                                        </li>
                                        <li>
                                            La connaissance du client : décoder son profil socioprofessionnel et discerner avec
                                            précision ses besoins et attentes tangibles et intangibles de la part du consultant.
                                        </li>
                                        <li>
                                            L'élaboration des offres de conseil en management, réaliser les plans d’action de
                                            prospection, négocier les conditions tarifaires et développer le portefeuille client.
                                        </li>
                                        <li>
                                            Le marketing des prestations de conseil et les apports des nouvelles technologies
                                            d’information et de communication pour l’optimisation de la visibilité des offres
                                            commerciales.
                                        </li>
                                        <li>
                                            Les stratégies d’animation des réseaux professionnels et le développement de partenariats
                                            sur les bases pluridisciplinaires, de la complémentarité fonctionnelle et/ou commerciale.
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
                                        Module 3: Développer l'ingénierie de l'intervention de consultant en management
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            L'appropriation de maniement des outils de réalisation des diagnostics du système managérial
                                            de l'entreprise sur la base des référentiels fonctionnels et formalisation des préconisations
                                            opérationnelles.
                                        </li>
                                        <li>
                                            Les techniques d'entretien de conseil pour appréhender les réalités du client, définir le
                                            processus de l'analyse de la demande et lancer la conception du pré-projet de consulting.
                                        </li>
                                        <li>
                                            L'appropriation d'un dispositif complet d’ingénierie de consultant en management, contenant
                                            les outils et les guides méthodologiques en interaction avec les technologies numériques.
                                        </li>
                                        <li>
                                            Les principes et méthodes d'organisation de la mise en œuvre d’un projet de consulting et
                                            élaboration des scénarios de présentation des recommandations au client.
                                        </li>
                                        <li>
                                            Les différents niveaux de conception d’une intervention de consulting et les facteurs clés de
                                            performance et contreperformance du consultant en intervention.
                                        </li>
                                        <li>
                                            Le système d'information pour optimiser la ressource de base du consultant et la définition
                                            d'une stratégie relationnelle pour chaque typologie de client ou prospect.
                                        </li>
                                        <li>
                                            Les conditions de réussite pour monter une structure de consultant en management interne
                                            ou externe ayant pour objectif de servir d’accélérateur de la performance du système du
                                            management de l’entreprise.
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
                                        Module 4 : Concevoir les systèmes de management de l'entreprise compétitive
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            Les outils d’analyse du contexte d’entreprise et des rapports entre les principaux acteurs
                                            d'entreprise, leur position dans l'organigramme et leurs interactions fonctionnelles ou
                                            hiérarchiques.
                                        </li>
                                        <li>
                                            Les critères de décryptage de l'évolution d’organisation hiérarchique et/ou matricielle vers un
                                            fonctionnement en réseau ou vers une extension de la sphère d’influence du management
                                            stratégique.
                                        </li>
                                        <li>
                                            Les outils d’analyse de méthodes de management et d’optimisation des processus par
                                            intégration des critères d’une compétitivité basée sur l’effet d’expérience, de l'excellence et/ou
                                            sur l’effet d’innovation.
                                        </li>
                                        <li>
                                            Les concepts de la vision stratégique du management qui permettent d'éviter le risque de
                                            confusion ou d'interprétations aléatoires ou émotionnelles de la part des acteurs de
                                            l'entreprise.
                                        </li>
                                        <li>
                                            Les principes fondamentaux de la pensée et de l'action stratégique capables de transformer les
                                            contradictions et les conflits internes à l'entreprise en opportunités de changement et de
                                            développement.
                                        </li>
                                        <li>
                                            Les 3 principales stratégies pour modéliser le système de management de l'entreprise
                                            compétitive assorties des processus opératoires en fonction des contextes socio-économiques
                                            de l’organisation.
                                        </li>
                                        <li>
                                            Le processus pour faire émerger une vision stratégique et la façon d’orienter cette vision pour
                                            qu’elle détermine la dynamique de la cohérence fonctionnelle du système de management
                                            tout en évitant les blocages majeurs.
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
                                        Module 5: Accompagner la mise en œuvre de la stratégie de l'entreprise
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            L’appropriation des outils d’analyse et d’identification des contextes qui font émerger les
                                            opportunités nouvelles et qui s’articulent avec les métiers stratégiques d'entreprise ainsi
                                            qu'avec les capacités humaines pour les optimiser.
                                        </li>
                                        <li>
                                            L’entrainements au maniement des outils permettant de recueillir des informations
                                            indispensables pour nourrir le processus stratégique qui va induire des changements dans
                                            l'entreprise.   
                                        </li>
                                        <li>
                                            La formalisation des modèles de diagnostics stratégiques, s’appuyant sur les outils
                                            d’analyse et d'optimisation des indicateurs de performances économiques,
                                            technologiques, humaines, financières de l’entreprise.
                                        </li>
                                        <li>
                                            Les méthodes pour utiliser les pressions et risques externes, constituant la menace pour
                                            l'entreprise, comme un levier du changement et les contradictions internes comme
                                            dynamique d’action pour donner sens à l’action stratégique.
                                        </li>
                                        <li>
                                            L’élaboration d'un modèle stratégique à partir de simulations de cas réels permettant
                                            d’ordonner toutes les actions du management stratégique intégrées au projet d'entreprise.
                                        </li>
                                        <li>
                                            Les méthodes d’intégration de nouvelles valeurs et de nouvelles compétences fondées sur
                                            les référentiels de dix rôles de management servant de levier dans la stratégie d'entreprise
                                            compétitive.
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
                                        Module 6: Piloter les projets du changement et de la transition
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            Les méthodes pour discerner les acteurs synergiques et/ou antagonistes, permettant de définir
                                            les modèles d'action stratégique et enclencher le processus réflexif sur le projet de changement.
                                        </li>
                                        <li>
                                            La définition des modalités de mobilisation différentiée, selon le profil des acteurs, à
                                            l’adhésion au projet comme un moyen pour faire progresser son métier, son entreprise, ses
                                            clients.  
                                        </li>
                                        <li>
                                            Le mode clarification des critères de différenciation entre la stratégie, la conduite du
                                            changement et de la transition que chaque acteur doit traverser de façon autonome, mais en
                                            cohésion avec l’action commune.
                                        </li>
                                        <li>
                                            L’intégration des outils d’analyse des caractéristiques du changement et évaluation de leurs
                                            impacts sur l’organisation, les compétences, le fonctionnement, les relations professionnelles,
                                            pendant et après la transition.
                                        </li>
                                        <li>
                                            Les modalités d’utilisation des tableaux de qualification des impacts du changement et des
                                            besoins d’accompagnement des métiers, des populations ou des personnes impliquées,
                                            directement ou indirectement dans le processus du changement.
                                        </li>
                                        <li>
                                            La formulation des objectifs de formation des salariés impactés par le changement, précisant
                                            le type de compétences à acquérir pour mettre sous contrôle les conséquences des impacts du
                                            changement.
                                        </li>
                                        <li>
                                            L’entraînement à la conduite d'un projet du changement fondé sur une étude de cas : la
                                            transition et ses résonances en tant que facteur de réussite de la stratégie du changement.
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
                                        Module 7: Déployer son projet professionnel du consultant en management
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            La formalisation collaborative et modélisation du projet et sa mise en forme organisationnelle
                                            avec le stagiaire, en cohérence avec le référentiel de son métier de consultant en management.
                                        </li>
                                        <li>
                                            La définition d’une stratégie marketing dans le cadre de son projet de consultant en
                                            management pour chacune des offres commerciales faisant l'objet du projet professionnel.
                                            clients.  
                                        </li>
                                        <li>
                                            La formalisation des plans d'action opérationnels pour déployer et réussir la réalisation de son
                                            projet professionnel dans les délais impartis et dans les conditions optimales.
                                        </li>
                                        <li>
                                            La validation de son projet professionnel sur le plan de la maîtrise opératoire de sa mise en
                                            œuvre, de sa faisabilité technique ainsi que sur le plan des capacités du stagiaire à le réaliser.
                                        </li>
                                        <li>
                                            La mise au point des modalités d’accompagnement du stagiaire dans son processus de
                                            professionnalisation post formation sous forme des sessions individualisées en ligne, selon
                                            rythme d’avancement du stagiaire et à sa demande.
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
                            <img src="{{ asset('icones/forward_16px.png') }}" alt="">  08 Février 2021
                        </p>
                        <p class="phone" style="font-size: 15px; margin-top:-15px; color: whitesmoke">
                            <img src="{{ asset('icones/forward_16px.png') }}" alt="">  11 Mai 2021
                        </p>
                        <p class="phone" style="font-size: 15px; margin-top:-15px; color: whitesmoke">
                            <img src="{{ asset('icones/forward_16px.png') }}" alt="">  12 Septembre 2021
                        </p>
                        <p class="phone" style="font-size: 15px; margin-top:-15px; color: whitesmoke">
                            <img src="{{ asset('icones/forward_16px.png') }}" alt="">  8 Décembre 2021
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