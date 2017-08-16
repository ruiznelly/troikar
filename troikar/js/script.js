////////////////////////////////// js //////////////////////////////////





$(document).ready(function(){



    $(window).load(function(){
        $('body').addClass('loaded').css("overflow","visible").scrollTop(0);
    });

    $('nav.navmenu-fixed-left').children('ul').find('a').append('<div class="hidde-nav-more"><div></div></div>');

     /*
     setTimeout(function(){
        $('body').addClass('loaded').css("overflow","visible").scrollTop(0);
    }, 3000); */

    /*//////////////// WINDOW RESIZE JS ///////////////*/

    function setHeight() {
    windowHeight = $(window).innerHeight();
    $('.services-wrap').css('height', windowHeight);
      };
      setHeight();

      $(window).resize(function() {
        setHeight();
      });



      $('.flex-next,.flex-prev').empty()

     $('li.service-list').mouseenter( function(){
         $(this).children().addClass('service-in');
     }).mouseleave( function(){
         $(this).children().removeClass('service-in');
     });


     $('#product-detail-carousel').carousel({
        interval: 7000
        });

        // handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
          var id_selector = $(this).attr("id");
          var id = id_selector.substr(id_selector.length -1);
          id = parseInt(id);
          $('#product-detail-carousel').carousel(id);
          $('[id^=carousel-selector-]').removeClass('selected');
          $(this).addClass('selected');
        });



        // when the carousel slides, auto update
        $('#product-detail-carousel').on('slid', function (e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-'+id).html());
        $('#slider-thumbs > div > ul > li > a').removeClass('selected');
        $('#carousel-selector-'+id).addClass('selected');
        });






      // The slider being synced must be initialized first


      $('#slider').flexslider({
        animation: "fade",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel"
      });




      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 167,
        asNavFor: '#slider'
      });

      $('.flexslider-two').flexslider({
        animation: "slide",
        slideshowSpeed: 14000 ,
        controlNav: false,
        animationLoop: false,
        itemWidth: 160,
        itemMargin: 5
      });




      $(window).scroll(function(){
        if ($(window).scrollTop() > 150) {
            $('div.about-map-container').children('.left').addClass('scroll');
            $('div.about-map-container').children('.right').addClass('scroll');
        } else if($(window).scrollTop() < 149 ){
            $('div.about-map-container').children('.left').removeClass('scroll');
            $('div.about-map-container').children('.right').removeClass('scroll');
        };
        });




 /*
      $('#project-description li h3 a').click(function(e){
      e.preventDefault();
      });



        $( "#project-description-reto" ).click(function() {
           $("#arrow-one").animate({top: 'toggle'}, 500);
           $("#project-description-content-one").slideToggle();
           $("#project-description-content-two").slideUp();
           $("#arrow-two").slideUp();
           $("#project-description-content-three").slideUp();
           $("#arrow-three").slideUp();
           $("#project-description-content-four").slideUp();
           $("#arrow-four").slideUp();
         });


*/
      /*//////////////////////// filter //////////////////////*/



      // To keep our code clean and modular, all custom functionality will be contained inside a single object literal called "dropdownFilter".

        var dropdownFilter = {

          // Declare any variables we will need as properties of the object

          $filters: null,
          $reset: null,
          groups: [],
          outputArray: [],
          outputString: '',

          // The "init" method will run on document ready and cache any jQuery objects we will need.

          init: function(){
            var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "dropdownFilter" object so that we can share methods and properties between all parts of the object.

            self.$filters = $('#Filters');
            self.$reset = $('#Reset');
            self.$container = $('#Container');

            self.$filters.find('fieldset').each(function(){
              self.groups.push({
                $dropdown: $(this).find('select'),
                active: ''
              });
            });

            self.bindHandlers();
          },

          // The "bindHandlers" method will listen for whenever a select is changed.

          bindHandlers: function(){
            var self = this;

            // Handle select change

            self.$filters.on('change', 'select', function(e){
              e.preventDefault();

              self.parseFilters();
            });

            // Handle reset click

            self.$reset.on('click', function(e){
              e.preventDefault();

              self.$filters.find('select').val('');

              self.parseFilters();
            });
          },

          // The parseFilters method pulls the value of each active select option

          parseFilters: function(){
            var self = this;

            // loop through each filter group and grap the value from each one.

            for(var i = 0, group; group = self.groups[i]; i++){
              group.active = group.$dropdown.val();
            }

            self.concatenate();
          },

          // The "concatenate" method will crawl through each group, concatenating filters as desired:

          concatenate: function(){
            var self = this;

            self.outputString = ''; // Reset output string

            for(var i = 0, group; group = self.groups[i]; i++){
              self.outputString += group.active;
            }

            // If the output string is empty, show all rather than none:

            !self.outputString.length && (self.outputString = 'all');

            //console.log(self.outputString);

            // ^ we can check the console here to take a look at the filter string that is produced

            // Send the output string to MixItUp via the 'filter' method:

              if(self.$container.mixItUp('isLoaded')){
                self.$container.mixItUp('filter', self.outputString);
              }
          }
        };

        // On document ready, initialise our code.

        $(function(){

          // Initialize dropdownFilter code

          dropdownFilter.init();

          // Instantiate MixItUp

         /* $('#Container').mixItUp({
            controls: {
              enable: false // we won't be needing these
            },
            callbacks: {
              onMixFail: function(){
                alert('No se encontraron artículos que coincidan con los filtros seleccionados.');
              }
            }
          });*/
        });

     /*

     ///////////// show one ///////

    $('li.service-list').mouseenter( function(){
         $('li.service-list').children().removeClass('service-in');
         $(this).children().addClass('service-in');
     }).mouseleave( function(){
         $(this).children().removeClass('service-in');
     });


     */

});



