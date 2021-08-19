@extends('layouts.gobal.front-layout')

@section('main-wrapper')

    <div id="ei-slider" class="ei-slider">
        {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, modi ducimus aut fuga laboriosam sint quaerat in ab vitae impedit necessitatibus eligendi! Nulla nisi, nam in facilis laudantium bland itiis atque. --}}

        <ul class="ei-slider-large">
            @foreach ($sliders as $slider)
                <li>
                    <a href="{{ $slider['link'] }}">
                        <img src="{{ get_storage_file_url($slider['featured_image']['path'], 'main_slider') }}"
                            alt="{{ $slider['title'] ?? 'Slider Image ' . $loop->count }}">
                    </a>
                    <div class="ei-title">
                        <h2>{{ $slider['title'] }}</h2>
                        <h3>{{ $slider['sub_title'] }}</h3>
                    </div>
                </li>
            @endforeach
        </ul>
        <!-- ei-slider-large -->

        <ul class="ei-slider-thumbs">
            <li class="ei-slider-element">Current</li>
            @foreach ($sliders as $slider)
                <li>
                    <a href="#">Slide {{ $loop->count }}</a>
                    <img src="{{ isset($slider['images'][0]['path']) ? get_storage_file_url($slider['images'][0]['path'], 'slider_thumb') : get_storage_file_url($slider['featured_image']['path'], 'slider_thumb') }}"
                        alt="thumbnail {{ $loop->count }}" />
                </li>
            @endforeach
        </ul>
    </div>
    <div class="container">
        <div class="col-lg-12 ">
            <div id="nos_offres" class="py-6  justify-content-center">
                {{-- <h3 class="title text-center py-6">Nos Offres</h3> --}}
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="main_title">
                            <h2 class="mb-3 mt-5">Nos Offres </h2>
                            <p>
                                Une panoplie d'offres a votre convenance
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-xl-4">
                            <!--begin::Mixed Widget 10-->
                            <div class="card card-custom gutter-b card-stretch">
                                <!--begin::Body-->
                                <div class="card-body d-flex flex-column">
                                    <div class="flex-grow-1 pb-5">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center pr-2 mb-6">
                                            <h4
                                                class=" flex-grow-1" style="font-weight: 700 !important">{{ $category->title }}</h4>
                                            <div class="symbol symbol-50">
                                                <span class="symbol-label bg-light-light">
                                                    <i class="{{ $category->icon }}"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Link-->
                                        <span style="font-weight: 500">
                                            A partir de
                                        </span>
                                        <a href="#" class=" text-dark font-weight-bolder text-hover-primary font-size-h4">
                                            {{ number_format($category->price, '0', ',', ' ') }}
                                            €
                                            <br>
                                            {{-- Generator --}}
                                        </a>
                                        <!--end::Link-->

                                        <!--begin::Desc-->
                                        <p class="text-dark-50 font-weight-normal font-size-lg mt-6">
                                            {{-- {{$pack->pack->description}} --}}
                                            {{ $category->description }}
                                            <br>

                                        </p>
                                        <!--end::Desc-->
                                    </div>
                                    <!--begin::Team-->
                                    <div class="d-flex align-items-center">
                                        <a data-attr="{{ route('category-offers', [$category->id]) }}"
                                            data-target="#myOfferModal"
                                            class="btn btn-dark btn-shadow-hover font-weight-bolder w-100 py-3"
                                            id="modalButton">Voir Plus</a>
                                    </div>
                                    <!--end::Team-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Mixed Widget 10-->
                        </div>
                    @endforeach

                </div>
            </div>

            <div id="nos_services" class="py-6  justify-content-center">
                {{-- <h3 class="title text-center py-6">Nos Offres</h3> --}}
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="main_title">
                            <h2 class="mb-3 mt-5">Nos Coachs </h2>
                            <p>
                                Des coachs dotés de compétences dans divers disciplines sportives pour votre maintient et votre productivité
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($users as $service)
                        <div class="d-flex flex-row">
                            <div class="flex-row-auto offcanvas-mobile w-300px w-xl-350px" id="kt_profile_aside">
                                <!--begin::Card-->
                                <div class="card card-custom">
                                    <!--begin::Body-->
                                    <div class="card-body pt-15">
                                        <!--begin::User-->
                                        <div class="text-center mb-10">
                                            <div class="symbol symbol-60 symbol-circle symbol-xl-90">
                                                <div class="symbol-label" style="background-image:url('/metronic/theme/html/demo1/dist/assets/media/users/300_21.jpg')"></div>
                                                <i class="symbol-badge symbol-badge-bottom bg-success"></i>
                                            </div>
                                            <h4 class="font-weight-bold my-2">{{$service->firstname}} {{$service->lastname}}</h4>
                                            <div class="text-muted mb-2">{{$service->email}} {{$service->state}}</div>
                                            <span class="label label-light-warning label-inline font-weight-bold label-lg">Active</span>
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Contact-->
                                        <div class="mb-10 text-center">
                                            <a href="{{$service->facebook_url}}" class="btn btn-icon btn-circle btn-light-facebook mr-2">
                                                <i class="socicon-facebook"></i>
                                            </a>
                                            <a href="{{$service->twitter_url}}" class="btn btn-icon btn-circle btn-light-twitter mr-2">
                                                <i class="socicon-twitter"></i>
                                            </a>
                                            <a href="{{$service->linkedin}}" class="btn btn-icon btn-circle btn-light-google">
                                                <i class="socicon-linkedin"></i>
                                            </a>
                                            <a href="{{$service->instagram}}" class="btn btn-icon btn-circle btn-light-instagram">
                                                <i class="socicon-instagram"></i>
                                            </a>
                                        </div>
                                        <a href="#" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block active">Plus de détails</a>

                                        <!--end::Contact-->
                                        <!--begin::Nav-->
                                        <!--end::Nav-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card-->
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>


        </div>
    </div>

    <div id="about_us" class="py-6 my-6" style="margin-top:70px ">
        @include('pages.Front.contact')
    </div>

    @include('pages.Front.partners')


    @include('pages.Front.footer')

    <!-- /.ei-slider-->

    @include('pages.Front._offersModal')

    <!-- medium modal -->



@endsection
