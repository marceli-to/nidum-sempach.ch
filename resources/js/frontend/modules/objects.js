import debounce from '../plugins/debounce';

var Objects = (function() {

  /* --------------------------------------------------------------
   * OPTIONS AND VARIABLES
   * ------------------------------------------------------------ */
  
  var classes = {
    visible: 'is-visible',
    activeItem: 'is-active-item',
    activeBuilding: 'is-active-building',
    visibleBuilding: 'is-visible-building',
  };

  // selectors 	
  var selectors = {
    body:  'body', 
    wrapper: '.js-object-detail-wrapper',
    item: '[data-iso-list-item]',
  };

  /* --------------------------------------------------------------
  * METHODS
  * ------------------------------------------------------------ */

  var _initialize = function() {
    if (_isMobile()) {
      _bind();
    }
    // on resize check again for mobile
    $(window).on('resize', debounce(function() {
      if (_isMobile()) {
        _bind();
      }
    }, 250));

  };

  var _bind = function() {
    // on touch start (item) add the 'is-visible' class to the wrapper
    $(selectors.body).on('touchstart', selectors.item, function(){
      _show(this);
    });

    // on click (item) add the 'is-visible' class to the wrapper
    // $(selectors.body).on('click', selectors.item, function(){
    //   _show(this);
    // });

  };

  var _show = function(item) {

    _clear();
    const itemData = $(item).data();

   
    // Show the wrapper
    $(selectors.wrapper).addClass(classes.visible);

    // Show the building and the apartment
    $('[data-object-iso-overview] [data-iso-building-overview="' + item.dataset.building + '"]').addClass(classes.activeBuilding);
    $('[data-object-iso-wrapper] [data-iso-building="' + itemData.building + '"]').addClass(classes.visibleBuilding);
    $('[data-object-iso-wrapper] [data-iso-building="' + itemData.building + '"] [data-name="' + itemData.number + '"]').addClass(classes.activeItem);

    const floor = $('[data-object-iso-wrapper] [data-iso-building="' + itemData.building + '"] [data-floor="' + itemData.floor + '"]');

    // floor is an svg group, get all groups that are after this group and set opacity to .125
    floor.nextAll().css('opacity', '.1');


    // Add itemData to data-object-detail innerHTML
    const objectDetailInfo = itemData.rooms + '-Zimmerwohnung, ' + itemData.detailFloor + ', ' + itemData.area + ' m²';

    // create a link for itemData.form
    const objectDetailLink = '<a href="' + itemData.form + '" target="_blank">Anmeldeformular</a>';

    // create a link for itemData.plan
    const objectDetailPlan = '<a href="' + itemData.plan + '" target="_blank">Grundriss</a>';
    const objectDetail = objectDetailInfo + '<div class="flex">' + objectDetailLink + ' ' + objectDetailPlan + '</div>';

    $('[data-object-detail-number]').html('Wohnung ' + itemData.detailTitle);
    $('[data-object-detail]').html(objectDetail);

  };

  var _hide = function() {
    $(selectors.wrapper).removeClass(classes.visible);
  };

  var _clear = function() {
    const buildings = $('[data-object-iso-wrapper] [data-iso-building]');
    const buildingsOverview = $('[data-object-iso-overview] [data-iso-building-overview]');
    const apartments = $('[data-object-iso-wrapper] [data-iso-building] [data-name]');
    const floors = $('[data-object-iso-wrapper] [data-iso-building] [data-floor]');

    floors.css('opacity', '1');

    buildings.removeClass(classes.visibleBuilding)
    buildingsOverview.removeClass(classes.activeBuilding);
    apartments.removeClass(classes.activeItem);
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
Objects.init();