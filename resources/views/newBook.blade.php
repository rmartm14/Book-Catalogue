@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center"" >
    <form method='POST' action="/newBook">
    {{ csrf_field() }}
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp" name="name">
        <div id="nameHelp" class="form-text">Name of the book.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Author</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="authorHelp" name="author">
        <div id="authorHelp" class="form-text">Author of the book.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ISBN</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="isbnHelp" name="ISBN">
        <div id="isbnHelp" class="form-text">Code to help the location of the book.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Year</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="yearHelp" name="year">
        <div id="yearHelp" class="form-text">Year of the release of the book</div>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection