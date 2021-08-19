@extends('layouts.login.layout')

@section('content')
    <div class="d-flex flex-column flex-root">
        <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
                style="background-image: url('assets/media/bg/bg-3.jpg');">
                <div class="login-form text-center p-7 position-relative overflow-hidden">
                    <div class="d-flex flex-center mb-15">
                        <a href="javascript:;">
                            <img src="{{ asset('assets/img/light-logo.png') }}" class="max-h-75px" alt="" />
                        </a>
                    </div>
                    <div class="">
                        <div class="mb-20">
                            <h3>Créer un compte</h3>
                            <div class="text-muted font-weight-bold">Entrer les détails du compte à créer</div>
                        </div>
                        {{-- @if ($errors->any())
                            {!! implode('', $errors->all('<div class="text-danger">:message</div>')) !!}
                        @endif --}}

                        <form class="form" method="POST" action="{{ route('register') }}">
                            @csrf
                            {{-- @php dd($pa_id); @endphp --}}
                            @if (isset($pa_code))
                                <div class="form-group mb-5">
                                    <label for="sponsorship">Code de parrainnage</label>
                                    <input class="form-control h-auto form-control-solid py-4 px-8" type="text"
                                        value="{{ strtoupper($pa_code) }}" name="pa_code" readonly />
                                </div>

                            @endif

                            <div class="form-group mb-5">
                                <input
                                    class="form-control  @error('lastname') is-invalid @enderror h-auto form-control-solid py-4 px-8"
                                    type="text" placeholder="Nom" name="lastname" value="{{ old('lastname') }}" required
                                    autocomplete="name" autofocus />
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-5">
                                <input
                                    class="form-control  @error('firstname') is-invalid @enderror h-auto form-control-solid py-4 px-8"
                                    type="text" placeholder="Prénoms" name="firstname" value="{{ old('firstname') }}"
                                    required autocomplete="name" autofocus />
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-5">
                                <input
                                    class="form-control  @error('email') is-invalid @enderror h-auto form-control-solid py-4 px-8"
                                    type="text" placeholder="Email" name="email" value="{{ old('email') }}" required
                                    autocomplete="email" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-5">
                                {{-- <input id="phone" name="phone"   type="tel"> --}}
                                <input type="tel" id="phone"
                                    class="form-control  @error('phone_no') is-invalid @enderror h-auto form-control-solid py-4"
                                    type="tel" placeholder="N° de téléphone" name="phone_no" value="{{ old('phone_no') }}"
                                    required autocomplete="phone">

                                @error('phone_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-5">
                                <input
                                    class="form-control  @error('birthdate') is-invalid @enderror h-auto form-control-solid py-4 px-8"
                                    type="date" placeholder="Date de naissance" name="birthdate"
                                    value="{{ old('birthdate') }}" required autocomplete="birthdate" />
                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-5 text-left">
                                <div class="checkbox-inline">
                                    <label class="checkbox m-0">
                                        <input type="checkbox" name="agree" />
                                        <span></span>J'accepte
                                        <a href="#" class="font-weight-bold ml-1">les termes et conditions</a>.</label>
                                    <a href="{{ route('login') }}"
                                        class="font-weight-bold mx-auto text-hover-primary">Connexion</a>
                                </div>
                                <div class="form-text text-muted text-center"></div>
                            </div>
                            <div class="form-group d-flex flex-wrap flex-center mt-10">
                                <button type="submit"
                                    class="btn btn-block btn-warning font-weight-bold px-9 py-4 my-3 mx-2">Créer un
                                    compte</button>
                                {{-- <button href="{{route('/')}}" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Annuler</button> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="assets/js/intl-tel-input-17.0.0/build/js/intlTelInput.js?<%= time %>""></script>
    <script type="text/javascript">
        var input = document.querySelector("#phone");
        var iti = window.intlTelInput(input, {
            geoIpLookup: function(callback) {
                $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "us";
                    callback(countryCode);
                });
            },

            hiddenInput: "full_number",
            initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            onlyCountries: ['tg', 'bj', 'gh', 'bf', 'ng'],
            placeholderNumberType: "MOBILE",
            preferredCountries: ['tg', 'bj', 'ci'],
            separateDialCode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@16.0.3/build/js/utils.js",
        });

        // var countryData = window.intlTelInputGlobals.getSelectedCountryData()
        $("<input type='text'/>")
            .attr("value", "")
            .attr("type", "hidden")
            .attr("name", "country")
            .attr("id", "country")
            .attr("autocomplete", "nope")
            .prependTo("form");

        var target = document.querySelector('.iti__selected-dial-code');
        $('.iti__selected-dial-code').bind('DOMSubtreeModified', function() {
            var val = target.innerHTML
            $('input[name="country"]').val(iti.getSelectedCountryData().iso2);
        });
    </script>

@endsection
