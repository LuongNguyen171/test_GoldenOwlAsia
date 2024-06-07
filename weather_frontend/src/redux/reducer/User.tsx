import { createAsyncThunk, createSlice } from '@reduxjs/toolkit';
import userApi from '../api/UserApi';
import {
    userState
} from '../module';


export const register = createAsyncThunk(
    'register',
    async (args: { username: string, email: string, password: string }, { rejectWithValue }) => {
        const { username, email, password } = args;
        try {
            return (await userApi.register(username, email, password)).data;
        } catch (error: any) {
            if (error.response && error.response.data.message) {
                return rejectWithValue(error.response.data.message);
            } else {
                return rejectWithValue(error.message);
            }
        }
    }
);
export const login = createAsyncThunk(
    'login',
    async (args: { email: string, password: string }, { rejectWithValue }) => {
        const { email, password } = args;
        try {
            return (await userApi.login(email, password)).data;
        } catch (error: any) {
            if (error.response && error.response.data.message) {
                return rejectWithValue(error.response.data.message);
            } else {
                return rejectWithValue(error.message);
            }
        }
    }
);


const initialState: userState = {
    loadingRegister: false,
    errRegister: null,
    successRegister: false,
    inforRegister: null,

    loadingLogin: false,
    errLogin: null,
    successLogin: false,
    inforLogin: null,

}

// Define the slice
const userSlice = createSlice({
    name: 'user',
    initialState,
    reducers: {
        // Add other synchronous actions here
    },
    extraReducers: (builder) => {

        builder.addCase(register.pending, (state) => {
            state.loadingRegister = true;
            state.successRegister = false;
            state.inforRegister = null;
            state.errRegister = null;
        });

        builder.addCase(register.fulfilled, (state, action) => {
            state.loadingRegister = false;
            state.successRegister = true;
            state.inforRegister = action.payload;
            state.errRegister = null;
        });

        builder.addCase(register.rejected, (state, action) => {
            state.loadingRegister = false;
            state.successRegister = false;
            state.inforRegister = null;
            state.errRegister =
                action.payload !== undefined ? action.payload : null;
        });

        //login 

        builder.addCase(login.pending, (state) => {
            state.loadingLogin = true;
            state.successLogin = false;
            state.inforLogin = null;
            state.errLogin = null;
        });

        builder.addCase(login.fulfilled, (state, action) => {
            state.loadingLogin = false;
            state.successLogin = true;
            state.inforLogin = action.payload;
            state.errLogin = null;
        });

        builder.addCase(login.rejected, (state, action) => {
            state.loadingLogin = false;
            state.successLogin = false;
            state.inforLogin = null;
            state.errLogin =
                action.payload !== undefined ? action.payload : null;
        });

    },
});



// Export actions
export const { /* Add synchronous action creators here */ } = userSlice.actions;

// Export the reducer
export default userSlice.reducer;
