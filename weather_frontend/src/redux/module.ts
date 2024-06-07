
export interface weatherState {

  loadingWeatherCurrent: boolean,

  weatherCurrent: {

    location: {
      name: string | null,
      localtime: string | null,
    };
    current: {
      temp_c: number | null
      wind_kph: number | null,
      humidity: number | null,
      condition: {
        text: string | null,
        icon: string | null,
      };
    };
  }
  loadingWeatherForecastDay: boolean,

  weatherForecastDay: {
    forecast: {
      forecastday: forecastday[]
    }
  }

  loadingSub: boolean,
  errSub: any,
  successSub: boolean,
  inforSub: any,

  loadingUnSub: boolean,
  errUnSub: any,
  successUnSub: boolean,
  inforUnSub: any,
}

export interface userState {
  loadingRegister: boolean,
  errRegister: any,
  successRegister: boolean,
  inforRegister: any,

  loadingLogin: boolean,
  errLogin: any,
  successLogin: boolean,
  inforLogin: any,
}


interface forecastday {
  date: string | null,
  day: {
    avgtemp_c: number | null,
    maxwind_kph: number | null,
    avghumidity: number | null,
    condition: {
      text: string | null,
      icon: string | null,
    };
  };
}