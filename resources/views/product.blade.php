@extends('master')
@section('content')
   
<style type="text/css">
  select
  {

  background-color: white; border:0.3px solid black; 
  }
</style>

<div class="container-fluid ">
   
      
       <div class="row ">
         <div class="col-md-2 mt-3">
            <h3><b>BROWS BY</b></h3>
            <p>showing 1 of 20 Result</p>

         </div>

              <div class="col-md-3 col-sm-3">
           <h5><a href="" style="color: #8CC63E">Categories</a></h5>
           <ul class="list-unstyled">
                   <li class="nav-item dropdown list-inline-item  w-100 ">
                 

             <select name="" id="city" style="background-color: #8CC63E">
             <option value="">Fruits tree </option>
               <option value="">Indoor plants</option>
             <option value="">outdoor plants </option>
             <option value="">saesonal plants</option>
            </select>
                </li>
                </ul>  
         </div>
          <div class="col-md-3 col-sm-3">
            <h5><a href="" style="color: #8CC63E">seeding</a></h5>
            <ul class="list-unstyled">
                  <li class="nav-item dropdown list-inline-item  w-100 ">
                 

             <select name="" id="city" style="background-color: #8CC63E">
             <option value="">vegitable seeding </option>
               <option value="">ornamental seeding</option>
             <option value="">seasonal flower </option>
             
            </select>
                </li> 
            
           
           
           </ul>
           

         </div>
          <div class="col-md-3 col-sm-3">
            <h5 ><a href="" style="color: #8CC63E">landSacpping</a></h5>
           <ul class="list-unstyled">
                 <li class="nav-item dropdown list-inline-item  w-100 ">
                 

             <select name="" id="city"  style="background-color: #8CC63E">
             <option value="">Garden desiging </option>
               <option value="">Lawn development</option>
             <option value="">lawn maintenance</option>
             <option value="">irrigation system</option>

             <option value="">Hard landscapping</option>
            </select>
                </li> 
            
           </ul>
           
         </div> 
           
         </div>
       </div>
  
   
