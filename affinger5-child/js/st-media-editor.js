!function(t,e,a,i,n){"use strict";function r(t){var e=t.attr("data-st-media-target");return a('[name="'+e.replace(/[ !"#$%&'()*+,./:;<=>?@[\\\]^`{|}~]/g,"\\$&")+'"]')}function d(t){var e=t.attr("data-st-media-target");return a('[data-st-media-preview][data-st-media-target="'+e.replace(/[ !"#$%&'()*+,./:;<=>?@[\\\]^`{|}~]/g,"\\$&")+'"]')}function o(t){t.on("click",function(e){var n,o,s;e.preventDefault(),e.stopPropagation(),o=r(n=t),s=d(n),i.media.editor.send.attachment=function(t,e){var i,r,d;switch(n.attr("data-st-media-type")){case"id":i=e.id;break;case"url":default:i=void 0!==t.size&&(e.sizes[t.size],1)?e.sizes[t.size].url:e.url}r=void 0!==e.sizes.thumbnail?e.sizes.thumbnail.url:e.url,o.length&&o.val(i),s.length&&(d=a("<img>",{src:r}),s.empty().append(d))},i.media.editor.open(n)})}function s(t){t.on("click",function(e){var a,i,n;e.preventDefault(),e.stopPropagation(),i=r(a=t),n=d(a),i.length&&i.val(""),n.length&&n.empty()})}void 0!==i&&i.media&&i.media.editor&&a(function(){a("[data-st-media-editor-button]").each(function(){o(a(this))}),a("[data-st-media-reset-button]").each(function(){s(a(this))})})}(window,window.document,jQuery,wp);

jQuery(document).ready(function($) {

//ヘッダーの固定

    // masthead scroll
    var header = $('.header-bar'); // fixed DOM
    var adclass = 'scrolled'; // add css class
    var scrollY = 180; // scroll

    $(window).scroll(function() {
        if ($(window).scrollTop() <= scrollY) {
            header.removeClass(adclass);
            $('.header-bar .search__box').hide();
        } else {
            header.addClass(adclass);
            $('.header-bar .search__box').show();
        }

    });
  });
