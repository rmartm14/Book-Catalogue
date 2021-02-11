@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped ">
    <thead>
            <th>id</th>
            <th>name</th>
            <th>author</th>
            <th>isbn</th>
            <th>year</th>
        </thead>
        <tbody>
            @foreach ($book as $b)
                <tr>
                    <!-- Task Name -->
                    <td class="table-text">
                        <div>{{ $b->id }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $b->name }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $b->author }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $b->ISBN }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $b->year }}</div>
                    </td>

                    <td>
                    <form action="{{ url('deleteBook/'.$b->id) }}" method="POST">
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