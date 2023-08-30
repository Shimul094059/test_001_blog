
@extends('backend.layout.master')
@section('title','All Categories')

@section('content')
<div class="row">
    
    <div class="col-md-6">
        <a class="btn btn-info btn-sm" href="{{ route('categories.create') }}">Create Category</a>
        
        {{-- option-1 --}}
        {{-- @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif --}}
          {{-- option-2
             @if (session()->has('success'))
             <div class="alert alert-success">
                 {{ session()->get('success') }}
             </div>
         @endif --}}
        {{-- option-3 --}}
        @if (Session::has('success'))
        <div class="alert alert-success" id="alert">
            {{ Session::get('success') }}
        </div>
        @endif

        <h1>All Category</h1>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Category Name</th>
                    <th>Category Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('categories.show', $category->id) }}">Show Details</a>
                        <a class="btn btn-info btn-sm" href="{{ route('categories.edit', $category->id) }}">edit</a>
                        <form class="d-inline-block" action="{{ route('categories.destroy',$category->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection