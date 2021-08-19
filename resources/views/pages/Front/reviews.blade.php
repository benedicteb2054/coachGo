@extends('layouts.gobal.front-layout')

@section('main-wrapper')

    <div class=" py-10 my-16">
        <div class="container ">
            <div class="row">
                <div class="col-md-11 mx-auto">
                    <div class=" py-5 py-lg-10  subheader-transparent" id="kt_subheader">
                        <div class="container d-flex flex-column">
                            <!--begin::Title-->
                            <div class="d-flex align-items-sm-end flex-column flex-sm-row mb-5">
                                <h2 class="d-flex align-items-center text-dark mr-5 mb-0">Les avis clients</h2>
                                <span class="text-dark opacity-60 font-weight-bold">Ce que disent nos clients</span>
                            </div>

                            <!--end::Search Bar-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-auto">
                @if (count($reviews) > 0)
                    @foreach ($reviews as $r)
                        <div class="col-lg-5 mx-auto">
                            <div class="card card-custom wave wave-animate wave-danger mb-8 mb-lg-0">
                                <div class="card-body">
                                    <div class="d-flex align-items-center p-5">
                                        <div class="mr-6">
                                            <span class="svg-icon svg-icon-danger svg-icon-4x">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z"
                                                            fill="#000000"></path>
                                                        <path
                                                            d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <a href="#"
                                                class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">
                                                {{ $r->user->firstname }}
                                            </a>
                                            <div class="text-dark-75">
                                                {{ $r->content }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row mx-auto">
                        <div class="col-lg-12 ">
                            Pas encore d'avis pour le moment
                        </div>
                    </div>

                @endif

            </div>
            <div class="row mx-auto">
                <div class="col-lg-12 mx-auto">
                    <form class="form" method="POST" action="{{route('les-avis.store')}}">
                        @csrf
                        <div class="card-body">
                            <h3 class="font-size-lg text-dark font-weight-bold mb-6 text-center">Saisissez votre avis</h3>
                            <div class="mb-15">
                                <div class="form-group row">
                                    {{-- <label class="col-lg-3 col-form-label">Votre avis:</label> --}}
                                    <div class="col-lg-9 mx-auto">
                                        {{-- <input type="email" class="form-control" placeholder="Enter full name" /> --}}
                                        <textarea name="content" class="form-control" id="" cols="90" rows="10" required></textarea>
                                        {{-- <span class="form-text text-muted">Please enter your full name</span> --}}
                                    </div>
                                    @if (Auth::user() !=null)
                                    <button type="submit" class=" my-10 mx-auto btn btn-block btn-dark col-9">Envoyer</button>
                                    @else
                                    <a href="{{route('login')}}" class=" my-10 mx-auto btn btn-block btn-dark col-9"> Connectez-vous pour donner votre avis</a>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    {{ $reviews->links() }}

                </div>
            </div>
        </div>
    </div>

    @include('pages.Front.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script type="text/javascript">

    </script>
@endsection
