
$ ->

  $('.submenu').hide()
  $('.js-accordion-trigger').bind 'click', (e) ->
    $(this).parent().find('.submenu').slideToggle 'fast'
    $(this).parent().toggleClass 'is-expanded'
    e.preventDefault()