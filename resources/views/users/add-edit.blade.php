@extends($layout)

@section('content')
 <!-- Content Header (Page header) -->
<section class="content-header">
<div class="row">
  <div class="col-lg-12">
    <ol class="breadcrumb">
      <li><a href="{{URL_DASHBOARD}}"><i class="fa fa-home"></i> {{ getPhrase('Home') }}</a> </li>
      <li><a  href="{{URL_USERS.'all'}}">{{ getPhrase('users')}}</a></li> 
      @if($record)        
      <li><a  href="{{URL_USERS.$role_name}}">{{ucfirst($role_name)}} {{ getPhrase('dashboard')}}</a></li> 
      @endif        
      <li class="active">{{isset($title) ? $title : ''}}</li>
    </ol>
  </div>
</div>
</section>



 <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-10 col-md-offset-1">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{$title}}</h3>
            </div>

            @include('errors.errors')
            <!-- /.box-header -->

            <?php $button_name = 'Create'; ?>
@if ($record)
<?php $button_name = 'Update'; ?>
{{ Form::model($record, 
array('url' => URL_USERS_EDIT.$record->slug, 
'method'=>'patch','novalidate'=>'','name'=>'formUsers ', 'files'=>'true' )) }}
@else
{!! Form::open(array('url' => URL_USERS_ADD, 'method' => 'POST', 'novalidate'=>'','name'=>'formUsers ', 'files'=>'true')) !!}
@endif

@include('users.form_elements', array('button_name'=> $button_name, 'record' => $record, 'roles'=>$roles))

{!! Form::close() !!}
          
           
          </div>
          <!-- /.box -->
 

        </div>
        <!--/.col (left) -->
      
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@stop

@section('footer_scripts')
@include('common.validations')
@stop