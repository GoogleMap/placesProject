 function getVote(int) {
        if (window.XMLHttpRequest) {
            xmlhttp=new XMLHttpRequest();
        } else {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState===4 && xmlhttp.status===200) {
                document.getElementById("usersPoll").innerHTML=xmlhttp.responseText;
            }
        };
        
        var votePath = $('#votePath').val()+"/"+int;
        var voteePath = "/MyProject/web/app_dev.php/votee/"+int;
  
        //alert(voteePath);
        xmlhttp.open("POST",voteePath);
        xmlhttp.send();
}