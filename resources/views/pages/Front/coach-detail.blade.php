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
                                <h2 class="d-flex align-items-center text-dark mr-5 mb-0">Détails du coach </h2>
                                <span class="text-dark opacity-60 font-weight-bold">Effectuer une réservation</span>
                            </div>
                            <!--end::Title-->

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mx-auto " id="kt_datatable">

                <div class="d-flex flex-row">
                    <div class="flex-row-auto   w-300px w-xl-350px" id="kt_profile_aside">
                        <!--begin::Card-->
                        <div class="card card-custom">
                            <!--begin::Body-->
                            <div class="card-body pt-15">
                                <!--begin::User-->
                                <div class="text-center mb-10">
                                    <div class="symbol symbol-60 symbol-circle symbol-xl-90">
                                        <div class="symbol-label"
                                            style="background-image:url('/metronic/theme/html/demo1/dist/assets/media/users/300_21.jpg')">
                                        </div>
                                        <i class="symbol-badge symbol-badge-bottom bg-success"></i>
                                    </div>
                                    <h4 class="font-weight-bold my-2">{{ $coach->firstname }} {{ $coach->lastname }}
                                    </h4>
                                    <div class="text-muted mb-2">{{ $coach->email }} {{ $coach->state }}</div>
                                    <span
                                        class="label label-light-warning label-inline font-weight-bold label-lg">Active</span>
                                </div>
                                <!--end::User-->
                                <!--begin::Contact-->
                                <div class="mb-10 text-center">
                                    <a href="{{ $coach->facebook_url }}"
                                        class="btn btn-icon btn-circle btn-light-facebook mr-2">
                                        <i class="socicon-facebook"></i>
                                    </a>
                                    <a href="{{ $coach->twitter_url }}"
                                        class="btn btn-icon btn-circle btn-light-twitter mr-2">
                                        <i class="socicon-twitter"></i>
                                    </a>
                                    <a href="{{ $coach->linkedin }}" class="btn btn-icon btn-circle btn-light-google">
                                        <i class="socicon-linkedin"></i>
                                    </a>
                                    <a href="{{ $coach->instagram }}" class="btn btn-icon btn-circle btn-light-instagram">
                                        <i class="socicon-instagram"></i>
                                    </a>
                                </div>

                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>

                <div class="d-flex flex-row">
                    <div class="flex-row-auto   w-300px w-xl-700px" id="kt_profile_aside">
                        <!--begin::Card-->
                        <div class="card card-custom">
                            <div class="row">
                                <div class="col-lg-12">
                                    @if (session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!--begin::Body-->
                            <div class="card-body pt-15 col-12">
                                <!--begin::User-->
                                <div class="text-center mb-10">
                                    <form action="{{ route('book-coach') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-3 col-form-label">Choisir le cour à réserver</label>
                                            <select name="cour_id" id="cours"
                                                class="col-9 form-control h-auto form-control-solid py-4 col-lg-9 "
                                                required>
                                                <option value="">-- Choisir le cour --</option>
                                                @foreach ($coach->cours as $p => $value)
                                                    <option value="{{ $value['id'] }}"
                                                        data-price="{{ $value['id'] }}">
                                                        {{ $value['description'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input id='amount' type="hidden" name="amount" value="">
                                            <input id='coach_id' type="hidden" name="coach_id" value="{{ $coach->id }}">
                                            <input id='coach_latitude' type="hidden" name="coach_latitude"
                                                value="{{ $coach->latitude }}">
                                            <input id='coach_longitude' type="hidden" name="coach_longitude"
                                                value="{{ $coach->longitude }}">
                                        </div>
                                        <h4 class="font-weight-bold my-2" id="price"></h4>
                                        <div class="form-group d-flex flex-wrap flex-center mt-10">
                                            @if (Auth::user() != null)
                                                <button type="submit"
                                                    class="btn btn-block btn-outline-dark font-weight-bold px-9 py-4 my-3 mx-2">Réserver
                                                </button>
                                            @else
                                                <a href="{{ route('login') }}"
                                                    class=" my-10 mx-auto btn btn-block btn-dark "> Connectez-vous
                                                    d'abord</a>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                                <!--end::User-->

                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="flex-row-auto  col-lg-12" id="">
                    <div class="card card-custom">
                        <div class="card-body pt-15">
                            <div id="kt_calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Géolocalisation
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="kt_leaflet_1" style="height:300px;"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    @include('pages.Front.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"
        integrity="sha512-A7vV8IFfih/D732iSSKi20u/ooOfj/AGehOKq0f4vLT1Zr2Y+RX7C+w8A1gaSasGtRUZpF/NZgzSAu4/Gc41Lg=="
        crossorigin=""></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#cours").change('#cours option', function() {
                var price = $(this).find('option:selected').data('price')
                price != undefined ? $("#price").text(price + "€") : $("#price").text("Aucun cour choisi")
                $("#amount").val(price)
            });

            var dateObj = new Date();
            var month = dateObj.getUTCMonth() + 1; //months from 1-12
            var day = dateObj.getUTCDate();
            var year = dateObj.getUTCFullYear();

            var events = [];
            $.getJSON("/events/" + $('#coach_id').val(), function(data) {
                events = data;
                $('#kt_calendar').fullCalendar({
                    defaultDate: year + "/" + month + "/" + day,
                    editable: true,
                    lang: 'fr',
                    selectable: true,
                    selectHelper: true,
                    eventClick: function(arg) {
                        if (confirm('êtes vous sure de vouloir supprimer l\'élément?')) {
                            $.getJSON("/remove-event/" + arg._id, function(data) {
                                alert(data);
                            })
                            $("#kt_calendar").fullCalendar('removeEvents', arg._id);
                        }
                    },

                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    events: data
                });
            })

            KTLeaflet.init();
        });


        // Class definition
        var KTLeaflet = function() {

            // Private functions
            var demo1 = function() {
                // define leaflet
                var leaflet = L.map('kt_leaflet_1', {
                    center: [$('#coach_latitude').val(), $('#coach_longitude').val()],
                    zoom: 11
                });

                // set leaflet tile layer
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(leaflet);

                // set custom SVG icon marker
                var leafletIcon = L.divIcon({
                    html: `<span class="svg-icon svg-icon-danger svg-icon-3x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="24" width="24" height="0"/><path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero"/></g></svg></span>`,
                    bgPos: [10, 10],
                    iconAnchor: [20, 37],
                    popupAnchor: [0, -37],
                    className: 'leaflet-marker'
                });

                // bind marker with popup
                var marker = L.marker([$('#coach_latitude').val(), $('#coach_longitude').val()], {
                    icon: leafletIcon
                }).addTo(leaflet);
                // marker.bindPopup("<b>Flinder's Station</b><br/>Melbourne, Victoria").openPopup();
            }

            return {
                // public functions
                init: function() {
                    // default charts
                    demo1();
                }
            };
        }();
    </script>
@endsection
