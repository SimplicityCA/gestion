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
  //move h2 search
  var h2search=jQuery('.path-search h2');
  jQuery('.path-search .region-content').prepend(h2search[1]);
  // tags page-node-type-article
    var tags = [];
    var i = 0;
    jQuery(".page-node-type-article .node--type-article .field--name-field-tags > .field--item").each(function(){
        //jQuery(".field--name-field-autor").addClass(jQuery(this).attr('href').substring(1));
        tags[i++] = jQuery(this).attr('resource').substring(1);
    });
    for(var i=0; i<tags.length;i++){
      jQuery(".node--type-article").addClass(tags[i]);
    }
    console.log(tags);
    console.log(jQuery(".node--type-article").hasClass("analisis"));
    if(!jQuery(".node--type-article").hasClass("analisis")){
      jQuery(".field--name-dynamic-block-fieldnode-secciones-block-field").hide();
    }
  var title_node_type_article=jQuery(".field--name-taxonomy-term-title");
  var move_title_type_article=title_node_type_article[title_node_type_article.length-1];
  jQuery('.node--type-article').prepend(move_title_type_article);
  jQuery(".field--name-taxonomy-term-title").first().addClass("node--type-article-title");
});