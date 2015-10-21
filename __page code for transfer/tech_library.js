<script>
jQuery('.card').mouseenter(function(){
  jQuery(this).children('footer').addClass('show_footer');
  jQuery(this).children('img').addClass('fade_img');
  jQuery(this).children('h1').addClass('darker_h1');
});

jQuery('.card').mouseleave(function(){
  jQuery(this).children('footer').removeClass('show_footer');
  jQuery(this).children('img').removeClass('fade_img');
  jQuery(this).children('h1').removeClass('darker_h1');
});

</script>