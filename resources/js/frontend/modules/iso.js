var Iso = (function() {

  /* --------------------------------------------------------------
   * OPTIONS AND VARIABLES
   * ------------------------------------------------------------ */
    
  // selectors 	
  var selectors = {
    body:     'body',
    iso:      '.js-iso',
    listItem: '.js-list-item',
    isoItem:  'g[data-number]',
  };

  var classes = {
    visible: 'is-visible',
    active: 'is-active',
  };

  // media queries
  var mq = {
    xs: window.matchMedia("(min-width: 660px)"),
  };

  var currentFloor;

  /* --------------------------------------------------------------
  * METHODS
  * ------------------------------------------------------------ */

  var _initialize = function() {
    _bind();
  };

  var _bind = function() {

    // $(selectors.body).on('mouseover', selectors.listItem, function(){
    //   let floors = document.querySelectorAll('g[data-floor]'), 
    //   targetFloor  = $(this).data('floor'),
    //   targetObject = $(this).data('number');
    //   currentFloor = targetFloor;

    //   console.log(targetObject);

    //   floors.forEach(floor => {
    //     let g = document.querySelector('g[data-number="'+ targetObject +'"]');
    //     g.classList.add('is-active-iso');

    //     if (floor.dataset.floor > targetFloor) {
    //       let f = document.querySelector('g[data-floor="'+ floor.dataset.floor +'"]');
    //       f.style.display = 'none';
    //     }
    //   });
    // });

    // $(selectors.body).on('mouseleave', selectors.listItem, function(){
    //   let floors = document.querySelectorAll('g[data-floor]'),
    //       targetFloor = $(this).data('floor'),
    //       targetObject = $(this).data('number');

    //   if (currentFloor == targetFloor) {
    //     floors.forEach(floor => {
    //       let g = document.querySelector('g[data-object="'+ targetObject +'"]');
    //       g.classList.remove('is-active-iso');

    //       if (floor.dataset.floor > targetFloor) {
    //         let f = document.querySelector('g[data-floor="'+ floor.dataset.floor+'"]');
    //         if (!f.classList.contains('is-locked')) {
    //           f.style.display = 'block';
    //         }
    //       }
    //     });
    //   }
    // });

    $(selectors.body).on('mouseover', selectors.isoItem, function(){
      $(this).addClass('is-active-iso');
      $('tr[data-number="'+$(this).data('number')+'"]').addClass('is-active-row');
    });

    $(selectors.body).on('mouseout', selectors.isoItem, function(){
      $(this).removeClass('is-active-iso');
      $('tr[data-number="'+$(this).data('number')+'"]').removeClass('is-active-row');
    });

    $(selectors.body).on('mouseover', selectors.listItem, function(){
      $('g[data-number="'+$(this).data('number')+'"]').addClass('is-active-iso');
    });

    $(selectors.body).on('mouseout', selectors.listItem, function(){
      $('g[data-number="'+$(this).data('number')+'"]').removeClass('is-active-iso');
    });
  };

  /* --------------------------------------------------------------
  * RETURN PUBLIC METHODS
  * ------------------------------------------------------------ */
        
  return {
    init: _initialize,
  };

})();

// Initialize
Iso.init();