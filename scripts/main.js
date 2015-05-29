(function($){
    $('.navbar-head').click(function() {
            $('.mobile-nav').slideToggle("");
        });
    $('.girlee-head').click(function() {
            $('.mobile-sidebar').slideToggle("");
        });

    /*OWL CAROUSEL*/

        $(document).ready(function() {
 
        var owl = $("#owl-demo");
       
        owl.owlCarousel({
            items : 10, //10 items above 1000px browser width
            itemsDesktop : [1000,5], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,3], // betweem 900px and 601px
            itemsTablet: [600,2], //2 items between 600 and 0
            itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
        });
       
        // Custom Navigation Events
        $(".next").click(function(){
          owl.trigger('owl.next');
        });
        $(".prev").click(function(){
          owl.trigger('owl.prev');
        });
        $(".play").click(function(){
          owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
        });
        $(".stop").click(function(){
          owl.trigger('owl.stop');
        });
       
      });

       /*FAQ DROPDOWN*/
    $('.faq-dropdown').click(function() {
        $('.faq-list').slideToggle("fast");
      });

    $('.faqlist-head li:first-child() .faq-list').slideToggle("fast");


    //SIGN UP TOOGLE
    $('.beach-dropdown').click(function() {
            $('.signup-list').slideToggle("fast");
        });
    $('.signup-head li:first-child() .signup-list').slideToggle("fast");

    $('.wholesale-dropdown').click(function() {
            $('.wholesale-list').slideToggle("fast");
            $('.signup-list').hide("");
        });
    
    //show toogle on sibebar
     $('.listing-dropdown').click(function() {
            $('.listing-lists').toggle("slide");
        });
     $('.girlee-dropdown').click(function() {
            $('.listing-lists').toggle("slide");
        });
     $('.subcat2-dropdown').click(function() {
            $('.subcat2-lists').toggle("slide");
        });

     //show toogle on ther right
      $('.wig-long').click(function() {
            $('.listing-right').show("slide");
        });
      $('.fashion').click(function() {
            $('.subcat2-right').show("slide");
        });
      $('.category-lists li:first-child() .subcat2-lists').slideToggle("fast");

      $('.category-lists li:first-child() .listing-lists').slideToggle("fast");

    $('.carousel').carousel();
    
    $('#myCarousel').carousel({
    interval: 40000
        });

        // handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
          var id_selector = $(this).attr("id");
          var id = id_selector.substr(id_selector.length -1);
          id = parseInt(id);
          $('#myCarousel').carousel(id);
          $('[id^=carousel-selector-]').removeClass('selected');
          $(this).addClass('selected');
        });

        // when the carousel slides, auto update
        $('#myCarousel').on('slid', function () {
          var id = $('.item.active').data('slide-number');
          id = parseInt(id);
          $('[id^=carousel-selector-]').removeClass('selected');
          $('[id=carousel-selector-'+id+']').addClass('selected');
        });  
        
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
}(jQuery));

