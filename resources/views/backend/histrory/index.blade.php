@extends('backend.layouts.master')

@section('content')
<div class="container">
    <h1>History Entries</h1>

    @if(session('message'))
        <div class="alert alert-{{ session('alert-type') }}">{{ session('message') }}</div>
    @endif

    <a href="{{ route('history-add') }}" class="btn btn-primary mb-3">Add New Entry</a>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($history as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ route('history-edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('history-delete', $item->id) }}" class="btn btn-danger" 
                           onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No history entries found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection