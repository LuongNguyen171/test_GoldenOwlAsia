import HomePage from "../components/pages/home";
import RegisterPage from "../components/pages/register";
import LoginPage from "../components/pages/login";

const publicRouters = [
    { path: '/', component: HomePage },
    { path: '/register', component: RegisterPage },
    { path: '/login', component: LoginPage },

];

export { publicRouters };
