var dataArr = {
  "raymondjames": [
    {
      "phone_no": "844-269-2646",
      "image": ""
    }
  ],
  "onedigital": [
    {
      "phone_no": "833-835-0825",
      "image": "images/onedigital.png"
    }
  ],
  "CrossInsurance-MA": [
    {
      "phone_no": "1-800-637-7602",
      "image": ""
    }
  ],
  "CrossInsurance-NHVT": [
    {
      "phone_no": "1-800-637-7602",
      "image": ""
    }
  ],
  "CrossInsurance-ME": [
    {
      "phone_no": "1-800-637-7602",
      "image": ""
    }
  ]
};

var url = window.location.href;
var la_url = url.split("/");
console.log(la_url);
var arrKey = la_url[3];

if(dataArr.hasOwnProperty(arrKey) == false){
	window.location.href = "https://getltcinsurance.com/";
}else{

console.log(dataArr[arrKey].length);
console.log(dataArr[arrKey][0].phone_no);
console.log(dataArr[arrKey][0].image);

document.getElementsByClassName("custom_logo")[0].src ='https://getltcinsurance.com/'+dataArr[arrKey][0].image; 
document.getElementsByClassName("custom_phone")[0].innerHTML ='<h6 class="aleo m-0 text-white pp">Speak with a licensed sales agent: <a href="tel:'+dataArr[arrKey][0].phone_no+'" class="text-white font-weight-bold">'+dataArr[arrKey][0].phone_no+'</a> <span class="font-weight-bold">TTY User 711</span> / Mon-Fri 8:30a - 8:00p ET</h6>';
}



