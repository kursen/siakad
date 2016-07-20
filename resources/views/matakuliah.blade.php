@extends('layouts.master')

@section('title','MataKuliah')
@section('css')
  <!-- Datatables -->
    <link href="{{ URL::asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    
@endsection
@section('sidebar')
@parent
@endsection
@section('content')
			<div class="x_panel">
                  <div class="x_title">
                    <h2>Data Mata Kuliah</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					<div class="col-lg-6 col-sm-6 col-xs-5">
						{!! Form::open(array('url' => '/create','class'=>'form-horizontal')) !!}
							<div class="form-group">
								{!! Form::label('kodematakuliah','Kode Mata Kuliah',array('class' => 'col-sm-4 control-label')) !!}
								<div class="col-sm-5">
									{!! Form::text('kodematakuliah',null,array('class' => 'form-control','maxlength'=>'9')) !!}
								</div>
							</div>
							
							<div class="form-group">
								{!! Form::label('namamatakuliah','Nama Mata Kuliah',array('class' => 'col-sm-4 control-label')) !!}	
								<div class="col-sm-7">
									{!! Form::text('namamatakuliah',null,array('class' => 'form-control')) !!}
								</div>
							</div>
							
							<div class="form-group">
								{!! Form::label('jumlahsks','Jumlah SKS',array('class' => 'col-sm-4 control-label')) !!}	
								<div class="col-sm-3">
									{!! Form::text('jumlahsks',2,array('class' => 'form-control','maxlength'=>'2')) !!}
								</div>
							</div>
							
							<div class="form-group">
										<div class="col-sm-offset-4 col-sm-10">
										  <button id="btn-submit" type="submit" class="btn btn-success"><i class="fa fa-send"></i> Simpan</button>
										</div>
									  </div>
						{!! Form::close() !!}
					</div>
					
					<!--table-->
					<table id="datatable-mk" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Kode MataKuliah</th>
                                <th>Nama</th>
                                <th>Jumlah SKS</th>
                                
                              </tr>
                            </thead>
					</table>
					<!--endtable-->
                  </div>
               </div>
@endsection
@section('scripts')
<!-- Datatables -->
    <script src="{{ URL::asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    
    <script src="{{ URL::asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ URL::asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
   <script type='text/javascript'>
		$(document).ready(function(){
			$('#datatable-mk').DataTable({
				 processing: true,
				 serverSide: true,
					ajax: "{!! route('datatables.data') !!}",
				columns: [
					{ data: 'kodematakuliah', name: 'kodematakuliah' },
					{ data: 'namamatakuliah', name: 'namamatakuliah' },
					{ data: 'jumlahsks', name: 'jumlahsks' }
				]
			});
		});
   </script>
@endsection