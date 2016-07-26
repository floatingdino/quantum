var $container = $("section#articles");
var msnry;
var imgLoad;
var finished = false;
function brick(){
  imgLoad = imagesLoaded("section#articles", function(){msnry = new Masonry("section#articles", { isAnimated: false,itemSelector:"article.item"});});
}
function showImage(){
  imgLoad.on( 'progress', function( instance, image ) {
  var imagez = image.img
    $(imagez).parents('article:first').addClass('visible');
  });
}
function infScr(container){
  $container.infinitescroll({

    // selector for the paged navigation (it will be hidden)
    navSelector   : ".pagination-centered",
    nextSelector  : ".next",
    itemSelector  : "article.item",
    prefill       : true,
    // finished message
    loading: {
      finishedMsg: null,
      msgText: '',
      img:null,
      }
    },

    // Trigger Masonry as a callback
    function( newElements ) {
      // hide new items while they are loading
      var $newElems = $( newElements ).css({ opacity: 0 });
      // ensure that images load before adding to masonry layout
      $newElems.imagesLoaded(function(){
        // show elems now they're ready
        $newElems.animate({ opacity: 1 }); brick();
        msnry.on( 'appended', $newElems, true );
      });

  });
  $container.infinitescroll('unbind');

}
function masonAll(){
  brick();

  showImage();

  infScr($container);
  // $(window).unbind('.infscr');
}
function loadNext(){
  $container.infinitescroll('retrieve');
  if(finished)
    $('.brick-more').addClass = 'finished';
    $('.brick-more').text = 'All Posts Loaded';
}
masonAll();

  $(window).load(function(){
    $container.infinitescroll("scroll");
  });
