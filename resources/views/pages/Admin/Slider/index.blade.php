@extends('layouts.gobal.layout')

@section('page-title')
    Sliders
    <a  href="#" data-link="{{ route('sliders.create') }}"
    class="ajax-modal-btn btn btn-warning btn-flat">{{ trans('app.add_slider') }}</a>

@endsection


@section('main-content')

        <div class="container-fluid">
            <div class="row">
                {{-- Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum odit dicta odio quis! Veritatis nesciunt voluptatum odio incidunt ad sunt cumque in! Quos inventore eos, modi nulla nobis exercitationem aspernatur! --}}
                <div class="col-lg-12 col-md-12 col-xxl-12">
                    <div class="card card-custom">
                        <div class="card-body">
                            <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                                <thead>
                                    <tr>
                                        <th>detail</th>
                                        <th>slider</th>
                                        <th>options</th>
                                        <th>created_at</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $slider)
                                        <tr>
                                            <td>
                                                {{-- {{dd(get_storage_file_url(optional($slider->images->first())->path, 'slider_thumb')) }} --}}
                                                <img src="{{ get_storage_file_url(optional($slider->images->first())->path, 'slider_thumb') }}"
                                                    class="img" style="height:auto; width:100%" alt="{{ trans('Image') }}">
                                                <p class="">
                                                    <strong style="color: {{ $slider->title_color }}">{!! $slider->title
                                                        !!} </strong>
                                                    <br />
                                                    <small style="color: {{ $slider->sub_title_color }}">{!!
                                                        $slider->sub_title !!}</small>
                                                </p>
                                            </td>
                                            <td>
                                                <img src="{{ get_storage_file_url(optional($slider->featuredImage)->path, 'slider_thumb') }}"
                                                    class="thumbnail img" style="height:auto; width:100%" alt="{{ trans('Miniature') }}">
                                            </td>
                                            <td>
                                                {{ trans('Couleur du titre') . ': ' }}<strong>{!! $slider->title_color
                                                    !!}</strong>
                                                <br />
                                                {{ trans('Couleur du sous-titre') . ': ' }}<strong>{!!
                                                    $slider->sub_title_color !!}</strong>
                                                <br />
                                                {{ trans('Ordre') . ': ' }}<strong>{!! $slider->order !!}</strong>
                                                <br />
                                                {{ trans('URL') . ': ' }}<strong>{!! $slider->link !!}</strong>
                                            </td>
                                            <td>
                                                {{ $slider->created_at->toFormattedDateString() }}
                                            </td>
                                            <td class="row-options text-muted small">
                                                    <a href="#"
                                                        data-link="{{ route('sliders.edit', $slider->id) }}"
                                                        class="ajax-modal-btn">
                                                        <span class="svg-icon svg-icon-md">
                                                            <i data-toggle="tooltip" data-placement="top"
                                                            title="{{ trans('Editer') }}" class="fa fa-edit"></i>
                                                        </span>
                                                    </a>

                                                    {!! Form::open(['route' => ['sliders.destroy', $slider->id],
                                                    'method' => 'delete', 'class' => 'data-form']) !!}
                                                    {!! Form::button('
                                                    <span class="svg-icon svg-icon-md">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                                    ', ['type' => 'submit',
                                                    'class' => 'confirm ajax-silent', 'title' => trans('Supprimer'),
                                                    'data-toggle' => 'tooltip', 'data-placement' => 'top']) !!}
                                                    {!! Form::close() !!}
                                                {{-- @endcan --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- /.box-body -->
    <!-- /.box -->
@endsection
