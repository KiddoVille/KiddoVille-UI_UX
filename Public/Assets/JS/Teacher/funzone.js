
function showFunzone(){
    console.log("function running");
    const popup = document.getElementById("funzone-popup-container");
    popup.classList.add("show-funzone");
}

function closeFunZone(){
    const popup = document.getElementById("funzone-popup-container");
    popup.classList.remove("show-funzone");
};


$(document).ready(function (){
    fetchMedia();
    $('#media_name').on('keyup',function(){
        let media_name = $(this).val();
        fetchMedia(media_name);
    });
});

function fetchMedia(media_name = ''){
    console.log("typed : ",media_name);
    $.ajax({
        url:"<?=ROOT?>/Teacher/Funzone",
        method:"POST",
        data:{
            action: 'SearchMedia',
            media_name: media_name
        },
        dataType:"json",
        success:function(data){
            console.log(data);
            $('#media_list').html(data.media_list);
        },
        error: function(xhr, status, error) {
            console.error("AJAX failed:", status, error);
            console.log("Response text:", xhr.responseText);
        }
    });
}