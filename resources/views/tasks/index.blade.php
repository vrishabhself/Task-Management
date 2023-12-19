@extends('layouts.admin')
@section('content')
<style>
  .table th,
  .table td {
    padding: 10px;
  }

  .btn-sm {
    padding: 2px !important;
  }

  svg {
    display: none !important;
  }

  .pagination span,
  .pagination a {
    padding: 0px !important;
  }

  .pagination nav {
    text-align-last: center;
  }
</style>
<div class="content-wrapper">
  <div class="row">

    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          @endif
          <a href="{{ route('task.create') }}" class="btn btn-info btn-rounded btn-fw btn-sm "><i class="typcn typcn-plus"></i>Add Task</a>
          <div class="table-responsive pt-3">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>
                    #
                  </th>
                  <th>
                    Task Name
                  </th>
                  <th>
                    Description
                  </th>
                  <th>
                    Due date
                  </th>
                  <th>
                    Status
                  </th>
                  <th>
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>
                @php
                $sr=1;
                @endphp
                @foreach ($tasks as $task)
                <!-- status 0:pending,2:in process,1:completed -->
                <tr>
                  <td>{{$sr++}}</td>
                  <td>{{ $task->title }}</td>
                  <td>{{ Str::limit($task->description, 40);  }}</td>
                  <td>{{ date('d M Y h:i a',strtotime($task->due_date)) }}</td>
                  <td>
                    @if($task->status==1)
                    <span class="badge badge-success">Completed</span>
                    @elseif ($task->status==2)
                    <span class="badge badge-info">In Process</span>
                    @else
                    <span class="badge badge-warning">Pending</span>
                    @endif
                  </td>
                  <td class="text-center">
                    @if($task->status!=1)
                    <a href="{{ route('task.edit', $task->id) }}" class="btn btn-sm btn-info"><i class="typcn typcn-edit"></i></a>
                    <a href="javascript:void(0)" id="complete-task" data-task-id="{{ $task->id }}" class="btn btn-sm btn-success"><i class="typcn typcn-tick"></i></a>
                    <a href="{{ route('task.show', $task->id) }}" class="btn btn-sm btn-primary"><i class="typcn typcn-eye"></i></a>
                    @else
                    <a href="{{ route('task.show', $task->id) }}" class="btn btn-sm btn-primary"><i class="typcn typcn-eye"></i></a>
                    @endif
                    <a href="javascript:void(0)" id="delete-task" data-task-id="{{ $task->id }}" class=" btn btn-sm btn-danger"><i class="typcn typcn-trash"></i></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <br>
            <div class="pagination">
              {{ $tasks->links() }}

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection