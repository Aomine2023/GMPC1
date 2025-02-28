@extends('backend.layouts.master')

@section('content')
<div class="container">
    <h1>Add New History Entry</h1>
    
    @if(session('message'))
        <div class="alert alert-{{ session('alert-type') }}">{{ session('message') }}</div>
    @endif

    <form action="{{ route('history-store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Entry</button>
        <a href="{{ route('view-history') }}" class="btn btn-secondary">Back to History</a>
    </form>
</div>
@endsection