import axios from 'axios';
import { register } from 'module';


const userAPI = {
    register: (username: string, email: string, password: string,) => {
        return axios.post(
            `${process.env.REACT_APP_WEATHER_SERVER_URL}/auth/register`,
            {
                name: username,
                email: email,
                password: password
            }
        );
    },
    login: (email: string, password: string,) => {
        return axios.post(
            `${process.env.REACT_APP_WEATHER_SERVER_URL}/auth/login`,
            {
                email: email,
                password: password
            }
        );
    },

};

export default userAPI;
