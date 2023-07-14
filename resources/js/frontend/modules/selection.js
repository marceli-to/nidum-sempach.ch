
import debounce from '../plugins/debounce';

var Selection = (function() {

  /* --------------------------------------------------------------
   * OPTIONS AND VARIABLES
   * ------------------------------------------------------------ */
    
  // selectors 	
  var selectors = {
    body:      'body', 
    wrapper:  '.js-selection-wrapper',
    table:    '.js-selection-table',
    btnClear: '.js-selection-clear',
    btnHide: '.js-selection-hide',
    listItem: '[data-iso-list-item]',
    isoItem:  'g[data-number]'
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
    
    $(selectors.body).on('click', selectors.isoItem, function(){
      var obj = $(this).data('number');

      var clone = $('tr[data-number="'+obj+'"]').clone();
      if ($(selectors.table).find('tr[data-number="'+obj+'"]').length == 0) {
        $(clone).addClass('js-selection-item').appendTo(selectors.table);
        $(selectors.wrapper).show();
      }
    });

    $(selectors.body).on('click', selectors.listItem, function(){
      var obj = $(this);
      var clone = obj.clone();
      if ($(selectors.table).find('tr[data-number="'+obj.data('number')+'"]').length == 0) {
        $(clone).addClass('js-selection-item').appendTo(selectors.table);
        $(selectors.wrapper).show();
      }
    });

    $(selectors.body).on('click', selectors.btnClear, function(){
      _clear();
    });

    $(selectors.body).on('click', selectors.btnHide, function(){
      _hide();
    });
  };

  // create an _unbind method to remove event listeners when needed
  var _unbind = function() {
    _clear();
    $(selectors.body).off('click', selectors.isoItem);
    $(selectors.body).off('click', selectors.listItem);
    $(selectors.body).off('click', selectors.btnClear);
    $(selectors.body).off('click', selectors.btnHide);
  };

  var _clear = function() {
    $(selectors.table).find('tr').remove();
    _hide();
  };

  var _hide = function() {
    $(selectors.wrapper).hide();
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
Selection.init();