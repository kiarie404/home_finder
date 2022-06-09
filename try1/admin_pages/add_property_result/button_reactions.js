//this page was made to avoid using AJAX... but...
// process :
 // engrave the property id to the url
 // get the property_id from the url using the GET method
 // post the property id to an actual form in the new page
 // use $_POST to retrieve it...//

 function view_property(button_id) {

   //extract the property_id
   var str = button_id ;
   var arr = str.split("_");  // this is because the button_id was written as : "view_'$property_id'"
   var property_id = arr[1];

   // now doing the redirecting + engraving propertid to the url
   window.location.href = "../view_property/view_property.php?id=" + property_id;
   // document.location.href = "../../shared pages/view_page/view_page.php";
 }

 function modify_property(button_id) {
   //extract the property_id
   var str = button_id ;
   var arr = str.split("_");  // this is because the button_id was written as : "view_'$property_id'"
   var property_id = arr[1];

   // now doing the redirecting + engraving propertid to the url
   window.location.href = "../modify_property/modify_property.php?id=" + property_id;
 }
