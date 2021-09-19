$(window).load(function() {
    var $container = $('#container');
    //Run to initialise column sizes
    updateSize();

    //Load masonry when images all loaded
    $container.imagesLoaded( function(){

        $container.isotope({
            // options
            itemSelector : '.element',
            layoutMode : 'fitRows',
            transformsEnabled: true,
            columnWidth: function( containerWidth ) {
                containerWidth = $browserWidth;
                return Math.floor(containerWidth / $cols);
            }
        });
    });

        // update columnWidth on window resize
        $(window).smartresize(function(){
            updateSize();
            $container.isotope( 'reLayout' );
        });

    //Set item size
    function updateSize() {
        $browserWidth = $container.width();
        $cols = 4;

        if ($browserWidth >= 1170) {
            $cols = 4;
        }
        else if ($browserWidth >= 800 && $browserWidth < 1170) {
            $cols = 3;
        }
        else if ($browserWidth >= 480 && $browserWidth < 800) {
            $cols = 2;
        }
        else if ($browserWidth >= 320 && $browserWidth < 480) {
            $cols = 1;
        }
        else if ($browserWidth < 401) {
            $cols = 1;
        }
        //console.log("Browser width is:" + $browserWidth);
        //console.log("Cols is:" + $cols);

        // $gutterTotal = $cols * 20;
        $browserWidth = $browserWidth; // - $gutterTotal;
        $itemWidth = $browserWidth / $cols;
        $itemWidth = Math.floor($itemWidth);

        $(".element").each(function(index){
            $(this).css({"width":$itemWidth+"px"});
        });



        var $optionSets = $('#options .option-set'),
        $optionLinks = $optionSets.find('a');

        $optionLinks.click(function(){
            var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
      }
      var $optionSet = $this.parents('.option-set');
      $optionSet.find('.selected').removeClass('selected');
      $this.addClass('selected');

        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
        key = $optionSet.attr('data-option-key'),
        value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
      } else {
          // otherwise, apply new options
          $container.isotope( options );
      }

      return false;
  });

    };

        // Initialize the gallery
        $('.thumb').touchTouch();

    });
