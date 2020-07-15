window.onload = function(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var tasks = JSON.parse(this.responseText);
            tasks.forEach((item)=>{
                var temp = $("#taskTemp").clone();
                temp.show();
                temp.find('#id').text(item.id);
                temp.find('#name').text(item.taskName);
                temp.find('#detail').text(item.taskDetail);
                temp.find('#idd').attr('value',item.id);
                temp.find('#idm').attr('value',item.id);

                $('#taskBody').append(temp);
            });
        }
    };
    xmlhttp.open("GET", "https://task-app-backendaa.herokuapp.com/read_database.php", true);
    xmlhttp.send();
}
