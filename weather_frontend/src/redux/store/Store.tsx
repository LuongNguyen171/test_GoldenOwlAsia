import { configureStore } from '@reduxjs/toolkit';
import WeatherReducer from '../reducer/Weather';
import UserReducer from '../reducer/User';

export const store = configureStore({
  reducer: {
    Weather: WeatherReducer,
    User: UserReducer
  },
  middleware: (getDefaultMiddleware) =>
    getDefaultMiddleware({ serializableCheck: false }),
});

export type RootState = ReturnType<typeof store.getState>;
export type AppDispatch = typeof store.dispatch;
