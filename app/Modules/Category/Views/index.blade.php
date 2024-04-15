@extends('layout.master')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $categori)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $categori->name }}</td>
                    <td>{{ $categori->description }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('create')}}" class="btn btn-primary"> Create</a>
@endsection
