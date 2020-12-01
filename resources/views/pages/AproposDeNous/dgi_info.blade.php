@extends('layouts.master')

@section('content')

    <div role="main" class="main">
        <section class="parallax section section-parallax parallax-disabled section-parallax-cms"
            data-plugin-parallax data-image-src="{{ asset('public/images/home_image.png') }}"
            style="height: 350px"></section>

        <section class="section section-no-background section-no-border mt-none pt-none mb-none pb-none">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <ul class="breadcrumb mt-none pt-sm pl-none mb-none pb-sm">
                            <li>DGi</li>
                            <li>Consulting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <div class="container mt-none mb-md">
            <div class="row">
                <div class="col-md-12">
                    <h1 style="color: #0DA4B5">PRESENTATION de la DGI-Consulting Cameroun</h1>
                    <hr class="gradient-to-right">
                </div>
            </div>
        </div>
    </div>

    <div class="uk-section uk-section-default container mt-none mb-md">
        <div class="uk-container">
    
            <h3 style="color: #0DA4B5">Le réseau</h3>
            <hr>
    
            <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
                <div>
                    <p>Créées par des travailleurs africains, prestataires intellectuels occasionnels et
                        formateurs professionnels, tous autour d’une même mission, aider les
                        entreprises, institutions publiques, ONG et particuliers dans le
                        développement, la croissance et la performance de leurs activités ; en
                        renforçant leurs compétences.
                    </p>
                </div>
            </div>
            <br>
            <div>
                <h4 style="color: #0DA4B5">DGI-Consulting forme :</h4>
                <ul class="uk-list uk-list-circle">
                    <li>Aux métiers du Management de projets, de l’organisation du travail,
                        de la prestation de service intellectuel.</li>
                    <li>Aux métiers associés et/ou assimilés, comptabilité, audit, contrôle de
                        gestion.</li>
                    <li>Aux métiers du tertiaire qualité, hygiène, environnement, sécurité,
                        management.</li>
                </ul>
            </div>

            <h3 style="color: #0DA4B5">DGI Consulting au Cameroun</h3>
            <hr>
            <p>
                Elles proposent également un outil de gestion des ressources humaines au
                service de la performance des entreprises : les Certificats de Qualification
                Professionnelle, leurs efficacités et leurs créativités.
                DGI Consulting, par le biais de son organisme de formation, et de ses
                organismes et universités partenaires, assiste plus de 80 PME/PMI et 8
                Grandes entreprises dans l’élaboration, l’optimisation et la réalisation de leur
                plan de formation depuis plusieurs années et, forme 300 à 400 stagiaires
                chaque année.
                DGI Consulting propose l’accompagnement vers les certifications
                professionnelles et internationales dans différents domaines en partenariat
                avec les organismes habiletés à le faire.
            </p>
    
            <h3 style="color: #0DA4B5">Une équipe à votre disposition pour le succès de vos projets</h3>
            <hr>
            <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
                <div>
                    <ul class="uk-list">
                        <li><h4> <img src="{{asset('public/icones/flecheDroit.png')}}" alt="fleche"> Direction Commerciale</h4></li>
                        <li><h4><strong>Carine ONANA</strong></h4></li>
                        <li>Business developper</li>
                        <li>+237 657 759547</li>
                        <li>carinatecla@dgi-consultingscm.com</li>
                    </ul>
                </div>
                <div>
                    <ul class="uk-list">
                        <li><h4> <img src="{{asset('public/icones/flecheDroit.png')}}" alt="fleche"> Conseillers Formation</h4></li>
                        <li><h4><strong>Brown Elad</strong></h4></li>
                        <li>Formations management</li>
                        <li>+237 698300268</li>
                        <li>elad@dgi-consultingscm.com</li>
                    </ul>
                </div>
                <div>
                    <ul class="uk-list">
                        <li><h4> <img src="{{asset('public/icones/flecheDroit.png')}}" alt="fleche"> Accueil</h4></li>
                        <li><h4><strong>Prystilla NSOCK</strong></h4></li>
                        <li>Assistante Chargée Clientèle</li>
                        <li>+237 696970883</li>
                        <li>prystilla@ dgi-consultingscm.com</li>
                    </ul>
                </div>
                <div>
                    <ul class="uk-list">
                        <li><h4> <img src="{{asset('public/icones/flecheDroit.png')}}" alt="fleche"> Conseillers Formation</h4></li>
                        <li><h4><strong>Marie Gabrielle ODA</strong></h4></li>
                        <li>Formation marketing-commerciale</li>
                        <li>+237 699106743</li>
                        <li>mariegabrielle@dgi-consultingscm.com</li>
                    </ul>
                </div>
                <div>
                    <ul class="uk-list">
                        <li><h4> <img src="{{asset('public/icones/flecheDroit.png')}}" alt="fleche"> Comptabilité</h4></li>
                        <li><h4><strong>Mansie Robert</strong></h4></li>
                        <li>Comptable</li>
                        <li>+237 697162893</li>
                        <li>mansie@ dgi-consultingscm.com</li>
                    </ul>
                </div>
                <div>
                    <ul class="uk-list">
                        <li><h4> <img src="{{asset('public/icones/flecheDroit.png')}}" alt="fleche"> Conseillers Formation</h4></li>
                        <li><h4><strong>Christine Assene Ayo</strong></h4></li>
                        <li>Stagiaire commerciale</li>
                        <li>+237 690214517</li>
                        <li>christine@dgi-consultingscm.com</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
        
@endsection
