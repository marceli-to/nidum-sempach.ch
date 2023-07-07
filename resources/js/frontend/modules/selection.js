
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
    _bind();
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
      $(selectors.table).find('tr').remove();
      $(selectors.wrapper).hide();
    });

    $(selectors.body).on('click', selectors.btnHide, function(){
      $(selectors.wrapper).hide();
    });

    // $(document).on('scroll', function() {
    //   _hide();
    // });
  };

  var _hide = debounce(function() {
    $(selectors.wrapper).hide();
  }, 300);

  /* --------------------------------------------------------------
  * RETURN PUBLIC METHODS
  * ------------------------------------------------------------ */
        
  return {
    init: _initialize,
  };

})();

// Initialize
Selection.init();