var github_web = function (){
    $.ajax({
        type: "GET",
        url: 'https://api.github.com/users/'+document.getElementById('username').value,
        dataType: "json",
        success: function(data) {
            $("#profilePic").attr("src",data.avatar_url);
            $("#name").text(data.name);
            $("#login").text(data.login);
            $("#bio").text(data.bio);
            $("#url").html("<a href=''"+data.url+"'>"+data.url+"</a>");
            console.log(data);
            return data;
        },
        error: function() {
            alert('Error occured');
        }
    });
}
