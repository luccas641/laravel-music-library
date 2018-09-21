@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::model($band, ['route' => ['bands.update', $band->id], 'method' => 'put', 'class' => 'form-horizontal', 'files' => true]) !!}
                    <fieldset>
                        
                        <div class="form-group">
                            {!! Form::label('name', 'Name:', ['class' => 'col-lg-12 control-label']) !!}
                            <div class="col-lg-12">
                                {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' =>
                                'Name']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('description', 'Description:', ['class' => 'col-lg-12 control-label']) !!}
                            <div class="col-lg-12">
                                {!! Form::textarea('description', $value = null, ['class' => 'form-control', 'placeholder' =>
                                'Description']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('image', 'Image:', ['class' => 'col-lg-12 control-label']) !!}
                            <div class="col-lg-12">
                                {!! Form::file('image', ['class' => 'form-control', 'placeholder' =>
                                'Image']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('genre', 'Genre:', ['class' => 'col-lg-12 control-label']) !!}
                            <div class="col-lg-12">
                                {!! Form::textarea('genre', $value = null, ['class' => 'form-control', 'placeholder' =>
                                'Genre']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                {!! Form::submit('Save!', ['class' => "btn btn-primary"]) !!}
                            </div>
                        </div>
                    </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
