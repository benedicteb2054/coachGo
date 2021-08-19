@extends('layouts.gobal.layout')

@section('page-title')
    Liste des types de coaching
@endsection
@section('sub-menu')
@if(Auth::user()->isAdmin())
    <a href="{{route("cours.create")}}" class="btn btn-primary">
        <i class="fa fa-plus"></i>
        Ajouter
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
                                        <th>ID </th>
                                        <th>Libellé </th>
                                        <th>Prix</th>
                                        {{-- <th>Icone</th> --}}
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($cours) > 0)
                                        @foreach ($cours as $key => $row)
                                            <tr>
                                                <td>{{ $row['id'] }}</td>
                                                <td>{{ $row['descripton'] }}</td>
                                                <td>{{ $row['price'] }}€</td>
                                                {{-- <td>{{ $row['icon'] }} </td> --}}
                                                <td>{{ $row['is_active'] }} </td>
                                                <td>
                                                    <a href="{{route("cours.edit", [$row->id])}}" class="btn btn-sm btn-clean btn-icon " title="Delete">
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
