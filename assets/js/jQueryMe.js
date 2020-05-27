$(document).ready(function () {
  const pickr = Pickr.create({
    el: ".color-picker",
    theme: "classic", // or 'monolith', or 'nano'

    swatches: [
      "rgba(244, 67, 54, 1)",
      "rgba(233, 30, 99, 0.95)",
      "rgba(156, 39, 176, 0.9)",
      "rgba(103, 58, 183, 0.85)",
      "rgba(63, 81, 181, 0.8)",
      "rgba(33, 150, 243, 0.75)",
      "rgba(3, 169, 244, 0.7)",
      "rgba(0, 188, 212, 0.7)",
      "rgba(0, 150, 136, 0.75)",
      "rgba(76, 175, 80, 0.8)",
      "rgba(139, 195, 74, 0.85)",
      "rgba(205, 220, 57, 0.9)",
      "rgba(255, 235, 59, 0.95)",
      "rgba(255, 193, 7, 1)",
    ],

    components: {
      // Main components
      preview: true,
      opacity: true,
      hue: true,

      // Input / output Options
      interaction: {
        hex: true,
        rgba: true,
        hsla: true,
        hsva: true,
        cmyk: true,
        input: true,
        clear: true,
        save: true,
      },
    },
  });
  pickr.on("save", (color, instance) => {
    const hexaColor = color.toHEXA().toString();
    console.log(hexaColor);
    $("#color").val(hexaColor);
  });

  const pickr2 = Pickr.create({
    el: ".color-picker2",
    theme: "classic", // or 'monolith', or 'nano'

    swatches: [
      "rgba(244, 67, 54, 1)",
      "rgba(233, 30, 99, 0.95)",
      "rgba(156, 39, 176, 0.9)",
      "rgba(103, 58, 183, 0.85)",
      "rgba(63, 81, 181, 0.8)",
      "rgba(33, 150, 243, 0.75)",
      "rgba(3, 169, 244, 0.7)",
      "rgba(0, 188, 212, 0.7)",
      "rgba(0, 150, 136, 0.75)",
      "rgba(76, 175, 80, 0.8)",
      "rgba(139, 195, 74, 0.85)",
      "rgba(205, 220, 57, 0.9)",
      "rgba(255, 235, 59, 0.95)",
      "rgba(255, 193, 7, 1)",
    ],

    components: {
      // Main components
      preview: true,
      opacity: true,
      hue: true,

      // Input / output Options
      interaction: {
        hex: true,
        rgba: true,
        hsla: true,
        hsva: true,
        cmyk: true,
        input: true,
        clear: true,
        save: true,
      },
    },
  });

  pickr2.on("save", (color, instance) => {
    const hexaColor = color.toHEXA().toString();
    console.log(hexaColor);
    $("#color2").val(hexaColor);
  });

  var npassword = document.getElementById(npassword);
  var confpassword = document.getElementById(confpassword);
  confpassword.addEventListener(
    "keyup",
    function (event) {
      var confpassword = event.target.value;
      var span = event.target.nextElementSibling;
      if (confpassword != npassword) {
        span.innerHtml = "&cross; se n'est pas le nouvaux mot de passe";
        span.style.color = "red";
      } else {
        span.innerHtml = "&check;";
        span.style.color = "green";
      }
    },
    false
  );
});
