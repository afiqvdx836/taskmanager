@extends('adminlte.main_master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Task List</h3>

            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
              </ul>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Task</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Progress</th>
                  <th style="width: 40px">Label</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($tasks as $key=>$task )
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->start_date }}</td>
                    <td>{{ $task->end_date }}</td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: {{ $task->progress }}%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-danger">{{ $task->progress }}%</span></td>
                  </tr>
                @endforeach
                
               
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div>
</div>
@endsection