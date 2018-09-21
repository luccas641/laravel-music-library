@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bands</div>

                <div class="card-body">
                    @foreach($bands as $band)
                        <p>This is user {{ $band->name }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
