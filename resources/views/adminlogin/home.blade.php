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
    
        <div class="col-sm-3"> </div>
        <div class="col-md-6">
            <br>
            <br>
            <form action="/update" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Year</label>
                    <input type="text" required="" class="form-control" placeholder="Add a New Year..." name="year">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div class="col-sm-3"> </div>
    </div>
</div>
@endsection
