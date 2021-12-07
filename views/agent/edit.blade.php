@extends('agent.master')

@section('content')
    
@if (session('status'))
<div class="alert alert-danger">{{session('status')}}</div>
@endif

@if (session('statusberhasil'))
<div class="alert alert-primary">{{session('status')}}</div>
@endif

@if (session('statusedit'))
<div class="alert alert-success">{{session('status')}}</div>
@endif
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Report Client</h4>
                        </div>
                        <div class="card-body--">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header"><strong>Status</strong><small> Edit</small></div>
                                    <form action="{{route('update',$laporans->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label" >Name</label>
                                            <input type="text"value="{{$laporans->user_id}}"name="user_id" id="user_id"  class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Subject</label>
                                            <input type="text" value="{{$laporans->subject}}" id="subject" name="subject"  class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">Priority</label>
                                            <input type="text" value="{{$laporans->priority}}"id="priority" name="priority"class="form-control">
                                        </div>

                                      
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Description</label>
                                            <input type="text"value="{{$laporans->description}}" id="description"name="description" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Status</label>
                                            <input type="text" value="{{$laporans->status}}" name="status" id="status"  class="form-control">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
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