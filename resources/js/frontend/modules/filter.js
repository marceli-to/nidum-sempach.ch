var Filter = (function() {

  /* --------------------------------------------------------------
   * OPTIONS AND VARIABLES
   * ------------------------------------------------------------ */
 
  // selectors 	
  var selectors = {
    body:  	  	 	'body',
    filterSelect: '.js-filter-select',
    filterItem:   '[data-iso-list-item]',
    btnReset:     '.js-btn-reset',
  };

  var userFilter = {};

  /* --------------------------------------------------------------
   * METHODS
   * ------------------------------------------------------------ */

  var _initialize = function() {
    _bind();
  };

  var _bind = function() {

    $(selectors.body).on('change', selectors.filterSelect, function(){
      _add($(this));
    });

    $(selectors.body).on('click', selectors.btnReset, function(){
      _reset();
    });
      
  };

  var _add = function(el) {
    var type = el.data('filterType'), val = el.val();

    if (val == 'NULL') {
      delete userFilter[type];
      // if (type == 'floor') {
      //   _showFloors();
      // }
    }
    else {
      userFilter[type] = String(val);
    }
    _filter();		
  };

  var _filter = function() {
    if (Object.keys(userFilter).length > 0) {
      var attrString = '';
      $.each(userFilter, function(k,v){
        if (v.length > 0) {
          attrString += '[data-'+k+'="'+v+'"]';
          // console.log(k, v);

          // if (k == 'building') {
          //   // remove active class from all buildings
          //   document.querySelectorAll('[data-iso-building-overview]').forEach(function(building) {
          //     building.classList.remove('is-active-building');
          //   });
          //   document.querySelector('[data-iso-building-overview="' + v + '"]').classList.add('is-active-building');
          // }

          // if (k == 'floor') {
          //   _hideFloors(v);
          // }
        }
      });

      if (attrString.length > 0) {
        $(selectors.filterItem).hide();
        $(attrString).show();
      }
    }
    else {
      $(selectors.filterItem).show();
    }
  };
    
  var _reset = function() {
    userFilter = {};
    $('select').prop('selectedIndex', 0);
    _filter();
    //_showFloors();
  };

  // var _hideFloors = function(targetFloor) {
  //   _showFloors();
  //   let floors = document.querySelectorAll('g[data-floor]');
  //   floors.forEach(floor => {
  //     if (floor.dataset.floor > targetFloor) {
  //       let f = document.querySelector('g[data-floor="'+ floor.dataset.floor +'"]');
  //       f.style.display = 'none';
  //       f.classList.add('is-locked');
  //     }
  //   });
  // };

  // var _showFloors = function() {
  //   let floors = document.querySelectorAll('g[data-floor]');
  //   floors.forEach(floor => {
  //     let f = document.querySelector('g[data-floor="'+ floor.dataset.floor +'"]');
  //     f.style.display = 'block';
  //     f.classList.remove('is-locked');
  //   });
  // }


/* --------------------------------------------------------------
  * RETURN PUBLIC METHODS
  * ------------------------------------------------------------ */
       
return {
  init: _initialize,
};

})();

// Initialize
Filter.init();

