

import $ from 'jquery';

var $portfolioSectionLinks = $('.portfolio-section .navbar li a');
var $portfolioContainer = $('.portfolio-container');

var $masonryPanels = $('.masonry-layout__panel');

$portfolioSectionLinks.on({
    'click' : function(e) {
        e.preventDefault();

            var $category_name = $(this).text();

            $.ajax({
                url: ajaxportfolio.ajaxurl,
                type: 'post',
                data: {
                    action: 'ajax_portfolio_section',
                    category_name: $category_name,
                },
                success: function( result ) {

                    $portfolioContainer.empty();

                    $portfolioContainer.append(result);

            }
        })
    }
})
  