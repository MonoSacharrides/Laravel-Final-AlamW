@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container-btn">
        <h1 class="text-center dept">Departments</h1>
        <a href="{{ url()->previous() }}" class="btn-primary">
            <button class="btn btn-primary mt-2">Back</button>
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered primary-color">
            <thead>
                <tr>
                    <th class="id">ID</th>
                    <th class="name">Name</th>
                    <th class="code">Code</th>
                    <th class="desc">Description</th>
                    <th class="actions text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($departments as $department)
                    <tr>
                        <td>{{ $department->id }}</td>
                        <td>{{ $department->name }}</td>
                        <td>{{ $department->code }}</td>
                        <td>{{ $department->description }}</td>
                        <td>
                            <a href="{{ route('courses', $department->id) }}" class="btn btn-primary a">View Course</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

<style>
    .container-btn {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .table tbody tr td {
        height: 60px;
        text-align: center;
        vertical-align: middle;
    }

    .table th {
        text-align: center;
        vertical-align: middle;
    }

    .table-responsive {
        width: 100%;
        overflow-x: auto;
    }

    .a {
        width: 120px;
        margin-left: 10px;
        margin-right: 10px;
    }

    @media (max-width: 768px) {
        .btn-primary {
            width: 100%;
        }

        .a {
            width: 100%;
            margin: 10px 0;
        }
    }

    @media (max-width: 576px) {
        .container-btn {
            flex-direction: column;
            align-items: center;
        }

        .btn-primary {
            width: 100%;
        }

        .table-responsive {
            margin-bottom: 15px;
        }
    }
</style>
