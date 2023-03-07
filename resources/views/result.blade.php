@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">KMI counter</div>
                    <div class="card-body">
                        <div class="mb-3 d-flex flex-column">
                            <label class="form-label"><strong>Your height: </strong> {{$height}} cm</label>
                            <label class="form-label"><strong>Your weight: </strong>{{$weight}} kg</label>
                            <label class="form-label"><strong>Your KMI: </strong>{{$kmi}} </label>
                            <a class="btn btn-success" href="{{route('index')}}">Count another KMI</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
