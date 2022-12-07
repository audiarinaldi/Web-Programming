@extends('layout')

@section('title', 'Publisher')

@section('content')

<div class="content">
    <div class="List">
        <h3 style="text-align: center; padding: 10px">Publisher List</h3>
        <div style="display: flex; justify-content: center">
            <table class="table" style="width: 75%">
                <thead>
                  <tr>
                    <th scope="col">Logo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Detail</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($publisher as $publish)
                    <tr>
                        <td><img class="cover" src="{{Storage::url($publish->image)}}"></td>
                        <td>{{$publish->name}}</td>
                        <td><a href="/enter/{{$publish->id}}" class="btn btn-light">Detail</a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection
