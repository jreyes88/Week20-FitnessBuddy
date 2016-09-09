@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Meal Info</div>

                <div class="panel-body">
                    <form action="/meals/{{$meals->user_id}}" method="POST">
                        Name: <input type="text" value="{{$meal->meal}}" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection