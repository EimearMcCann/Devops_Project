window.onload=function(){
    
    var location = document.getElementById("Location").innerHTML;
    var age = document.getElementById("Age").innerHTML;
    var total = 1000;
    var percentage = 0;


    if(smoker == 1)
    {
        percentage += 20;
    }

    if(location == 1)
    {
        percentage += 20;
    }

    if(age >= 65)
    {
        percentage += 20;
    }

    

    total = (total/100*percentage) + total;

    document.getElementById("total").innerHTML = "Youre Quote Is: €" + total;

}