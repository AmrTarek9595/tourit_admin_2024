@extends('Layouts.app')
@section('content')
<div class="tabs-animation">

<div class="card mb-3" >
<div class="card-header-tab card-header">
<div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Add New Destinations 
</div>
</div>
<div class="card-body" style="width">
@if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{$message}}</strong>
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

<p>
  <a class="btn btn-danger" data-toggle="collapse" href="#col2" role="button" aria-expanded="false" aria-controls="col2">
    Add New Destination
  </a>

</p>
<div class="collapse" id="col2">
<form  method="post" action="/addprogram" enctype="multipart/form-data">
@csrf
    <div class="mb-3">
       
            <label>Country:</label>
            <select class="form-control" name="Country" >
                <option>You Must Select One</option>
                <option value="Red Sea">Red Sea	</option>
                <option value="Alexandria">Alexandria</option>
                <option value="Giza">Giza</option>
                <option value="Cairo">Cairo</option>
                <option value="Luxor">Luxor</option>
                <option value="New Valley">New Valley</option>
                <option value="Suez">Suez</option>
                <option value="Port Said">Port Said</option>
                <option value="Damietta">Damietta</option>
                <option value="South Sinai">South Sinai</option>
                <option value="North Sinai">North Sinai</option>
                <option value="Sohag">Sohag</option>
                
            </select>
    </div>

    <div class="mb-3">
      
            <label for="exampleFormControltext1">City</label>
            <input type="Text" class="form-control" id="exampleFormControltext1" name="city" value="{{old('city')}}">
       
    </div>

    <div class="mb-3">
        
                <label for="exampleFormControltext2">Cover of Program</label>
                <input type="file" class="form-control" id="exampleFormControltext2" accept=".png,.jpg" name="cover" value="{{old('cover')}}">
                <img id="blah2" src="#" />
    </div>


    <div class="mb-3">
    
            <label for="exampleFormControltext3">Hotel Name: </label>
            <input type="text" class="form-control" id="exampleFormControltext3" name="name_of_hotel" value="{{old('name_of_hotel')}}">
    
    </div>

    <div class="mb-3">
     
            <label for="exampleFormControltext4">Description: </label>
            <input type="text" class="form-control" id="exampleFormControltext4" name="description" value="{{old('description')}}">
        
    </div>

    <div class="mb-3">
      
            <label for="exampleFormControltext5">includes: </label>
           
            <textarea class="test_ar" id="exampleFormControltext5" name="includes" value="{{old('includes')}}">
</textarea>
    </div>


    <div class="mb-3">
      
            <label for="exampleFormControltext6">Not includes: </label>
           
            <textarea class="test_are" id="exampleFormControltext6" name="not_includes" value="{{old('not_includes')}}">
</textarea>
    </div>    
    
    <div class="mb-3">
      
            <label for="exampleFormControltext7">Children Policy: </label>
            <input type="text" class="form-control" id="exampleFormControltext7" name="children_policy" value="{{old('children_policy')}}">
       
    </div>

            <div class="mb-3">
            
            <label for="exampleFormControltext8">Guest Nationality: </label>
            <input type="text" class="form-control" id="exampleFormControltext8" name="guest_national" value="{{old('guest_national')}}">
        
        </div>

        <div class="mb-3">
            
            <label for="exampleFormControltext9">Start Date: </label>
            <input type="date" class="form-control" id="exampleFormControltext9" name="date_start" >
        
        </div>

        <div class="mb-3">
            
            <label for="exampleFormControltext10">End Date: </label>
            <input type="date" class="form-control" id="exampleFormControltext10" name="date_end">
        
        </div>

        <div class="mb-3">
            
            <label for="exampleFormControltext11">Price: </label>
            <input type="text" class="form-control" id="exampleFormControltext11" name="price_single_double" value="{{old('price_single_double')}}">
        
        </div>

        <div class="mb-3">
            
            <label for="exampleFormControltext12">Days: </label>
            <input type="text" class="form-control" id="exampleFormControltext12" name="no_days" value="{{old('no_days')}}">
        
        </div>

        <div class="mb-3">
            
            <label for="exampleFormControltext13">Program: </label>
            <textarea class="test_area" id="exampleFormControltext13" name="program"  value="{{old('program')}}">
</textarea>
        </div>

        <div class="mb-3">
            
            <label for="exampleFormControltext14">Show to Users: </label>
            <select class="form-control" id="exampleFormControltext14" name="show_trip">
                <option>Select One</option>
                <option value="1">True</option>
                <option value="0">False</option>
            </select>
        </div>

        <div class="mb-3">
            
            <label for="exampleFormControltext15">Cover Price: </label>
            <input type="text" class="form-control" id="exampleFormControltext15" name="price_cover" value="{{old('price_cover')}}">
        
        </div>

    <div class="mb-3" style="align-content:center;">
        
           
            <button type="submit" class="btn btn-primary">Submit</button>
        
    </div>



  

</form>
</div>

<p>
  <a class="btn btn-danger" data-toggle="collapse" href="#col3" role="button" aria-expanded="false" aria-controls="col2">
    Update Destination
  </a>

</p>

<div class="collapse" id="col3">
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
                show trip to users 
            </th>
            <th scope="col">
                Edit what you want to display 
            </th>
            <th scope="col">
                Update
            </th>
         </tr> 
        </thead>
        <tbody> 
            @foreach($destination as $dest)
            <tr>
                <td>{{$dest->Country}}</td>
                <td>{{$dest->city}}</td>
                @if($dest->show_trip==1)
                <td class="text-center">True</td>
                @else
                <td class="text-center">False</td>
                @endif
            <form method="post" action="/editshowtrip">
                @csrf
                <td class="text-center">
                    <select name="show_trip">
                        <option value="1">True</option> 
                        <option value="0">False</option>
                    </select>
                </td>
                <td class="text-center">
                    <input text="hidden" name="show_trip_id" value="{{$dest->id}}" style="display:none">
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-primary">Update </button>
                </td>
            </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

<p>
  <a class="btn btn-danger" data-toggle="collapse" href="#col4" role="button" aria-expanded="false" aria-controls="col2">
    Delete Destination
  </a>

</p>

<div class="collapse" id="col4">
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
                Delete
            </th>
         </tr> 
        </thead>
        <tbody> 
            @foreach($destination as $dest)
            <tr>
                <td>{{$dest->Country}}</td>
                <td>{{$dest->city}}</td>
             
            <form method="post" action="/deletetrip">
                @csrf
               
                <td class="text-center">
                    <input text="hidden" name="trip_id" value="{{$dest->id}}" style="display:none">
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-primary">Delete </button>
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
</div>
<script>
exampleFormControltext2.onchange = evt => {
  const [file] = exampleFormControltext2.files
  if (file) {
    blah2.src = URL.createObjectURL(file)
  }
}
</script>
@endsection