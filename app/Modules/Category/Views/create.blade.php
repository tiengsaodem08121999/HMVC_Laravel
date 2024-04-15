@extends('layout.master')
@section('content')
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
            @if (isset($errors))
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            @endif
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
            {{-- @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
