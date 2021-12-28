@extends('master')
@section('content')

<style type="text/css">

	 .color
{

	background-color: rgb(140,198,62);
}
.colors
{
	background-color: #E8EBF2;
}
select{
    width: 100%;
  padding: 6px 10px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}
  </style>
	


    <div class="container-fluid color text-light ">
    	<h1>CONTACT US</h1>
    	<hr>
    	<div class="row">
    
    		<div class="col-md-6 col-sm-12 ">
           <h5 class="mt-3">HEAD OFFICE</h5>
           <h6>Dhaga.pk</h6>
           <p>5.5 KM, Raiwind Road (Near Fatehbad Village) Lahore, Pakistan.</p>
           <p>Timings: Monday to Saturday<br>
           	
(09:00 am to 05:00 pm)</p>
        Email At: <a href="www.dhaga.pk">www.dhaga.pk</a> 
        <hr>
        <h5>Bridal Booking & Queries</h5>
        <p>Store Timings: Monday to Saturday<br>
(12:00 pm to 06:00 pm)<br>
Friday (03:00 pm to 08:00 pm)</p>
    <hr>
    <h5>For Online Order Queries</h5>
    <p>Customer Service Timings: Monday to Saturday<br>
     (11:00 am to 11:00 pm)<br>
Contact Us: +92 (321) 122-4333</p>
    </div>
    		<div class="col-md-6 col-sm-12    ">
            <form  >
              <div class="form-row mt-2">
                <div class="form-group col-md-6">
                  <label >First Name</label>
                  <input type="text" class="form-control" id="fname" placeholder="First name">
                </div>
                <div class="form-group col-md-6">
                  <label >Last name</label>
                  <input type="text" class="form-control" id="lname" placeholder="Last name">
                </div>
              </div>
              <div class="form-group">
              	<label>Email</label>
                 <input type="email" class="form-control" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                  	<label>Phone</label>
                  <input type="Phone" class="form-control" id="phone" placeholder="Phone">
                 </div>
                 <div class="form-group">
               <textarea  class="required-entry input-text" cols="77" rows="7" placeholder="Write Your Message Here..."></textarea>
                 </div>
              <button type="submit" class="btn btn-primary mb-5 " style="width: 100%;">Send</button>
            </form>
             </div>


    		
    		
</div>
</div>


@endsection