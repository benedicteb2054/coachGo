@extends('layouts.gobal.layout')

@section('page-title')
    Liste des utilisateurs
@endsection
@section('sub-menu')

    <div class="d-flex align-items-center nav navi-tabs">
        <!--begin::Actions-->
        @if (Auth::user()->is_admin)
            <a href="{{ route('users.create') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i>
                Editer un Utilisateur/Partenaire
            </a>
        @endif

        <!--end::Actions-->

    </div>
@endsection
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xxl-12">
                <div class="card card-custom">
                    <div class="card-body">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ success()->get('success') }}
                            </div>
                        @endif
                        @if (Auth::user()->isAdmin())
                            <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                                <thead>
                                    <tr>
                                        <th>Nom & Prénoms </th>
                                        <th>Téléphone</th>
                                        <th>Email</th>
                                        <th>Rôle</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (request()->routeIs('users.index'))
                                        @if (count($users) > 0)
                                            @foreach ($users as $key => $row)
                                                <tr>
                                                    <td>{{ $row['lastname'] }} {{ $row['firstname'] }}</td>
                                                    <td>{{ $row['full_number'] ?? $row['phone_no'] }}</td>
                                                    <td>{{ $row['email'] }}</td>
                                                    <td>{{ $row['role']['label'] }}</td>
                                                    <td>
                                                        <a href="{{ route('users.edit', [$row->id]) }}"
                                                            class="btn btn-sm btn-clean btn-icon " title="Plus de détails">
                                                            <span class="svg-icon svg-icon-md">
                                                                <i class="text-primary fas fa-eye"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    @elseif((request()->routeIs('partenaires.index')))
                                        @if (count($partenaires) > 0)
                                            @foreach ($partenaires as $key => $row)

                                                <tr>
                                                    <td>{{ $row['lastname'] }} {{ $row['firstname'] }}</td>
                                                    <td>{{ $row['phone_no'] }}</td>
                                                    <td>{{ $row['email'] }}</td>
                                                    <td>{{ $row['role']['label'] }}</td>

                                                    <td>
                                                        <a href="{{ route('users.show', [$row->id])}}"
                                                            class="btn btn-sm btn-clean btn-icon " title="Plus de détails">
                                                            <span class="svg-icon svg-icon-md">
                                                                <i class="text-primary fas fa-eye"></i>
                                                            </span>
                                                        </a>
                                                  </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    @endif
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
