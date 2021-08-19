@extends('layouts.gobal.front-layout')

@section('main-wrapper')

    <div id="about_us" class="mx-auto py-10 my-16" >
        <div class=" registration_area" id="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 mx-auto">
                        <div class="row clock_sec clockdiv" id="clockdiv">
                            <div class="col-lg-12">
                                <h1 class="mb-3">Conditions Générales d’Utilisation</h1>
                                <p class="text-justify">
                                    <h2>Préambule</h2>
                                    La Société exploite un site internet accessible à l’adresse http://www.Coach&Go.fr, proposant une place de marché en ligne dédiée à la
                                    mise en relation des professionnels du sport avec des particuliers                                    </p>
                                    <br>
                                    Les présentes Conditions Générales ont pour objet de régir les conditions et modalités d’utilisation et de vente du Site, ainsi que de définir
                                    les droits et obligations des Utilisateurs mis en relation sur le Site.
                                    <br>
                                    Tout accès et/ou utilisation du Site suppose l’acceptation sans réserves et le respect de l’ensemble des termes des présentes Conditions
                                    Générales.
                                    <p>
                                        <h2>Définition</h2>
                                        Utilisateur : Toute personne bénéficiant d’un espace personnel sur le Site (le « Compte Personnel »)                                    </p>
                                    <p>
                                        <h2>Marque & Logo</h2>
                                        Coach&Go est une marque déposée et protégée <br>
                                        <ul>
                                            <li>
                                                Client : Toute personne bénéficiant d’un espace personnel sur le Site (le « Compte Personnel »), et candidate aux prestations
                                            </li>
                                            <li>
                                                Coach : Tout professionnel du sport bénéficiant d’un espace personnel sur le Site (le « Compte Personnel ») et qui propose des Prestations
                                            </li>
                                        </ul>
                                        <br>
                                        Pour rappel, d'après l'article L212-1: "Seuls peuvent, contre rémunération, enseigner, animer ou encadrer une activité physique ou sportive
                                        ou entraîner ses pratiquants, à titre d'occupation principale ou secondaire, de façon habituelle, saisonnière ou occasionnelle, sous réserve
                                        des dispositions du quatrième alinéa du présent article et de l'article L. 212-2 du présent code, les titulaires d'un diplôme, titre à finalité
                                        professionnelle ou certificat de qualification"
                                        <br>

                                        Mandat de Facturation : désigne le mandat de facturation conclu entre le Coach et la Société aux termes duquel le Coach accepte de
                                        confier à la Société, dans le respect des règles applicables, l’établissement de ses factures relatives aux Prestations réalisées pour un
                                        Client via le Site.
                                        <br>
                                        Site : désigne le site internet dont l’adresse est http://www.Coach&Go.fr
                                    </p>
                                    <p>
                                        <h2>Informatique et liberté</h2>
                                        Conformément à la loi « Informatique et Libertés » du 6 janvier 1978, Coach&Go a fait l’objet d’une déclaration à la Commission
                                        Nationale de l'Informatique et des Libertés, référencée sous le n° 457 024 8 -FI.                                    </p>
                                    <h2>Liens hypertexte</h2>
                                    « Des liens hypertextes contenus sur ce site peuvent renvoyer vers d'autres sites web ou d'autres sources Internet. Dans la mesure où
                                    la société Coach&Go ne peut contrôler ces sites et ces sources externes, Coach&Go ne peut être tenue pour responsable de la mise à
                                    disposition de ces sites et sources externes, et ne peut supporter aucune responsabilité quant aux contenus, publicités, produits,
                                    services ou tout autre matériel disponibles sur ou à partir de ces sites ou sources externes. »

                                <p></p>
                                <h3>
                                </h3>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 offset-lg-1">
                        <div class="register_form">

                            <form class="form_area bg-dark" id="myForm" >
                                <div class="row">
                                    <div class="col-xl-9 mx-auto">
                                        <!--begin::Wizard Step 3-->
                                        <div class="my-1 pb-5 step " >
                                            <h3 class="mb-5 mt-5 font-weight-bold text-center text-white">A votre service</h3>

                                            <!--begin::Group-->
                                            <div class="form-group fv-plugins-icon-container">
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="fullname" placeholder="nom & prenoms">
                                            </div>
                                            <div class="form-group fv-plugins-icon-container">
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="phone" placeholder="Téléphone">
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-solid form-control-lg" name="email" placeholder="email" >
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="subject" placeholder="objet" >
                                            </div>

                                            <div class="form-group">
                                                <textarea name="message" id="" cols="30" rows="5"></textarea>
                                            </div>
                                            <button class=" btn btn-block btn-warning">Validez</button>
                                        </div>
                                        <!--end::Wizard Step 3-->

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>



    @include('pages.Front.footer')




@endsection
