@extends('layout')

@section('title', 'PublisherDetail')

@section('content')
<div >
    <div class="Publisher">
        <div class="container-fluid" >
            <div class="row">
                <h5 class="Bold">{{$CurrentPublisher->name}}</h5>
                <p>Address - {{$CurrentPublisher->address}}</p>
                <p >Phone- {{$CurrentPublisher->phone}}</p>
                <p>Email - {{$CurrentPublisher->email}}</p>
            </div>
        </div>
    </div>

    <div class="content" >
        <div class="List">
            <h3 style="text-align: center; padding: 10px">Book List</h3>
            <div style="display: flex; justify-content: center">
                <table class="table" style="width: 75%">
                    <thead>
                    <tr>
                        <th scope="col">Cover</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($PublisherBooks as $book)
                        <tr>
                            <td><img class="cover" src="{{Storage::url($book->image)}}"></td>
                            <td>{{$book->title}}</td>
                            <td>{{$book->author}}</td>
                            <td><a href="/detail/{{$book->id}}" class="btn btn-light">Detail</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
