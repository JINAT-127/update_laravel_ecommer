@extends('layouts.admin_layout ')
@section('title')
Deshboard
@stop 
@section('task')
News List
@stop 

@section('content')

<table class="table table-striped table-hover">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Joined</th>
</tr>
<tr>
    <td>Jill Smith</td>
    <td>jillsmith@gmail.com</td>
    <td>Dec 12, 2016</td>
</tr>
<tr>
    <td>Eve Jackson</td>
    <td>ejackson@yahoo.com</td>
    <td>Dec 13, 2016</td>
</tr>
<tr>
    <td>John Doe</td>
    <td>jdoe@gmail.com</td>
    <td>Dec 13, 2016</td>
</tr>
<tr>
    <td>Stephanie Landon</td>
    <td>landon@yahoo.com</td>
    <td>Dec 14, 2016</td>
</tr>
<tr>
    <td>Mike Johnson</td>
    <td>mjohnson@gmail.com</td>
    <td>Dec 15, 2016</td>
</tr>
</table>

@stop
