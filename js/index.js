$(document).ready(function() {
  var quotes = [
    "Самый популярный курорт Беларуси",
    "Самое большое озеро в Беларуси",
    "Край сініх азёраў",
    "Весь курорт для вас"
  ];
  
  var quoteNumber;
  
  quoteNumber = randomInteger(0, quotes.length-1);
  document.getElementById('quote').innerHTML = quotes[quoteNumber];

  function randomInteger(min, max) {
    let rand = min - 0.5 + Math.random() * (max - min + 1);
    return Math.round(rand);
  }

});
