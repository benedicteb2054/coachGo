<div class="modal-dialog modal-lg">
    <div class="modal-content">
        {!! Form::model($slider, ['method' => 'PUT', 'route' => ['sliders.update', $slider->id], 'files' => true, 'id' => 'form', 'data-toggle' => 'validator']) !!}
        <div class="modal-header">
        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            {{ trans('app.form.form') }}
        </div>
        <div class="modal-body">
	        @include('pages.Admin.Slider._form')
        </div>
        <div class="modal-footer">
            {!! Form::submit(trans('Mettre à jour'), ['class' => 'btn btn-flat btn-new']) !!}
        </div>
        {!! Form::close() !!}
    </div> <!-- / .modal-content -->
</div> <!-- / .modal-dialog -->
