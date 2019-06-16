// /* --- select --*/
// $(document).ready(function(){
//     $('select').formSelect();
// });

// /*--- filter ---*/
// // Filter & Sort Menus
// // -----------------------------


// // ONLOAD - Hide Filter Section & Sub-Menus (Precaution - Should already be set to display: none)
// $(document).ready(function(){
//     var $filterGrid = $('.js-filter-grid'),
//         $filterClearLinks = $('.js-clear-active-filter-links'),
//         $filterItem = $('.js-filter-item'),
//         requiredFilters = '',
//         optionalFilters = '',
//         filtersRegex = '';



//     // BASE UI
//     // ---------------------------------------------------------------------

//     $('.filter-menu').hide();           // Hides Filter Section
//     $('.js-filter-items-toggle').hide();// Hides Filter List
//     $('.filter-caret').hide();          // Hides Filter Caret Image
//     $('.sort-caret').hide();            // Hides Sort Caret Image

//     // Initialize isotope on the grid
	
//     $filterGrid.isotope({
//         itemSelector: '.js-filter-grid-item',
//         layoutMode: 'fitRows',
//         getSortData: {
//             date: '[data-pub-date] parseInt',
//             dateRev: '[data-pub-date] parseInt',
//             featured: function(itemElem) {
//                 return $(itemElem).data('is-featured') == '' ? 0 : 1;
//             },
//             rank: '[data-page-hits] parseInt',
// 			topic: '[data-topic]'
//         },
//         sortAscending: {
//             date: false,
//             dateRev: true,
//             featured: false,
//             rank: false,
// 			topic: true
//         }
//     });
//     //=====================================================
// 	// Filter Area Here
  

// 	// Filter from one select box OR another but not from both at the same time
// 	$('.formandos-filter').on( 'change', function() {
// 	    // get filter value from option value
// 	    var filterValue = this.value;
// 	    $filterGrid.isotope({ filter: filterValue });
// 	    console.log(filterValue);
// 	});

// 	$('#category-filter').change(function(){
//         $('#topic-filter option:first').prop('selected', 'selected');
//     });


//     $('#topic-filter').change(function(){
//         $('#category-filter option:first').prop('selected', 'selected');
//     });
    	
//     $(".clear-filter").click(function(){
//     	    $('.formandos-filter').val('*').trigger('change');
//     });

//     // use value of search field to filter
//     var $quicksearch = $('#quicksearch').keyup( debounce( function() {
//       filtersRegex = new RegExp( $quicksearch.val(), 'gi' );
//       $filterGrid.isotope();
//     }) );

//     // debounce so filtering doesn't happen every millisecond
//     function debounce( fn, threshold ) {
//         var timeout;
//         return function debounced() {
//             if ( timeout ) {
//                 clearTimeout( timeout );
//             }
//             function delayed() {
//                 fn();
//                 timeout = null;
//             }
//             setTimeout( delayed, threshold || 100 );
//         };
//     }	
// });



/* Dividir col */

// quick search regex
var qsRegex;
var buttonFilter;

// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows',
  filter: function() {
    var $this = $(this);
    var searchResult = qsRegex ? $this.text().match( qsRegex ) : true;
    var buttonResult = buttonFilter ? $this.is( buttonFilter ) : true;
    return searchResult && buttonResult;
  }  
});

// bind filter on select change
$('.filters-select').on( 'change', function() {
  // get filter value from option value
  // var filterValue = this.value;
  // use filterFn if matches value
  buttonFilter = this.value;
  //$grid.isotope({ filter: filterValue });
  $grid.isotope();
});

// bind filter on select change
$('.filters-select2').on( 'change', function() {
  // get filter value from option value
  // var filterValue = this.value;
  // use filterFn if matches value
  buttonFilter = this.value;
  //$grid.isotope({ filter: filterValue });
  $grid.isotope();
});

// use value of search field to filter
var $quicksearch = $('#quicksearch').keyup( debounce( function() {
  qsRegex = new RegExp( $quicksearch.val(), 'gi' );
  $grid.isotope();
}) );

// debounce so filtering doesn't happen every millisecond
function debounce( fn, threshold ) {
  var timeout;
  return function debounced() {
    if ( timeout ) {
      clearTimeout( timeout );
    }
    function delayed() {
      fn();
      timeout = null;
    }
    setTimeout( delayed, threshold || 100 );
  };
}

$(".clear-filter").click(function(){
    $('.filters-select, .filters-select2').val('').trigger('change');
    //$('#quicksearch')[0].reset();
    $("#quicksearch").find('input:text').val('');
});





