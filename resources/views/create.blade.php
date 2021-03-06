@extends('layout.app')

@section('content')
<h1>Create New Todo</h1>
<form method="post" action="/todo">
  @csrf
 <div class="form-group">
   <label for="title">Title</label>
   <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ old('title') }}">
 </div>
 <div class="form-group">
   <label for="content">Content</label>
   <input type="text" class="form-control" id="content" name="content" placeholder="Content" value="{{ old('content') }}">
 </div>
 <div class="form-group">
   <label for="due">Due</label>
   <input type="text" class="form-control" id="due" name="due" placeholder="Enter due" value="{{ old('due') }}">
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
