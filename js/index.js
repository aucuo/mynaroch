$(document).ready(function() {
  var quotes = [
    "Самый популярный курорт в Беларуси",
    "Самое большое озеро в Беларуси",
    "Является курортом с 1964 года",
    "По-настоящему прозрачна",
    "Родина народного поэта Беларуси",
    "Здесь решалась судьба Франции"
  ];
  
  var quoteNumber = randomInteger(0, quotes.length-1);
  document.getElementById('quote').innerHTML = quotes[quoteNumber];

  function randomInteger(min, max) {
      let rand = min - 0.5 + Math.random() * (max - min + 1);
      return Math.round(rand);
  }


  //Время на сайте
  function addZero(i) {
      if (i < 10) {
          i = "0" + i;
      }
      return i;
  }

  function getCurrentTime(){
      var time, h, m;
      time = new Date(Date.now());
      h = time.getUTCHours();
      m = addZero(time.getUTCMinutes());
      return (h + 3) + ':' + m;
  }
  function setTimer2(){
      document.getElementById('currentTime').innerHTML = getCurrentTime();
  }
  setInterval(setTimer2, 1000);

});
