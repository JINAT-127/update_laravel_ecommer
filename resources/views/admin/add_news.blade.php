@extends('layouts.admin_layout ')
@section('title')
Add News
@stop 
@section('task')
Add News
@stop 

@section('content')

{!! Form::open(['url' => 'news']) !!}
<table class="table table-striped table-hover">
 <tr>
   <td>Headline</td>
   <td>{!! Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Enter Headline Here']) !!}</td>
   <td>Photo</td>
   <td>{!! Form::file('photo') !!}</td>
</tr>
<tr>
   <th>News Details</th>
   <td colspan="3">{!! Form::textarea('details','',['class' => 'form-control','placeholder'=>'Details News Here']) !!}</td>
</tr>
<tr>
   <th>Add Category</th>
   <td>{!! Form::select('category_id', $c, 2 ,['class' =>'form-control']) !!}</td>
   <td colspan="2">{!! Form::submit('Submit',['class'=>'btn btn-block btn-info']) !!}</td>
</tr>


</table>
{!! Form::close() !!}

@stop

