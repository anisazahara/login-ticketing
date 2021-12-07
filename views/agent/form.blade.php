@extends('agent.master')

@section('content')
    
@if (session('status'))
<div class="alert alert-danger">{{session('status')}}</div>
@endif

@if (session('statusberhasil'))
<div class="alert alert-primary">{{session('status')}}</div>
@endif

@if (session('statusedit'))
<div class="alert alert-succes">{{session('status')}}</div>
@endif
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Report Client</h4>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">NO</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Subject</th>
                                            <th>Priority</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($laporans as $no => $laporans)
                                        <tr>
                                            <td Scope="col">{{$no+1}}</td>
                                            <td><a href="http://localhost/phpmyadmin/sql.php?server=1&db=helpdesk&table=reports&pos=0">AFF{{$laporans->id}}</a></td>
                                            <td>{{$laporans->user->name}}</td>
                                            <td>{{$laporans->subject}}</td>
                                            <td>{{$laporans->priority}}</td>
                                                <form action="{{route('update',$laporans->id)}}" method="POST">
                                                @csrf
                                                @method('PUT')
                                            <td> <div class="mb-3">
                                                <select class="form-select" id="status" value="{{old('status')}}"  name="status" aria-label="Default select example"  >
                                                    <option selected>{{$laporans->status}}</option>
                                                    <option value="Sedang Dalam Proses">Sedang Dalam Proses</option>
                                                    <option value="Sedang Dalam Proses">Sudah Selesai Perbaiki</option>
                                                    <option value="Sedang Dalam Proses">Closed</option>
                                                  </select>
                                              </div>
                                            </td>
                                        
                                            <td>
                                                <div class="btn-group me-2" role="group" aria-label="Second group">
                                                    <button type="submit" class="btn btn-primary"><i class="fas fa-thumbs-up"></i></button>
                                                </form>
                                             
                                                    <form action="/hapus{{$laporans->id}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i class="far fa-times-circle"></i></button>
                                                    </form>
                                                  </div>
                                               
                                            </td>
                                            
                                            
                                        </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div> <!-- /.card -->
                </div>  <!-- /.col-lg-8 -->

                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-lg-6 col-xl-12">
                            <div class="card br-0">
                                <div class="card-body">
                                    <div class="chart-container ov-h">
                                        <div id="flotPie1" class="float-chart"></div>
                                    </div>
                                </div>
                            </div><!-- /.card -->
                        </div>

                        <div class="col-lg-6 col-xl-12">
                            <div class="card bg-flat-color-3  ">
                                <div class="card-body">
                                    <h4 class="card-title m-0  white-color ">August 2018</h4>
                                </div>
                                <div class="card-body">
                                    <div id="flotLine5" class="flot-line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.col-md-4 -->
            </div>
        
    
@endsection