@extends('category::layouts.master')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $categori)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $categori->name }}</td>
                    <td>{{ $categori->description }}</td>
                    <td>
                        <form action="{{ route('category.destroy', $categori->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-primary">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('category.create') }}" class="btn btn-primary"> Create</a>
@endsection
