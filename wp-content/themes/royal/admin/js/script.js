( function( $ ) {
	// Add Make Plus message
		upgrade = $('<a class="royal-buy-pro"></a>')
			.attr('href', 'http://www.webulousthemes.com/?add-to-cart=1596')
			.attr('target', '_blank')
			.text(royal_upgrade.message)
		;
		demo = $('<a class="royal-docs"></a>')
			.attr('href','http://royal.webulous.in/')
			.attr('target','_blank')
			.text(royal_upgrade.demo);
		docs = $('<a class="royal-docs"></a>')
			.attr('href','http://docs.webulous.in/royal-free/')
			.attr('target','_blank')
			.text(royal_upgrade.docs);
		support = $('<a class="royal-docs"></a>')
			.attr('href','http://www.webulousthemes.com/forums/forum/free-support/royal/')
			.attr('target','_blank')
			.text(royal_upgrade.support);

		$('.preview-notice').append(upgrade);
		$('.preview-notice').append(demo); 
		$('.preview-notice').append(docs);
		$('.preview-notice').append(support);
		// Remove accordion click event
		$('.royal-buy-pro').on('click', function(e) {
			e.stopPropagation();   
		});
		$('.royal-docs').on('click',function(e){
			e.stopPropagation();
		})
} )( jQuery );