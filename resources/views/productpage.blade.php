@extends('master')
@section('content')
 <style type="text/css">
 body
{
  margin:0;
  padding: 0;
  font-family: 
Montserrat,Arial, Helvetica, sans-serif;
}
hr
{
  width: 100%;
  height: 2%;
}
.cart

{
  padding-left: 30%;
  padding-right: 30%;
  display: block;
}


.imga
{
  position: relative;
}
.b
{
  position: absolute;
  left: 70%;
  top: 2%;
  padding: 3%;
  color: black;
  
  border-radius: 50%;
  background-color: white;
}
select{
    width: 100%;
  padding: 6px 10px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}
.overlay {
  position: absolute; 
  bottom: 30%;
  left: 0%; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 25px;
  padding: 15px;
  text-align: center;
}

.imga{
  display: block;
  width: 100%;
  height: auto;
}
.a:hover .overlay {
  opacity: 1;
}
</style>
<div class="container-fluid">
  
      <div class="row">
      
         <div class="col-md-2 col-sm-2 bg-light border mt-3 mb-2" style="overflow: scroll; height: 600px;">
          <div class="box" onclick="changepic(this)">
             <img  id="img1" src="{{asset('pic/Eucalyptus-Deglupta-Rainbow-Tree-870x870-1-280x280.jpg')}}" class="img-fluid d-block ml-4 mt-1">
                </div>
                <div class="box" onclick="changepic(this)">
               <img  src=" {{asset('pic/Campsis-Grandiflora-_Morning-Calm_-0-870x870-1-280x280.jpg')}} " class="img-fluid  mt-1 ml-4 d-block">
          </div>
           <div class="box" onclick="changepic(this)">
               <img  src="{{asset('pic/Albizia-Saman-Rain-Tree-870x870-1-280x280.jpg')}} " class="img-fluid mt-1 ml-4 d-block">
             </div>
             <div class="box" onclick="changepic(this)">
               <img  src="{{asset('pic/Peach-Saturn-Low-Chill.jpg')}}" class="img-fluid mt-1 ml-4 d-block">
             </div>
             <div class="box" onclick="changepic(this)">
               <img  src="{{asset('pic/ryan-carpenter-QkyhRXAdBjs-unsplash.jpg')}}" class="img-fluid mt-1 ml-4 d-block">
             </div>
         </div>
         <div class="col-md-5 col-sm-10 mt-3 ">
            <div class="container mt-1  " id="mimage">
               <img  id="mimg" src="{{asset('pic/ryan-carpenter-QkyhRXAdBjs-unsplash.jpg')}}" class="img-fluid d-block imgb" style="width: 100%; height: 600px; overflow: hidden; ">
                    
             </div>
         </div>

            <div class="col-md-5 mt-2 mr-0 col-sm-12 ">
            <h3 class="  ml-1 mt-3  "> Plant Name <span class="float-right mr-2 mb-1"><a href="store"><button class="btn btn-lg btn-info mr-2">View Store</button></a>
              <button class="btn btn-lg btn-info">follow</button></span></h3>
            <hr>
            <h5 class="text-primary mt-0">Rs. 2000 <br> <span><small class="text-secondary">U1199SU-2PC-DPK</small></span></h5>
          
             <h6 class="mt-5">
               There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,.
             </h6>
             
              
              <h4 class="ml-1 text-dark">Size</h4>
              <ul class="list-unstyled">
                <li class="list-inline-item"><button class="btn btn-sm btn-outline-secondary">Small Size</button>  </li>
                <li class="list-inline-item"><button class="btn btn-sm btn-outline-secondary">medium Size</button>  </li>
                <li class="list-inline-item"><button class="btn btn-sm btn-outline-secondary">Larg Size</button>  </li>
              </ul>
           
              
               
              
            <a href="cart">

               <button class="btn btn-success cart ml-5 mt-2 mb-2" >ADD TO CART</button>
             </a>
             <a href="buy">

               <button class="btn btn-warning cart ml-5 mt-2 mb-2" >ADD TO CART</button>
             </a>
         </div>
      </div>
   </div>

<!-- other color div_-->
<hr>
  <div class="container-fluid mt-3">
      <ul class="list-unstyled">
        <li class="list-inline-item">
          
         <h2 class="font-weight-bold ml-3 ">Similar plant</h2>
        </li>
        <li class="list-inline-item float-right mr-5">
          
         <button class="btn btn-warning   mb-2 btn-rounded float-right">See All</button>
        </li>
      </ul>
     </div>

<!-- item slider-->
  

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
<script type="text/javascript">
    
    function changepic(a)
    {
      document.querySelector(".imgb").src=a.children[0].src;
       
    }
    function incr()
    {
      let a=document.getElementById('val');
       a.value++;
    }
function decr()
{
  let a=document.getElementById('val');
       a.value--;
    if (a.value<1) {
      a.value=1;
    }
}
 

</script>
<script src="/path/to/cdn/jquery.min.js"></script>
<script src="/path/to/dist/easyzoom.js"></script> 
@endsection