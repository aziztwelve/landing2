
document.getElementById('contact_form').onsubmit = function(){
  var http = new XMLHttpRequest();
  http.open("POST", "contacts.html", true);
  http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  http.send("&FullName=" + this.FullName.value + "&Telephone=" + this.Telephone.value);


  http.onreadystatechange = function() {
    if (http.readyState == 4 && http.status == 200) {
    $('input[type="text"]').val('');
    $('input[type="email"]').val('');
    $(".formm1").css({"display":"none"}); 
    $(".formm2").css({"display":"block"});
    }
  }
  http.onerror = function() {
    alert('Извините, данные не были переданы');
  }
  return false;
}

document.getElementById('fozr_zvonok').onsubmit = function(){
  var http = new XMLHttpRequest();
  http.open("POST", "contacts1.html", true);
  http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  http.send("&FullName1=" + this.FullName1.value + "&Telephone1=" + this.Telephone1.value);


  http.onreadystatechange = function() {
    if (http.readyState == 4 && http.status == 200) { 
    $('input[type="text"]').val('');
    $('input[type="email"]').val('');
    $(".podpiska1").css({"display":"none"}); 
    $(".podpiska11").css({"display":"block"});

    $(".close-reveal-modal").click(function () { 
    $(".podpiska1").css({"display":"block"}); 
    $(".podpiska11").css({"display":"none"});
    });
    
    }
  }
  http.onerror = function() {
    alert('Извините, данные не были переданы');
  }
  return false;
}


document.getElementById('fozr_akcia').onsubmit = function(){
  var http = new XMLHttpRequest();
  http.open("POST", "contacts2.html", true);
  http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  http.send("&FullName2=" + this.FullName2.value + "&Telephone2=" + this.Telephone2.value);


  http.onreadystatechange = function() {
    if (http.readyState == 4 && http.status == 200) {
    $('input[type="text"]').val('');
    $('input[type="email"]').val('');
    $(".podpiska2").css({"display":"none"}); 
    $(".podpiska3").css({"display":"block"});
    
    $(".close-reveal-modal").click(function () { 
    $(".podpiska2").css({"display":"block"}); 
    $(".podpiska3").css({"display":"none"});
    });
    }
  }
  http.onerror = function() {
    alert('Извините, данные не были переданы');
  }
  return false;
}

document.getElementById('fozr_akcia2').onsubmit = function(){
  var http = new XMLHttpRequest();
  http.open("POST", "contacts3.html", true);
  http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  http.send("&FullName3=" + this.FullName3.value + "&Telephone3=" + this.Telephone3.value);


  http.onreadystatechange = function() {
    if (http.readyState == 4 && http.status == 200) {
    $('input[type="text"]').val('');
    $('input[type="email"]').val('');
    $(".podpiska2").css({"display":"none"}); 
    $(".podpiska3").css({"display":"block"});
    
    $(".close-reveal-modal").click(function () { 
    $(".podpiska2").css({"display":"block"}); 
    $(".podpiska3").css({"display":"none"});
    });
    }
  }
  http.onerror = function() {
    alert('Извините, данные не были переданы');
  }
  return false;
}

document.getElementById('fozr_akcia3').onsubmit = function(){
  var http = new XMLHttpRequest();
  http.open("POST", "contacts4.html", true);
  http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  http.send("&FullName4=" + this.FullName4.value + "&Telephone4=" + this.Telephone4.value);


  http.onreadystatechange = function() {
    if (http.readyState == 4 && http.status == 200) {
    $('input[type="text"]').val('');
    $('input[type="email"]').val('');
    $(".podpiska2").css({"display":"none"}); 
    $(".podpiska3").css({"display":"block"});
    
    $(".close-reveal-modal").click(function () { 
    $(".podpiska2").css({"display":"block"}); 
    $(".podpiska3").css({"display":"none"});
    });
    }
  }
  http.onerror = function() {
    alert('Извините, данные не были переданы');
  }
  return false;
}


