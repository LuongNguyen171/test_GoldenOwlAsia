import { createAsyncThunk, createSlice, PayloadAction } from '@reduxjs/toolkit';
import {
    weatherState
} from '../module';
import WeatherAPI from '../api/WeatherAPI';

const initialState: weatherState = {

    loadingWeatherCurrent: false,
    weatherCurrent: {
        location: {
            name: null,
            localtime: null,
        },
        current: {
            temp_c: null,
            wind_kph: null,
            humidity: null,
            condition: {
                text: null,
                icon: null,
            }
        },
    },

    loadingWeatherForecastDay: false,
    weatherForecastDay: {
        forecast: {
            forecastday: []
        }
    },

    loadingSub: false,
    errSub: null,
    successSub: false,
    inforSub: null,

    loadingUnSub: false,
    errUnSub: null,
    successUnSub: false,
    inforUnSub: null,

}

export const getWeatherCurrent = createAsyncThunk(
    'getWeatherCurrent',
    async (city: string, { rejectWithValue }) => {
        try {
            return (await WeatherAPI.getWeatherCurrent(city)).data;
        } catch (error: any) {
            if (error.response && error.response.data.message) {
                return rejectWithValue(error.response.data.message);
            } else {
                return rejectWithValue(error.message);
            }
        }
    }
);

export const getWeatherCurrentByCoordinates = createAsyncThunk(
    'getWeatherCurrentByCoordinates',
    async (args: { latitude: number, longitude: number }, { rejectWithValue }) => {
        const { latitude, longitude } = args
        try {
            return (await WeatherAPI.getWeatherCurrentByCoordinates(latitude, longitude)).data;
        } catch (error: any) {
            if (error.response && error.response.data.message) {
                return rejectWithValue(error.response.data.message);
            } else {
                return rejectWithValue(error.message);
            }
        }
    }
);

export const getWeatherForecast = createAsyncThunk(
    'getWeatherForecast',
    async (args: { city: string, days: number }, { rejectWithValue }) => {
        const { city, days } = args;
        try {
            return (await WeatherAPI.getWeatherForecast(city, days)).data;
        } catch (error: any) {
            if (error.response && error.response.data.message) {
                return rejectWithValue(error.response.data.message);
            } else {
                return rejectWithValue(error.message);
            }
        }
    }
);

export const getWeatherForecastByCoordinates = createAsyncThunk(
    'getWeatherForecastByCoordinates',
    async (args: { latitude: number, longitude: number, days: number }, { rejectWithValue }) => {
        const { latitude, longitude, days } = args;
        try {
            return (await WeatherAPI.getWeatherForecastByCoordinates(latitude, longitude, days)).data;
        } catch (error: any) {
            if (error.response && error.response.data.message) {
                return rejectWithValue(error.response.data.message);
            } else {
                return rejectWithValue(error.message);
            }
        }
    },


);

export const subscribeWeatherMail = createAsyncThunk(
    'subscribeWeatherMail',
    async (args: { email: string }, { rejectWithValue }) => {
        const { email } = args;
        try {
            return (await WeatherAPI.subscribeWeatherMail(email)).data;
        } catch (error: any) {
            if (error.response && error.response.data.message) {
                return rejectWithValue(error.response.data.message);
            } else {
                return rejectWithValue(error.message);
            }
        }
    }
)

export const unSubscribeWeatherMail = createAsyncThunk(
    'unSubscribeWeatherMail',
    async (args: { email: string }, { rejectWithValue }) => {
        const { email } = args;
        try {
            return (await WeatherAPI.unSubscribeWeatherMail(email)).data;
        } catch (error: any) {
            if (error.response && error.response.data.message) {
                return rejectWithValue(error.response.data.message);
            } else {
                return rejectWithValue(error.message);
            }
        }
    }
)

