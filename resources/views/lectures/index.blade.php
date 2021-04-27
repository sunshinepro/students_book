@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Lecture</th>
            <th>Description</th>
            {{-- <th>Average</th> --}}
            <th>Actions</th>
        </tr>
        @foreach ($lectures as $lecture)
        <tr>
            <td>{{ $lecture->name }}</td>
            <td>{{ $lecture->description }}</td>
            {{-- <td>{{ $lecture->  }}</td> --}}
            <td>
                <form action={{ route('lectures.destroy', $lecture->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('lectures.edit', $lecture->id) }}>Edit</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                </form>
            </td>

        </tr>
        @endforeach
    </table>
    <div>
        <a href="{{ route('lecture.create') }}" class="btn btn-success">Add new lecture</a>
    </div>
</div>
@endsection
