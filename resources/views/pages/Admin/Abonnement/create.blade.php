@extends('base')

@section('page-title')
    Ajout d'un nouveau pack

@endsection
@section('sub-menu')

@endsection
@section('main-content')

<div class="col-lg-11 col-xxl-12 mx-5">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="card card-custom px-5 py-8 mx-auto">

        <form class="form col-md-12" method="POST" action="{{ route('packs.store') }}">
            @csrf

                <div class="form-group mb-5">
                    <label for="designation">Libellé</label>
                    <input class="form-control h-auto form-control-solid py-4 px-8 @error('designation') is-invalid @enderror" id="designation" type="text" placeholder="label " name="designation" value="{{ old('designation',$pack->designation) }}" autocomplete="off" />
                    @error('designation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-5">
                    <label for="price">Prix</label>
                    <input class="form-control h-auto form-control-solid py-4 px-8 @error('price') is-invalid @enderror" id="price" type="number" placeholder="price" name="price" value="{{ old('price',$pack->price) }}" autocomplete="off" />
                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-5">
                    <label for="description">Description</label>
                    <input class="form-control h-auto form-control-solid py-4 px-8 @error('Description') is-invalid @enderror" id="description" type="text" placeholder="description" name="description" value="{{ old('description',$pack->description) }}" autocomplete="off" />
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="form-group">
                    <label>Statut du Pack</label>
                    <div class="radio-inline">
                        <label class="radio radio-lg">
                            {{-- @php dd($pack->is_active=="1" || $pack->is_active==null); @endphp --}}
                            <input type="radio"  id="is_active" name="is_active" value="1" {{ ($pack->is_active=="1" || $pack->is_active==null)? "checked" : "" }}>
                            <span></span>Activé
                        </label>

                        <label class="radio radio-lg">
                            <input type="radio" id="is_deactive" name="is_active" value="0" {{ ($pack->is_active=="0")? "checked" : "" }}>
                            <span></span>Désactivé
                        </label>

                    </div>
                </div>
                <input class="form-control h-auto form-control-solid py-4 px-8 @error('id') is-invalid @enderror" id="id" type="hidden" placeholder="label " name="id" value="{{ old('id',$pack->id) }}" autocomplete="off" />



            <button class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4 btn-block">Valider</button>
        </form>
    </div>
</div>



@endsection
