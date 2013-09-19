function setVote(rating) {
        if (window.XMLHttpRequest) {
            xmlhttp=new XMLHttpRequest();
        } else {
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState===4 && xmlhttp.status===200) {
                document.getElementById("voteSection").innerHTML=xmlhttp.responseText;
            }
        };
        
        var paramToSend = "";
        var refId = $("#extId").val();
        var ip = $("#ip").val();
        paramToSend += rating+","+refId+","+ip;
        
        //alert(paramToSend);
        
        var votePath = "/MyProject/web/app_dev.php/setVote/"+paramToSend;
       
        xmlhttp.open("POST",votePath);
        xmlhttp.send();
}