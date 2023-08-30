@extends('backend.layout.master')
@section('title','Show Details')

@section('content')
<div class="row">

        {{-- error show part option-1 --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
         @endif

    <div class="col-md-6">
        <h1>Create Category</h1>
        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" >
            </div>

            @error('name')
            <span class="text-danger" >{{ $message }}</span>  
            @enderror

            <div class="form-group">
                <label for="name">Category Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Category Description" >
            </div>
             {{-- error show part option-2 --}}
            @error('description')
            <span class="text-danger" >{{ $message }}</span>  
            @enderror

            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Submit">
            </div>
        </form>

    </div>
</div>
@endsection
    