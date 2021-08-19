@extends('layouts.gobal.front-layout')

@section('main-wrapper')

    <div id="about_us" class="mx-auto py-10 my-16" >
        <div class=" registration_area" id="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 mx-auto">
                        <div class="row clock_sec clockdiv" id="clockdiv">
                            <div class="col-lg-12">
                                <h1 class="mb-3">Qui sommes nous?</h1>
                                <p class="text-justify">
                                    Conformément aux dispositions de l'article 6 III-1 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique,
                                    le présent site est exploité par: Coach&Go SAS au capital variable de 89106€, enregistrée au RCS Nice sous le numéro 569 104 530
                                    </p>
                                    <p>
                                        <h2>Siège social</h2>
                                        26 rue Barla, 06000, Nice
                                    </p>
                                    <p>
                                        <h2>Marque & Logo</h2>
                                        Coach&Go est une marque déposée et protégée
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
