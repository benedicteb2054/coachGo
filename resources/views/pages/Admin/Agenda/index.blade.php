@extends('layouts.gobal.layout')

@section('page-title')
    Agenda
@endsection
@section('sub-menu')

@endsection
@section('main-content')
    <div class="container-fluid">
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">
                        Mon agenda
                    </h3>
                </div>
                <div class="card-toolbar">
                    <span onclick="addEvent();" class="btn btn-light-primary font-weight-bold">
                        <i class="ki ki-plus "></i> Ajouter disponibilité
                    </span>
                </div>
            </div>
            <div class="card-body">
                <div id="kt_calendar"></div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirm-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Ajouter un évènement
                </div>
                <div class="modal-body">
                    <form class="form col-md-12" id="event-form" method="POST" action="{{ route('agenda.store') }}">
                        @csrf
                        <div class="form-group mb-5">
                            <label for="title">Titre</label>
                            <input class="form-control h-auto form-control-solid py-4 px-8  id=" title" type="text"
                                placeholder="titre de l\'évènement' " name="title" autocomplete="off" required />
                        </div>
                        <div class="form-group mb-5">
                            <label for="start">Date de début</label>
                            <input class="form-control h-auto form-control-solid py-4 px-8  id=" start_date" type="date"
                                placeholder="date de début " name="start" autocomplete="off" required />
                        </div>
                        <div class="form-group mb-5">
                            <label for="end">Date de fin</label>
                            <input class="form-control h-auto form-control-solid py-4 px-8  id=" end_date" type="date"
                                placeholder="date de fin " name="end" autocomplete="off" required />
                        </div>
                        {{-- <button class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4 btn-block">Valider</button> --}}
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                    <a class="btn btn-danger btn-ok" id="submit">valider</a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function addEvent(clicked) {
            $('#confirm-add').modal({
                    backdrop: 'static',
                    keyboard: false
                })
                .on('click', '#submit', function(e) {
                    $("#event-form").submit();
                    document.getElementById('event-form').submit();
                });
            $("#cancel").on('click', function(e) {
                e.preventDefault();
                $('#confirm-add').modal.model('hide');
            });
        }

        $(document).ready(function() {
            var dateObj = new Date();
            var month = dateObj.getUTCMonth() + 1; //months from 1-12
            var day = dateObj.getUTCDate();
            var year = dateObj.getUTCFullYear();
            var events = [];
            $.getJSON("/events", function(data) {
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
        });
    </script>
@endsection
