function yesnoCheck(that) {
    if (that.value == "credit") {
        document.getElementById("ifYes").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
    }
}

function wireCheck(that) {
    if (that.value == "juice") {
        document.getElementById("ifWire").style.display = "block";
    } else {
        document.getElementById("ifWire").style.display = "none";
    }
}

function JSalert(){

        alert("Purchase Successful!");
}

function text(){
    alert('Successfully Submitted. We will try to get back to you as soon as possible');
}


