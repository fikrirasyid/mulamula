/*
 * Copyright 2013, Fikri Rasyid - http://fikrirasyid.com
 * License: Distributed under the terms of GNU General Public License
*/
jQuery(document).ready(function($) { 
	// Normalizing entry-content items' width
	function mulamula_normalize_media(){
		var item 	= $(this);
		var item_width = item.width();
		var content_width = $('#content .entry-content').width();
		if( item_width > content_width ){
			item.removeAttr('width').css({'width' : '100%'});

			if( item.is('img, div') ){
				item.removeAttr('height');
			}
		}
	}	
	$('.entry-content img, .entry-content .wp-caption, .entry-content iframe, .entry-content embed').each(mulamula_normalize_media);
	$('.entry-content .attachment img').removeAttr('width').removeAttr('height').css({ 'width' : '100%' });

	/**
	 * Top Navigation Mechanism
	 */
	 $('#top-nav li').hover(
	 	function(){
	 		$(this).addClass('active').children('ul').fadeIn();
	 	},
	 	function(){
	 		$(this).removeClass('active').children('ul').fadeOut();
	 	}
 	);

	 

	/**
	 * For Posts which have more than one category
	 */
	$('.entry-category').each(function(){
		var cat = $(this);
		if( cat.find('li').size() > 1 ){
			cat.find('li:first a').append('<sup>+</sup>');
			cat.find('li:gt(0)').hide();

			cat.hover(
				function(){
					cat.find('li:gt(0)').show();
				},
				function(){
					cat.find('li:gt(0)').hide();
				}
			);
		}
	});
});