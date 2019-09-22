$(document).ready(function() {
  $("#btn-login").click(function() {
      let obj = {
        "accion": "login"
      };
    $("form").find("input").map(function(i, e){
        obj =[$(this).prop("name")] = $(this).val();
        if($(this).prop("type") == "checkbox"){
            obj =[$(this).prop("name")] = $(this).prop("checked");
        }
    });
    $.post("../includes/funciones.php", obj, function(respuesta){
        // Si el status es 0, enviar mensaje de datos incorrectos, intente de nuevo
        // Si el stauts es 1, redireccionar al index
    }, "JSON");
  });
});
