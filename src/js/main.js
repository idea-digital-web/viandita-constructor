import modernizr from './vendors/modernizr.js'
import selectivizr from './vendors/selectivizr.js'
import tipsy from './vendors/jquery.tipsy.js'
import customTipsy from './lib/customTipsy'
import flexslider from './vendors/jquery.flexslider.js'
import flexsliderPrincipal from './lib/flexsliderPrincipal'
// import addFlexsliderProducts from './lib/addFlexsliderProducts'
// import flexsliderProducts from './lib/flexsliderProducts'
// import addViewDetails from './lib/addViewDetails'
import menuDropdown from './lib/menuDropdown'
import addBorderBottom from './lib/addBorderBottom'
import changueAttr from './lib/changueAttr'
import addAttr from './lib/addAttr'
import stickyNavbarPrimary from './lib/stickyNavbarPrimary'
// import stickyNavbarSecondary from './lib/stickyNavbarSecondary'
import singleProduct from './lib/singleProduct'

(() => {
  'use strict'

  document.addEventListener('DOMContentLoaded', onDOMLoad)

  function onDOMLoad () {
    modernizr()
    selectivizr()
    tipsy()
    menuDropdown()
    addBorderBottom()
    customTipsy()
    flexslider()
    flexsliderPrincipal()
    // addFlexsliderProducts()
    // flexsliderProducts()
    // addViewDetails()
    changueAttr()
    addAttr()
    stickyNavbarPrimary()
    // stickyNavbarSecondary()
    singleProduct()
  }
})()
