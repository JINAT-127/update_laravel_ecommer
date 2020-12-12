@extends('layouts.admin_layout ')
@section('title')
News list
@stop 
@section('task')
News List
@stop 

@section('content')

<table class="table table-striped table-hover">
  <tr>
    <th>Headline</th>
    <th>Category</th>
    <th>Date</th>
    <th>Action</th>
</tr>
@forelse($data as $d)
<tr>
    <td>{{$d->headline}}</td>
    <td>{{$d->category->name}}</td>
    <td>{{$d->created_at}}</td>
    <td></td> 
</tr>
@empty
<tr><td colspan="4">no data found</td></tr>
@endforelse
</table>

@stop

