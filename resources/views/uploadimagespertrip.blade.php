@extends('Layouts.app')

@section('content')


<div class="tabs-animation">

<div class="card mb-3" >
<div class="card-header-tab card-header">
<div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Add Images to Trip
</div>
</div>
<div class="card-body" style="width">
<div class="md-3">
<div>
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
    <form method="post" action="/uploadimagefortrip" enctype="multipart/form-data">
    @csrf
    
    <input type="hidden"  value="{{$trip_id}}" name="trip_id"/>
    <input type="file" accept=".jpg , .png" class="form-control" name="image_name[]" multiple/>
    <button class="form-control" type="submit"> Upload </button>

</form>


</div>
</div>
</div>
</div>


@endsection