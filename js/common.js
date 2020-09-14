// Smooth scroll on anchor click
$(document).on("click", ".anchor", function (event) {
  event.preventDefault();
  $("html, body").animate(
    {
      scrollTop: $($.attr(this, "href")).offset().top,
    },
    750
  );
});

// smile


