@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">KMI counter</div>
                    <div class="card-body">
                        <form method="post" action="{{route('result')}}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">What is your height?</label>
                                <input class="form-control" name="height" placeholder=" e.g. 170 cm">
                                <label class="form-label">What is your weight?</label>
                                <input class="form-control" name="weight" placeholder=" e.g. 60 kg">
                            </div>
                            <button class="btn btn-info" >Count KMI</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
