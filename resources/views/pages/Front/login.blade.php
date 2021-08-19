@extends('layouts.gobal.front-layout')

@section('main-wrapper')


    <div class="container">
        <div class="d-flex flex-column flex-root">
            <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
                <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('assets/media/bg/bg-3.jpg'); height:100%">
                    <div class="login-form text-center p-7 position-relative overflow-hidden">
                        <div class="d-flex flex-center mb-25">
                           {{-- <a href="javascript:;">
                                <img src="{{asset("assets/img/light-logo.png")}}" class="max-h-75px" alt="" />
                            </a> --}}
                        </div>
                        <div class="login-signin">
                            <div class="mb-20">
                                <h3>Se Connecter</h3>
                                <div class="text-muted font-weight-bold">Entrer vos informations d'accès:</div>
                            </div>
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <form class="form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-5">
                                    <input class="form-control h-auto form-control-solid py-4 px-8 @error('email') is-invalid @enderror" id="email" type="text" placeholder="Email ou Numéro de Téléphone" name="email" value="{{ old('email') }}" autocomplete="off" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <input class="form-control h-auto form-control-solid py-4 px-8  @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group d-flex flex-wrap  ">
                                    <div class="checkbox-inline">
                                        {{--<label class="checkbox m-0 text-muted">--}}
                                            {{--<input type="checkbox" name="remember" />--}}
                                            {{--<span></span>Remember me</label>--}}
                                    </div>
                                    <div class="checkbox-inline">
                                        <label class="checkbox m-0">
                                            <div class="float-left">
                                                <a href="{{ route('register') }}"  class="font-weight-bold ml-1text-hover-primary">Créer mon compte ?</a>

                                            </div>
                                        </label>
                                    </div>
                                        <a href="javascript:;" id="kt_login_forgot" class="mx-auto text-muted text-hover-primary">Mot de passe oublié ?</a>

                                </div>
                                <button class="btn btn-block btn-outline-danger font-weight-bold px-9 py-4 my-3 mx-4">Valider</button>
                            </form>
                        </div>
                        <div class="login-forgot">
                            <div class="mb-20">
                                <h3>Mot de passe Oublié?</h3>
                                <div class="text-muted font-weight-bold">Entrer votre adresse email pour réinitialiser votre mot de passe</div>
                            </div>
                            <form class="form" id="kt_login_forgot_form">
                                <div class="form-group mb-10">
                                    <input class="form-control form-control-solid h-auto py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
                                </div>
                                <div class="form-group d-flex flex-wrap flex-center mt-10">
                                    <button id="kt_login_forgot_submit" class="btn btn-block    btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Validez</button>
                                    <button id="kt_login_forgot_cancel" class="btn btn-block btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('pages.Front.footer')

    <!-- medium modal -->



@endsection
