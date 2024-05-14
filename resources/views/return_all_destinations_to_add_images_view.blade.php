@extends('layouts.app')
@section('content')

<div class="tabs-animation">

<div class="card mb-3" >
<div class="card-header-tab card-header">
<div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Add New Destinations 
</div>
</div>
<div class="card-body" style="width">
<div class="md-3">
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
<div>

    <table  class="table table-dark">
        <thead>
         <tr>
            <th scope="col">
                Destination
            </th>
            <th scope="col">
                City
            </th>
           
            <th scope="col">
                
            </th>
            <th scope="col"  class="text-center">
                upload
            </th>
         </tr> 
        </thead>
     
        <tbody> 
            @foreach($data as $dest)
            <tr>
                <td>{{$dest->Country}}</td>
                <td>{{$dest->city}}</td>
               
             
                
              
            <form method="post" action="/uploadimagespertrip">
             @csrf
            
                <td class="text-center">
                    <input type="hidden" name="trip_id" value="{{$dest->id}}">
                </td>
                <td >
                  <button type="submit" class="btn btn-primary">upload </button>
                </td>
            </form>
            </tr>
            @endforeach
        
        </tbody>
    </table>
</div>
</div>
</div>
</div>

@endsection