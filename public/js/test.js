
/*  City */

function getcities(v){
    var city_data;
  var settings = {
    "url": "https://daofservice.hblasset.com/DigitalAccountOpenTillVerify.asmx?op=getCityCodeByCountryID",
    "method": "POST",
    "timeout": 0,
    "headers": {
      "Content-Type": "text/xml"
    },
    "data": "<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<soap12:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soap12=\"http://www.w3.org/2003/05/soap-envelope\">\r\n<soap12:Body>\r\n<getCityCodeByCountryID xmlns=\"http://tempuri.org/\">\r\n<CountryCode>1</CountryCode>\r\n</getCityCodeByCountryID>\r\n</soap12:Body>\r\n</soap12:Envelope>",
  };
  
  $.ajax(settings).done(function (city) {
    city_data = JSON.parse(city.getElementsByTagName('getCityCodeByCountryIDResult')[0].textContent).Table;
    return city_data;
  });
//   console.log(city_data);
//   return city_data;
}
