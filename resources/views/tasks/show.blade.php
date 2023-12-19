@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4>{{$task->title}}</h4>
            <hr>
            <h6>{{$task->description}}</h6>
            <p>Due date : {{date('d M Y h:i a',strtotime($task->due_date))}}</p>
            <p>status :
              @if($task->status==1)
              <span class="badge badge-success">Completed</span>
              @elseif ($task->status==2)
              <span class="badge badge-info">In Process</span>
              @else
              <span class="badge badge-warning">Pending</span>
              @endif
            </p>
            <br>
            <button class="btn btn-primary btn-sm" onclick="history.back()">Back</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection