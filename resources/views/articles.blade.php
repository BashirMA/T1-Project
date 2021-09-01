@extends('layouts.app')

@section('content')
    <section class="wrapper">
        <div class="container-fostrap">
            <div>
                <h1 class="heading">
                    Latest news
                </h1>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                <img src="https://1.bp.blogspot.com/-Bii3S69BdjQ/VtdOpIi4aoI/AAAAAAAABlk/F0z23Yr59f0/s640/cover.jpg" />
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html"> Bootstrap 3 Carousel FadeIn Out Effect
                                      </a>
                                    </h4>
                                    <p class="">
                                        Tutorial to make a carousel bootstrap by adding more wonderful effect fadein ...
                                    </p>
                                </div>
                                <div class="card-read-more">
                                    <a href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html" class="btn btn-link btn-block">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                <img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="http://www.fostrap.com/2016/02/awesome-material-design-responsive-menu.html"> Material Design Responsive Menu
                                      </a>
                                    </h4>
                                    <p class="">
                                        Material Design is a visual programming language made by Google. Language programming...
                                    </p>
                                </div>
                                <div class="card-read-more">
                                    <a href="https://codepen.io/wisnust10/full/ZWERZK/" class="btn btn-link btn-block">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg" />
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">5  Button Hover Animation Effects
                                      </a>
                                    </h4>
                                    <p class="">
                                        Loren impsum
                                    </p>
                                </div>
                                <div class="card-read-more">
                                    <a href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html" class="btn btn-link btn-block">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                            $articles = DB::table('articles')->cursor(); 
                            foreach ($articles as $data)  { ?>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="card">
                                        <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                            <img src="https://1.bp.blogspot.com/-Bii3S69BdjQ/VtdOpIi4aoI/AAAAAAAABlk/F0z23Yr59f0/s640/cover.jpg" />
                                          </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <a href="http://www.fostrap.com/2016/02/awesome-material-design-responsive-menu.html"> <?php echo $data->articlesTitle ?>
                                                </a>
                                            </h4>
                                            <p class="">
                                                <?php 
                                                for($var=0; $var<20; $var++){
                                                    echo $data->articlesContent; 
                                                }
                                                    ?>
                                            </p>
                                        </div>
                                    <div class="card-read-more">
                                        <a href="https://codepen.io/wisnust10/full/ZWERZK/" class="btn btn-link btn-block">
                                        Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                           <?php  } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

