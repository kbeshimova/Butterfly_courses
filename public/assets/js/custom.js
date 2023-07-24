// coach block 

$(document).ready(function() {
    $("#coach-btn").on("click", function() {
        var coachInfo = $("#coachInfo");
        var avatars = $("#avatars");
        var coachBtn = $(this);
        var iconSpan = coachBtn.find("span");
        
        if (coachInfo.css("display") === "none") {
            avatars.fadeOut();
            avatars.css("display", "none");
            coachInfo.fadeIn();
            coachInfo.css("display", "flex");
            iconSpan.removeClass("bx-plus").addClass("bx-minus");
        } else {
            avatars.fadeIn();
            avatars.css("display", "flex");
            coachInfo.fadeOut();
            coachInfo.css("display", "none");
            iconSpan.removeClass("bx-minus").addClass("bx-plus");
        }
    });

    // about block 

    $(".about").click(function() {
        $(".about").removeClass("active-about");
        $(this).addClass("active-about");
        var content = $(this).attr("data-content");
        console.log(content);
        $(".about-inner").addClass("d-none");
        $("."+content).removeClass("d-none");
          
    });
});

// Range slider

$(document).ready(function () {
    const inputSlider = $("#sliders");

    inputSlider.on("input", function () {
      const range_butterfly = inputSlider.val();
// это для ползунка, чтобы он праивльно был
      switch (range_butterfly) {
        case "1":
          $("#sliderValue").css("left", "calc(0% - -10px)");
          break;
        case "2":
          $("#sliderValue").css("left", "calc(50% - 0px)");
          break;
        case "3":
          $("#sliderValue").css("left", "calc(100% - 10px)");
          break;
      }
      switch (range_butterfly) {
        case "1":
          $("#sliderValue").text("1");
          inputSlider.css(
            "background",
            "linear-gradient(90deg, black 100%, black 0%)"
          );
          $("#textAboveRange").text("01.Начинающий"); //это текст над рэнджом
          $("#textUnderRange").text("01.Начинающий. Текст текст текст");//ну а это под
          $("button[data-bs-target='#accordionOne']").text(
            "01.Начинающий. Текст текст текст аккордеон"
          );// это для аккордеиона, я только одно сделал, остальное сама
          break;
        case "2":
          $("#sliderValue").text("2");
          inputSlider.css(
            "background",
            "linear-gradient(90deg, #B4A9D2 50%, black 0%)"
          );
          $("#textAboveRange").text("02.Среднячок");
          $("#textUnderRange").text("02.Середняк. Текст текст текст");
          $("button[data-bs-target='#accordionOne']").text(
            "02.Середняк. Текст текст текст аккордеон"
          );
          break;
        case "3":
          $("#sliderValue").text("3");
          inputSlider.css(
            "background",
            "linear-gradient(90deg, #B4A9D2 100%, #B4A9D2 0%)"
          );
          $("#textAboveRange").text("03.Продвинутый");
          $("#textUnderRange").text("03.Профи. Текст текст текст аккордеон");
          $("button[data-bs-target='#accordionOne']").text(
            "03.Профи. Текст текст текст аккордеон"
          );

          break;
        default: //это дефолтное значение, поэтому все что делаешь для первого, должно быть и для этого
          $("#sliderValue").text("1");
          $("#textAboveRange").text("01.Начинающий");
          $("#textUnderRange").text("01.Начинающий. Текст текст текст");
          $("button[data-bs-target='#accordionOne']").text(
            "01.Начинающий. Текст текст текст аккордеон"
          );
          break;
      }
    });
    inputSlider.trigger("input");
  });

 // carousel portfolio

// var owl = $(".owl-carousel");
// owl.owlCarousel({
//   items: 5,
//   loop: true,
//   nav: false,
//   autoWidth: true,
//   margin: 10,
//   autoplay: true,
//   autoplayTimeout: 3000,
//   autoplayHoverPause: true,
//   autoplaySpeed: 2000,
// });
// $(".play").on("click", function () {
//   owl.trigger("play.owl.autoplay", [1000]);
// });
// $(".stop").on("click", function () {
//   owl.trigger("stop.owl.autoplay");
// });


