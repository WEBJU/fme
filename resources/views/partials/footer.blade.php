<footer>
  <!-- Footer Start-->
  <div class="footer-area">
    <div class="container">
      <div class="footer-top footer-padding">
        <div class="row justify-content-between">
          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
            <div class="single-footer-caption mb-50">
              <div class="single-footer-caption mb-30">
                <!-- logo -->
                <div class="footer-logo">
                  <a href="/"><img class="img img-responsive" style="max-width: 200px;" src="{{URL::asset('assets/img/logo/Logo.png')}}" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
            <div class="single-footer-caption mb-50">
              <div class="footer-tittle">
                <h4>Quick Link</h4>
                <ul>
                  <li><a href="/">Home</a></li>
                  <li><a href="/categories">Categories</a></li>
                  <li><a href="/about">About</a></li>
                  <li><a href="/contact">Contact</a></li>
                  <li><a href="/blog">Blog</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="single-footer-caption mb-50">
              <div class="footer-tittle">
                <h4>Categories</h4>
                <ul>
                  <li><a href="#">Shopping</a></li>
                  <li><a href="#">Festivals / Concerts</a></li>
                  <li><a href="#">Accomodation</a></li>
                  <li><a href="#">Night Life</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
            <div class="single-footer-caption mb-50">
              <div class="footer-tittle">
                <h4>Download App</h4>
                <ul>
                  <li class="app-log"><a href="#"><img src="assets/img/gallery/app-logo.png" alt=""></a></li>
                  <li><a href="#"><img src="assets/img/gallery/app-logo2.png" alt=""></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="row d-flex justify-content-between align-items-center">
          <div class="col-xl-9 col-lg-8">
            <div class="footer-copy-right">
              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright Fomoevents Uganda &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4">
              <!-- Footer Social -->
              <div class="footer-social f-right">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fas fa-globe"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End-->
  </footer>
  <!-- Scroll Up -->
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
  </div>


  <!-- JS here -->
  <!-- Jquery, Popper, Bootstrap -->
  <script src="{{URL::asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
  <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
  <script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
  <!--Google maps js -->

  <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyC4LIsiVILxBu9bK6vX-NMrzEXlDdsO21w&sensor=false&libraries=places"></script>
  <!-- All JS Custom Plugins Link Here here -->
  <script src="{{URL::asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>

  <!-- Jquery Mobile Menu -->
  <script src="{{URL::asset('assets/js/jquery.slicknav.min.js')}}"></script>

  <!-- Jquery Slick , Owl-Carousel Plugins -->
  <script src="{{URL::asset('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/slick.min.js')}}"></script>
  <!-- One Page, Animated-HeadLin -->
  <script src="{{URL::asset('assets/js/wow.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/animated.headline.js')}}"></script>
  <script src="{{URL::asset('assets/js/jquery.magnific-popup.js')}}"></script>

  <!-- Nice-select, sticky -->
  <script src="{{URL::asset('assets/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/jquery.sticky.js')}}"></script>

  <!-- contact js -->
  <script src="{{URL::asset('assets/js/contact.js')}}"></script>
  <script src="{{URL::asset('assets/js/jquery.form.js')}}"></script>
  <script src="{{URL::asset('assets/js/jquery.validate.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/mail-script.js')}}"></script>
  <script src="{{URL::asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

  <!-- Jquery Plugins, main Jquery -->
  <script src="{{URL::asset('assets/js/plugins.js')}}"></script>
  <script src="{{URL::asset('assets/js/main.js')}}"></script>

  <script type="text/javascript">
  // $(document).ready(function(){
  //   $('#editor').ckeditor();
  // });
  // CKEDITOR.replace( 'editor' );
  var current_fs,next_fs,previous_fs;
  var left,opacity,scale;
  var animating;


  $(".next").click(function(){
    if (animating) return false;
    animating=true;
    current_fs=$(this).parent();
    next_fs=$(this).parent().next();
    $("#progressBar li").eq($('fieldset').index(next_fs)).addClass("active");
    next_fs.show();

    current_fs.animate({
      opacity: 0
    }, {
      step: function(now, mx) {
        scale = 1 - (1 - now) * 0.2;
        left = (now * 50) + "%";
        opacity = 1 - now;
        current_fs.css({
          'transform': 'scale(' + scale + ')'
        });
        next_fs.css({
          'left': left,
          'opacity': opacity
        });
      },
      duration: 800,
      complete: function() {
        current_fs.hide();
        animating = false;
      },
      easing: 'easeInOutExpo'
    });
  });
  $(".previous").click(function() {
    if (animating) return false;
    animating = true;
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    previous_fs.show();
    current_fs.animate({
      opacity: 0
    }, {
      step: function(now, mx) {
        scale = 0.8 + (1 - now) * 0.2;
        left = ((1 - now) * 50) + "%";
        opacity = 1 - now;
        current_fs.css({
          'left': left
        });
        previous_fs.css({
          'transform': 'scale(' + scale + ')',
          'opacity': opacity
        });
      },
      duration: 800,
      complete: function() {
        current_fs.hide();
        animating = false;
      },
      easing: 'easeInOutExpo'
    });
  });

  function initialize() {
    var input = document.getElementById('location');
    new google.maps.places.Autocomplete(input);
  }

  google.maps.event.addDomListener(window, 'load', initialize);

  function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}
