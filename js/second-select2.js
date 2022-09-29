function populate2(s1,s2){
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);

    s2.innerHTML = "";

    if(s1.value == "پەلەوەر"){
        var optionArray = ['مریشک و کەڵەشێر | مریشک و کەڵەشێر', 'قەل|قەل', 'قاز|قاز', 'مراوی|مراوی', 'جۆری تر|جۆری تر'];
    }
    else if(s1.value == "باڵندە"){
        var optionArray = ['کۆتر|کۆتر','کەناری|کەناری', 'بوکەسوورە|بوکەسوورە', 'فنس|فنس', 'تووتی|تووتی', 'کۆکتێل|کۆکتێل', 'غەندور|غەندور', 'تەیرەحوب|تەیرەحوب', 'باز|باز', 'مینا|مینا', 'خورماخۆرە|خورماخۆرە', 'جۆری تر|جۆری تر'];
    }
    else if(s1.value == "ئاژەڵ"){
        var optionArray = ['سمۆرە|سمۆرە','مەیموون|مەیموون', 'کەروێشک|کەروێشك', 'ئەسپ|ئەسپ', 'پشیلە|پشیلە', 'مەڕ|مەڕ', 'بزن|بزن', 'مانگا|مانگا', 'جۆری تر|جۆری تر'];
    }
    else if(s1.value == "گیانداری ئاویی"){
        var optionArray = ['ماسی|ماسی','کیسەڵ|کیسەڵ', 'ئەستێرە|ئەستێرە', 'حەوزی ماسی|حەوزی ماسی', 'جۆری تر|جۆری تر'];
    }
    else if(s1.value == "جۆری تر"){
        var optionArray = ['جۆری تر|جۆری تر'];
    }

    for(var option in optionArray){
        var pair = optionArray[option].split("|");
        var newoption = document.createElement("option");

        newoption.value = pair[0];
        newoption.innerHTML = pair[1];
        s2.options.add(newoption);
    }
}