import _ from 'lodash';
import debounce from '../plugins/debounce';

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
    visibleBuilding: 'is-visible-building',
    hasActiveBuilding: 'has-active-building',
  };

  /* --------------------------------------------------------------
  * METHODS
  * ------------------------------------------------------------ */

  var _initialize = function() {

    if (!_isMobile()) {
      _bind();
    }
    // on resize check again for mobile
    $(window).on('resize', debounce(function() {
      if (!_isMobile()) {
        _bind();
      }
      else {
        _unbind();
      }
    }, 250));
  };

  var _bind = function() {

    // on hover on list, add 'has-active-building' class to wrapper
    // check if selector exists
    if (!document.querySelector(selectors.list)) {
      return;
    }

    document.querySelector(selectors.list).addEventListener('mouseenter', function() {
      if (!_isMobile()) {
        document.querySelector(selectors.overview).classList.add(classes.hasActiveBuilding);
      }
    });

    // remove class on mouseleave
    // check if selector exists
    if (!document.querySelector(selectors.list)) {
      return;
    }
    document.querySelector(selectors.list).addEventListener('mouseleave', function() {
      if (!_isMobile()) {
        document.querySelector(selectors.overview).classList.remove(classes.hasActiveBuilding);
      }
    });

    // show building on hover
    // check if selector exists
    if (!document.querySelector(selectors.listItem)) {
      return;
    }
    document.querySelectorAll(selectors.listItem).forEach(function(item) {
      item.addEventListener('mouseenter', function() {
        if (!_isMobile()) {
          document.querySelector('[data-iso-wrapper] [data-iso-building-overview="' + item.dataset.building + '"]').classList.add(classes.activeBuilding);
          document.querySelector('[data-iso-wrapper] [data-iso-building="' + item.dataset.building + '"]').classList.add(classes.visibleBuilding);
          document.querySelector('[data-iso-wrapper] [data-iso-building="' + item.dataset.building + '"] [data-name="' + item.dataset.number + '"]').classList.add(classes.activeItem);
          const floor = $('[data-iso-wrapper] [data-iso-building="' + item.dataset.building + '"] [data-floor="' + item.dataset.floor + '"]');
          floor.nextAll().css('opacity', '.2');
        }
      });

      // hide building on mouseleave
      item.addEventListener('mouseleave', function() {
        if (!_isMobile()) {
          document.querySelector('[data-iso-wrapper] [data-iso-building-overview="' + item.dataset.building + '"]').classList.remove(classes.activeBuilding);
          document.querySelector('[data-iso-wrapper] [data-iso-building="' + item.dataset.building + '"]').classList.remove(classes.visibleBuilding);
          document.querySelector('[data-iso-wrapper] [data-iso-building="' + item.dataset.building + '"] [data-name="' + item.dataset.number + '"]').classList.remove(classes.activeItem);
          const floor = $('[data-iso-wrapper] [data-iso-building="' + item.dataset.building + '"] [data-floor="' + item.dataset.floor + '"]');
          floor.nextAll().css('opacity', '1');
        }
      });
    });
  };

  // create an unbind function to remove all event listeners
  var _unbind = function() {
    // check if selector exists
    if (!document.querySelector(selectors.list)) {
      return;
    }
    document.querySelector(selectors.list).removeEventListener('mouseenter', function() {
      document.querySelector(selectors.overview).classList.add(classes.hasActiveBuilding);
    });

    // remove class on mouseleave
    // check if selector exists
    if (!document.querySelector(selectors.list)) {
      return;
    }
    document.querySelector(selectors.list).removeEventListener('mouseleave', function() {
      document.querySelector(selectors.overview).classList.remove(classes.hasActiveBuilding);
    });

    // show building on hover
    // check if selector exists
    if (!document.querySelector(selectors.listItem)) {
      return;
    }
    document.querySelectorAll(selectors.listItem).forEach(function(item) {
      item.removeEventListener('mouseenter', function() {
        document.querySelector('[data-iso-building-overview="' + item.dataset.building + '"]').classList.add(classes.activeBuilding);
        document.querySelector('[data-iso-building="' + item.dataset.building + '"]').classList.add(classes.visibleBuilding);
        document.querySelector('[data-iso-building="' + item.dataset.building + '"] [data-name="' + item.dataset.number + '"]').classList.add(classes.activeItem);
      });

      // hide building on mouseleave
      item.removeEventListener('mouseleave', function() {
        document.querySelector('[data-iso-building-overview="' + item.dataset.building + '"]').classList.remove(classes.activeBuilding);
        document.querySelector('[data-iso-building="' + item.dataset.building + '"]').classList.remove(classes.visibleBuilding);
        document.querySelector('[data-iso-building="' + item.dataset.building + '"] [data-name="' + item.dataset.number + '"]').classList.remove(classes.activeItem);
      });
    });
  };

  var _isMobile = function() {
    return window.matchMedia('(max-width: 1024px)').matches || window.innerWidth <= 1024;
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