<div class="container-fluid mt-3">
      <ul class="list-unstyled">
        <li class="list-inline-item">
          
         <h2 class="font-weight-bold ml-3 ">Populer Products</h2>
        </li>
          
        
        <li class="list-inline-item float-right mr-5">
          
         <button class="btn btn-info   mb-2 btn-rounded float-right" onclick="show2()" >See All</button>
            
        </li>
         
         
      </ul>
     </div>
    
       

     <!-- slider for populer categories -->
  


    <div class="container-fluid  "  >
    
   
      <div id="carousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
                   <div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card-deck">
          <div class="card bg-light ">
            <div class="a">
             <img  src="{{asset('pic/Peach-Saturn-Low-Chill.jpg')}}" class="card-img img-fluid imga" >  
                      <a href="productpage">  <p class="overlay">quick view</p></a>
                         </div>
                           <p class="b">30% </p> 
            


             <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
          <div class="card bg-light ">
            <div class="a">
            <img  src="{{asset('pic/Peach-Saturn-Low-Chill.jpg')}}" class="card-img-top" alt="...">
                         <a href="productpage">  <p class="overlay">quick view</p></a>
                         </div>
                         <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
          <div class="card bg-light">
            <div class="a">
            <img  src="{{asset('pic/Eucalyptus-Deglupta-Rainbow-Tree-870x870-1-280x280.jpg')}}" class="card-img-top" alt="...">
            <a href="productpage">  <p class="overlay ">quick view</p></a>
                         </div>
           <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
           <div class="card bg-light">
            <div class="a">
            <img src="{{asset('pic/fragrant (1).jpg')}}" class="card-img-top" alt="...">
            <a href="productpage">  <p class="overlay ">quick view</p></a>
                         </div>
            <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
        </div>
    </div>
    
  </div>
          </div>
          <div class="carousel-item ">
                 <div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card-deck">
          <div class="card bg-light ">
            <div class="a">
             <img  src="{{asset('pic/2-280x280.jpg')}}" class="card-img img-fluid imga" >  
                      <a href="productpage">  <p class="overlay">quick view</p></a>
                         </div>
                           <p class="b">30% </p> 
            


             <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
          <div class="card bg-light ">
            <div class="a">
            <img  src="{{asset('pic/Eucalyptus-Deglupta-Rainbow-Tree-870x870-1-280x280.jpg')}}" class="card-img-top" alt="...">
                         <a href="productpage">  <p class="overlay">quick view</p></a>
                         </div>
                         <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
          <div class="card bg-light">
            <div class="a">
            <img  src="{{asset('pic/Albizia-Saman-Rain-Tree-870x870-1-280x280.jpg')}}" class="card-img-top" alt="...">
            <a href="productpage">  <p class="overlay ">quick view</p></a>
                         </div>
           <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
           <div class="card bg-light">
            <div class="a">
            <img  src="{{asset('pic/Campsis-Grandiflora-_Morning-Calm_-0-870x870-1-280x280.jpg')}}" class="card-img-top" alt="...">
            <a href="productpage">  <p class="overlay ">quick view</p></a>
                         </div>
            <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
        </div>
    </div>
    
  </div>
          </div>
    
            
          
         
        </div>
        <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>



   
     <!-- slider for populer categories -->
  <div class="container-fluid mt-3">
      <ul class="list-unstyled">
        <li class="list-inline-item">
          
         <h2 class="font-weight-bold ml-3 ">Populer Products</h2>
        </li>
          
        
        <li class="list-inline-item float-right mr-5">
          
         <button class="btn btn-info   mb-2 btn-rounded float-right" onclick="show2()" >See All</button>
            
        </li>
         
         
      </ul>
     </div>


    <div class="container-fluid  "  >
    
   
      <div id="carousel2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
                   <div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card-deck">
          <div class="card bg-light ">
            <div class="a">
             <img  src="{{asset('pic/Peach-Saturn-Low-Chill.jpg')}}" class="card-img img-fluid imga" >  
                      <a href="productpage">  <p class="overlay">quick view</p></a>
                         </div>
                           <p class="b">30% </p> 
            


             <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
          <div class="card bg-light ">
            <div class="a">
            <img  src="{{asset('pic/Peach-Saturn-Low-Chill.jpg')}}" class="card-img-top" alt="...">
                         <a href="productpage">  <p class="overlay">quick view</p></a>
                         </div>
                         <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
          <div class="card bg-light">
            <div class="a">
            <img  src="{{asset('pic/Eucalyptus-Deglupta-Rainbow-Tree-870x870-1-280x280.jpg')}}" class="card-img-top" alt="...">
            <a href="productpage">  <p class="overlay ">quick view</p></a>
                         </div>
           <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
           <div class="card bg-light">
            <div class="a">
            <img src="{{asset('pic/fragrant (1).jpg')}}" class="card-img-top" alt="...">
            <a href="productpage">  <p class="overlay ">quick view</p></a>
                         </div>
            <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
        </div>
    </div>
    
  </div>
          </div>
          <div class="carousel-item ">
                 <div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card-deck">
          <div class="card bg-light ">
            <div class="a">
             <img  src="{{asset('pic/2-280x280.jpg')}}" class="card-img img-fluid imga" >  
                      <a href="productpage">  <p class="overlay">quick view</p></a>
                         </div>
                           <p class="b">30% </p> 
            


             <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
          <div class="card bg-light ">
            <div class="a">
            <img  src="{{asset('pic/Eucalyptus-Deglupta-Rainbow-Tree-870x870-1-280x280.jpg')}}" class="card-img-top" alt="...">
                         <a href="productpage">  <p class="overlay">quick view</p></a>
                         </div>
                         <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
          <div class="card bg-light">
            <div class="a">
            <img  src="{{asset('pic/Albizia-Saman-Rain-Tree-870x870-1-280x280.jpg')}}" class="card-img-top" alt="...">
            <a href="productpage">  <p class="overlay ">quick view</p></a>
                         </div>
           <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
           <div class="card bg-light">
            <div class="a">
            <img  src="{{asset('pic/Campsis-Grandiflora-_Morning-Calm_-0-870x870-1-280x280.jpg')}}" class="card-img-top" alt="...">
            <a href="productpage">  <p class="overlay ">quick view</p></a>
                         </div>
            <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
        </div>
    </div>
    
  </div>
          </div>
    
            
          
         
        </div>
        <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>



       
   

     <!-- slider for populer categories -->
  
