@extends('layout')

@section('title', 'Category')

@section('content')

<div class="content" >
    <div class="List">
        <h3 style="text-align: center; padding: 10px">{{$CurrentCategory->name ?? 'None'}}</h3>
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
                  @foreach ($BooksCategory as $books)
                    <tr>
                        <td><img class="cover" src="{{Storage::url($books->book->image)}}"></td>
                        <td>{{$books->book->title}}</td>
                        <td>{{$books->book->author}}</td>
                        <td><a href="/detail/{{$books->book->id}}" class="btn btn-light">Detail</a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
