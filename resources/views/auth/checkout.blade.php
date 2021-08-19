@extends('layouts.login.layout')

@section('content')
    <div class="d-flex flex-column flex-root">
        <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('assets/media/bg/bg-3.jpg');">
                <div class="login-form text-center p-7 position-relative overflow-hidden">
                    <div class="d-flex flex-center mb-15">
                        {{-- <a href="#">
                            <img src="https://www.lovlin.com/wp-content/uploads/2020/09/logo_lovlin_web_3.png" class="max-h-75px" alt="" />
                        </a> --}}
                    </div>
                    <div class="login-signin">
                        <div class="mb-20">
                            <h3>Se Connecter</h3>
                            <div class="text-muted font-weight-bold">Entrer vos informations d'accès:</div>
                        </div>
                        <form class="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group mb-5">
                                <input class="form-control h-auto form-control-solid py-4 px-8 @error('email') is-invalid @enderror" id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="off" />
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
                            <button class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Valider</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
