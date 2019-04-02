$(document).ready(function () {
    $('#cat_accordion > li').click(function (event) {
        $(this).children("ul").slideToggle();
        event.stopPropagation();
    });


});

function updateURLParameter(url, param, paramVal) {
    var newAdditionalURL = "";
    var tempArray = url.split("?");
    var baseURL = tempArray[0];
    var additionalURL = tempArray[1];
    var temp = "";
    if (additionalURL) {
        tempArray = additionalURL.split("&");
        for (var i = 0; i < tempArray.length; i++) {
            if (tempArray[i].split('=')[0] != param) {
                newAdditionalURL += temp + tempArray[i];
                temp = "&";
            }
        }
    }

    var rows_txt = temp + "" + param + "=" + paramVal;
    return baseURL + "?" + newAdditionalURL + rows_txt;
}

function getSpecificURLParameter(url, desired_param) {
    var tempArray = url.split("?");
    var tempArray1 = tempArray[1].split('&');

    var desired_pair;

    for (var i = 0; i < tempArray1.length; i++) {
        if (tempArray1[i].indexOf(desired_param) + 1) {
            desired_pair = tempArray1[i].split('=');
            break;
        }
    }

    return Number(desired_pair[desired_pair.length - 1]);
}