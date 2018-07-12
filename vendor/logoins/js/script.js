// image gallery
// init the state from the input
$(".image-checkbox").each(function () {
  if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
    $(this).addClass('image-checkbox-checked');
  }
  else {
    $(this).removeClass('image-checkbox-checked');
  }
});

// sync the state to the input
$(".image-checkbox").on("click", function (e) {
  $(this).toggleClass('image-checkbox-checked');
  var $checkbox = $(this).find('input[type="checkbox"]');
  $checkbox.prop("checked",!$checkbox.prop("checked"))

  e.preventDefault();
});

// conversational for instattiate
$("form").conversationalForm({
  formEl: document.getElementById("form"),
  preventAutoFocus: true
});

window.addEventListener("load",function() {
    setTimeout(function(){
        // This hides the address bar:
        window.scrollTo(0, 1);
    }, 0);
});
$(function () {
  const target = $('#conversational-form')[0]; // Get DOM element from jQuery collection

  $('#toggle').on('click', () => {
    if (screenfull.enabled) {
      screenfull.toggle();
    }
    if ($("#toggle").html()=="Fullscreen") {
        $("#toggle").html('Exit fullscreen');
      } else {
        $("#toggle").html('Fullscreen');
      }
  });
});