$('#submit-filters').click(function() {
                           $("#filteredTeams").empty();
                           $("#filteredTeams").append("<thead> <th>Username</th> <th>Games</th> <th>User Bio</th> </thead>")
                           var options = $("#usernames").val();
                           console.log(options);
                           
                           $.ajax({
                                  type: "POST",
                                  url: "/../../server/dbPlayers.php",
                                  dataType: "json",
                                  data: {
                                  usernames:options,
                                  },
                                  success: function(data) {
//                                  console.log(data);
                                  for( var item in data){
//                                  var rest = data[item]['team_bio'].slice(0, 70);
                                  $("#filteredTeams").append('<tr><td>' +'<a href=/user/' + data[item]['username'] + '>' + data[item]['username'] +'</a>' + '</td><td>'  + data[item]['games'] + '</td><td>' + data[item]['user_bio']  +  '</td></tr>');
                                  }
                                  },
                                  
                                  
                                  });
                           });


