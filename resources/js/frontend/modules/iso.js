var Iso = (function() {

  /* --------------------------------------------------------------
   * OPTIONS AND VARIABLES
   * ------------------------------------------------------------ */
    
  // selectors 	
  var selectors = {
    wrapper: '[data-iso-wrapper]',
    list: '[data-iso-list] tbody',
    listItem: '[data-iso-list-item]',
    overview: '[data-iso-overview]',
    overviewBuilding: '[data-iso-building-overview]',
  };

  var classes = {
    activeItem: 'is-active-item',
    activeBuilding: 'is-active-building',
    visibbleBuilding: 'is-visible-building',
    hasActiveBuilding: 'has-active-building',
  };

  /* --------------------------------------------------------------
  * METHODS
  * ------------------------------------------------------------ */

  var _initialize = function() {
    _bind();
  };

  var _bind = function() {

    // on hover on list, add 'has-active-building' class to wrapper
    // check if selector exists
    if (!document.querySelector(selectors.list)) {
      return;
    }

    document.querySelector(selectors.list).addEventListener('mouseenter', function() {
      document.querySelector(selectors.overview).classList.add(classes.hasActiveBuilding);
    });

    // remove class on mouseleave
    // check if selector exists
    if (!document.querySelector(selectors.list)) {
      return;
    }
    document.querySelector(selectors.list).addEventListener('mouseleave', function() {
      document.querySelector(selectors.overview).classList.remove(classes.hasActiveBuilding);
    });

    // show building on hover
    // check if selector exists
    if (!document.querySelector(selectors.listItem)) {
      return;
    }
    document.querySelectorAll(selectors.listItem).forEach(function(item) {
      item.addEventListener('mouseenter', function() {
        document.querySelector('[data-iso-building-overview="' + item.dataset.building + '"]').classList.add(classes.activeBuilding);
        document.querySelector('[data-iso-building="' + item.dataset.building + '"]').classList.add(classes.visibbleBuilding);
        document.querySelector('[data-iso-building="' + item.dataset.building + '"] [data-name="' + item.dataset.number + '"]').classList.add(classes.activeItem);
      });

      // hide building on mouseleave
      item.addEventListener('mouseleave', function() {
        document.querySelector('[data-iso-building-overview="' + item.dataset.building + '"]').classList.remove(classes.activeBuilding);
        document.querySelector('[data-iso-building="' + item.dataset.building + '"]').classList.remove(classes.visibbleBuilding);
        document.querySelector('[data-iso-building="' + item.dataset.building + '"] [data-name="' + item.dataset.number + '"]').classList.remove(classes.activeItem);
      });
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