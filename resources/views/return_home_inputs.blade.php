@extends('Layouts.app')
@section('content')
<div class="tabs-animation">

<div class="card mb-3" style="width:300%">
<div class="card-header-tab card-header">
<div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Add Admins and Moderators
</div>
</div>
<div class="card-body" style="width">
@if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{$message}}</strong>
            </div>

           
        @endif
<p>
  <a class="btn btn-danger" data-toggle="collapse" href="#col1" role="button" aria-expanded="false" aria-controls="col1">
    Add Data to Home Page   </a>

</p>

<form class="collapse" id="col1" method="post" action="/addindexdata" enctype="multipart/form-data">
@csrf
    <div class="mb-3">
       
            <label for="exampleFormControlFile1">Home Cover</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".png,.jpg" name="cover">
            <img id="blah" src="#" />

    </div>

    <div class="mb-3">
      
            <label for="exampleFormControltext1">Cover Heading</label>
            <input type="Text" class="form-control" id="exampleFormControltext1" name="cover_text_1">
       
    </div>

    <div class="mb-3">
        
                <label for="exampleFormControltext2">SubHeading</label>
                <input type="Text" class="form-control" id="exampleFormControltext2" name="cover_text_2">
        
    </div>


    <div class="mb-3">
    
            <label for="exampleFormControltext3"># of Successful Tours</label>
            <input type="text" class="form-control" id="exampleFormControltext3" name="no_success_tours">
    
    </div>

    <div class="mb-3">
     
            <label for="exampleFormControltext4"># of Successful Tourists</label>
            <input type="text" class="form-control" id="exampleFormControltext4" name="no_happy_tourist">
        
    </div>

    <div class="mb-3">
      
            <label for="exampleFormControltext5"># of Placed Explored</label>
            <input type="text" class="form-control" id="exampleFormControltext5" name="no_place_explored">
       
    </div>


    <div class="mb-3" style="align-content:center;">
        
           
            <button type="submit" class="btn btn-primary">Submit</button>
        
    </div>



  

</form>

<p>
  <a class="btn btn-danger" data-toggle="collapse" href="#col2" role="button" aria-expanded="false" aria-controls="col2">
    Tourist feedback
  </a>

</p>
<div class="collapse" id="col2">
  <div class="card card-body">
  <form class="collapse" id="col2" method="post" action="/uploadfeedback">
@csrf
   

    <div class="mb-3">
      
            <label for="exampleFormControltext7">Tourist Name</label>
            <input type="Text" class="form-control" id="exampleFormControltext7" name="tourist_name">
       
    </div>

    <div class="mb-3">
        
                <label for="exampleFormControltext8">Tourist Title</label>
                <input type="Text" class="form-control" id="exampleFormControltext8" name="tourist_title">
        
    </div>


    <div class="mb-3">
    
            <label for="exampleFormControltext3">Tourist Feedback</label>
            <input type="text" class="form-control" id="exampleFormControltext9" name="tourist_feedback">
    
    </div>



 


    <div class="mb-3" style="align-content:center;">
        
           
            <button type="submit" class="btn btn-primary">Submit</button>
        
    </div>



  

</form>
  </div>
</div>



</div>
</div>
</div>





<br>


<script>

exampleFormControlFile1.onchange = evt => {
  const [file] = exampleFormControlFile1.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>
@endsection