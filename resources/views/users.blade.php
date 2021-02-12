@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped ">
    <thead>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>Fecha Creación</th>
            <th>Ultima modificación</th>
        </thead>
        <tbody>
            @foreach ($user as $b)
                <tr>
                    <!-- Task Name -->
                    <td class="table-text">
                        <div>{{ $b->id }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $b->name }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $b->email }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $b->created_at }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $b->updated_at }}</div>
                    </td>

                    <td>
                    <form action="{{ url('deleteUser/'.$b->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i> Delete
                        </button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection