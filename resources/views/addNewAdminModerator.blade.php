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

<div class="card mb-3">
<div class="card-header-tab card-header">
<div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Add Admins and Moderators
</div>
</div>
<div class="card-body">


@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<form method="get" action="/addnewuser">

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Full Name:</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput2" class="form-label">Email address:</label>
  <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" name="email">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput3" class="form-label">Password:</label>
  <input type="password" class="form-control" id="exampleFormControlInput3" min="8" name="password">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Type:</label>
  <select class="form-select" aria-label="Default select example" name="type" >
  <option selected>Open this select menu</option>
  <option value="0">Moderator</option>
  <option value="1">Admin</option>
 
</select>

</div>
<button type="submit" class="btn btn-primary">Add one</button>
</form>








</div>
</div>
</div>

</div>
</div>
@endsection