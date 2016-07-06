jQuery('iframe[src*="youtube.com"]').wrap("<div class='flex-video widescreen'/>");
jQuery('iframe[src*="vimeo.com"]').wrap("<div class='flex-video widescreen vimeo'/>");
;jQuery(document).foundation();
;// Joyride demo
$('#start-jr').on('click', function () {
  $(document).foundation('joyride', 'start');
});
;
;
$(window).bind(' load resize orientationChange ', function () {
  var footer = $("#footer-container");
  var pos = footer.position();
  var height = $(window).height();
  height = height - pos.top;
  height = height - footer.height() - 1;

  function stickyFooter() {
    footer.css({
      'margin-top': height + 'px'
    });
  }

  if (height > 0) {
    stickyFooter();
  }
});
//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImZsZXgtdmlkZW8uanMiLCJpbml0LWZvdW5kYXRpb24uanMiLCJqb3lyaWRlLWRlbW8uanMiLCJvZmZDYW52YXMuanMiLCJzdGlja3lmb290ZXIuanMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUEsT0FBUSw0QkFBUixFQUFzQyxJQUF0QyxDQUEyQyxzQ0FBM0M7QUFDQSxPQUFRLDBCQUFSLEVBQW9DLElBQXBDLENBQXlDLDRDQUF6QztDQ0RBLE9BQU8sUUFBUCxFQUFpQixVQUFqQjs7QUNDQSxFQUFFLFdBQUYsRUFBZSxFQUFmLENBQWtCLE9BQWxCLEVBQTJCLFlBQVc7QUFDcEMsSUFBRSxRQUFGLEVBQVksVUFBWixDQUF1QixTQUF2QixFQUFpQyxPQUFqQztBQUNELENBRkQ7Q0NEQTs7QUNDQSxFQUFFLE1BQUYsRUFBVSxJQUFWLENBQWUsaUNBQWYsRUFBa0QsWUFBWTtBQUMzRCxNQUFJLFNBQVMsRUFBRSxtQkFBRixDQUFiO0FBQ0EsTUFBSSxNQUFNLE9BQU8sUUFBUCxFQUFWO0FBQ0EsTUFBSSxTQUFTLEVBQUUsTUFBRixFQUFVLE1BQVYsRUFBYjtBQUNBLFdBQVMsU0FBUyxJQUFJLEdBQXRCO0FBQ0EsV0FBUyxTQUFTLE9BQU8sTUFBUCxFQUFULEdBQTBCLENBQW5DOztBQUVBLFdBQVMsWUFBVCxHQUF3QjtBQUN0QixXQUFPLEdBQVAsQ0FBVztBQUNQLG9CQUFjLFNBQVM7QUFEaEIsS0FBWDtBQUdEOztBQUVELE1BQUksU0FBUyxDQUFiLEVBQWdCO0FBQ2Q7QUFDRDtBQUNILENBaEJEIiwiZmlsZSI6ImZvdW5kYXRpb24uanMiLCJzb3VyY2VzQ29udGVudCI6WyJqUXVlcnkoICdpZnJhbWVbc3JjKj1cInlvdXR1YmUuY29tXCJdJykud3JhcChcIjxkaXYgY2xhc3M9J2ZsZXgtdmlkZW8gd2lkZXNjcmVlbicvPlwiKTtcbmpRdWVyeSggJ2lmcmFtZVtzcmMqPVwidmltZW8uY29tXCJdJykud3JhcChcIjxkaXYgY2xhc3M9J2ZsZXgtdmlkZW8gd2lkZXNjcmVlbiB2aW1lbycvPlwiKTtcbiIsImpRdWVyeShkb2N1bWVudCkuZm91bmRhdGlvbigpO1xuIiwiLy8gSm95cmlkZSBkZW1vXG4kKCcjc3RhcnQtanInKS5vbignY2xpY2snLCBmdW5jdGlvbigpIHtcbiAgJChkb2N1bWVudCkuZm91bmRhdGlvbignam95cmlkZScsJ3N0YXJ0Jyk7XG59KTsiLCIiLCJcbiQod2luZG93KS5iaW5kKCcgbG9hZCByZXNpemUgb3JpZW50YXRpb25DaGFuZ2UgJywgZnVuY3Rpb24gKCkge1xuICAgdmFyIGZvb3RlciA9ICQoXCIjZm9vdGVyLWNvbnRhaW5lclwiKTtcbiAgIHZhciBwb3MgPSBmb290ZXIucG9zaXRpb24oKTtcbiAgIHZhciBoZWlnaHQgPSAkKHdpbmRvdykuaGVpZ2h0KCk7XG4gICBoZWlnaHQgPSBoZWlnaHQgLSBwb3MudG9wO1xuICAgaGVpZ2h0ID0gaGVpZ2h0IC0gZm9vdGVyLmhlaWdodCgpIC0xO1xuXG4gICBmdW5jdGlvbiBzdGlja3lGb290ZXIoKSB7XG4gICAgIGZvb3Rlci5jc3Moe1xuICAgICAgICAgJ21hcmdpbi10b3AnOiBoZWlnaHQgKyAncHgnXG4gICAgIH0pO1xuICAgfVxuXG4gICBpZiAoaGVpZ2h0ID4gMCkge1xuICAgICBzdGlja3lGb290ZXIoKTtcbiAgIH1cbn0pO1xuIl0sInNvdXJjZVJvb3QiOiIvc291cmNlLyJ9
