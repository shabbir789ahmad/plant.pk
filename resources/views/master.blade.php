<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.0.min.js" 
        integrity="sha384-JUMjoW8OzDJw4oFpWIB2Bu/c6768ObEthBMVSiIx4ruBIEdyNSUQAjJNFqT5pnJ6" 
        crossorigin="anonymous">
</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href=" {{url('/home.css')}}	">
<link rel="stylesheet" type="text/css" href=" {{url('/homeproductround.css')}} ">


<link rel="stylesheet" type="text/css" href="  {{url('signin.css')}} ">

<link rel="stylesheet" type="text/css" href=" {{url('product.css')}} ">
<link rel="stylesheet" type="text/css" href=" {{url('css/cart.css')}} ">

<link rel="stylesheet" type="text/css" href=" {{url('css/vendor.css')}} ">

<link rel="stylesheet" type="text/css" href=" {{url('css/design.css')}} ">
	<title></title>

</head>
<body >
	{{View::make('header')}}
	 @yield('content')
	

	{{View::make('footer')}}

	<script type="text/javascript">
  
  function show()
  {
  let a=document.getElementById("con1");
  let b=document.getElementById("con2");
  a.style.visibility="hidden";
  b.style.visibility="visible"
  }
  function show2()
  {
  let a=document.getElementById("con1");
  let b=document.getElementById("con2");
  a.style.visibility="visible";
  b.style.visibility="hidden"
  }
function open()
{
  let a=document.getElementById("search");
  a.style.visibility="visible";
}
  function showsearch()
  {
    document.getElementById("searchbar").style.display="block";
  }  

    
</script>
</body>
</html>
