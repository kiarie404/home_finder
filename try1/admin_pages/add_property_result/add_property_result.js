// this script describe how the various buttons behave.

 // the withhold_button

    // color and word change explained

function withhold_release(clicked_item) {
  var element = document.getElementById(clicked_item);
  if (element.innerHTML == "withhold") {
    element.innerHTML = "release";
    element.style.color = "white";
    element.style.background = "green";
  }

  else if (element.innerHTML == "release") {
    element.innerHTML = "withhold";
    element.style.color = "white";
    element.style.background = "red";
  }
}

//this action acts as a href and opens the view page.
//it also gets he property id... and then puts it in the innerhtml of 'transmit'//
// function individual_view(button_id) {
//   document.location.href = "../../shared pages/view_page/view_page.php";
//   var str = button_id ;
//   var arr = str.split("_");
//   document.getElementById("log").innerHTML = arr[1];
// }
