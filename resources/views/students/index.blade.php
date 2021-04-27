@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Surname</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->surname }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>
                <form action={{ route('students.destroy', $student->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('students.edit', $student->id) }}>Edit</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('students.create') }}" class="btn btn-success">Add new student</a>
    </div>
</div>
@endsection
