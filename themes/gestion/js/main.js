jQuery( document ).ready(function() {
  if (jQuery(window).width() >= 767) {
    jQuery('.dropdown-toggle').click(function() {
      var location = jQuery(this).attr('href');
      window.location.href = location;
      return false;
    });
  }
  var tags = [];
  var i = 0;
  jQuery("#homePageCarousel .node--type-article .teaser-field-group .field--name-field-tags > .field--item > div > h2 > a").each(function(){
  	if(jQuery(this).attr('href')!= "/analisis"){
  		//jQuery(".field--name-field-autor").addClass(jQuery(this).attr('href').substring(1));
  		tags[i++] = jQuery(this).attr('href').substring(1);
  	}
  });
  i = 0;
  jQuery("#homePageCarousel .node--type-article .teaser-field-group .title-and-author-wrapper .field--name-field-autor").each(function(){
  	jQuery(this).addClass(tags[i++]);
  });
});