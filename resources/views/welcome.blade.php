@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <h1>Last Entries</h1>
            @foreach ($entries as $entry)           
            <div class="card mt-4">
                <div class="card-header"><p>{{$entry->id}}. {{$entry->title}}</p> </div>
                
                <div class="card-body">
                    <p>{{$entry->content}}</p>
                </div>
            </div>                                      
            @endforeach
                {{ $entries->links() }}            
        </div>
    </div>
</div>
@endsection