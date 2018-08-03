@extends('layouts.app')

@section('head_scripts')
    {!! $map['js'] !!}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        {!! $map['html'] !!}
                        <div id="directionsDiv">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
