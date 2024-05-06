$(document).ready(function(){
    $.ajax({
        url: "index.php",
        type: "GET",
        dataType: "json",
        success: function(data){
            // Proses hasil pemanggilan AJAX di sini
        },
        error: function(xhr, status, error){
            console.error("Terjadi kesalahan: " + error);
        }
    });
});
