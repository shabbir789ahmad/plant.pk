@extends('master')
@section('content')


    <div class="container-fluid mt-5"  style="background-color: white;">
      <ul class="list-unstyled">
        <li class="list-inline-item">
          
         <h2 class="font-weight-bold ml-3 ">Popular services</h2>
        </li>
        <li class="list-inline-item float-right mr-5">
         <a href=""> 
         <button class="btn btn-info btn-lg  mb-2 btn-rounded float-right">See All</button>
            </a>
        </li>
         
      </ul>
     </div>
    


    <div class="container-fluid mt-5 "  >
        
            <div class="card-deck">
          <div class="card  ">
            <div class="a">
             <img  src="{{asset('pic/Peach-Saturn-Low-Chill.jpg')}}" class="card-img img-fluid imga" >  
                      <a href="list">  <p class="overlay">view all</p></a>
                         </div>
                           <p class="b">30% </p> 
                   <div class="card-body text-center text-dark">
                        <a href="list"> <h5 style="font-family: Open Sans, sans-serif; color:black">Fruit Plants</h5></a>
                   </div>


             
                        
          </div>
          <div class="card  ">
            <div class="a">
            <img  src="{{asset('pic/Peach-Saturn-Low-Chill.jpg')}}" class="card-img-top" alt="...">
                         <a href="list">  <p class="overlay">view all</p></a>
                         </div>
                        <div class="card-body text-center text-dark">
                       <a href="list"> <h5 style="font-family:  sans-serif">Indoo Plants</h5></a>
                   </div>
                       
                        
          </div>
          <div class="card ">
            <div class="a">
            <img  src="{{asset('pic/Eucalyptus-Deglupta-Rainbow-Tree-870x870-1-280x280.jpg')}}" class="card-img-top" alt="...">
            <a href="list">  <p class="overlay ">view all</p></a>
                         </div>
          <div class="card-body text-center text-dark">
                      <a href="list">  <h5 style="font-family:  sans-serif">Outdoor Plants</h5></a>
                   </div>
                        
          </div>
           <div class="card ">
            <div class="a">
            <img src="{{asset('pic/fragrant (1).jpg')}}" class="card-img-top" alt="...">
            <a href="list">  <p class="overlay "> view all</p></a>
          <div class="card-body text-center text-dark">
                       <a href="list">  <h5 style="font-family:  sans-serif">Flower plants</h5></a>
                   </div>
                        
          </div>
        </div>
    </div>
   
        
    </div>

  
 <div class="container-fluid mb-3">

    <div class="card-deck mt-5">
          <div class="card  ">
            <div class="a">
             <img  src="{{asset('pic/2-280x280.jpg')}}" class="card-img img-fluid imga" >  
                      <a href="list">  <p class="overlay"> view all</p></a>
                         </div>
                           <p class="b">30% </p> 
            
                      <div class="card-body text-center text-dark">
                      <a href="list">    <h5 style="font-family:  sans-serif">Summer tree</h5></a>
                   </div>

            
                        
          </div>
          <div class="card  ">
            <div class="a">
            <img  src="{{asset('pic/Eucalyptus-Deglupta-Rainbow-Tree-870x870-1-280x280.jpg')}}" class="card-img-top" alt="...">
                         <a href="list">  <p class="overlay">view all</p></a>
                         </div>
                     <div class="card-body text-center">
                      <a href="list">    <h5 style="font-family:  sans-serif">seasonal Tree</h5></a>
                   </div>
                        
          </div>
          <div class="card ">
            <div class="a">
            <img  src="{{asset('pic/Albizia-Saman-Rain-Tree-870x870-1-280x280.jpg')}}" class="card-img-top" alt="...">
            <a href="list">  <p class="overlay "> view all</p></a>
                         </div>
           <div class="card-body text-center">
                     <a href="list"> <h5 style="font-family:  sans-serif">indoor plant</h5></a>
                   </div>
                        
          </div>
           <div class="card ">
            <div class="a">
            <img  src="{{asset('pic/Campsis-Grandiflora-_Morning-Calm_-0-870x870-1-280x280.jpg')}}" class="card-img-top" alt="...">
            <a href="list">  <p class="overlay "> view all</p></a>
                         </div>
           
                        <div class="card-body text-center test-dark">
                     <a href="list">     <h5 style="font-family:  sans-serif">fruits plants</h5></a>
                   </div>
          </div>
        </div>
    </div>
@endsection