<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link hrel="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <link rel="stylesheet" type="text/css" href = "assets/css/product_page.css">
  <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Inconsolata:700' rel='stylesheet' type='text/css'>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('img').hover(function () {
      var temp = $(this).attr('src');
      $(this).attr('src', $(this).attr('data-alt-src'));
      $(this).attr('data-alt-src', temp);
      })
    })  
  </script>
     <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
     $(document).ready(function($) {

           $('#myCarousel').carousel({
                   interval: 5000
           });

           //Handles the carousel thumbnails
           $('[id^=carousel-selector-]').click(function () {
           var id_selector = $(this).attr("id");
           try {
               var id = /-(\d+)$/.exec(id_selector)[1];
               console.log(id_selector, id);
               jQuery('#myCarousel').carousel(parseInt(id));
           } catch (e) {
               console.log('Regex failed!', e);
           }
       });
           // When the carousel slides, auto update the text
           $('#myCarousel').on('slid.bs.carousel', function (e) {
                    var id = $('.item.active').data('slide-number');
                   $('#carousel-text').html($('#slide-content-'+id).html());
           });
     });
     </script> -->
</head>
<body>
  <div class = "container">
  <div class="page-header">
    <h2>dojo_Mojo</h2>
    <a id = "store_link" href="">Back to dojo_Mojo Store</a>
    <button type="button" class="shopping_cart btn-lg" href = "#" aria-label="Shopping Cart">
    <span class="glyphicon glyphicon-shopping-cart btn-md" aria-hidden="true"></span>
    <span class= "badge">7</span>
    </button>
    <form id = "logout" action = "/users/logout" method = "POST">
      <input type = "submit" value = "Logout">
    </form>
  </div>
  <div id="main_area">
      <!-- Slider -->
      <div class="row">
          <div class="col-sm-6" id="slider-thumbs">
              <!-- Bottom switcher of slider -->
              <ul class="hide-bullets">
                  <li class="col-sm-3">
                      <a class="thumbnail" id="$product_id" href = "#">
                      <img src="/assets/armor_icons/transparent/11.png" data-alt-src="/assets/armor_icons/solid/11.png" alt="">
                      </a>
                  </li>

                 <!--  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a>
                  </li> -->

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/150x150&text=2"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/150x150&text=3"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/150x150&text=4"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/150x150&text=5"></a>
                  </li>
                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-6"><img src="http://placehold.it/150x150&text=6"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-7"><img src="http://placehold.it/150x150&text=7"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-8"><img src="http://placehold.it/150x150&text=8"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-9"><img src="http://placehold.it/150x150&text=9"></a>
                  </li>
                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-10"><img src="http://placehold.it/150x150&text=10"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-11"><img src="http://placehold.it/150x150&text=11"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-12"><img src="http://placehold.it/150x150&text=12"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-13"><img src="http://placehold.it/150x150&text=13"></a>
                  </li>
                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-14"><img src="http://placehold.it/150x150&text=14"></a>
                  </li>

                  <li class="col-sm-3">
                      <a class="thumbnail" id="carousel-selector-15"><img src="http://placehold.it/150x150&text=15"></a>
                  </li>
              </ul>
          </div>
          <div class="col-sm-6">
              <div class="col-xs-12" id="slider">
                  <!-- Top part of the slider -->
                  <div class="row">
                      <div class="col-sm-12" id="carousel-bounding-box">
                          <div class="carousel slide" id="myCarousel">
                              <!-- Carousel items -->
                              <div class="carousel-inner">
                                  <div class="active item" data-slide-number="0">
                                      <img src="http://placehold.it/470x480&text=zero"></div>

                                  <div class="item" data-slide-number="1">
                                      <img src="http://placehold.it/470x480&text=1"></div>

                                  <div class="item" data-slide-number="2">
                                      <img src="http://placehold.it/470x480&text=2"></div>

                                  <div class="item" data-slide-number="3">
                                      <img src="http://placehold.it/470x480&text=3"></div>

                                  <div class="item" data-slide-number="4">
                                      <img src="http://placehold.it/470x480&text=4"></div>

                                  <div class="item" data-slide-number="5">
                                      <img src="http://placehold.it/470x480&text=5"></div>

                                  <div class="item" data-slide-number="6">
                                      <img src="http://placehold.it/470x480&text=6"></div>

                                  <div class="item" data-slide-number="7">
                                      <img src="http://placehold.it/470x480&text=7"></div>

                                  <div class="item" data-slide-number="8">
                                      <img src="http://placehold.it/470x480&text=8"></div>

                                  <div class="item" data-slide-number="9">
                                      <img src="http://placehold.it/470x480&text=9"></div>

                                  <div class="item" data-slide-number="10">
                                      <img src="http://placehold.it/470x480&text=10"></div>

                                  <div class="item" data-slide-number="11">
                                      <img src="http://placehold.it/470x480&text=11"></div>

                                  <div class="item" data-slide-number="12">
                                      <img src="http://placehold.it/470x480&text=12"></div>

                                  <div class="item" data-slide-number="13">
                                      <img src="http://placehold.it/470x480&text=13"></div>

                                  <div class="item" data-slide-number="14">
                                      <img src="http://placehold.it/470x480&text=14"></div>

                                  <div class="item" data-slide-number="15">
                                      <img src="http://placehold.it/470x480&text=15"></div>
                              </div>
                              <!-- Carousel nav -->
                              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left"></span>
                              </a>
                              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right"></span>
                              </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
        </div>
          <div id="page_footer">
            <nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</div>
</div>
</div>
</body>
</html>
