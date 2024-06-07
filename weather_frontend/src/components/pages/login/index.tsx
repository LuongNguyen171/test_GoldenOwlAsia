import React, { useEffect, useState } from 'react';
import { Form, Button, Spinner } from 'react-bootstrap';
import { useDispatch, useSelector } from 'react-redux';
import { login } from '../../../redux/reducer/User';
import { AppDispatch, RootState } from '../../../redux/store/Store';

import "./Register.scss"
import ToastC from '../../toasts';
import { useNavigate } from 'react-router-dom';

interface LoginFormProps {
    onLogin: (username: string, email: string, password: string) => void;
}

const LoginForm: React.FC<LoginFormProps> = () => {
    const dispatch = useDispatch<AppDispatch>();
    const [password, setPassword] = useState('');
    const [email, setEmail] = useState('');
    const [isLoginSuccess, setIsLoginSuccess] = useState<boolean>(false);
    const [showToast, setShowToast] = useState(false);
    const { inforLogin, successLogin, errLogin, loadingLogin } = useSelector((state: RootState) => state.User);

    const navigate = useNavigate()

    useEffect(() => {
        if (successLogin === true) {
            setIsLoginSuccess(true);
            setShowToast(true);
            //set value to local storage
            localStorage.setItem('name', inforLogin?.name);
            localStorage.setItem('email', inforLogin?.email);
            localStorage.setItem('token', inforLogin?.token);

            navigate('/')
        }
        if (errLogin !== null && successLogin === false) {
            setIsLoginSuccess(false);
            setShowToast(true);
        }
    }, [successLogin, errLogin])

    const handleLogin = async (e: React.FormEvent<HTMLFormElement>) => {
        e.preventDefault();
        await dispatch(login({ email, password }));
    }
    const navigateRegister = () => {
        navigate('/register')
    }

    return (
        <div style={{ display: 'flex', justifyContent: 'center' }}>
            {
                showToast && <ToastC
                    isShow={showToast}
                    variant={isLoginSuccess === true
                        ? 'success' : 'danger'}
                    message={isLoginSuccess === true
                        ? 'Login successfully' : 'Login failed'}
                    onDismiss={() => setShowToast(false)} />
            }

            {
                loadingLogin === false ? (
                    <div className='wrapper-register'>
                        <h1 style={{ textAlign: 'center' }}>Login</h1>
                        <Form onSubmit={handleLogin}>

                            <Form.Group controlId="formBasicEmail" style={{ marginTop: '16px' }}>
                                <Form.Label style={{ textAlign: 'left' }}>Email</Form.Label>
                                <Form.Control
                                    type="email"
                                    placeholder="email"
                                    value={email}
                                    onChange={(e: React.ChangeEvent<HTMLInputElement>) =>
                                        setEmail(e.target.value)
                                    }
                                />
                            </Form.Group>
                            <Form.Group controlId="formBasicPassword" style={{ marginTop: '16px' }}>
                                <Form.Label style={{ textAlign: 'left' }}>Password</Form.Label>
                                <Form.Control
                                    type="password"
                                    placeholder="Password"
                                    value={password}
                                    onChange={(e: React.ChangeEvent<HTMLInputElement>) =>
                                        setPassword(e.target.value)
                                    }
                                />
                            </Form.Group>
                            <div style={{ display: "flex", justifyContent: 'space-between' }}>
                                <Button style={{ marginTop: '8px', backgroundColor: 'green' }} variant="primary" type="submit">
                                    Login
                                </Button>
                                <Button style={{ marginTop: '8px' }} variant="primary" onClick={navigateRegister}>
                                    Register
                                </Button>
                            </div>
                        </Form>
                    </div>
                ) : (
                    <Spinner animation="border" role="status">
                        <span className="visually-hidden">Loading...</span>
                    </Spinner>
                )
            }
        </div>
    );
};

export default LoginForm;
