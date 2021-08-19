@extends('layouts.gobal.layout')

@section('page-title')
    Liste des Offres
@endsection
@section('sub-menu')
@if(Auth::user()->isAdmin())
    <a href="{{route("offers.create")}}" class="btn btn-primary">
        <i class="fa fa-plus"></i>
        Ajouter une Offre
    </a>
@endif
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
                                        <th>ID de l'offre</th>

                                        <th>Libellé de l'offre </th>
                                        <th>Prix</th>
                                        <th>Catégorie</th>
                                        <th>Type de Service</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($offers) > 0)
                                        @foreach ($offers as $key => $row)
                                            <tr>
                                                <td>{{ $row['id'] }}</td>
                                                <td>{{ $row['title'] }}</td>
                                                <td>{{ $row['price'] }}€</td>
                                                <td>{{ $row['offerCategory']['title'] }} </td>
                                                <td>{{ $row['service']['title'] }} </td>
                                                <td>
                                                    <a href="{{route("offers.edit", [$row->id])}}" class="btn btn-sm btn-clean btn-icon " title="Delete">
                                                        <span class="svg-icon svg-icon-md">
                                                            <i class="text-primary fas fa-eye"></i>
                                                        </span>
                                                    </a>
                                                </td>
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
