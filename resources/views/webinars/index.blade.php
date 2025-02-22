@extends('layouts.app')

@section('content')

<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Manage Webinars</h2>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createWebinarModal">
            Create Webinar
        </button>

    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Events</th>
                        <th>Actions</th>
                    </tr>
                </thead>
               <tbody>
                @foreach ($data as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->description }}</td>
                        <td>{{ $row->event_date }}</td>
                        <td>
                            <form action="{{ route('webinar.destroy', $row->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this webinar?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
               </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="createWebinarModal" tabindex="-1" aria-labelledby="createWebinarModalLabel" aria-hidden="true">
        <form method="post" action="{{ route('webinar.store') }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createWebinarModalLabel">Create a New Webinar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Webinar Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="event_date" class="form-label">Event Date & Time</label>
                            <input type="datetime-local" class="form-control" id="event_date" name="event_date" required>
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create Webinar</button>
                </div>
            </div>
        </div>
        </form>
    </div>

</div>


@endsection
