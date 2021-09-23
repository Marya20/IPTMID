@extends('base')

<style>
    header.masthead {
  padding-bottom: 2rem;
  text-align: center;
  color: #fff;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: center center;
  background-size: cover;
  background-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0) 0%,rgba(0, 0, 0, 0.6) 100%),url("https://mymodernmet.com/wp/wp-content/uploads/2018/06/anne-geier-dog-photography-2.jpg");

    }
    header.masthead .masthead-heading {
  font-size: 3.25rem;
  font-weight: 700;
  line-height: 3.25rem;
  margin-bottom: 1rem;
  font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
@media (min-width: 768px) {
  header.masthead {
    padding-top: 17rem;
    padding-bottom: 12.5rem;
  }
  header.masthead .masthead-subheading {
    font-size: 2.25rem;
    font-style: italic;
    line-height: 2.25rem;
    margin-bottom: 2rem;
  }
  header.masthead .masthead-heading {
    font-size: 4.5rem;
    font-weight: 700;
    line-height: 4.5rem;
    margin-bottom: 4rem;
  }
}
.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}
    </style>
<header >
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" > &nbsp &nbsp &nbsp
       <a href="{{url('/')}}" class="navbar-brand " style="text-align:left; "><img src="https://pawsshelter.org/wp-content/uploads/2015/12/PAWS_LogoRefresh_FINAL_Horizontal-copy.png" alt=""  width="300" height="70"  ></a>
           <div class="collapse navbar-collapse " id="navbarResponsive">
               <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0 ">&nbsp   
                   <li class="nav-item "><a class="btn btn-outline-dark text-dark" href="{{url('/register')}}">Sign-up</a></li> &nbsp &nbsp &nbsp
                   <li class="nav-item"><a class="btn btn-outline-dark text-dark" href="{{url('/login')}}">Sign-in</a></li> &nbsp &nbsp &nbsp&nbsp &nbsp 
               </ul>
           </div>
       </div>
   </nav>
</header>
 <body id="page-top" style="background-color: #ededed;">
       
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase"  href="{{url('/login')}}">Get Started</a>
            </div>
        </header>
        
        <section class="page-section bg-light" id="portfolio"><br><br><br>
            <div class="container">
                <div class="text-center">
                  <h1>Who We Are</h1>
                    <p class="section-subheading text-muted" style="font-size:25;">At Vets In Practice, we believe that your pet is an important part of your family and therefore deserves the opportunity to live the happiest and healthiest life possible.
To provide them the finest in health care, we have carefully selected a diverse staff of exceptionally trained veterinarians, veterinary nurses and technicians, each with special interests and continuing education in companion and exotic animal medicine and surgery. Furthermore, we constantly strive to stay abreast with the latest technological advances in the field of veterinary medicine. Teamwork combined with state-of-the-art facilities allows us to provide excellent preventive pet care as well as handle even the most complicated cases, which makes us singularly unique in our profession.
And since we are all pet owners ourselves, when you bring your pets to Vets In Practice, you can be sure that they are getting the highest level of care, dedication and compassion – the same that we give our own.</p>
                    </div>
                <br><br><br> 
        </section>
@include('services')
</body>
@include('footer')
