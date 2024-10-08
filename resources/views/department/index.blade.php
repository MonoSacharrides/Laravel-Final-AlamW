@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center p-2">Departments</h1>
    <table class="table table-bordered primary-color">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Code</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $department)
                <tr>
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->code }}</td>
                    <td>{{ $department->description }}</td>
                    <td><a href="{{ route('courses', $department->id) }}" class="btn btn-primary a">View </a>
                    </td>
                </tr>
            @endforeach
            {{--  <div class="btn-container">
            <a href="{{ route('courses', $department->id) }}" class="btn btn-primary a">View </a>
            <a href="{{ route('courses', $department->id) }}" class="btn btn-primary a">View </a>
            <a href="{{ route('courses', $department->id) }}" class="btn btn-primary a">View </a>
            <a href="{{ route('courses', $department->id) }}" class="btn btn-primary a">View </a>
            <a href="{{ route('courses', $department->id) }}" class="btn btn-primary a">View </a>
            <a href="{{ route('courses', $department->id) }}" class="btn btn-primary a">View </a>
            <a href="{{ route('courses', $department->id) }}" class="btn btn-primary a">View  </a>
            </div>  --}}
        </tbody>
    </table>
</div>
@endsection

<style>
    @media (max-width: 768px) {
        .table td .btn {
            width: 80px;
        }
    }

    .btn-container {
        display: grid;
        grid-template-columns: 1fr;
        position: absolute;
        gap: 22px;
        margin-left: 1185px;
        margin-top: 46px;
        align-items: center;
        justify-items: center;
    }
    .a{
        width: 100px;
    }
    .table tbody tr td {
        height: 60px;
    }
</style>
