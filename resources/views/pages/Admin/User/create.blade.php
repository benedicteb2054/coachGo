@extends('layouts.gobal.layout')

@section('page-title')
Edition d'un Utilisateur/Partenaire

@endsection
@section('sub-menu')

@endsection
@section('main-content')

    <div class="col-lg-11 col-xxl-12 mx-5">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="card card-custom px-5 py-8 mx-auto">

            <form class="form col-md-12" method="POST" action="{{ route('users.store') }}">
                @csrf

                <div class="form-group mb-5">
                    <label for="sponsorship">Code de parrainnage</label>
                    <input class="form-control h-auto form-control-solid py-4 px-8" type="text" value="{{strtoupper($pa_code)}}" name="pa_code" readonly />
                </div>

                <div class="form-group mb-5">
                    <label for="lastname">Nom</label>
                    <input class="form-control h-auto form-control-solid py-4 px-8 @error('lastname') is-invalid @enderror"
                        id="lastname" type="text" placeholder="label " name="lastname"
                        value="{{ old('lastname', $user->lastname) }}" autocomplete="off" />
                    @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-5">
                    <label for="firstname">Prénoms</label>
                    <input class="form-control h-auto form-control-solid py-4 px-8 @error('firstname') is-invalid @enderror"
                        id="firstname" type="text" placeholder="prénoms" name="firstname"
                        value="{{ old('firstname', $user->firstname) }}" autocomplete="off" />
                    @error('firstname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-5">
                    {{-- <input id="phone" name="phone" type="tel">
                    --}}
                    <input type="tel" id="phone_no"
                        class="form-control  @error('phone_no') is-invalid @enderror h-auto form-control-solid py-4"
                        type="tel" placeholder="N° de téléphone" name="phone_no" value="{{ old('phone_no',$user->phone_no) }}" required
                        autocomplete="phone_no">

                    @error('phone_no')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Email address --}}
                <div class="form-group mb-5">
                    <label for="email">email</label>
                    <input class="form-control h-auto form-control-solid py-4 px-8 @error('email') is-invalid @enderror"
                        id="email" type="email" placeholder="email" name="email" value="{{ old('email', $user->email) }}"
                        autocomplete="off" />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>




                <div class="form-group">
                    <label>Genre</label>
                    <div class="radio-inline">
                        <label class="radio radio-lg">
                            {{-- @php dd($user->is_active=="1" || $user->is_active==null);
                            @endphp --}}
                            <input type="radio" id="sexe" name="sexe" value="Masculin"
                                {{ $user->sexe == 'Masculin' || $user->sexe == null ? 'checked' : '' }}>
                            <span></span>Masculin
                        </label>

                        <label class="radio radio-lg">
                            <input type="radio" id="sexe" name="sexe" value="Feminin"
                                {{ $user->sexe == 'Feminin' ? 'checked' : '' }}>
                            <span></span>Féminin
                        </label>

                    </div>
                </div>


                {{-- birthdate --}}
                <div class="form-group mb-5">

                    <input
                        class="form-control  @error('birthdate') is-invalid @enderror h-auto form-control-solid py-4 px-8"
                        type="date" placeholder="Date de naissance" name="birthdate" value="{{old('birthdate', "$user->birthdate") }}" required
                        autocomplete="birthdate" />
                    @error('birthdate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                {{-- Roles --}}
                <div class="form-group mb-5">
                    <label>Rôle<span class="required">*</span> </label>
                    <select name="role_id" id="role_id"
                        class="form-control h-auto form-control-solid py-4 px-8  @error('role_id') is-invalid @enderror">
                        <option value="">{{ __('-- Choisir --') }}</option>
                        @foreach ($roles as $key => $val)
                            <option @if (($user->role_id ?? '') == $val)
                                selected
                        @endif
                        value="{{$val}}">
                        {{ $key}}
                        </option>
                        @endforeach
                    </select>
                    @error('role_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <input class="form-control h-auto form-control-solid py-4 px-8 @error('id') is-invalid @enderror" id="id"
                    type="hidden" placeholder="label " name="id" value="{{ old('id', $user->id) }}" autocomplete="off" />
                <button class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4 btn-block">Valider</button>
            </form>
        </div>
    </div>

    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
      <script src="assets/js/intl-tel-input-17.0.0/build/js/intlTelInput.js?<%= time %>""></script>
      <script type="text/javascript">
      var input = document.querySelector("#phone_no");
      var iti=window.intlTelInput(input, {
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
        preferredCountries: ['tg', 'bj','ci'],
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
                  var val=target.innerHTML
                //   alert($("#phone").intlTelInput("getNumber"))
                //   alert($(".iti__selected-flag").attr("title"))
                  $('input[name="country"]').val(iti.getSelectedCountryData().iso2);
       });

       if("{{$user->id}}"){
        $(".iti__flag").removeClass("iti__flag").addClass("iti__flag iti__{{$user->country}}")
        $(".iti__selected-dial-code").text("+228")
        $("#phone").css("padding-left", "90px");
       }

    </script>


@endsection
