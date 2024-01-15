<nav>
<header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="{{ route('home') }}" class="logo">
                          <img src="assets/images/jurselogo.png" alt=""  style="height: 70px;">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="{{ route('home') }}" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="{{ route('photo') }}"  class="active" >DATES et PHOTOS</a></li>
                          <li class="scroll-to-section"><a href="{{ route('venue') }}"  class="active" >Venue</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">PARTICIPATION</a>
                              <ul class="sub-menu">
                                  <li><a href="about-us.html">PROGRAM</a></li>
                                  <li><a href="our-services.html">GUIDELINES</a></li>
                                  <li><a href="contact-us.html">CALL FOR PAPER</a></li>
                                  <li><a href="contact-us.html">REGISTRATION</a></li>
                                  <li><a href="contact-us.html">SOCIAL EVENTS</a></li>
                              </ul>
                          </li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">PRESENTATION</a>
                              <ul class="sub-menu">
                                  <li><a href="{{ route('keynote') }}">KEYNOTES</a></li>
                                  <li><a href="our-services.html">TOPICS</a></li>
                                  <li><a href="{{ route('special') }}">SPECIAL SESSIONS</a></li>
                                  <li><a href="our-services.html">TECHNICAL TUTORIALS</a></li>
                                  <li><a href="our-services.html">STUDENTS CONTEST</a></li>
                                  <li><a href="our-services.html">EXHIBITORS</a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="{{ route('commit') }}"  class="active">COMMITES</a></li>
                          <li class="scroll-to-section"><a href= "{{ route('sponsors') }}"class="active">SPONSORS</a></li>
                          <li><a href="{{ route('contact-us') }}"      class="active" >Contact Support</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
</nav>
