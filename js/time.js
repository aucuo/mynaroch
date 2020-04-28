function clock() {
var time = new Date(),
    
    hours = time.getHours(),
    
    minutes = time.getMinutes(),
    
    
    seconds = time.getSeconds();

document.querySelector('.time').innerHTML = harold(hours) + ":" + harold(minutes);
  
  function harold(standIn) {
    if (standIn < 10) {
      standIn = '0' + standIn
    }
    return standIn;
  }
}
setInterval(clock, 1000);