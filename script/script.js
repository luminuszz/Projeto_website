
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


function valida(){

	alert("Dseja realmente criar um novo curso?");
}


function valida_aluno(){

	alert("Dseja realmente criar um novo aluno?");
}