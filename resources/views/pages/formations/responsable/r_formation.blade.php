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
                        <li>Responsable de formation</li>
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
                        En règle générale le responsable de formation est rattaché à la direction générale ou direction des
                        ressources humaines. A partir de cette position fonctionnelle ou hiérarchique, il analyse les
                        besoins en compétences des salariés de l'entreprise et réponde à leurs demandes au travers des
                        formations destinées au développement des compétences. Le responsable de formation
                        accompagne également les salariés dans leur démarche d'appropriation des compétences et
                        d'optimisation des performances. <br>
                        Le responsable de formation peut aussi travailler au sein d’un cabinet de conseil et intervenir en
                        tant que consultant spécialisé dans un domaine de formation, conseiller en développement des
                        compétences ou directeur d'un service ou d'un centre de formation dans une entreprise privée
                        ou publique. Dans la mesure où les métiers de la formation évoluent et nécessitent de nouvelles
                        compétences en matière de l'ingénierie de formation et d'innovation, le responsable de formation
                        a pour mission de répondre aux impératifs de la conduite des changements et des transitions.
                    </p>
                </div>
            </div>

            <br>
            <div>
                <h3 style="color: #0DA4B5">Public visé</h3>
                <hr>
                <p><strong>Cette formation s’adresse :</strong></p>
                <p>
                    Ce cycle de formation s'adresse aux responsables formation en prise de fonction ou à ceux qui
                    souhaitent confronter leurs pratiques et évoluer dans leur parcours professionnel comme les
                    chargés du développement des ressources humaines, responsables de recrutement, responsables
                    chargés de mobilité et gestion des carrières, chefs de projet de l'ingénierie de formation ainsi que
                    les managers opérationnels ou fonctionnels, consultants et formateurs et à tous ceux et celles qui
                    souhaitent créer, adapter, perfectionner ou développer leurs compétences et faire évoluer leur
                    expérience professionnelle vers le métier de responsable de formation.
                </p>
            </div>

            <br>
            <div>
                <h3 style="color: #0DA4B5">Objectifs de la formation</h3>
                <hr>
                <p>Cette formation a pour but :</p>
                <ul class="uk-list uk-list-square" style="margin-left: 20px">
                    <li>
                        Savoir décrypter ce que l'entreprise attend d'un responsable de formation : avoir une vision
                        claire sur son référentiel métier, ses missions et ses objectifs stratégiques et opérationnels ;
                    </li>
                    <li>
                        Traduire une stratégie d'entreprise en politique de formation et en plan de développement
                        des compétences afin d'anticiper les mutations au niveau économique et technologique ;
                    </li>
                    <li>
                        Repérer et analyser les besoins en formation de l'entreprise, en cohérence avec la politique
                        des ressources humaines et formaliser le plan de formation annuel ;
                    </li>
                    <li>
                        Acquérir les bases conceptuelles et pratiques de l'ingénierie de la formation, de la conduite de
                        projets de formation et de la production des compétences dans le cadre GPEC ;
                    </li>
                    <li>
                        Manager efficacement le service de formation sur le plan logistique, économique, stratégique,
                        règlementaire, pédagogique et évaluer le retour investissement de la formation.
                    </li>
                    <li>
                        Concevoir et développer l'architecture de son projet professionnel du responsable de
                        formation avec la mise au point des modalités d’accompagnement des plans d’action post
                        formation.
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
                                        Module 1: Modéliser son leadership de responsable de formation
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            Les différentes composantes du métier de responsable de formation et la polyvalence
                                            nécessaire pour assurer avec efficacité les missions qui lui sont confiées dans le cadre de sa
                                            fonction.
                                        </li>
                                        <li>
                                            La posture professionnelle de responsable de formation : la formalisation de ses missions sur
                                            la base de son capital d'expertise et le potentiel de ses ressources, technique et relationnelle.
                                        </li>
                                        <li>
                                            L'analyse de son leadership de responsable de formation sur la base d’un référentiel des
                                            compétences méthodologiques, relationnelles, informationnelles et organisationnelles.
                                        </li>
                                        <li>
                                            Le discernement de son champ de performance potentielle et de sa capacité à transmettre aux
                                            autres, ses connaissances, ses convictions et ses compétences opérationnelles.
                                        </li>
                                        <li>
                                            La mise en phase de son leadership avec le référentiel de compétences du responsable de
                                            formation et le synchroniser avec la spécificité de ses missions professionnelles
                                        </li>
                                        <li>
                                            L'entrainement aux pratiques de l'exercice du leadership de responsable de formation pour
                                            acquérir les bons réflexes qui vont produire la posture d'un professionnel expérimenté.
                                        </li>
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
                                        Module 2: Positionner son métier de responsable de formation dans l’entreprise
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            Comment impliquer l’équipe de formation au processus d’autoévaluation des pratiques afin
                                            de créer une synergie fonctionnelle, basée sur une vision de l’excellence professionnelle ?
                                        </li>
                                        <li>
                                            Les entrainements au maniement des outils d'analyse et d'audit de la fonction de formation
                                            dans l'entreprise et formaliser les préconisations pour la faire évoluer.
                                        </li>
                                        <li>
                                            L’initiation à l’extrapolation des données du diagnostic et la définition des objectifs de progrès
                                            à moyen et à long terme pour donner à son entreprise un véritable avantage concurrentiel.
                                        </li>
                                        <li>
                                            La prise de connaissance des référentiels pour évaluer les projets de formation de la
                                            conformité du cahier des charges jusqu’à l’évaluation des connaissances avant, pendant et
                                            après la formation.
                                        </li>
                                        <li>
                                            La responsabilité opérationnelle du responsable de formation dans l'optimisation des impacts
                                            des actions de formation sur sa performance opérationnelle des stagiaires formés.
                                        </li>
                                        <li>
                                            Le cas pratique : la formulation des indicateurs et formalisation d'un référentiel global
                                            d'évaluation des activités et des compétences du responsable de formation dans l'entreprise.
                                        </li>
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
                                        Module 3: Traduire la stratégie d’entreprise en plan de développement de compétences.
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            La clarification des missions du responsable formation et fixer les bases fonctionnelles de
                                            l’activité formation en prise directe avec la vision stratégique de l’entreprise.
                                        </li>
                                        <li>
                                            La formation en tant que levier stratégique dans la compétitivité de l'entreprise et les nouveaux
                                            enjeux de la formation professionnelle sur l'employabilité des salariés et la sécurisation des
                                            parcours professionnels.
                                        </li>
                                        <li>
                                            Les outils d’analyse et d’identification des principaux axes de la stratégie de l’entreprise et
                                            méthodes pour déterminer les orientations du plan de la formation ainsi que ses contributions
                                            aux performances de l’entreprise.
                                        </li>
                                        <li>
                                            Les méthodes d’identification des compétences à développer et les scénarios métiers en
                                            fonction de la stratégie générale de l'entreprise et les décliner en plan de formation annuel.
                                        </li>
                                        <li>
                                            Le processus de la mise en conformité des compétences stratégiques décalées, l’anticipation
                                            des nouvelles logiques de formation nécessaires au développement de l’entreprise.
                                        </li>
                                        <li>
                                            La mise au point d’une organisation qui va faciliter l’implication de la hiérarchie dans le
                                            processus de formation avant, pendant et après la réalisation des actions pour mieux optimiser
                                            leur impact sur le terrain.
                                        </li>
                                        <li>
                                            Les méthodes et les outils opérationnels du responsable formation pour la mise en place d’une
                                            gestion prévisionnelle des compétences à produire par la formation à partir des orientations
                                            stratégiques de l’entreprise.
                                        </li>
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
                                        Module 4: Evaluer les besoins en formation dans l’entreprise
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            La formalisation d’un diagnostic des besoins en formation et les principes de construction
                                            d’un support méthodologique fondé sur les critères de performance recherchée.
                                        </li>
                                        <li>
                                            Les techniques d’évaluation des besoins en formation : les principaux outils d’entretiens avec
                                            différents acteurs d'entreprise, les grilles d’analyse par métier, fonction ou activité.
                                        </li>
                                        <li>
                                            L’appropriation des outils d’analyse des besoins au niveau des services de l’entreprise, en
                                            termes de connaissances et de compétences à développer pour mieux optimiser les
                                            performances individuelles et des équipes.
                                        </li>
                                        <li>
                                            Les outils d'analyse d'évaluation des besoins et la formulation des cahiers de charges intégrant
                                            la création d'un véritable avantage concurrentiel pour l'entreprise.
                                        </li>
                                        <li>
                                            Le mode d'exploitation des ressources et réseaux internes de l’entreprise afin d’optimiser la
                                            définition des besoins en formation par rapport à l’évolution des métiers et la gestion des
                                            carrières GPEC.
                                        </li>
                                        <li>
                                            Les outils du responsable de formation pour la mise en place d’une gestion prévisionnelle des
                                            besoins en compétences à partir de la stratégie de l’entreprise.
                                        </li>
                                        <li>
                                            L’entrainement pratique à la définition des besoins en formation et à l’anticipation des impacts
                                            à produire sur la performance effective des cibles de populations à former à l’issue de la
                                            formation.
                                        </li>
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
                                        Module 5: Développer des dispositifs de l’ingénierie de formation
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            Le mode de différenciation des objectifs stratégiques, opérationnels, pédagogiques afin de
                                            pouvoir concevoir et développer les dispositifs de l'ingénierie de formation efficient ;
                                        </li>
                                        <li>
                                            Le processus de montage de projets de formation à partir d’objectifs stratégiques de
                                            l’entreprise, du système de gestion des carrières, des évaluation annuelles, des référentiels
                                            métiers ;
                                        </li>
                                        <li>
                                            Les méthodes de traduction des plans de formation ou d'une politique de gestion des
                                            ressources humaines en ingénierie de formation et des compétences ;
                                        </li>
                                        <li>
                                            L'appropriation des outils d'analyse méthodologique, pédagogique et organisationnelle de la
                                            réalisation d’actions de formation test pour valider les contenus pédagogiques ;
                                        </li>
                                        <li>
                                            La mise au point des tableaux synoptiques de l'ingénierie de formation dotés des indicateurs
                                            pour piloter les actions de formation, exploiter les contenus et les faire vivre ;
                                        </li>
                                        <li>
                                            L’appropriation des méthodes de maniement des supports pédagogiques servant de guide
                                            d’animation du formateur et de manuel du participant pendant la session de formation,
                                        </li>
                                        <li>
                                            Cas pratique : élaborer un cahier de charges et organiser un processus de formation à partir
                                            d'un dispositif complet d'ingénierie de formation sous forme d'étude de cas d'entreprise.
                                        </li>
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
                                        Module 6: Manager efficacement son service de formation
                                    </h4>
                                    <ul class="uk-list uk-list-square" style="margin-left: 20px">
                                        <li>
                                            La prise de connaissance des obligations des organismes de formation vis à vis de leurs clients
                                            et des stagiaires pour mieux négocier les modalités contractuelles ;
                                        </li>
                                        <li>
                                            Les différentes méthodes et outils d’évaluation d’offres de formation à l’aide de grilles
                                            d’analyse pour mesurer leurs performances pédagogiques, économiques et opérationnelles ;
                                        </li>
                                        <li>
                                            Le processus d’achat, la mise au point des modalités de collaboration, l’entraînement à
                                            l’élaboration d’un cahier des charges fournisseur et la définition des conditions ou points à
                                            négocier ;
                                        </li>
                                        <li>
                                            L’identification de différentes sources de financements des projets de formation et mode
                                            d’optimisation de la gestion des coûts par projet ou plan de formation annuel de l'entreprise ;
                                        </li>
                                        <li>
                                            Le plan d’un dispositif collaboratif de communication pour impliquer les managers
                                            opérationnels à promouvoir la politique ou les projets de formation auprès de leurs équipes
                                            ou services ;
                                        </li>
                                        <li>
                                            Le dispositif de la gestion générale de la formation, planifier et coordonner l'activité de l'équipe
                                            pédagogique et assurer sa formation en conformité avec l’évolution du métier ;
                                        </li>
                                        <li>
                                            Cas pratique : formaliser et présenter une architecture du plan de formation de l’entreprise.
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
                            cabinet. <br>
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
                            <img src="{{ asset('public/icones/forward_16px.png') }}" alt="">  8 Février 2021
                        </p>
                        <p class="phone" style="font-size: 15px; margin-top:-15px; color: whitesmoke">
                            <img src="{{ asset('public/icones/forward_16px.png') }}" alt="">  6 Avril 2021
                        </p>
                        <p class="phone" style="font-size: 15px; margin-top:-15px; color: whitesmoke">
                            <img src="{{ asset('public/icones/forward_16px.png') }}" alt="">  17 Août 2021
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