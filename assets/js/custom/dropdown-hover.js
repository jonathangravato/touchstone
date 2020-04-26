function toggleDropdown (e) {
  const _d = jQuery(e.target).closest('.dropdown'),
    _m = jQuery('.dropdown-menu', _d);
  setTimeout(function(){
    const shouldOpen = e.type !== 'click' && _d.is(':hover');
    _m.toggleClass('show', shouldOpen);
    _d.toggleClass('show', shouldOpen);
    jQuery('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
  }, e.type === 'mouseleave' ? 300 : 0);
}

// jQuery('.dropdown-toggle').removeAttr('data-toggle');
  
jQuery('body').on('mouseenter mouseleave','.dropdown',toggleDropdown);
