@extends('layouts.gobal.layout')

@section('page-title')
    Liste des Abonnements
@endsection
@section('sub-menu')

@endsection
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xxl-12">
                <div class="card card-custom">
                    <div class="card-body">
                            <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                                <thead>
                                    <tr>
                                        @if(Auth::user()->isAdmin())
                                            <th>Clients </th>
                                        @endif
                                        <th>Label du Service </th>
                                        <th>Durée (en mois)</th>
                                        <th>Date de début</th>
                                        <th>Date de Fin</th>
                                        <th>Montant</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($abonnements) > 0)
                                        @foreach ($abonnements as $key => $row)
                                            <tr>
                                                @if(Auth::user()->is_admin)
                                                <td>{{ $row['user']['lastname'] }}</td>
                                                @endif
                                                <td>{{ $row['service']['label'] }}</td>
                                                <td>{{ $row['offer']['label'] }}</td>
                                                <td>{{ $row['duree_abonnement'] }} </td>
                                                <td>{{ $row['date_debut'] }} </td>
                                                <td>{{ $row['date_fin'] }} </td>
                                                <td>{{ $row['total'] }} €</td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <div class="col-lg-12">
                                            {{ __('Aucune Donnée trouvée') }}
                                        </div>
                                    @endif
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
