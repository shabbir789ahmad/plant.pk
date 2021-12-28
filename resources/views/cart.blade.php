@extends('master')
@section('content')

<div class="container-fluid  ">
  <h2 class="mt-5 ml-5">Shopping Cart</h2>

</div>


<div class="container-fluid mt-5">

     <div class="row ml-2">
      <div class="col-md-9">
         <div class="card ">
    
     <div class="card-body">
         <div class="card-text">
            <div class="row ">
    <div class="col-md-2 border ">
   <img src="{{asset('pic/ryan-carpenter-QkyhRXAdBjs-unsplash.jpg')}} " width="100%; " height="100%">
</div>
      <div class="col-md-5">
      
<h4>The Ultimate Digital Painting Course - Beginner to Advanced</h4>
         <ul class="list-unstyled ">
          <li class="list-inline-item mt-1">
<button class="btn btn-sm btn-warning rounded">Bestseller</button>
          </li>
          <li class="list-inline-item mt-2">
            
 <p class="text-primary">27 houres </p>
          </li>
          <li class="mt-1 list-inline-item">
           <p>Updated at 27/2021</p>
          </li>
         
         

           </ul>

    </div>
    <div class="col-md-3">
          <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> <br>
                            <a href="">Save for Later</a><br>
                            <a href="">Move to whishList</a><br>
                             <a href="">Remove</a>
    </div>
    <div class="col-md-2">
       <h4><del class="text-danger"><small>$150</small></del><span><br>$199</span></h4>
   
   
    
    </div>
  
    </div>
    
  </div> 
         </div>
     </div>
 <div class="card mt-2">
    <div class="card-title">
        
    </div>
     <div class="card-body">
         <div class="card-text">
            <div class="row ">
    <div class="col-md-2 border ">
   <img src="{{asset('pic/ryan-carpenter-QkyhRXAdBjs-unsplash.jpg')}} " width="100%;">
</div>
      <div class="col-md-5">
      
<h4>The Ultimate Digital Painting Course - Beginner to Advanced</h4>
         <ul class="list-unstyled ">
          <li class="list-inline-item mt-1">
<button class="btn btn-sm btn-warning rounded">Bestseller</button>
          </li>
          <li class="list-inline-item mt-2">
            
 <p class="text-primary">27 houres </p>
          </li>
          <li class="mt-1 list-inline-item">
           <p>Updated at 27/2021</p>
          </li>
         
         

           </ul>

    </div>
    <div class="col-md-3">
          <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> <br>
                            <a href="">Save for Later</a><br>
                            <a href="">Move to whishList</a><br>
                             <a href="">Remove</a>
    </div>
    <div class="col-md-2">
      <h4><del class="text-danger"><small>$150</small></del><span><br>$199</span></h4>
   
   
    
    </div>
  
    </div>
    
  </div> 
         </div>
     </div>

      </div>
       <div class="col-md-3 col-sm-3 border">
    
          <p class="mt-2">Total</p>
          <h1>$119</h1>
      
         <button class="btn  btn-danger rounded btn-xl   b1 "><b>Check Out</b></button><br>

         
                <input type="text" class="form-control mt-3 " placeholder="enter coupon" name="">
             </li>
          <button class="btn b3 btn-lg mt-2 btn-warning ">Apply</button> 
  </div>
     </div>
 </div>





@endsection