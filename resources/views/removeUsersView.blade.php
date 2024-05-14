@extends('Layouts.app')
@section('content')

<div class="app-main__outer">
<div class="app-main__inner">
<div class="app-page-title">
<div class="page-title-wrapper">
<div class="page-title-heading">
<div class="page-title-icon">
<i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
</div>
<div>Admin Dashboard

</div>
</div>
 </div>
</div> 

<div class="tabs-animation">
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
<div class="card mb-3">
<div class="card-header-tab card-header">
<div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Admins and Moderators
</div>
</div>
<div class="card-body">
<table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
<thead>
<tr>
<th>id</th>
<th>Name</th>
<th>Type</th>
<th>Email</th>
<th>Delete</th>
</tr>
</thead>
<tbody>

@foreach($data as $data1)
<tr>
<td>{{$data1->id}}</td>
<td>{{$data1->name}}</td>
@if($data1->type==0)
<td>Moderators</td>
@else
<td>Admin</td>
@endif

<td>{{$data1->email}}</td>
<td><a href="deleteuser?id={{$data1->id}}">Delete</a></td>
</tr>
@endforeach
</tbody>
<tfoot>
<tr>
<th>id</th>
<th>Name</th>
<th>Type</th>
<th>email</th>

<th>Delete</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>

</div>
</div>

@endsection