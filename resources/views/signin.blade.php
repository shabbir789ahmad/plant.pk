@extends('master');
@section('content');
<style type="text/css">
select{
    width: 100%;
  padding: 6px 10px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}
body
{
  margin:0;
  padding: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.leftbox
{
  max-width: 100%;
  height: 70%;
  margin-top: 10%;
  padding-bottom: 20%;
}
.leftbox h3
{
  margin-top: 30%;
  font-weight: 2vw;
}
.leftbox button
{
  padding-right: 10%;
  padding-left: 10%;
}.rightbox
{
  max-width: 100%;
  height: 100%;
  margin-top: 10%;
  padding-bottom: 9.4%;
   
}
.rightbox button
{
  padding-right: 20%;
  padding-left: 20%;
  margin-left:25%;
}
.footer
{
  
  font-family: Arial, Helvetica, sans-serif;

    line-height: 30px;
    color: #F1F1F1;
}

    </style>

    <div class="container-fluid bg-dark ">
         <div class="container">
     <div class="row">

                  <div class="col-md-6 col-sm-12 rightbox border rounded-left bg-light">
         <h3 class="font-weight-bold text-center mt-5">Create Account</h3>
            <ul class="list-unstyled text-center  ">
           <li class="list-inline-item m-3  "  ><i class="fab fa-facebook-f  "></i></li>
           <li class="list-inline-item  m-3"><i class="fab fa-twitter "></i></li>
           <li class="list-inline-item m-3"><i class="fab fa-instagram "></i></li>
         </ul>

           <form>
          <div class="form-group mt-5">
            <div class="form-group">
        <input type="password" class="form-control " placeholder="Name" id="name">
       </div>

          <input type="email" class="form-control  text-dark" id="Email1" placeholder="Email" >
         
       </div>
        <div class="form-group">
        <input type="password" class="form-control text-dark" placeholder="Password" id="Password1">
       </div>

        <button class="btn btn-outline-dark  rounded-pill  ">Sign in</button>
       </form>
         </div>



        <div class="col-md-6 col-sm-12 leftbox text-center rounded-right ">
          <h3 class="font-weight-bold text-light ">Wellcome to company</h3>
          <p>if you already have an account please</p>
          <button class="btn btn-outline-light  rounded-pill  ">Log In</button>
     </div>
       
 </div>
</div>
 </div>



@endsection