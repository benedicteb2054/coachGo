@extends('layouts.gobal.front-layout')

@section('main-wrapper')

    <div  class=" py-10 my-16" >
                <div class="container ">
                    <div class="row">
                        <div class="col-md-11 mx-auto">
                            <div class=" py-5 py-lg-10  subheader-transparent" id="kt_subheader">
                                <div class="container d-flex flex-column">
                                    <!--begin::Title-->
                                    <div class="d-flex align-items-sm-end flex-column flex-sm-row mb-5">
                                        <h2 class="d-flex align-items-center text-dark mr-5 mb-0">Recherche Coach</h2>
                                        <span class="text-dark opacity-60 font-weight-bold">Recherche des coach sportifs selon la zone</span>
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Search Bar-->
                                    <div class="d-flex align-items-md-center mb-2 flex-column flex-md-row">
                                        <div class="bg-white rounded p-4 d-flex flex-grow-1 flex-sm-grow-0">
                                            <!--begin::Form-->
                                            <form class="form d-flex align-items-md-center flex-sm-row flex-column flex-grow-1 flex-sm-grow-0" method="POST" action="{{route('coachs.search')}}">
                                                @csrf
                                                <!--begin::Input-->
                                                <div class="d-flex align-items-center py-3 py-sm-0 px-sm-3">
                                                    <span class="svg-icon svg-icon-lg">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/General/Search.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <input type="text" name="nom_coach" class="form-control border-0 font-weight-bold pl-2" placeholder="Nom du coach">
                                                </div>
                                                <!--end::Input-->



                                                <!--begin::Input-->
                                                <span class="bullet bullet-ver h-25px d-none d-sm-flex mr-2"></span>
                                                {{-- <div class="d-flex align-items-center py-3 py-sm-0 px-sm-3">
                                                    <span class="svg-icon svg-icon-lg">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                                                                <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <input type="text" class="form-control border-0 font-weight-bold pl-2"
                                                    placeholder="Région" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    data-target="kt_searchbar_7_category-options" data-offset="0,10" readonly="readonly"
                                                    id="department">
                                                    <div id="kt_searchbar_7_category-options" class="dropdown-menu dropdown-menu-sm">
                                                        @foreach ($departments as $p=>$value  )
                                                            <div class="dropdown-item cursor-pointer drop_department"  data-code="{{$value['code']}}">{{$value['nom']}}</div>
                                                        @endforeach
                                                    </div>
                                                </div> --}}
                                                <div class="d-flex align-items-center py-3 py-sm-0 px-sm-3">
                                                    <span class="svg-icon svg-icon-lg">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/General/Search.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <input type="text" name="department" class="form-control border-0 font-weight-bold pl-2" placeholder="région/département">
                                                </div>
                                                <!--end::Input-->

                                                <!--begin::Input-->
                                                <span class="bullet bullet-ver h-25px d-none d-sm-flex mr-2"></span>
                                                <div class="d-flex align-items-center py-3 py-sm-0 px-sm-3">
                                                    <span class="svg-icon svg-icon-lg">
                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo4/dist/assets/media/svg/icons/General/Search.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <input type="text" name="ville" class="form-control border-0 font-weight-bold pl-2" placeholder="Ville ou commune">
                                                </div>
                                                <!--end::Input-->
                                                <button type="submit" class="btn btn-dark font-weight-bold btn-hover-light-primary mt-3 mt-sm-0 px-7">Rechercher</button>
                                            </form>
                                            <!--end::Form-->
                                        </div>

                                    </div>
                                    <!--end::Search Bar-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-auto " id="kt_datatable">
                        @foreach ($coachs as $service)
                            <div class="d-flex flex-row mx-auto">
                                <div class="flex-row-auto  w-300px w-xl-350px" id="kt_profile_aside">
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
                                            <a href="{{route('coachs.show',$service->id)}}" class="btn btn-hover-light-primary font-weight-bold py-3 px-6 mb-2 text-center btn-block active">Plus de détails</a>

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
                    <div class="row py-10 mt-6 mx-auto">
                        <div class="col-lg-12 text-right">
                            {{ $coachs->links() }}
                        </div>
                    </div>
                </div>
    </div>

    @include('pages.Front.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.drop_department').click(function() {
                // alert($(this).data('code'));
                $('#department').val($(this).text())
                $.getJSON("https://geo.api.gouv.fr/departements/"+$(this).data('code')+"/communes", function(data) {
                $.each(data, function(){
                    $("#kt_searchbar_7_ville-options").append('<div class="dropdown-item cursor-pointer">'+ this.nom +'</div>')
                });
            })
            });
        });



    </script>
@endsection
