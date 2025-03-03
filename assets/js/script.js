/**
 * Header Script
 */
$(document).ready(function () {
  // Flyout menu for "Product"
  $(".flyout-btn").hover(
    function () {
      $(this).next(".flyout-menu").stop(true, true).fadeIn(200);
    },
    function () {
      $(this).next(".flyout-menu").stop(true, true).fadeOut(200);
    }
  );

  // Mobile menu toggle
  $(".mobile-menu-btn").click(function () {
    $(".mobile-menu").toggleClass("hidden");
  });

  // Close mobile menu with close button
  $(".mobile-menu-close").click(function () {
    console.log("Close Menu");

    $(".mobile-menu").toggleClass("hidden");
  });

  // Close mobile menu when clicking outside
  $(document).click(function (event) {
    if (!$(event.target).closest(".mobile-menu, .mobile-menu-btn").length) {
      $(".mobile-menu").addClass("hidden");
    }
  });
});
