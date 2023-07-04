var Menu = (function() {

  /* --------------------------------------------------------------
   * OPTIONS AND VARIABLES
   * ------------------------------------------------------------ */
    
  // selectors 	
  var selectors = {
    body:       'body', 
    menu:       '.js-menu',
    btnMenu:    '.js-btn-menu',
    btnSubmenu: '.js-btn-sub'
  };

  var classes = {
    visible: 'is-visible',
    active: 'is-active',
  };

  // media queries
  var mq = {
    xs: window.matchMedia("(min-width: 660px)"),
  };

  /* --------------------------------------------------------------
  * METHODS
  * ------------------------------------------------------------ */

  var _initialize = function() {
    _bind();
  };

  var _bind = function() {
    
    $(selectors.body).on('click', selectors.btnMenu, function(){
      $(selectors.menu).toggleClass(classes.visible);
      $(this).toggleClass(classes.active);
    });

    $(selectors.body).on('mouseover', selectors.btnSubmenu, function() {
      if (mq.xs.matches) {
        $(this).next('ul').show();
      }
    });

    $(selectors.body).on('mouseover', selectors.menu + ' > ul > li > a', function() {
      if (mq.xs.matches) {
        if (!$(this).hasClass('js-btn-sub')) {
          $(selectors.menu + ' ul ul').hide();
        }
      }
    });

    $(selectors.body).on('mouseleave', selectors.btnSubmenu + '+ ul', function() {
      if (mq.xs.matches) {
        $(this).hide();
      }
    });

    $(selectors.body).on('mouseleave', selectors.menu, function() {
      if (mq.xs.matches) {
        $(this).find('ul ul').hide();
      }
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
Menu.init();