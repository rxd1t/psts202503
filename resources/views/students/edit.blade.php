@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
    <div class="card">
        <div class="card-header bg-warning text-white">
            <h3>✏️ Edit Student</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $student->name }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select name="gender" class="form-control">
                        <option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $student->email }}" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{ $student->phone }}" required>
                </div>

                <div class="mb-3">
                    <label for="grade" class="form-label">Grade</label>
                    <input type="number" class="form-control" name="grade" value="{{ $student->grade }}" required>
                </div>

                <button type="submit" class="btn btn-warning">✔ Update</button>
            </form>
        </div>
    </div>
@endsection
