/* --- select --*/
$(document).ready(function(){
    $('select').formSelect();
});

/*--- filter ---*/
// Filter & Sort Menus
// -----------------------------


// ONLOAD - Hide Filter Section & Sub-Menus (Precaution - Should already be set to display: none)
$(document).ready(function(){
    var $filterGrid = $('.js-filter-grid'),
        $filterClearLinks = $('.js-clear-active-filter-links'),
        $filterItem = $('.js-filter-item'),
        requiredFilters = '',
        optionalFilters = '',
        filtersRegex = '';


    // BASE UI
    // ---------------------------------------------------------------------

    $('.filter-menu').hide();           // Hides Filter Section
    $('.js-filter-items-toggle').hide();// Hides Filter List
    $('.filter-caret').hide();          // Hides Filter Caret Image
    $('.sort-caret').hide();            // Hides Sort Caret Image

    // Initialize isotope on the grid
	
        $filterGrid.isotope({
            itemSelector: '.js-filter-grid-item',
            layoutMode: 'fitRows',
            getSortData: {
                date: '[data-pub-date] parseInt',
                dateRev: '[data-pub-date] parseInt',
                featured: function(itemElem) {
                    return $(itemElem).data('is-featured') == '' ? 0 : 1;
                },
                rank: '[data-page-hits] parseInt',
				topic: '[data-topic]'
            },
            sortAscending: {
                date: false,
                dateRev: true,
                featured: false,
                rank: false,
				topic: true
            }
        });
//=====================================================
	// Filter Area Here
  

	// Filter from one select box OR another but not from both at the same time
	$('.formandos-filter').on( 'change', function() {
	  // get filter value from option value
	  var filterValue = this.value;
	  $filterGrid.isotope({ filter: filterValue });
	  console.log(filterValue);
	});
	$('#category-filter').change(function(){
     $('#topic-filter option:first').prop('selected', 'selected');
});


$('#topic-filter').change(function(){
    $('#category-filter option:first').prop('selected', 'selected');
});
	
	$(".clear-filter").click(function(){
		$('.formandos-filter').val('*').trigger('change');
	});
	
});

/* Dividir col */

