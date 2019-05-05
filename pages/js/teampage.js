$('#submit-filters').click(function() {
    $("#filteredTeams").empty();
    $("#filteredTeams").append("<thead> <th>Team Name</th> <th>Captain</th> <th>Team Bio</th> </thead>")
    var options = $("#select-region").val();
    
                                $.ajax({
                                 type: "POST",
                                  url: "/../../server/dbTeams.php",
                                  dataType: "json",
                                  data: {
                                       regions:options,
                                       },
                                  success: function(data) {
                                      
                                       for( var item in data){
                                       var rest = data[item]['team_bio'].slice(0, 70);
                                       $("#filteredTeams").append('<tr><td>' + data[item]['team_name'] + '</td><td>'  + data[item]['captain'] + '</td><td>' + rest + '...' + '</td></tr>');
                                       }
                                  },
                                  
                                
                                  });
    });


