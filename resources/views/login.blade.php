@extends('master')
@section('content')

<style type="text/css">   
select{
    width: 100%;
  padding: 6px 10px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}
</style>
    <div class="container-fluid bg-dark">
         <div class="container">
     <div class="row">
        <div class="col-md-6 leftbox text-center rounded-left ">
          <h3 class="font-weight-bold text-light ">Wellcome to company</h3>
          <p>if you Don't have an account please</p>
          <button class="btn btn-outline-light  rounded-pill  ">Sign up</button>
     </div>
        <div class="col-md-6 rightbox bg-light" >
         <h3 class="font-weight-bold text-center mt-5">Sign in</h3>
            <ul class="list-unstyled text-center  ">
           <li class="list-inline-item m-3  "  ><i class="fab fa-facebook-f  "></i></li>
           <li class="list-inline-item  m-3"><i class="fab fa-twitter "></i></li>
           <li class="list-inline-item m-3"><i class="fab fa-instagram "></i></li>
         </ul>

           <form>
          <div class="form-group mt-5">
            
          <input type="email" class="form-control" id="Email1" placeholder="Email" >
         
       </div>
        <div class="form-group">
        <input type="password" class="form-control " placeholder="Password" id="Password1">
       </div>

        <button class="btn btn-outline-dark  rounded-pill  ">Sign in</button>
       </form>
         </div>
 </div>
 </div>




@endsection