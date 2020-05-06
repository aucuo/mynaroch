fetch('http://api.openweathermap.org/data/2.5/weather?id=624804&lang=ru&appid=0294100c551cfce9f056d9f11bcb4f95')
    .then(function (resp) {
        return resp.json()
    })
    .then(function (data) {
        console.log(data);
        document.querySelector('#weatherTemperature').innerHTML = Math.round(data.main.temp - 273) + '&deg;';
        document.querySelector('#weatherType').textContent = data.weather[0]['description'];
        
        switch (data.weather[0]['icon']) {
            case '50d':
            case '50n':
                document.querySelector('#weatherIcon').className = 'fas fa-smog';
                break;
            case '01d':
                document.querySelector('#weatherIcon').className = 'fas fa-sun';
                break;
            case '01n':
                document.querySelector('#weatherIcon').className = 'fas fa-moon';
                break;
            case '02d':
                document.querySelector('#weatherIcon').className = 'fas fa-cloud-sun';
                break;
            case '02n':
                document.querySelector('#weatherIcon').className = 'fas fa-cloud-moon';
                break;
            case '03d':
            case '03n':
                document.querySelector('#weatherIcon').className = 'fas fa-cloud';
                break;
            case '04d':
            case '04n':
                document.querySelector('#weatherIcon').className = 'fas fa-cloud';
                break;
            case '09d':
            case '09n':
                document.querySelector('#weatherIcon').className = 'fas fa-cloud-showers-heavy';
                break;
            case '10d':
                document.querySelector('#weatherIcon').className = 'fas fa-cloud-sun-rain';
                break;
            case '10n':
                document.querySelector('#weatherIcon').className = 'fas fa-cloud-moon-rain';
                break;
            case '11d':
            case '11n':
                document.querySelector('#weatherIcon').className = 'fas fa-bolt';
                break;
            case '13d':
            case '13n':
                document.querySelector('#weatherIcon').className = 'fas fa-cloud-meatball';
                break;
            default:
                document.querySelector('#weatherIcon').className = 'fas fa-cloud';
        }
    });