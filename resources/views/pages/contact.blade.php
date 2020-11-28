@extends('layouts.master')

@section('content')
    <div role="main" class="main">

        <div class="uk-section uk-section-default container mt-none mb-md">
            <div class="uk-container">
                <h3 style="color: #0DA4B5">Nous trouver</h3>
                <hr>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="uk-panel">
                            <img class="uk-align-center uk-align-right@m uk-margin-remove-adjacent" 
                                src="{{ asset('images/forTest.jpg') }}" width="225" height="150" alt="Example image">
                            <div>
                                <strong>Yaoundé</strong> <br>
                                Rue foé (montée mobil Essos) – rezde-chaussée hôtel FELIDAC <br>
                                Téléphone : (+237) 693389250/659132273 <br>
                                Email : <strong>infos@dgi-consultingcm.com</strong> <br>
                                Site Web : <strong>www.dgi-consultingcm.com</strong> <br>
                                Facebook : : <strong>693389250</strong> <br>
                                Linkedin : <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>   
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="uk-panel">
                            <img class="uk-align-center uk-align-right@m uk-margin-remove-adjacent" 
                                src="{{ asset('images/forTest.jpg') }}" width="225" height="150" alt="Example image">
                            <div>
                                    <strong>Douala</strong> <br> 
                                    Douala Akwa, carrefour Arnaud<br>
                                    Téléphone : +237 693389250<br>
                                    Email : <strong>infos@dgi-consultingcm.com</strong> <br>
                                    Site Web : <strong>www.dgi-consultingcm.com</strong> <br>
                                    Facebook : : <strong>693389250</strong> <br>
                                    Linkedin : <strong></strong>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <hr>
        </div>
        <div style="margin-top: -50px">
            <section class="section-no-border pt-md pb-xlg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-7 col-xs-12">

                            <div class="row">
                                <div class="col-md-12">
                                    <h1 style="color: #0DA4B5">Contact DGI</h1>
                                    <hr class="gradient-to-right">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-left">Nous nous engageons à vous répondre dans un délai de 48h.</p>
                                </div>
                            </div>

                            <form name="frm" id="frm" method="post" action="#"
                                onsubmit="return frm_contact_valide(this,'FR')">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Société</label>
                                            <input type="text" maxlength="100" class="form-control" name="societe" id="societe"
                                                value="" onchange="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nom <span style="color: red">*</span></label>
                                            <input type="text" data-msg-required="Merci de renseigner votre nom."
                                                maxlength="100" class="form-control" name="nom" id="nom" value="" required
                                                onchange="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Prénom <span style="color: red">*</span></label>
                                            <input type="text" data-msg-required="Merci de renseigner votre prénom."
                                                maxlength="100" class="form-control" name="prenom" value="" id="prenom"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email <span style="color: red">*</span> </label>
                                            <input type="email" data-msg-required="Merci de renseigner votre email."
                                                maxlength="100" class="form-control" name="email" id="email" value="" required
                                                onchange="javascript:this.value=this.value.toLowerCase();">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tél. <span style="color: red">*</span></label>
                                            <input type="text" data-msg-required="Merci de renseigner votre tél."
                                                maxlength="100" class="form-control" name="tel" id="tel" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Votre message</label>
                                            <textarea maxlength="5000" rows="10" class="form-control" name="message"
                                                id="message"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="rgpd_consentement" id="rgpd_consentement">
                                                Je souhaite recevoir les informations de DGI Consulting
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="g-recaptcha" data-sitekey="6LeqHW4UAAAAAGnZIal-6B7AqKPSt2O8XM3mXLzT"></div>
                                        <br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" value="Envoyer" class="btn btn-primary btn-lg mb-xlg">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <small>
                                                Merci de bien vouloir renseigner les champs marqués d'une étoile.<br>
                                                Conformément à la loi « informatique et libertés » du 6 janvier 1978
                                                modifiée en 2004, vous bénéficiez d'un droit d'accès et de rectification
                                                aux informations vous concernant.
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-offset-1 col-md-5 col-sm-5 col-xs-12">

                            <div class="featured-boxes featured-boxes-style-3 featured-boxes-flat">
                                <div class="featured-box featured-box-primary featured-box-effect-3">
                                    <div class="box-content text-left bgcolor-4">
                                        <i class="icon-featured ">
                                            <img src="{{ asset('icones/organisation.png') }}" alt="">
                                        </i>
                                        <h4>Agence Yaoundé</strong></h4>
                                        <ul class="list list-icons list-icons-style-3">
                                            <li>
                                                <i class="fa">
                                                    <img src="{{ asset('icones/marker2.png') }}" alt="">
                                                </i>
                                                Rue foé (montée mobil Essos) – rezde-chaussée hôtel FELIDAC</li>
                                            <li>
                                                <i class="fa">
                                                    <img src="{{ asset('icones/phoneWhite.png') }}" alt="">
                                                </i> (+237) 693389250 / 659132273
                                            </li>
                                            <li>
                                                <i class="fa ">
                                                    <img src="{{ asset('icones/clock.png') }}" alt="">
                                                </i> Du lundi au vendredi de 9h à 18h
                                            </li>
                                        </ul>
                                        <hr>
                                        <h4>Agence Douala</strong></h4>
                                        <ul class="list list-icons list-icons-style-3">
                                            <li>
                                                <i class="fa">
                                                    <img src="{{ asset('icones/marker2.png') }}" alt="">
                                                </i>
                                                Douala Akwa, carrefour Arnaud</li>
                                            <li>
                                                <i class="fa">
                                                    <img src="{{ asset('icones/phoneWhite.png') }}" alt="">
                                                </i>+237 693389250
                                            </li>
                                            <li>
                                                <i class="fa ">
                                                    <img src="{{ asset('icones/clock.png') }}" alt="">
                                                </i> Du lundi au vendredi de 9h à 18h
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection