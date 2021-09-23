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
                   <li class="nav-item "><a class="btn text-dark" href="{{url('/dashboard')}}">Dashboard</a></li> &nbsp &nbsp &nbsp
                   <li class="nav-item"><a class="btn  text-dark active" href="{{url('/profile')}}"> <strong>Profile</strong></a></li> &nbsp &nbsp &nbsp
                   <li class="nav-item"><a class="btn  text-dark" href="{{url('/')}}">Logout</a></li> &nbsp &nbsp &nbsp 

                  </ul>
           </div>
       </div>
   </nav><br>
   <section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color">User Profile</h3>
                            <h6 class="theme-color lead">Paw's Shelter Member</h6>
                            <?php foreach ($users as $prof): ?>
                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Name</label>
                                        <p><?= $prof->name?></p>
                                    </div>
                                    <div class="media">
                                        <label>Number</label>
                                        <p><?= $prof->number?></p>
                                    </div>
                                    <div class="media">
                                        <label>Phone Number</label>
                                        <p><?= $prof->number?></p>
                                    </div>
                                    <div class="media">
                                        <label>Email</label>
                                        <p><?= $prof->email?></p>
                                    </div>
                                </div>
                               
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" title="" alt="">
                        </div>
                    </div>
                </div>
               
            </div>
        </section><br><br><br>
        @include('footer')
        @stop