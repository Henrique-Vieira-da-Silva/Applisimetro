var ip = "http://localhost/NirvaServer";

function RealTime(ip,url){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            response = JSON.parse(xhttp.responseText);
            //document.getElementById("RTS").innerText = "Temperatura: " + response.temperatura + "° \n umidade: " + response.umidade+"%";
            //response.umidade = 100;
           // response.temperatura = 100;
            var a = document.getElementById("doughnutChart");
            var ctx= a.getContext('2d');
            x = ctx.canvas.width;
            y = ctx.canvas.height;

            ctx.beginPath();

            ctx.arc(75, 75, 40,-1.5708, (response.umidade/50) * Math.PI-Math.PI/2);
            ctx.lineWidth = 10;
            ctx.stroke();

            var ctx1= document.getElementById("doughnutChart1").getContext('2d');
            ctx1.beginPath();
            ctx1.arc(75, 75, 40,-1.5708, (response.temperatura/50) * Math.PI-Math.PI/2);
            ctx1.lineWidth = 10;
            ctx1.stroke();
            ctx.font = "15px Arial";
            ctx.fillText("Umidade ", 45, 135);
            ctx.font = "25px Arial";
            ctx.fillText(response.umidade+"%", 45, 85);
            ctx1.font = "15px Arial";
            ctx1.fillText("Temperatura ", 35, 135);
            ctx1.font = "25px Arial";
            ctx1.fillText(response.temperatura+"°C", 40, 85);


        }


    };
    xhttp.open("GET", ip+"/"+url, true);
    xhttp.send();
}
RealTime(ip,"RealTime.php");
setInterval(function(){ RealTime(ip,"RealTime.php");}, 3000);



function carregaConfigRede(){
    document.getElementById("corpo1").style.visibility = "hidden";
    document.getElementById("corpo2").style.visibility = "revert";
    document.getElementById("corpo3").style.visibility = "hidden";
    document.getElementById("corpo4").style.visibility = "hidden";
}



function carregarMenu(){
    document.getElementById("corpo3").style.visibility = "hidden";
    document.getElementById("corpo2").style.visibility = "hidden";
    document.getElementById("corpo4").style.visibility = "hidden";
    document.getElementById("corpo1").style.visibility = "revert";


}


function carregarParametros(){
    document.getElementById("corpo1").style.visibility = "hidden";
    document.getElementById("corpo3").style.visibility = "revert";
    document.getElementById("corpo2").style.visibility = "hidden";
    document.getElementById("corpo4").style.visibility = "hidden";
}

function carregarGraficos(){
    document.getElementById("corpo1").style.visibility = "hidden";
    document.getElementById("corpo3").style.visibility = "hidden";
    document.getElementById("corpo2").style.visibility = "hidden";
    document.getElementById("corpo4").style.visibility = "revert";
}


document.getElementById("bp").addEventListener("click",carregarParametros);
document.getElementById("bm").addEventListener("click",carregarMenu);
document.getElementById("bm1").addEventListener("click",carregarMenu);
document.getElementById("br").addEventListener("click",carregaConfigRede);
document.getElementById("bt").addEventListener("click",function(){ setTimeout(function(){alert("Tara efetuada com sucesso!");}, 1000)});
document.getElementById("bg").addEventListener("click", carregarGraficos);

function salvar () {

    alert("Dados Salvos com sucesso!");
    carregarMenu();
}