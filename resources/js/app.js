import $ from 'jquery';
require('./bootstrap');

particlesJS.load('particles-js', '/particlesjs-config.json')

$('.btn').on('mouseenter', function(e) {
    $('#app').addClass('blur')
})

$('.btn').on('mouseleave', function(e) {
    $('#app').removeClass('blur')
})