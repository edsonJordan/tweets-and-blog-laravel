@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Tweets</div>
                <div class="card-body">                    
                    Twitter API (son)                         
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$user->name }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Published entries </p>
                    <ul>
                  
                        </ul>
         
                    <hr>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
