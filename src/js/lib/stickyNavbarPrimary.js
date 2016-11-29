jQuery(function (jQuery) {
    jQuery('.storefront-primary-navigation').stickyNavbar({
      activeClass: 'sticky',
      sectionSelector: 'scrollto',
      animDuration: 300,
      startAt: 0, // Stick the menu at XXXpx from the top
      easing: 'easeInQuad',
      jqueryEffects: false,
      animateCSS: true,
      animateCSSRepeat: false,
      selector: 'a',
      jqueryAnim: 'fadeInDown', // jQuery effects: fadeIn, show, slideDown
      mobile: true
    })
})