function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
  });
  $('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
});
  </script>
  <script type="text/javascript">
  (function ($) {
$(document).ready(function () {

  // generateID()
  choose()
  // generateOption()
  // selectionOption()
  // removeClass()
  // uploadImage()
  // submit()
  // resetButton()
  // removeNotification()
  // autoRemoveNotification()
  // autoDequeue()
  //
  var ID
  var way = 0
  var queue = []
  var fullStock = 10
  var speedCloseNoti = 1000

  function generateID() {
    var text = $('header span')
    var newID = ''

    for(var i = 0; i < 3; i++) {
      newID += Math.floor(Math.random() * 3)
    }

    ID = 'ID: 5988' + newID
    text.html(ID)
  }

  function choose() {
    var li = $('.ticket-category li')
    var section = $('.sections section')
    var index = 0
    li.on('click', function () {
      index = $(this).index()
      $(this).addClass('active')
      $(this).siblings().removeClass('active')

      section.siblings().removeClass('active')
      section.eq(index).addClass('active')
      if(!way) {
        way = 1
      }  else {
        way = 0
      }
    })
  }

  function generateOption() {
    var select = $('select option')
    var selectAdd = $('.select-option .option')
    $.each(select, function (i, val) {
        $('.select-option .option').append('<div rel="'+ $(val).val() +'">'+ $(val).html() +'</div>')
    })
  }

  function selectionOption() {
    var select = $('.select-option .head')
    var option = $('.select-option .option div')

    select.on('click', function (event) {
      event.stopPropagation()
      $('.select-option').addClass('active')
    })

    option.on('click', function () {
      var value = $(this).attr('rel')
      $('.select-option').removeClass('active')
      select.html(value)

      $('select#category').val(value)
    })
  }

  function removeClass() {
    $('body').on('click', function () {
      $('.select-option').removeClass('active')
    })
  }

  function uploadImage() {
    var button = $('.images .pic')
    var uploader = $('<input type="file" accept="image/*" />')
    var images = $('.images')

    button.on('click', function () {
      uploader.click()
    })

    uploader.on('change', function () {
        var reader = new FileReader()
        reader.onload = function(event) {
          images.prepend('<div class="img" style="background-image: url(\'' + event.target.result + '\');" rel="'+ event.target.result  +'"><span>remove</span></div>')
        }
        reader.readAsDataURL(uploader[0].files[0])

     })

    images.on('click', '.img', function () {
      $(this).remove()
    })

  }

  function submit() {
    var button = $('#send')

    button.on('click', function () {
      if(!way) {
        var title = $('#title')
        var cate  = $('#category')
        var images = $('.images .img')
        var imageArr = []


        for(var i = 0; i < images.length; i++) {
          imageArr.push({url: $(images[i]).attr('rel')})
        }

        var newStock = {
          title: title.val(),
          category: cate.val(),
          images: imageArr,
          type: 1
        }

        saveToQueue(newStock)
      } else {
        // discussion
        var topic = $('#topic')
        var message = $('#msg')

        var newStock = {
          title: topic.val(),
          message: message.val(),
          type: 2
        }

        saveToQueue(newStock)
      }
    })
  }

  function removeNotification() {
    var close = $('.notification')
    close.on('click', 'span', function () {
      var parent = $(this).parent()
      parent.fadeOut(300)
      setTimeout(function() {
        parent.remove()
      }, 300)
    })
  }

  function autoRemoveNotification() {
    setInterval(function() {
      var notification = $('.notification')
      var notiPage = $(notification).children('.btn')
      var noti = $(notiPage[0])

      setTimeout(function () {
        setTimeout(function () {
         noti.remove()
        }, speedCloseNoti)
        noti.fadeOut(speedCloseNoti)
      }, speedCloseNoti)
    }, speedCloseNoti)
  }

  function autoDequeue() {
    var notification = $('.notification')
    var text

    setInterval(function () {

        if(queue.length > 0) {
          if(queue[0].type == 2) {
            text = ' Your discusstion is sent'
          } else {
            text = ' Your order is allowed.'
          }

          notification.append('<div class="success btn"><p><strong>Success:</strong>'+ text +'</p><span><i class=\"fa fa-times\" aria-hidden=\"true\"></i></span></div>')
          queue.splice(0, 1)

        }
    }, 10000)
  }

  function resetButton() {
    var resetbtn = $('#reset')
    resetbtn.on('click', function () {
      reset()
    })
  }

  // helpers
  function saveToQueue(stock) {
    var notification = $('.notification')
    var check = 0

    if(queue.length <= fullStock) {
      if(stock.type == 2) {
          if(!stock.title || !stock.message) {
            check = 1
          }
      } else {
        if(!stock.title || !stock.category || stock.images == 0) {
          check = 1
        }
      }

      if(check) {
        notification.append('<div class="error btn"><p><strong>Error:</strong> Please fill in the form.</p><span><i class=\"fa fa-times\" aria-hidden=\"true\"></i></span></div>')
      } else {
        notification.append('<div class="success btn"><p><strong>Success:</strong> '+ ID +' is submitted.</p><span><i class=\"fa fa-times\" aria-hidden=\"true\"></i></span></div>')
        queue.push(stock)
        reset()
      }
    } else {
      notification.append('<div class="error btn"><p><strong>Error:</strong> Please waiting a queue.</p><span><i class=\"fa fa-times\" aria-hidden=\"true\"></i></span></div>')
    }
  }
  function reset() {

    $('#title').val('')
    $('.select-option .head').html('Category')
    $('select#category').val('')

    var images = $('.images .img')
    for(var i = 0; i < images.length; i++) {
      $(images)[i].remove()
    }

    var topic = $('#topic').val('')
    var message = $('#msg').val('')
  }
})
})(jQuery)
  </script>
