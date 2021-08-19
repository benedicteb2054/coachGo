@extends('layouts.dashboard.layout')

@section('content')
    {{-- @include('layouts.others.mobile') --}}

    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            @include('menus.menu')
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            @include('menus.top-bar')
            <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
                        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center flex-wrap mr-2">
                                <!--begin::Page Title-->
                                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
                                <!--end::Page Title-->
                                <!--begin::Actions-->
                                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">{{ __('Verifiez votre boite mail') }}
                                    <button class="mx-4 btn btn-primary" id="register">Entrez le code reàu par SMS</button>
                                    </div>

                                    <div class="card-body">
                                        @if (session('resent'))
                                            <div class="alert alert-success" role="alert">
                                                {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                                            </div>
                                        @endif

                                        {{ __('Avant de continuer, veuillez vérifier votre e-mail pour pour activer votre compte.') }}
                                        {{ __('If you did not receive the email') }},
                                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                            @csrf
                                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Cliquer ici pour réenvoyer') }}</button>.
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Subheader-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->














    <div>
        <div class="modal fade" id="myModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Entrez Votre Code</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form class="d-inline"  role="form" id="formRegister" method="POST" action="{{ route('sms.activation') }}">
                        @csrf
                        <div class="modal-body">
                                <input class="form-control h-auto form-control-solid py-4 px-8" type="text" value="" name="verification_code"  />
                                <small class="help-block text-danger"></small>
                                <p>
                                    <a href="{{ route('verification.resend') }}" class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquer pour une nouvelle demande') }}</a>.

                                </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary font-weight-bold" >Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<script
src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>
<script>
     $(function(){

    $('#register').click(function() {
        $('#myModal').modal();
    });

    $(document).on('submit', '#formRegister', function(e) {
        e.preventDefault();
// alert($(this).attr('action'))
        $('input+small').text('');
        $('input').parent().removeClass('has-error');
        $.ajax({
            method: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: "json"
        })
        .done(function(data) {
            $('.alert-success').removeClass('hidden');
            $('#myModal').modal('hide');
            window.location.replace("/");
        })
        .fail(function(data) {
                var input = '#formRegister input[name=' + 'verification_code' + ']';
                $(input + '+small').text("Token invalide");
                $(input).parent().addClass('has-error');
        });
    });

    })
</script>
