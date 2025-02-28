@extends('backend.layouts.master')

@section('content')
<div class="container">
    <h1>Edit History Entry</h1>
    
    @if(session('message'))
        <div class="alert alert-{{ session('alert-type') }}">{{ session('message') }}</div>
    @endif

    <form action="{{ route('history-update', $history->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $history->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="5" required>{{ $history->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Entry</button>
        <a href="{{ route('view-history') }}" class="btn btn-secondary">Back to History</a>
    </form>
</div>
@endsection