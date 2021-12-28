@extends('master')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
			<div class="imag" >
			 

			</div>
			<div class="card ml-2 ca shadow p-3 mb-5 bg-white rounded">
               <div class="card-body ">
                 <h4>CLICKTECH PRODUCTIONS <span class="bg-success text-light float-right"><i class=" fa fa-star">5.0</i></span></h4>
               <a href="" class="text-dark mt-2"> <i class="fa fa-map-marker mr-1"></i>(View on Map)</a>
            <a href="">   <h6 class="text-success mt-2"><i class="fa fa-phone mr-1"> </i>Contact</h6></a>
            
           <div class="row ">
             <div class="col-md-3 border-right">
            
         <i class="fa fa-image mr-2"></i>images
             </div>
             <div class="col-md-3 border-right">

           <i class="fas fa-heart text-danger mr-2"></i>shortlist
             </div>
             <div class="col-md-3 border-right">

           <i class="fas fa-pen mr-2"></i>Review
             </div>
             <div class="col-md-3 border-right">

           <i class="fas fa-share-alt mr-2"></i>share
             </div>
           </div>

            
               </div>
			</div>
		</div>
		<div class="col-md-4 ">
      

<div class="card">
   <div class="card-body">
    
    <select class="form-control form-control-lg mt-1">
  <option>
  	<h5 class="text-danger">Rs 200 <span><p class="float-right text-dark"> per plants</p></span> </h5></option>
  	<option>
  	<h5 class="text-danger">Rs 300 <span><p class="float-right text-dark"> per plants</p></span> </h5>
  </option>
</select>
<select class="form-control form-control-lg mt-2 ">
  <option>
  <h5 class="text-danger">Rs 400  <span><p class="float-right text-dark"> 2 plants</p></span> </h5></option>
  <option>
  <h5 class="text-danger">Rs 400  <span><p class="float-right text-dark"> 2 plants</p></span> </h5>
  </option>
</select>
<select class="form-control form-control-lg mt-2">
  <option>
 <h5 class="text-danger">Rs 600 <span><p class="float-right text-dark"> 3 plants</p></span> </h5> </option>
 <option>
 <h5 class="text-danger">Rs 600 <span><p class="float-right text-dark"> 3 plants</p></span> </h5>
  </option>
</select>

    
   </div>

</div>
<div class="card mt-3">
   <div class="card-body">
    <ul class="list-unstyled">
    	<li class="list-inline-item"><button class="btn btn-lg btn-danger rounded">send message </button></li>
    	<li class="list-inline-item"><button class="btn btn-lg btn-success rounded">send message </button></li>
    </ul>
    </div>
</div>

   <div class="card mt-3">
   <div class="card-body ">
       <ul class="list-unstyled text-center">
       <li class="list-inline-item"><button class="btn btn-lg btn-secondary rounded"> Charges Home delivery of plants</button></li>
    	<li class="list-inline-item"><button class="btn btn-lg btn-secondary rounded mt-2">Charges Home delivery of plants</button></li>
     </ul>
   	</div>
   </div>
		</div>
	</div>
</div>


    <div class="container-fluid mb-5">
       <div class="col-md-8">
             <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">portfolio</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Videos</a>
  
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  	{{View::make('Vendorcategories.portfolio')}}
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  	
  	{{View::make('Vendorcategories.videos')}}
  </div>
 
</div>
       </div>
        <div class="col-md-4">

       </div>
    </div>
 
 <div class="container-fluid">
       <div class="row">
             <div class="col-md-6 col-sm-12">
        <ul class="list-unstyled">
        	<li class="list-inline-item bg-dark text-center ml-5 border mt-3" style="width: 9%; height: 3.3rem; border-radius: 50px;">
          <i class="fas fa-user-alt mt-2 fa-2x text-light " ></i></li>
          <li class="list-inline-item"><h3>name</h3>
             <p>6 month ego</p>
          </li>
          <li class="list-inline-item ">
          	<span class=" text-light float-right" style="background-color: #5BA829; width:3.5rem;"><i class=" fa fa-star ml-1"> 5.0</i></span>
          </li>
        </ul>
        <p class="ml-5">I could not have asked for a more beautiful wedding venue than Roche Harbor ! Himanshu at Roche Harbor was amazing to work with. He was very friendly, creative and paid so much attention to detail. He made sure that the decor looked as per our requirements and even went out of his way to accommodate our requests. The entire place looked magical! </p>

         <ul class="list-unstyled">
        	<li class="list-inline-item bg-dark text-center ml-5 border mt-3" style="width: 9%; height: 3.3rem; border-radius: 50px;">
          <i class="fas fa-user-alt mt-2 fa-2x text-light " ></i></li>
          <li class="list-inline-item"><h3>name</h3>
             <p>6 month ego</p>
          </li>
          <li class="list-inline-item ">
          	<span class=" text-light float-right" style="background-color: #5BA829; width:3.5rem;"><i class=" fa fa-star ml-1"> 5.0</i></span>
          </li>
        </ul>
        <p class="ml-5">I could not have asked for a more beautiful wedding venue than Roche Harbor ! Himanshu at Roche Harbor was amazing to work with. He was very friendly, creative and paid so much attention to detail. He made sure that the decor looked as per our requirements and even went out of his way to accommodate our requests. The entire place looked magical! </p>

         <ul class="list-unstyled">
        	<li class="list-inline-item bg-dark text-center ml-5 border mt-3" style="width: 9%; height: 3.3rem; border-radius: 50px;">
          <i class="fas fa-user-alt mt-2 fa-2x text-light " ></i></li>
          <li class="list-inline-item"><h3>name</h3>
             <p>6 month ego</p>
          </li>
          <li class="list-inline-item ">
          	<span class=" text-light float-right" style="background-color: #5BA829; width:3.5rem;"><i class=" fa fa-star ml-1"> 5.0</i></span>
          </li>
        </ul>
        <p class="ml-5">I could not have asked for a more beautiful wedding venue than Roche Harbor ! Himanshu at Roche Harbor was amazing to work with. He was very friendly, creative and paid so much attention to detail. He made sure that the decor looked as per our requirements and even went out of his way to accommodate our requests. The entire place looked magical! </p>
 </div>
              
             <div class="col-md-6 col-sm-12 border" style="background-color: white; font-family: Roboto;">
       <h4 class="mt-3" >Review Vendor</h4>
             <form>
             	<div class="form-group mt-3">
    <textarea class="form-control" id="" placeholder="tell us about your experience" rows="6"></textarea>
  </div>
     	<div class="form-group">
    <textarea class="form-control" id="" placeholder="How much did you spend" rows="2"></textarea>
  </div>
      <div class="form-group text-center float-right">
                  <button class="btn btn-lg btn-outline-danger">Add Photo</button>
                  <button class="btn btn-lg btn-success">Send Reviews</button>
           </div>
         	<div class="form-group">
                  
           </div>
             </form>
             </div>
       </div>
</div>
@endsection