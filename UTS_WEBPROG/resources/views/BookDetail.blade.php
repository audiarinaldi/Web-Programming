@extends('layout')

@section('title', 'BookDetail')

@section('content')

<div class="content">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{Storage::url($details->image)}}" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h2 class="card-title">{{$details->title}}</h2>
                <p class="Bold card-text">Author Name: <span class="Light">{{$details->author}}</span></p>
                <p class="Bold card-text">Publisher: <span class="Light">{{$details->publisher->name}}</span></p>
                <p class="Bold card-text">Published Year: <span class="Light">{{$details->year}}</span></p>
                <p class="Bold card-text">Synopsis: <span class="Light">{{$details->synopsis}}</span></p>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
