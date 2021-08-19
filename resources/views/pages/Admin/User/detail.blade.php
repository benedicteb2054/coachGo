@extends('layouts.gobal.layout')

@section('page-title')
{{-- {{dd($user->investments()->get()->sum("earnings"))}} --}}
Détails de {{$user->lastname}} {{$user->firstname}}
@endsection
@section('sub-menu')
    <div class="d-flex align-items-center nav navi-tabs">
        <!--begin::Actions-->
        <div class="d-flex align-items-center nav navi-tabs">
            <!--begin::Actions-->

            <a href="#p1" data-toggle="tab" onclick="tabChange('#p1')"
                class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">
                Packs
            </a>
            <a href="#p2" data-toggle="tab" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">
                Investissements
            </a>
            <a href="#p3" data-toggle="tab" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">
                Paiements
            </a>
            <a href="#p4" data-toggle="tab" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">
                Parrainage
            </a>

            <!--end::Actions-->

        </div>


        <!--end::Actions-->

    </div>
@endsection

@section('main-content')
        <div class="tab-content col-md-12">
            <div class="tab-pane active" id="p0">
                @include("pages.Admin.User.Recap.stats")
            </div>
            {{-- <div class="tab-pane " id="p1">
                @include("pages.Admin.User.Recap.Packs")
            </div>
            <div class="tab-pane " id="p2">
                @include("pages.Admin.User.Recap.Packs")
            </div>
            <div class="tab-pane " id="p3">
                @include("pages.Admin.User.Recap.Packs")
            </div>
            <div class="tab-pane " id="p4">
                @include("pages.Admin.User.Recap.Packs")
            </div> --}}
        </div>

@endsection
