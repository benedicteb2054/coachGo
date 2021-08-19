@extends('layouts.gobal.front-layout')

@section('main-wrapper')


    <div class="container">
        <div class="d-flex flex-column flex-root">
            <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
                <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
                    style="background-image: url('assets/media/bg/bg-3.jpg');">
                    <div class="login-form text-center p-7 position-relative overflow-hidden">

                        <div class="mt-29">
                            <div class="mb-6">
                                <h4>Création d'un compte</h4>
                                <div class="text-muted font-weight-bold">Entrer les détails du compte à créer</div>
                            </div>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form class="form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-10 text-left">
                                    <div class="checkbox-inline">
                                        <label for="" class="col-3"></label>
                                        <label class="checkbox col-9 checkbox-danger">
                                            <input type="checkbox"name="is_coach" id="is_coach"/>
                                            <span></span>M'inscrire en tant que coach
                                        </label>
                                    </div>
                                    <div class="form-text text-muted text-center"></div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label class="col-form-label col-3 text-lg-right text-left ">Je suis</label>
                                    <div class="col-9">
                                        <div class="radio-inline ">
                                            <label class="radio radio-lg radio-danger">
                                            <input type="radio" id="sexe" name="sexe" value="M" checked>
                                            <span></span>un homme</label>
                                            <label class="radio radio-lg radio-danger">
                                            <input type="radio" id="sexe" name="sexe" value="F" >
                                            <span></span>une femme</label>
                                            <label class="checkbox">

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-5 row">
                                    <label class="col-3 col-form-label">Nom</label>
                                    <input
                                        class="col-9 form-control  @error('lastname') is-invalid @enderror h-auto form-control-solid py-4 px-8"
                                        type="text" placeholder="Nom" name="lastname" value="{{ old('lastname') }}" required
                                        autocomplete="name" autofocus />
                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-5 row">
                                    <label class="col-3 col-form-label">Prénoms</label>

                                    <input
                                        class="col-9 form-control  @error('firstname') is-invalid @enderror h-auto form-control-solid py-4 px-8"
                                        type="text" placeholder="Prénoms" name="firstname" value="{{ old('firstname') }}"
                                        required autocomplete="name" autofocus />
                                    @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-5 row">
                                    <label class="col-3 col-form-label">Email</label>

                                    <input
                                        class="col-9 form-control  @error('email') is-invalid @enderror h-auto form-control-solid py-4 px-8"
                                        type="text" placeholder="Email" name="email" value="{{ old('email') }}" required
                                        autocomplete="email" />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-5 row">
                                    <label class="col-3 col-form-label">Mot de passe</label>

                                    <input
                                        class="col-9 form-control  h-auto form-control-solid py-4 px-8"
                                        type="password" placeholder="Mot de passe" name="password" value="{{ old('password') }}" required
                                        autocomplete="password" />

                                </div>

                                <div class="form-group mb-5 row">
                                    <label class="col-3 col-form-label">Date de Naissance</label>
                                    <input
                                        class="col-9 form-control  @error('birthdate') is-invalid @enderror h-auto form-control-solid py-4 px-8"
                                        type="date" placeholder="Date de naissance" name="birthdate"
                                        value="{{ old('birthdate') }}" required autocomplete="birthdate" />
                                    @error('birthdate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="for_customer">
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label">Votre Niveau</label>
                                        <select name="level" id="level" class="col-9 form-control h-auto form-control-solid py-4 col-lg-9 ">
                                            <option value="">-- Choisir le votre niveau --</option>
                                            @foreach (['Débutant','Expert','Confirmé'] as $p=>$value)
                                                <option value="{{$value}}" data-code="{{$value}}">
                                                    {{$value}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div id="for_coach">
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label">Département</label>
                                        <select name="state" id="department" class="col-9 form-control h-auto form-control-solid py-4 col-lg-9 ">
                                            <option value="">-- Choisir le département --</option>
                                            @foreach ($departments as $p=>$value)
                                                <option value="{{$value['nom']}}" data-code="{{$value['code']}}">
                                                {{$value['nom']}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-3 col-form-label">Ville</label>
                                        <select name="city" id="commune" class=" commune col-9 form-control h-auto form-control-solid py-4 col-lg-9 ">
                                            <option value="">-- Choisir votre ville --</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-5 row">
                                        <label class="col-3 col-form-label">Votre Géolocalisation</label>
                                        <input
                                            class="col-4 form-control  h-auto form-control-solid py-4 px-8"
                                            type="text" placeholder="longitude" name="longitude"
                                            id="longitude" onclick="getLocation();"
                                            value=""
                                             autocomplete="longitude" />

                                        <input
                                            class="offset-1 col-4 form-control  h-auto form-control-solid py-4 px-8"
                                            type="text" placeholder="latitude" name="latitude"
                                            id="latitude" onclick="getLocation();"
                                             autocomplete="latitude" />
                                    </div>

                                    <div class="form-group mb-5 row">
                                        <label class="col-3 col-form-label">Facebook</label>
                                        <input
                                            class="col-9 form-control  h-auto form-control-solid py-4 px-8"
                                            type="text" placeholder="Lien de votre page facebook" name="facebook_link" value="{{ old('facebook_link') }}"
                                             />
                                        @error('facebook_link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-5 row">
                                        <label class="col-3 col-form-label">Lien Instagram</label>

                                        <input
                                            class="col-9 form-control  h-auto form-control-solid py-4 px-8"
                                            type="text" placeholder="Lien de votre page Instagram" name="instagram_link" value="{{ old('instagram_link') }}"
                                             autocomplete="instagram_link" />
                                        @error('instagram_link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-5 row">
                                        <label class="col-3 col-form-label">Site web</label>
                                        <input
                                            class=" col-9 form-control  @error('website_link') is-invalid @enderror h-auto form-control-solid py-4 px-8"
                                            type="text" placeholder="Lien de votre site web" name="website_link" value="{{ old('website_link') }}"
                                             />
                                        @error('website_link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-12">
                                            <div class="uppy" id="kt_uppy_5">
                                                <div class="uppy-wrapper">
                                                    <div class="uppy-Root uppy-FileInput-container">
                                                        <input class=" uppy-FileInput-input uppy-input-control"
                                                            type="file" name="image_path"
                                                            id="kt_uppy_5_input_control" style="">
                                                        <label
                                                            class=" offset-3 col-9 uppy-input-label btn btn-light-primary btn-sm btn-bold"
                                                            for="kt_uppy_5_input_control">
                                                            Charger une image de vous !
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group mb-5 text-left">
                                    <div class="checkbox-inline">
                                        <label for="" class="col-3"></label>
                                        <label class="checkbox m-0">
                                            <input type="checkbox" name="agree_conditions" required/>
                                            <span></span>J'accepte
                                            <a href="{{route('cgu')}}" class="font-weight-bold ml-1">les termes et conditions</a>.</label>
                                        <a href="{{ route('login') }}"
                                            class="font-weight-bold mx-auto text-hover-primary">Connexion</a>
                                    </div>
                                    <div class="form-text text-muted text-center"></div>
                                </div>


                                <div class="form-group d-flex flex-wrap flex-center mt-10">
                                    <button type="submit"
                                        class="btn btn-block btn-outline-danger font-weight-bold px-9 py-4 my-3 mx-2">Créer un
                                        compte</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pages.Front.footer')

    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('#for_coach').hide()
        $("#is_coach").on("click", function(){
            if($("#is_coach").is(":checked")) {
                $('#for_coach').show()
                $('#for_customer').hide()
            } else {
                $('#for_coach').hide()
                $('#for_customer').show()
            }
        });
        if($("#is_coach").is(":checked")) {
            alert('cool')
            $('#for_customer').hide()
        } else {
            alert('cool2')
            $('#for_customer').show()
        }

        $("#department").change('#department option',function() {
            var department_code =$(this).find('option:selected').data('code')
            $.getJSON("https://geo.api.gouv.fr/departements/"+department_code+"/communes", function(data) {
                $.each(data, function(){
                    $("#commune").append('<option value="'+ this.nom +'">'+ this.nom +'</option>')
                });
            })
        });

        var x = document.getElementById("geolocation");
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }
        function showPosition(position) {
            $("#longitude").val(position.coords.longitude)
            $("#latitude").val(position.coords.latitude)
        }
    </script>

@endsection
