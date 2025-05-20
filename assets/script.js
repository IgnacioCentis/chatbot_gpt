$(document).ready(function () {
    function cargarChat() {
        $("#chat").load("obtener.php");
    }

    $("#enviar").click(function () {
        var mensaje = $("#mensaje").val();
        if (mensaje.trim() === "") return;

        $.post("enviar.php", { mensaje: mensaje }, function () {
            $("#mensaje").val("");
            cargarChat();
        });
    });

    setInterval(cargarChat, 3000);
    cargarChat();
});