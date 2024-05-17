@extends('frontend.layouts.master')
@section('title', 'Project')
@section('style')
<style>
    .accordion {
  border: 1px solid #ccc;
}

.accordion-item {
  border-bottom: 1px solid #ccc;
}

.accordion-header {
  padding: 10px;
  background-color: #f5f5f5;
  cursor: pointer;
}

.accordion-content {
  padding: 10px;
  display: none;
}

.accordion-content p {
  margin: 0;
}

.active {
  display: block;
}

</style>

@endsection
@section('contents')

<div class="projects-page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Acheivement and Success Stories</h1>
                <span> </span>
            </div>
        </div>
    </div>
</div>


<div class="service-page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>BUILD SOMETHING BIG WITH US</h1>
          <span>We are over 2365365 Hours of experience</span>
        </div>
      </div>
    </div>
  </div>

  <div class="single-services" style="margin-top:40px;">
    <div class="container">
      <div class="row" id="tabs">
        <div class="col-md-4">
          <ul>
            <li><a href='#tabs-1'>Sabic Head Quarter Building Jubail <i class="fa fa-angle-right"></i></a></li>
            <li><a href='#tabs-2'>King’s College Hospital, Jeddah <i class="fa fa-angle-right"></i></a></li>
            <li><a href='#tabs-3'>King Faysal Air Academy, Majmaa.<i class="fa fa-angle-right"></i></a></li>
            <li><a href='#tabs-4'>King Salman Air Base Project, Riyadh<i class="fa fa-angle-right"></i></a></li>
            <li><a href='#tabs-5'>Diriyah Gate Development Authority(DGDA) Gyratory Tunnels, Riyadh <i class="fa fa-angle-right"></i></a></li>
            <li><a href='#tabs-6'>Avenues Mall, Riyadh <i class="fa fa-angle-right"></i></a></li>
            <li><a href='#tabs-7'>DGDA Super Basement <i class="fa fa-angle-right"></i></a></li>
            <li><a href='#tabs-8'>Jafurah Gas Processing Facilities (Package #1) <i class="fa fa-angle-right"></i></a></li>
            <li><a href='#tabs-9'>RJPH2-RWCC-JUBAIL<i class="fa fa-angle-right"></i></a></li>
            <li><a href='#tabs-10'>Construction of Water Storage Reservoirs & Utility Tunnels, Neom City<i class="fa fa-angle-right"></i></a></li>


          </ul>
        </div>
        <div class="col-md-8">
          <section class='tabs-content'>
              <article id='tabs-1'>
                  <h3> Sabic Head Quarter Building Jubail <!-- This Space for Project Name --></h3>
                  <table >
                    <br>
                    <tr>
                        <td><i class="fa fa-user"> <!-- This Space for icon --> <b> Project Onwer </b></i></td>
                        <td> Saudi Arabia's Basic Industries Corporation(SABIC)  </td>
                        <td> <!-- This for blank space--> </td>
                        <td><i class="far fa-building"> <!-- This Space for icon --></i> <b>Main Contactor </b></td>
                        <td>Shapoorji Pallonji LLC <!-- This Space for Main Contactor name --></td>
                    </tr>
                     <tr>   <td colspan="4">  <br><br> </td></tr>
                    <tr>
                        <td><i class="far fa-money-bill-alt"> <!-- This Space for icon --> <b> Budget </b></i></td>
                        <td> 79,000,000.00 SAR </td>
                        <td>  </td>
                        <td><i class="fa fa-arrows-alt">  </i> <b>Conact Type </b></td>
                        <td>Remeasure </td>
                    </tr>
                    <tr>   <td colspan="4">  <br><br> </td></tr>
                    <tr>
                        <td><i class="fa fa-toolbox"> <!-- This Space for icon --> <b> Type of Work </b></i></td>
                        <td>R.C.C Works </td>
                        <td>  </td>
                        <td><i class="fa fa-home"> <b>Sub Contact </b></i></td>
                        <td> </td>
                    </tr>
                    <tr>
                       <td colspan="4">  <br><br> </td></tr>
                    <tr>
                         <td colspan="4">
                           <img src="{{ asset('frontend') }}/assets/images/running_projects/project11.jpg"    title="Project Photo"
                               alt="1">
                         </td>
                    </tr>
                  </table>
              </article>
              <article id='tabs-2'>
                  <h3> King’s College Hospital, Jeddah <!-- This Space for Project Name --></h3>
                  <table >
                    <br>
                    <tr>
                        <td style="width:5%"><i class="fa fa-user"> <!-- This Space for icon --></i></td>
                        <td style="width:40%"> <b> Project Onwer </b></td>
                        <td style="width:10%"> </td>
                        <td style="width:5%"><i class="fa fa-building"> <!-- This Space for icon --></i></td>
                        <td style="width:40%"> <b> Main Contactor </b></td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>King’s College Hospital Authority, Kingdom of Saudi Arabia</td>
                        <td> </td>
                        <td> </td>
                        <td>Shapoorji Pallonji LLC </td>
                    </tr>

                    <tr>   <td colspan="4">  <br><br> </td></tr>
                    <tr>
                        <td style="width:5%"><i class="far fa-money-bill-alt"> <!-- This Space for icon --></i></td>
                        <td style="width:40%"> <b>Budget </b></td>
                        <td style="width:10%"> </td>
                        <td style="width:5%"><i class="fa fa-arrows-alt"> <!-- This Space for icon --></i></td>
                        <td style="width:40%"> <b> Conact Type  </b></td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td> 14,000,000.00 SAR </td>
                        <td> </td>
                        <td> </td>
                        <td>Remeasure </td>
                    </tr>
                         <tr>   <td colspan="4">  <br>  </td></tr>

                    <tr>
                        <td style="width:5%"><i class="fa fa-toolbox"> <!-- This Space for icon --></i></td>
                        <td style="width:40%"> <b>Type of Work </b></td>
                        <td style="width:10%"> </td>
                        <td style="width:5%"><i class="fa fa-arrows-alt"> <!-- This Space for icon --></i></td>
                        <td style="width:40%"> <b> Conact Type  </b></td>
                    </tr>
                    <tr>
                        <td> </td>
                        <td>R.C.C Works</td>
                        <td> </td>
                        <td> </td>
                        <td>Sub Contact </td>
                    </tr>
                    <tr>   <td colspan="4">  <br>  </td></tr>
                    <tr>
                         <td colspan="4">
                           <img src="{{ asset('frontend') }}/assets/images/running_projects/project12.jpg"    title="Project Photo"
                               alt="1">
                         </td>
                    </tr>
                  </table>
              </article>
          </section>
        </div>
      </div>
    </div>
  </div>


  <!-- SERVICE SECTION STARTED -->
<div class="row" >
    <div class="col-md-12" style="padding-bottom:0px;margin-bottom:30px; text-align:center ">
        <div class="section-heading" style="margin-bottom: 0px;">
            <h2> </h2>
        </div>
        <span> </span>
    </div>
</div>


<div class="team" style="margin:10px; padding:10px;">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="project_page_heading">
                    <h2><em>Our Running Project Details</em></h2>
                </div>
            </div>
        </div>
        <!-- Company Running Projects Information SECTION STARTED -->
        <div class="row" style="padding:20px;">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">SN</th>
                            <th scope="col">PROJECT</th>
                            <th scope="col">CLIENT COMPANY</th>
                            <th scope="col">TYPE OF WORK</th>
                            <th scope="col">VALUE (SAR)</th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider">
                          <tr>
                            <th scope="row">1</th>
                            <td>Sabic Head Quarter Building Jubail</td>
                            <td>Shapoorji Pallonji LLC </td>
                            <td>R.C.C Works</td>
                            <td>79,000,000.00</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Sabic Head Quarter Building  JubaiL</td>
                            <td>Shapoorji Pallonji LLC</td>
                            <td>Finishing Works</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>King’s College Hospital, Jeddah</td>
                            <td>Shapoorji Pallonji LLC</td>
                            <td>R.C.C Works</td>
                            <td>14,000,000.00</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>King Faysal Air Academy, Majmaa.</td>
                            <td>Nesma Joint Venture</td>
                            <td>R.C.C Works</td>
                            <td>29,166,310.00</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>King Salman Air Base Project, Riyadh </td>
                            <td>Nesma Joint Venture</td>
                            <td>R.C.C Works</td>
                            <td>4,500,000.00</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Diriyah Gyratory Tunnels, Riyadh</td>
                            <td>Nesma & Partners Contracting Co.</td>
                            <td>R.C.C Works</td>
                            <td>118,572,450.00</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>Avenues Mall, Riyadh</td>
                            <td>Nesma & Partners Contracting Co.</td>
                            <td>R.C.C Works</td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>Diriyah Gate Development Authority(DGDA) Super Basement</td>
                            <td>M/s Salini Saudi Arabia</td>
                            <td>R.C.C Works</td>
                            <td>50,000,000.00</td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>Jafurah Gas Processing Facilities (Package #1)</td>
                            <td>L & T Hydrocarbon</td>
                            <td>Civil & R.C.C Works</td>
                            <td>47,000,000.00</td>
                          </tr>
                          <tr>
                            <th scope="row">10</th>
                            <td>RJPH2-RWCC-JUBAIL</td>
                            <td>Saudi Services For Electro Mechanic(SSEM) Works Co.</td>
                            <td>Civil & R.C.C Works</td>
                            <td>13,00,000.00</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <!-- Company Running Projects Information SECTION ENDED -->
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Diriyah Gate Development Authority</h5>
                        <div class="image text-center">
                            <a href="https://dgda.gov.sa/home.aspx" target="_blank">
                                <img src="{{ asset('frontend') }}/assets/images/running_projects/project.png"
                                    style="height:250px; width:80%;" alt="completed-project1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">King Salam Airbase ATC Tower</h5>
                        <div class="image text-center">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/assets/images/running_projects/project1.jpeg"
                                    style="height:250px; width:80%;" alt="completed-project1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Avenue Mall, Riyadh</h5>
                        <div class="image text-center">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/assets/images/running_projects/project2.png"
                                    style="height:250px; width:80%;" alt="completed-project1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Aramco Gas Pipeline Project, Jafurah</h5>
                        <div class="image text-center">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/assets/images/running_projects/project3.jpeg"
                                    style="height:250px; width:80%;" alt="completed-project1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Green Village, Diriyah Gate Development Authority (DGDA),Riyadh</h5>
                        <div class="image text-center">
                            <a href="https://dgda.gov.sa/home.aspx" target="_blank">
                                <img src="{{ asset('frontend') }}/assets/images/running_projects/project4.png"
                                    style="height:250px; width:80%;" alt="completed-project1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">KAFF Majmaah Project</h5>
                        <div class="image text-center">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/assets/images/running_projects/project5.jpeg"
                                    style="height:250px; width:80%;" alt="completed-project1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">KCH Jeddah Project</h5>
                        <div class="image text-center">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/assets/images/running_projects/project6.png"
                                    style="height:250px; width:80%;" alt="completed-project1">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>

    </div>
</div>

<div class="team" style="margin:10px; padding:10px;">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="project_page_heading">
                    <h2><em>Some of Our Completed Project Details</em></h2>
                    <span></span>
                </div>
            </div>

            <div class="owl-partners owl-carousel" style="margin:10px;">

                <div class="partner-item">
                    <a href="https://dgda.gov.sa/home.aspx" target="_blank">
                        <img src="{{ asset('frontend') }}/assets/images/completed_projects/project.jpeg" style="height:250px;" title="1"
                            alt="1">
                        <div class="down-content" style="text-align:center">
                            <h6> Salman Park Riyadh</h6>
                            <span></span>
                        </div>
                    </a>
                </div>

                <div class="partner-item">
                    <a href="https://dgda.gov.sa/home.aspx" target="_blank">
                        <img src="{{ asset('frontend') }}/assets/images/completed_projects/project1.jpeg" style="height:250px;" alt="">
                        <div class="down-content" style="text-align:center">
                            <h6>Diriyah Gate Development Authority</h6>

                        </div>
                    </a>
                </div>

                <div class="partner-item">
                    <a href="https://dgda.gov.sa/home.aspx" target="_blank">
                        <img src="{{ asset('frontend') }}/assets/images/completed_projects/project2.png" style="height:250px;" title="3"
                            alt="3">
                        <div class="down-content" style="text-align:center">
                            <h6></h6>
                            <span></span>
                        </div>
                    </a>
                </div>

                <div class="partner-item">
                    <a href="https://dgda.gov.sa/home.aspx" target="_blank">
                        <img src="{{ asset('frontend') }}/assets/images/completed_projects/project3.png" style="height:250px;" title="4"
                            alt="4">
                        <div class="down-content" style="text-align:center">
                            <h6> </h6>
                            <span></span>
                        </div>
                    </a>
                </div>

                <div class="partner-item">
                    <a href="https://dgda.gov.sa/home.aspx" target="_blank">
                        <img src="{{ asset('frontend') }}/assets/images/completed_projects/project4.jpeg" style="height:250px;" title="5"
                            alt="5">
                        <div class="down-content" style="text-align:center">
                            <h6> </h6>
                            <span></span>
                        </div>
                    </a>
                </div>

                <div class="partner-item">
                    <a href="https://dgda.gov.sa/home.aspx" target="_blank">
                        <img src="{{ asset('frontend') }}/assets/images/completed_projects/project5.jpeg" style="height:250px;" title="6"
                            alt="6">
                        <div class="down-content" style="text-align:center">
                            <h6> </h6>
                            <span></span>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>

<div class="team">
    <div class="accordion">
        <div class="accordion-item">
          <div class="accordion-header">Section 1</div>
          <div class="accordion-content">
            <p>Content for section 1.</p>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">Section 2</div>
          <div class="accordion-content">
            <p>Content for section 2.</p>
          </div>
        </div>

        <div class="accordion-item">
          <div class="accordion-header">Section 3</div>
          <div class="accordion-content">
            <p>Content for section 3.</p>
          </div>
        </div>
      </div>
</div>


@endsection
@section('scripts')
<script type="text/javascript">
const accordionHeaders = document.querySelectorAll('.accordion-header');

accordionHeaders.forEach(header => {
  header.addEventListener('click', function() {
    this.classList.toggle('active');
    const content = this.nextElementSibling;
    if (content.style.display === 'block') {
      content.style.display = 'none';
    } else {
      content.style.display = 'block';
    }
  });
});

</script>

@endsection
