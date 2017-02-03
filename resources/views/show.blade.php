@extends('layout')
@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            All Events
            <small>Control Panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">All Events</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
	
          <!-- Your Page Content Here -->
			
					<div class="box box-info">
					<div class="box-header with-border">
					<i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Events Listed</h3>
					</div><!-- /.box-header -->
					<div class="box-body" id="box-body">
					<div class="table-responsive">
            <table id="event_table" class="table no-margin table-hover">
                      <thead>
                        <tr>
                        
                          <th class="text-center">Image</th>
                          <th class="text-center">Event Name</th>
						              <th class="text-center">Date</th>
                          <th class="text-center">Status</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead
					  <!-- show event---->
					  <tbody id="tbody">
            @foreach( $show as $data )
  					  <tr>
                  <td class="text-center"><div class="img-square"><img width="100%" id="img" src="images/{{ $data->event_image }}" alt="{{ $data->event_image }}"></div></td>
                  <td class="text-center">{{ $data->event_name }}</td>
                  <td class="text-center">{{ $data->date }}</td>
                  <td class="text-center">{{ $data->status }}</td>
                  <td class="text-center">
                  <a href="{{ route('event',['id'=>$data->event_id]) }}"><span class="fa fa-eye"></span></a>
                  <a href="" data-toggle="modal" data-target=".bd-viewApplicationForm-modal-lg"><span class="fa fa-pencil"></span></a>
                  <a href="" data-toggle="modal" data-target=".bd-deactivation-modal-lg-admin"><span class="fa fa-close"></span></a>
                  </td>
              </tr>
            @endforeach
					  </tbody>
            </table>
					
          </div><!-- /.box-body -->
				</div>

				<script> 
        $(document).ready(function() {
              $('#event_table').DataTable();
          } );
        </script>
		
			
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
@endsection