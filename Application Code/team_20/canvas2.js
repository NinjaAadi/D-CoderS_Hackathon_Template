$(document).ready(function(){
    var canvas = document.getElementById("canvas");
    $('#cmd').click(function(){
        var imgData = canvas.toDataURL("white/jpeg", 1.0);
        var pdf = new jsPDF();
        pdf.addImage(imgData, 'JPEG', 0, 0);
        pdf.save("download.pdf");
    });
});