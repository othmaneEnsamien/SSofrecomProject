<div>
   
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(assets/images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Employe Information</h1>
                                    <div class="animation animated-item-2">
                                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, nam facilis. Aliquam et molestias deleniti veritatis! Omnis vero illum quasi, accusantium consectetur quibusdam aut voluptas perspiciatis eaque dolor iusto explicabo.
                                    </div>
                                    <a class="btn-slide animation animated-item-3" href="#">Learn More</a>
                                    <a class="btn-slide white animation animated-item-3" href="#">Get Started</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->

                <div class="item" style="background-image: url(assets/images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Employe skill</h1>
                                    <div class="animation animated-item-2">
                                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor recusandae aperiam aliquid eum, iste necessitatibus a, modi minima neque officia corrupti facilis, harum numquam earum non illo odio cumque consequatur.
                                    </div>
                                    <a class="btn-slide white animation animated-item-3" href="#">Learn More</a>
                                    <a class="btn-slide animation animated-item-3" href="#">Get Started</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!--/.item-->

            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs hidden-sm" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs hidden-sm" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <!--/#main-slider-->

    <section style="background: rgb(255, 77, 0)">
        <div class="container">
            <div class="row text-center" style="margin-bottom: 50px">
                <h1 class="m-10" style="color: white">Fill out this form to participate in a project according to your skills </h1>
            </div>

            <div class="row">
                <form class="needs-validation " style="margin-bottom: 40px" novalidate>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label style="color:black;font-size:20px" for="validationTooltip01" style="color:black;font-size:20px">First name</label>
                        <input type="text" class="form-control" id="validationTooltip01" placeholder="First name"  required>
                        <div class="valid-tooltip">
                          Looks good!
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label style="color:black;font-size:20px" for="validationTooltip02">Last name</label>
                        <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name"  required>
                        <div class="valid-tooltip">
                          Looks good!
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label style="color:black;font-size:20px" for="validationTooltipUsername">Gmail</label>
                        <div class="input-group">
                          <input type="text" class="form-control" id="validationTooltipUsername" placeholder="....." aria-describedby="validationTooltipUsernamePrepend" required>
                          <div class="invalid-tooltip">
                            Please choose a unique and valid username.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label style="color:black;font-size:20px" for="validationTooltip03">Phone number</label>
                        <input type="number" class="form-control" id="validationTooltip03" placeholder="Phone" required>
                        <div class="invalid-tooltip">
                          Please provide a valid city.
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label style="color:black;font-size:20px" for="validationTooltip04">Skills</label>
                        <select multiple="multiple" id="" class="select_categories form-control">
                           
                        </select>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label style="color:black;font-size:20px" for="validationTooltip05">Level</label>
                        <input type="text" class="form-control" id="validationTooltip05" placeholder="niveau" required>
                        <div class="invalid-tooltip">
                          Please provide a level.
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" style="background: black" type="submit">Submit form</button>
                    </div>
                    
                  </form>
            </div>
        </div>
    </section>
</div>

@push('scripts')
    <script>
        $(document).ready(function () {
            $('.select_categories').select2();
            $('.select_categories').on('change',function(e)
            {
                var data = $('.select_categories').select2("val");
                @this.set('selected_categories',data);
            });

        });
    </script>
@endpush
