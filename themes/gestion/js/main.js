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
  		tags[i++] = jQuery(this).attr('href').substring(1).replace("gestion/","");
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
        tags[i++] = jQuery(this).attr('resource').substring(1).replace("gestion/","");
    });
    for(var i=0; i<tags.length;i++){
      jQuery(".node--type-article").addClass(tags[i]);
    }

    if(!jQuery(".node--type-article").hasClass("analisis")){
      jQuery(".field--name-dynamic-block-fieldnode-secciones-block-field").hide();
    }
  var title_node_type_article=jQuery(".field--name-taxonomy-term-title");
  var move_title_type_article=title_node_type_article[title_node_type_article.length-1];
  jQuery('.node--type-article').prepend(move_title_type_article);
  jQuery(".field--name-taxonomy-term-title").first().addClass("node--type-article-title");

  //Sticky header functionality
  let header = jQuery("body header.navbar.navbar-default.container");

  if (jQuery(this).width() > 767) {
    if (jQuery(this).scrollTop() >= 116)
    {
      if (!header.hasClass("stuck")) {
        header.addClass("stuck");
        if (header.hasClass("stuck-removed")) {
          header.removeClass("stuck-removed");
        }
      }
    }
    else {
      if (header.hasClass("stuck")) {
        header.removeClass("stuck");
        if (!header.hasClass("stuck-removed")) {
          header.addClass("stuck-removed");
        }
      }
    }
  } else {
    if (jQuery(this).scrollTop() >= 8)
    {
      if (!header.hasClass("stuck")) {
        header.addClass("stuck");
        if (header.hasClass("stuck-removed")) {
          header.removeClass("stuck-removed");
        }
      }
    }
    else {
      if (header.hasClass("stuck")) {
        header.removeClass("stuck");
        if (!header.hasClass("stuck-removed")) {
          header.addClass("stuck-removed");
        }
      }
    }
  }

  jQuery(window).scroll(function() {
    let header = jQuery("body header.navbar.navbar-default.container");
    if (jQuery(this).width() > 767) {
      if (jQuery(this).scrollTop() >= 116)
      {
        if (!header.hasClass("stuck")) {
          header.addClass("stuck");
          if (header.hasClass("stuck-removed")) {
            header.removeClass("stuck-removed");
          }
        }
      }
      else {
        if (header.hasClass("stuck")) {
          header.removeClass("stuck");
          if (!header.hasClass("stuck-removed")) {
            header.addClass("stuck-removed");
          }
        }
      }
    } else {
      if (jQuery(this).scrollTop() >= 8)
      {
        if (!header.hasClass("stuck")) {
          header.addClass("stuck");
          if (header.hasClass("stuck-removed")) {
            header.removeClass("stuck-removed");
          }
        }
      }
      else {
        if (header.hasClass("stuck")) {
          header.removeClass("stuck");
          if (!header.hasClass("stuck-removed")) {
            header.addClass("stuck-removed");
          }
        }
      }
    }
  });
});