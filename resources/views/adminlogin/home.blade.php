@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <br>
        <br>
        
        <div class="col-sm-2"> </div>
        <div class="col-sm-8">
            <div class="show">
                <h2 style="text-align: center;"><b>All User's Info</b></h2>
                @foreach($infos as $info)
                    <h3 style="padding-left: 225px;">
                        <strong>{{ $info->id }}</strong> <strong>:</strong>
                        <strong>{{ $info->name }}</strong>
                    </h3>
                    <h4 style="padding-left: 225px;">
                       <strong> Email: {{ $info->email }}</strong>
                        <br>
                       <strong> Phon: {{ $info->phon }}</strong>
                        <br>
                        <strong> Address: {{ $info->address }}</strong>
                    </h4>
                    <br>
                @endforeach
            </div>
        </div>
        <div class="col-sm-2"> </div>
    </div>
</div>
@endsection
