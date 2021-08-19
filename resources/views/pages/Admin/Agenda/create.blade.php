@extends('layouts.gobal.layout')

@section('page-title')
    Ajout une nouvelle Offres
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

        <form class="form col-md-12" method="POST" action="{{ route('offers.store') }}">
            @csrf

                <div class="form-group mb-5">
                    <label for="designation">Libellé</label>
                    <input class="form-control h-auto form-control-solid py-4 px-8 @error('designation') is-invalid @enderror" id="title" type="text" placeholder="label " name="title" value="{{ old('title',$offer->title) }}" autocomplete="off" />
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-5">
                    <label for="price">Prix</label>
                    <input class="form-control h-auto form-control-solid py-4 px-8 @error('price') is-invalid @enderror" id="price" type="number" placeholder="price" name="price" value="{{ old('price',$offer->price) }}" autocomplete="off" />
                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-5">
                    <label for="description">Description</label>
                    <input class="form-control h-auto form-control-solid py-4 px-8 @error('Description') is-invalid @enderror" id="description" type="text" placeholder="description" name="description" value="{{ old('description',$offer->description) }}" autocomplete="off" />
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="form-group mb-5">
                    <label for="icon">Icone</label>
                    <input class="form-control h-auto form-control-solid py-4 px-8 @error('icon') is-invalid @enderror" id="icon" type="text" placeholder="icon" name="icon" value="{{ old('icon',$offer->icon) }}" autocomplete="off" />
                    @error('icon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="form-group mb-5">
                    <label>Catégorie d'offre<span class="required">*</span> </label>
                    <select name="offer_category_id" id="offer_category_id"
                        class="form-control h-auto form-control-solid py-4 px-8  @error('role_id') is-invalid @enderror">
                        <option value="">{{ __('-- Choisir --') }}</option>
                        @foreach ($categories as $key => $val)
                            <option @if (($offer->offer_category_id ?? '') == $val['id'])
                                selected
                        @endif
                        value="{{$val['id']}}">
                        {{ $val['title']}}
                        </option>
                        @endforeach
                    </select>
                    @error('role_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-5">
                    <label>Type de Service<span class="required">*</span> </label>
                    <select name="service_id" id="service_id"
                        class="form-control h-auto form-control-solid py-4 px-8  @error('role_id') is-invalid @enderror">
                        <option value="">{{ __('-- Choisir --') }}</option>
                        @foreach ($services as $key => $val)
                            <option @if (($offer->service_id ?? '') == $val['id'])
                                selected
                        @endif
                        value="{{$val['id']}}">
                        {{ $val['title']}}
                        </option>
                        @endforeach
                    </select>
                    @error('role_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Statut du offer</label>
                    <div class="radio-inline">
                        <label class="radio radio-lg">
                            <input type="radio"  id="is_active" name="is_active" value="1" {{ ($offer->is_active=="1" || $offer->is_active==null)? "checked" : "" }}>
                            <span></span>Activé
                        </label>

                        <label class="radio radio-lg">
                            <input type="radio" id="is_deactive" name="is_active" value="0" {{ ($offer->is_active=="0")? "checked" : "" }}>
                            <span></span>Désactivé
                        </label>
                    </div>
                </div>
                <input class="form-control h-auto form-control-solid py-4 px-8 @error('id') is-invalid @enderror" id="id" type="hidden" placeholder="label " name="id" value="{{ old('id',$offer->id) }}" autocomplete="off" />



            <button class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4 btn-block">Valider</button>
        </form>
    </div>
</div>



@endsection
