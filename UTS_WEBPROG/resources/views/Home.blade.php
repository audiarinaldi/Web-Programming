@extends('layout')

@section('title', 'Home')

@section('content')

<div class="content-home">
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
                  @foreach ($books as $book)
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
<div class="pb-3 pt-2" id="paginator">
  {!! $books->links() !!}
</div>

@endsection
