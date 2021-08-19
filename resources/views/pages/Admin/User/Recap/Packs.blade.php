@section('main-content')
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis hic neque omnis beatae! Reprehenderit, quidem autem dicta sit beatae totam deleniti molestias vel, itaque aut repellendus laudantium officia iusto inventore?

<table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
    <thead>
        <tr>
            <th>Partenaires </th>
            <th>Label du pack </th>
            <th>Prix</th>
            <th>Descriptif</th>

            {{-- <th>Actions</th> --}}
        </tr>
    </thead>
    <tbody>
        @if (count($userPack) > 0)
            @foreach ($userPack as $key => $row)
                {{-- @php dd($row); @endphp
                --}}
                <tr>
                    <td>{{ $row['user']['lastname'] }}</td>
                    <td>{{ $row['pack']['designation'] }}</td>
                    <td>{{ $row['pack']['price'] }} €</td>
                    <td>{{ $row['pack']['description'] }}</td>

                    <td>


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
@endsection