// Define the slice
const weatherSlide = createSlice({
    name: 'weather',
    initialState,
    reducers: {
        // Add other synchronous actions here
    },
    extraReducers: (builder) => {

        //get weather current
        builder.addCase(getWeatherCurrent.pending, (state) => {
            state.loadingWeatherCurrent = true;
            state.weatherCurrent = {
                location: {
                    name: null,
                    localtime: null,
                },
                current: {
                    temp_c: null,
                    wind_kph: null,
                    humidity: null,
                    condition: {
                        text: null,
                        icon: null,
                    }
                }
            }
        });

        builder.addCase(getWeatherCurrent.fulfilled, (state, action) => {
            state.loadingWeatherCurrent = false;
            state.weatherCurrent = action.payload;
        });

        builder.addCase(getWeatherCurrent.rejected, (state, action) => {
            state.loadingWeatherCurrent = false;
            state.weatherCurrent = state.weatherCurrent = {
                location: {
                    name: null,
                    localtime: null,
                },
                current: {
                    temp_c: null,
                    wind_kph: null,
                    humidity: null,
                    condition: {
                        text: null,
                        icon: null,
                    }
                }
            }
        });

        //get Weather Current By Coordinates

        builder.addCase(getWeatherCurrentByCoordinates.pending, (state) => {
            state.loadingWeatherCurrent = true;
            state.weatherCurrent = {
                location: {
                    name: null,
                    localtime: null,
                },
                current: {
                    temp_c: null,
                    wind_kph: null,
                    humidity: null,
                    condition: {
                        text: null,
                        icon: null,
                    }
                }
            }
        });

        builder.addCase(getWeatherCurrentByCoordinates.fulfilled, (state, action) => {
            state.loadingWeatherCurrent = false;
            state.weatherCurrent = action.payload;
        });

        builder.addCase(getWeatherCurrentByCoordinates.rejected, (state, action) => {
            state.loadingWeatherCurrent = false;
            state.weatherCurrent = {
                location: {
                    name: null,
                    localtime: null,
                },
                current: {
                    temp_c: null,
                    wind_kph: null,
                    humidity: null,
                    condition: {
                        text: null,
                        icon: null,
                    }
                }
            }
        });
        // get Weather Forecast
        builder.addCase(getWeatherForecast.pending, (state) => {
            state.loadingWeatherForecastDay = true;
            state.weatherForecastDay = {
                forecast: {
                    forecastday: []
                }
            }
        });

        builder.addCase(getWeatherForecast.fulfilled, (state, action) => {
            state.loadingWeatherForecastDay = false;
            state.weatherForecastDay = action.payload;
        });

        builder.addCase(getWeatherForecast.rejected, (state, action) => {
            state.loadingWeatherForecastDay = false;
            state.weatherForecastDay = {
                forecast: {
                    forecastday: []
                }
            }
        });

        // get Weather Forecast By Coordinates
        builder.addCase(getWeatherForecastByCoordinates.pending, (state) => {
            state.loadingWeatherForecastDay = true;
            state.weatherForecastDay = {
                forecast: {
                    forecastday: []
                }
            }
        });

        builder.addCase(getWeatherForecastByCoordinates.fulfilled, (state, action) => {
            state.loadingWeatherForecastDay = false;
            state.weatherForecastDay = action.payload;
        });

        builder.addCase(getWeatherForecastByCoordinates.rejected, (state, action) => {
            state.loadingWeatherForecastDay = false;
            state.weatherForecastDay = {
                forecast: {
                    forecastday: []
                }
            }
        });

        //subscribe weather mail
        builder.addCase(subscribeWeatherMail.pending, (state) => {
            state.loadingSub = true;
            state.successSub = false;
            state.inforSub = null;
            state.errSub = null;
        });
        builder.addCase(subscribeWeatherMail.fulfilled, (state, action) => {
            state.loadingSub = false;
            state.successSub = true;
            state.inforSub = action.payload;
            state.errSub = null;
        });
        builder.addCase(subscribeWeatherMail.rejected, (state, action) => {
            state.loadingSub = false;
            state.successSub = false;
            state.inforSub = null;
            state.errSub = action.payload !== undefined ? action.payload : null;
        });

        //unsubscribe weather mail
        builder.addCase(unSubscribeWeatherMail.pending, (state) => {
            state.loadingUnSub = true;
            state.successUnSub = false;
            state.inforUnSub = null;
            state.errUnSub = null;
        });
        builder.addCase(unSubscribeWeatherMail.fulfilled, (state, action) => {
            state.loadingUnSub = false;
            state.successUnSub = true;
            state.inforUnSub = action.payload;
            state.errUnSub = null;
        });
        builder.addCase(unSubscribeWeatherMail.rejected, (state, action) => {
            state.loadingUnSub = false;
            state.successUnSub = false;
            state.inforUnSub = null;
            state.errUnSub = action.payload !== undefined ? action.payload : null;
        });

    },
});



// Export actions
export const { /* Add synchronous action creators here */ } = weatherSlide.actions;

export default weatherSlide.reducer;
