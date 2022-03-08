var dataArr = {
    "hi-schoolpharmacy": [{
        "phone_no": "877-926-0796",
        "image": "images/hi-schoolpharmacy.png"
    }],
    "schnucks": [{
        "phone_no": "844-620-4825",
        "image": "images/schnucks.png"
    }],
    "bartelldrugs": [{
        "phone_no": "877-246-0492",
        "image": "images/bartelldrugs.png"
    }],
    "bigy": [{
        "phone_no": "877-294-1297",
        "image": "images/bigy.png"
    }],
    "bi-lo": [{
        "phone_no": "877-294-1294",
        "image": "images/bi-lo.png"
    }],
    "brookshiregrocery": [{
        "phone_no": "877-847-9010",
        "image": "images/brookshiregrocery.png"
    }],
    "coborns": [{
        "phone_no": "877-840-3950",
        "image": "images/coborns.png"
    }],
    "ddm": [{
        "phone_no": "877-294-1288",
        "image": "images/ddm.png"
    }],
    "foodcity": [{
        "phone_no": "877-840-3955",
        "image": "images/foodcity.png"
    }],
    "fruth": [{
        "phone_no": "877-294-1292",
        "image": "images/fruth.png"
    }],
    "harmons": [{
        "phone_no": "844-970-0807",
        "image": "images/harmons.png"
    }],
    "harveys": [{
        "phone_no": "877-294-1295",
        "image": "images/harveys.png"
    }],
    "klingensmiths": [{
        "phone_no": "844-970-0809",
        "image": "images/klingensmiths.png"
    }],
    "kmart": [{
        "phone_no": "877-246-0489",
        "image": "images/kmart.png"
    }],
    "meijer": [{
        "phone_no": "877-294-1291",
        "image": "images/meijer.png"
    }],
    "pricecutter": [{
        "phone_no": "877-926-0798",
        "image": "images/pricecutter.png"
    }],
    "winndixie": [{
        "phone_no": "877-294-1296",
        "image": "images/winndixie.png"
    }],
    "nucara": [{
        "phone_no": "877-294-1290",
        "image": "images/nucara.png"
    }],
    "frescoymas": [{
        "phone_no": "877-294-1293",
        "image": "images/frescoymas.png"
    }],
    "bashas": [{
        "phone_no": "844-970-0810",
        "image": "images/bashas.png"
    }],
    "heb": [{
        "phone_no": "877-308-8184",
        "image": "images/heb.png"
    }],
    "cosentinos": [{
        "phone_no": "844-970-0806",
        "image": "images/cosentinos.png"
    }],
    "familyfare": [{
        "phone_no": "877-926-0789",
        "image": "images/familyfare.png"
    }],
    "wegmans": [{
        "phone_no": "877-246-0490",
        "image": "images/wegmans.png"
    }],
    "brookshirebrothers": [{
        "phone_no": "877-847-9012",
        "image": "images/brookshirebrothers.png"
    }],
    "cub": [{
        "phone_no": "877-926-0795",
        "image": "images/cub.png"
    }],
    "sav-mor": [{
        "phone_no": "877-930-2539",
        "image": "images/sav-mor.png"
    }],
    "samsclub": [{
        "phone_no": "877-930-2538",
        "image": "images/samsclub.png"
    }],
    "bestrx": [{
        "phone_no": "877-930-2535",
        "image": "images/bestrx.png"
    }],
    "speedscript": [{
        "phone_no": "844-970-0811",
        "image": "images/speedscript.png"
    }],
    "thompson": [{
        "phone_no": "844-970-0808",
        "image": "images/thompson.png"
    }],
    "woods": [{
        "phone_no": "877-246-0494",
        "image": "images/woods.png"
    }],
    "totalcarerx": [{
        "phone_no": "877-246-0496",
        "image": "images/totalcarerx.png"
    }]
};

var url = window.location.href;
var la_url = url.split("/");
console.log(la_url);
var arrKey = la_url[3];

if (dataArr.hasOwnProperty(arrKey) == false) {
    window.location.href = "https://getltcinsurance.com/";
} else {

    console.log(dataArr[arrKey].length);
    console.log(dataArr[arrKey][0].phone_no);
    console.log(dataArr[arrKey][0].image);

    document.getElementsByClassName("custom_logo")[0].src = 'https://getltcinsurance.com/' + dataArr[arrKey][0].image;
    document.getElementsByClassName("custom_phone")[0].innerHTML = '<h6 class="aleo m-0 text-white pp">Speak with a licensed sales agent: <a href="tel:' + dataArr[arrKey][0].phone_no + '" class="text-white font-weight-bold">' + dataArr[arrKey][0].phone_no + '</a> <span class="font-weight-bold">TTY User 711</span> / Mon-Fri 8:30a - 8:00p ET</h6>';
}