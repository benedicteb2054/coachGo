@extends('layouts.gobal.layout')

@section('page-title')
    Mon Compte
@endsection
@section('sub-menu')
    {{-- <a href="{{ route('change-password.index') }}" class="btn btn-primary"> Changer Votre Mot de passe</a> --}}
@endsection
@section('main-content')

    <div class="container">
        <!--begin::Card-->
        <div class="card card-custom">
            <!--begin::Card header-->
            <div class="card-header card-header-tabs-line nav-tabs-line-3x">
                <!--begin::Toolbar-->
                <div class="card-toolbar">
                    <ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x" id="tabMenu">
                        <!--begin::Item-->
                        <li class="nav-item mr-3">
                            <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1">
                                <span class="nav-icon">
                                    <span class="svg-icon">
                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg-->
                                        <i class="fas fa-user-cog"></i>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="nav-text font-size-lg">Profile</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mr-3">
                            <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_2">
                                <span class="nav-icon">
                                    <i class="fa fa-user"></i>
                                </span>
                                <span class="nav-text font-size-lg">Account</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mr-3">
                            <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_3">
                                <span class="nav-icon">
                                    <span class="svg-icon">
                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Shield-user.svg-->
                                        <i class="fa fa-key"></i>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="nav-text font-size-lg">Change Password</span>
                            </a>
                        </li>
                        <!--end::Item-->

                    </ul>
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body">
                <div class="form" id="kt_form">
                    <div class="tab-content">

                        <!--begin::Tab-->
                        <div class="tab-pane show px-7 active" id="kt_user_edit_tab_1" role="tabpanel">
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-7">
                                    <form class="form col-md-12" method="POST" action="{{ route('account.profile') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class=" my-2">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <label class="col-3"></label>
                                                <div class="col-9">
                                                    <h6 class="text-dark font-weight-bold mb-10">Infos Client:</h6>
                                                </div>
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Avatar</label>
                                                <div class="col-9">
                                                    <div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar" style="background-image: url({{get_storage_file_url($user->images[0]['path'])}})">
                                                        <div class="image-input-wrapper"></div>
                                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Changer selfie">
                                                            {{-- <i class="fa fa-pen icon-sm text-dark"></i> --}}
                                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                                            <input type="file" name="selfie" accept=".png, .jpg, .jpeg">
                                                            {{-- <input type="hidden" name="selfie_remove"> --}}
                                                        </label>
                                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Annuler selfie">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                        </span>
                                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="SUpprimer le selfie">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Nom</label>
                                                <div class="col-9">
                                                    <input class="form-control form-control-lg form-control-solid" type="text" name="nom" value="{{old('user',$user->nom)}}">
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Prénom(s)</label>
                                                <div class="col-9">
                                                    <input class="form-control form-control-lg form-control-solid" type="text" name="prenom" value="{{old('user',$user->prenom)}}">
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Adresse</label>
                                                <div class="col-9">
                                                    <input class="form-control form-control-lg form-control-solid" type="text" name="adresse" value="{{old('user',$user->adresse)}}">
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Téléphone</label>
                                                <div class="col-9">
                                                    <div class="input-group input-group-lg input-group-solid">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="la la-phone"></i>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control form-control-lg form-control-solid" value="{{old('user',$user->telephone)}}" name="telephone" placeholder="Phone">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Date de naissance</label>
                                                <div class="col-9">
                                                    <div class="input-group input-group-lg input-group-solid">
                                                        <input class="form-control  @error('date_naiss') is-invalid @enderror h-auto form-control-solid py-4 px-8"
                                                        type="date" placeholder="Date de naissance" name="date_naiss"
                                                        value="{{ old('date_naiss', "$user->date_naiss") }}" required autocomplete="date_naiss" />
                                                        @error('date_naiss')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <!--end::Group-->
                                            <div class="form-group row align-items-center">
                                                <label class="col-form-label col-3 text-lg-right text-left">Genre</label>
                                                <div class="col-9">
                                                    <div class="radio-inline ">
                                                        <label class="radio radio-lg">
                                                        <input type="radio" id="sexe" name="sexe" value="M" {{ $user->sexe == 'Masculin' || $user->sexe == null ? 'checked' : '' }}>
                                                        <span></span>Masculin</label>
                                                        <label class="radio radio-lg ">
                                                        <input type="radio" id="sexe" name="sexe" value="F" {{ $user->sexe == 'Feminin' ? 'checked' : '' }}>
                                                        <span></span>Féminin</label>
                                                        <label class="checkbox">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label text-lg-right">Document:</label>
                                                <div class="col-lg-6">
                                                    <div class="uppy" id="kt_uppy_5">
                                                        <div class="uppy-wrapper">
                                                            <div class="uppy-Root uppy-FileInput-container">
                                                                <input class="uppy-FileInput-input uppy-input-control" type="file" name="document_path"  id="kt_uppy_5_input_control" style="">
                                                                <label class="uppy-input-label btn btn-light-primary btn-sm btn-bold" for="kt_uppy_5_input_control">
                                                                    Charger le document
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <input class="form-control h-auto form-control-solid py-4 px-8 @error('id') is-invalid @enderror" id="id"
                                                    type="hidden" placeholder="label " name="id" value="{{ old('id', $user->id) }}" autocomplete="off" />
                                            <button class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4 btn-block" type="submit">Valider</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Tab-->


                        <!--begin::Tab-->
                        <div class="tab-pane px-7" id="kt_user_edit_tab_2" role="tabpanel">
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-7">
                                    <div class="my-2">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <label class="col-form-label col-3 text-lg-right text-left"></label>
                                            <div class="col-9">
                                                <h6 class="text-dark font-weight-bold mb-10">Mon Compte:</h6>
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Group-->
                                        <form class="form col-md-12" method="POST" action="{{ route('account.store') }}">
                                            @csrf
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Nom</label>
                                                <div class="col-9">
                                                    <div class="spinner spinner-sm spinner-success spinner-right spinner-input">
                                                        <input class="form-control form-control-lg form-control-solid" type="text" name="nom" value="{{old('user',$user->nom)}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left">Prénom(s)</label>
                                                <div class="col-9">
                                                    <input class="form-control form-control-lg form-control-solid" type="text" name="prenom" value="{{old('user',$user->prenom)}}">
                                                </div>
                                            </div>

                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left"> Adresse Email</label>
                                                <div class="col-9">
                                                    <div class="input-group input-group-lg input-group-solid">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <i class="la la-at"></i>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control form-control-lg form-control-solid" value="{{old('user',$user->email)}}" name="email" placeholder="Email">
                                                    </div>

                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <input class="form-control h-auto form-control-solid py-4 px-8 id="id"
                                                type="hidden"  name="id" value="{{ old('id', $user->id) }}" autocomplete="off" />

                                            <button class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4 btn-block"  type="submit">Valider</button>

                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                            <div class="separator separator-dashed my-10"></div>
                            <!--begin::Row-->
                            <div class="row">
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Tab-->

                        <!--begin::Tab-->
                        <div class="tab-pane px-7" id="kt_user_edit_tab_3" role="tabpanel">
                            <!--begin::Body-->
                            <div class="card-body">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-7 col-lg-12 col-md-12">
                                       {{-- @include('auth.passwords.change-password') --}}
                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>

                        </div>
                        <!--end::Tab-->
                        <!--begin::Tab-->
                        <div class="tab-pane px-7" id="kt_user_edit_tab_4" role="tabpanel">

                        </div>
                        <!--end::Tab-->
                    </div>
                </div>
            </div>
            <!--begin::Card body-->
        </div>
        <!--end::Card-->
    </div>

@endsection
