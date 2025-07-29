(function() {
  // Image modal handler
  $(document).on("click", ".js-button", function() {
    var imageSrc = $(this).parents(".pop__item").find("img").attr("src");
    $(".js-modal-image").attr("src", imageSrc);
    $(document).on("click", function() {
      $(this).toggleClass("active");
    });
  });
})();