<div class="container-fluid mt-3">
      <ul class="list-unstyled">
        <li class="list-inline-item">
          
         <h2 class="font-weight-bold ml-3 ">Populer Products</h2>
        </li>
          
        
        <li class="list-inline-item float-right mr-5">
          
         <button class="btn btn-info   mb-2 btn-rounded float-right" onclick="show2()" >See All</button>
            
        </li>
         
         
      </ul>
     </div>

    <div class="container-fluid  "  >
    
   
      <div id="carousel3" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
                   <div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card-deck">
          <div class="card bg-light ">
            <div class="a">
             <img  src="{{asset('pic/Peach-Saturn-Low-Chill.jpg')}}" class="card-img img-fluid imga" >  
                      <a href="productpage">  <p class="overlay">quick view</p></a>
                         </div>
                           <p class="b">30% </p> 
            


             <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
          <div class="card bg-light ">
            <div class="a">
            <img  src="{{asset('pic/Peach-Saturn-Low-Chill.jpg')}}" class="card-img-top" alt="...">
                         <a href="productpage">  <p class="overlay">quick view</p></a>
                         </div>
                         <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
          <div class="card bg-light">
            <div class="a">
            <img  src="{{asset('pic/Eucalyptus-Deglupta-Rainbow-Tree-870x870-1-280x280.jpg')}}" class="card-img-top" alt="...">
            <a href="productpage">  <p class="overlay ">quick view</p></a>
                         </div>
           <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
           <div class="card bg-light">
            <div class="a">
            <img src="{{asset('pic/fragrant (1).jpg')}}" class="card-img-top" alt="...">
            <a href="productpage">  <p class="overlay ">quick view</p></a>
                         </div>
            <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
        </div>
    </div>
    
  </div>
          </div>
          <div class="carousel-item ">
                 <div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="card-deck">
          <div class="card bg-light ">
            <div class="a">
             <img  src="{{asset('pic/2-280x280.jpg')}}" class="card-img img-fluid imga" >  
                      <a href="productpage">  <p class="overlay">quick view</p></a>
                         </div>
                           <p class="b">30% </p> 
            


             <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
          <div class="card bg-light ">
            <div class="a">
            <img  src="{{asset('pic/Eucalyptus-Deglupta-Rainbow-Tree-870x870-1-280x280.jpg')}}" class="card-img-top" alt="...">
                         <a href="productpage">  <p class="overlay">quick view</p></a>
                         </div>
                         <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
          <div class="card bg-light">
            <div class="a">
            <img  src="{{asset('pic/Albizia-Saman-Rain-Tree-870x870-1-280x280.jpg')}}" class="card-img-top" alt="...">
            <a href="productpage">  <p class="overlay ">quick view</p></a>
                         </div>
           <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
           <div class="card bg-light">
            <div class="a">
            <img  src="{{asset('pic/Campsis-Grandiflora-_Morning-Calm_-0-870x870-1-280x280.jpg')}}" class="card-img-top" alt="...">
            <a href="productpage">  <p class="overlay ">quick view</p></a>
                         </div>
            <div class="card-body">
                          <h5 class="card-title">Lehnga<span class="float-right text-danger">Rs. 4000 <del class="text-secondary"><small>5000</small></del>  </span></h5>
                           
                           
                             <p class="card-text "><button class="btn btn-info btn-sm float-right">ORDER NOW</button></p>
                             <span class="fa fa-star checked text-warning"></span>
                             <span class="fa fa-star checked text-warning"></span>
                              <span class="fa fa-star checked text-warning"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span> </div>
                        
          </div>
        </div>
    </div>
    
  </div>
          </div>
    
            
          
         
        </div>
        <a class="carousel-control-prev" href="#carousel3" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel3" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

@endsection