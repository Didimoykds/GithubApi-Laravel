var github_web = function (){
    $.ajax({
        type: "GET",
        url: 'https://api.github.com/users/'+document.getElementById('username').value,
        dataType: "json",
        success: function(data) {
            $("#profilePic").attr("src",data.avatar_url);
            console.log(data);
            return data;
        },
        error: function() {
            alert('Error occured');
        }
    });
}
