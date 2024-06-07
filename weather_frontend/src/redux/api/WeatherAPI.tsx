import axios from 'axios';


const WeatherAPI = {
    getWeatherCurrent: (city: string) => {
        return axios.get(
            `${process.env.REACT_APP_WEATHER_URL}/current.json?key=${process.env.REACT_APP_WEATHER_API_KEY}&q=${city}`,
            {}
        );
    },
    getWeatherCurrentByCoordinates: (latitude: number, longitude: number) => {
        return axios.get(
            `${process.env.REACT_APP_WEATHER_URL}/current.json?key=${process.env.REACT_APP_WEATHER_API_KEY}&q=${latitude},${longitude}`,
            {}
        );
    },
    getWeatherForecast: (city: string, days: number) => {
        return axios.get(
            `${process.env.REACT_APP_WEATHER_URL}/forecast.json?key=${process.env.REACT_APP_WEATHER_API_KEY}&q=${city}&days=${days}`,
            {}
        );
    },
    getWeatherForecastByCoordinates: (latitude: number, longitude: number, days: number) => {
        return axios.get(
            `${process.env.REACT_APP_WEATHER_URL}/forecast.json?key=${process.env.REACT_APP_WEATHER_API_KEY}&q=${latitude},${longitude}&days=${days}`,
            {}
        );
    },

    subscribeWeatherMail: (email: string) => {
        return axios.post(`${process.env.REACT_APP_WEATHER_MAIL_URL}/subscribe`, {
            email: email,
        })
    },

    unSubscribeWeatherMail: (email: string) => {
        return axios.post(`${process.env.REACT_APP_WEATHER_MAIL_URL}/unsubscribe`, {
            email: email,
        })
    }

};

export default WeatherAPI;
