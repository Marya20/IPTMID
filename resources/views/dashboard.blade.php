
@extends('base')
@section('content')

<style>
   header.masthead {
  padding-bottom: 8rem;
  text-align: center;
  color: #fff;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center center;
  background-size: cover;
    background-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0) 0%,rgba(0, 0, 0, 0.0) 100%),url("https://c2-preview.prosites.com/231641/wy/images/slide-1.png");

  }
  @media (min-width: 768px) {
  header.masthead {
    padding-top: 10rem;
    padding-bottom: 30.5rem;
  }
}


</style>

<nav class="navbar navbar-expand-lg  bg-transparent" > &nbsp &nbsp &nbsp
       <a href="{{url('/')}}" class="navbar-brand " style="text-align:left; "><img src="https://pawsshelter.org/wp-content/uploads/2015/12/PAWS_LogoRefresh_FINAL_Horizontal-copy.png" alt=""  width="300" height="70"  ></a>
           <div class="collapse navbar-collapse " id="navbarResponsive">
               <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0 ">&nbsp   
                   <li class="nav-item "><a class="btn text-dark active" href="{{url('/dashboard')}}"><strong>Dashboard</strong></a></li> &nbsp &nbsp &nbsp
                   <li class="nav-item"><a class="btn  text-dark" href="{{url('/profile')}}">Profile</a></li> &nbsp &nbsp &nbsp
                   <li class="nav-item"><a class="btn  text-dark" href="{{url('/')}}">Logout</a></li> &nbsp &nbsp &nbsp 

                  </ul>
           </div>
       </div>
   </nav><br>
   <header class="masthead">
</header>
<body id="page-top" style="background-color: #ededed;">

<section class="page-section bg-light" id="portfolio"><br><br><br>
            <div class="container">
                <div class="text-center">
                    <h3 class="section-heading text-uppercase text-dark">Become a foster family and save more lives.</h3>
                    <h5 class="section-subheading text-muted"><strong>You can be part of the Paw's Foster Care Program that saves more than 2,000 lives each year.</strong></h5>
                <p>Foster parents provide temporary care for cats, kittens, dogs and puppies in their own King and Snohomish County homes. Some animals need as little as two weeks of care while others may need up to three months.</p>
                  </div>
                <br><br><br> 
        </section>
<section>
<div class="container">
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="https://i.insider.com/5484d9d1eab8ea3017b17e29?width=600&format=jpeg&auto=webp"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRv7t4GtTX9MDwzbf67MQFaM6fxiQUZ4FImvg&usqp=CAU"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
      
    />
    <img
    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDeAL_I9aH_UCnS1Bw1-t_BJw4s7ZETyah5g&usqp=CAU"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
      
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4it_Jqeo2FMOA-0f2yJk5uYJ3YTa1j7MVSA&usqp=CAU"

      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOrjvn9rVlNmfM1hrAo7c7YDtTb9l-ufX55A&usqp=CAU"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
    <img
    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBKIX7gbxMsddmToo51me-ei8awygtEOc_ng&usqp=CAU"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNohB87i48MW7eYVamCv1JcFdoXX9QbX9pyQ&usqp=CAU"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img
    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQI4chzdMV_GdSsuikydFTkgacUk4nqcaAH3g&usqp=CAU"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
    <img
      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTS50XnWFRMalUZ--SX7sLprZ9u3i-1cAlJ5A&usqp=CAU"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
    
  </div>
  
</div>
</section>

        <br><br> <br>
@include('services')
</body>
 
@include('footer')
