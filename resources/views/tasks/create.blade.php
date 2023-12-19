@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Create New Task</h4>
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            <form class="forms-sample" method="POST" action="{{ route('task.store') }}">
              @csrf
              <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
              </div>
              <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" rows="4" class="form-control" name="description" placeholder="Enter description"></textarea>
              </div>
              <div class="form-group">
                <label for="due_date">Due Date:</label>
                <input type="datetime-local" id="due_date" class="form-control" name="due_date">
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-danger">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection