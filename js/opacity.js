// $("input").focus(function(){
//   $("#caja").css("opacity", "1");
// }
// );

$("input").focus(function(){
  $("#caja").addClass('opacidadFocus');
}).blur(function() {
    $("#caja").removeClass('opacidadFocus');
});

$( "#caja" ).hover(
  function() {
    $( this ).addClass( 'opacidadHover' );
  }, function() {
    $( this ).removeClass( 'opacidadHover' );
  }
);