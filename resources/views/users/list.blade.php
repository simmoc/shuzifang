@extends($layout)
@section('header_scripts')
<link href="{{CSS}}ajax-datatables.css" rel="stylesheet">
@stop
@section('content')

 <!-- Content Header (Page header) -->
<section class="content-header">
	<div class="row">
	<div class="col-lg-12">
	<ol class="breadcrumb">
    <li><a href="{{URL_DASHBOARD}}"><i class="fa fa-home"></i> {{ getPhrase('Home') }}</a> </li>
		<li><a href="{{URL_ADMIN_USERS_DASHBOARD}}">{{ getPhrase('users_dashboard') }}</a> </li>
		<li class="active">{{isset($title) ? $title : ''}}</li>
	</ol>
	</div>
	</div>
</section>
      <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
               <div class="panel-heading">
                    
                        <div class="pull-right messages-buttons">
                              <a href="{{URL_IMPORT . 'user'}}" class="btn btn-primary pull-right">{{ getPhrase('Import') }}</a>
        <a href="{{URL_USERS_ADD}}" class="btn btn-primary pull-right">{{ getPhrase('Add') }}</a>
                             
                        </div>
                        <h2>{{ $title }}</h2>
                    </div>
           
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover datatable">
                <thead>
                <tr>
					<th>{{ getPhrase('Name') }}</th>
					<th>{{ getPhrase('Email') }}</th>
					<th>{{ getPhrase('Role') }}</th>
					<th>{{ getPhrase('Image') }}</th>
					<th>{{ getPhrase('Action') }}</th>
                </tr>
                </thead>
                <tbody>
                
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
 
           
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

      <!-- /.row -->
    </section>
    <!-- /.content -->

 @endsection
 
@section('footer_scripts')
 @include('common.datatables', array('route' => URL_USERS_DATATABLE . $type, 'route_as_url' => TRUE))
 @include('common.deletescript', array('route'=>URL_USERS_DELETE))
@stop
