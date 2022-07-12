$(document).ready(function(){
    $(".huyen").change(function(){
        var id = $(".huyen ").val();
        $.post("data.php", {id: id}, function(data){
            $(".xa").html(data)
        })
    })
})