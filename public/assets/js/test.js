// console.log("hahaha");
// $(document).ready(function(){
//     $("#sidebar-btn").click(function(){
//         alert("Worked");
//     });
// });
$(document).ready(function() {
    $('#sidebar-btn').on('click', function() {
      $('#sidebar').toggleClass('visible');
    });
  });