$("#edit").click(function () {
                 
//    console.log("Here");
        $("#BioEdit").show();
        $("#LinkEdit").show();
        $("#GameEdit").show();
        $("#submitEdit").show();
        $("#edit").hide();
        $("#hideOnEdit1").hide();
        $("#hideOnEdit2").hide();
        $("#hideOnEdit3").hide();
        
                 
                 $.ajax({
                        type: "POST",
                        url: "/../../server/editUserdb.php",
                        dataType: "json",
                        data: {},
                        success: function(data) {
//                        console.log(data);
                        
                        $("#BioEdit").val(data[0]['user_bio']);
                        $("#LinkEdit").val(data[0]['user_links']);
                        $("#GameEdit").val(data[0]['user_games']);
                        
                        },
                        
                        
                        });

                 
});

$("#submitEdit").click(function () {
                 
        var newBio = $("#BioEdit").val();
        var newLink = $("#LinkEdit").val();
        var newGames = $("#GameEdit").val();
        
                       
                       
                       
        $.ajax({
               url: "/../../server/uploadNewProfile.php",
            type: "POST",
            data:{passedBio:newBio, passedLink:newLink, passedGames:newGames},
            success: function(data) {
            }
            });
            
            $("#BioEdit").hide();
            $("#LinkEdit").hide();
            $("#GameEdit").hide();
            $("#submitEdit").hide();
            $("#edit").show();
            $("#hideOnEdit1").show();
            $("#hideOnEdit2").show();
            $("#hideOnEdit3").show();
            location.reload();
                       
                       

});



