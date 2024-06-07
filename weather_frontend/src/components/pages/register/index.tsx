import React, { useEffect, useState } from 'react';
import { Form, Button, Spinner } from 'react-bootstrap';
import { useDispatch, useSelector } from 'react-redux';
import { register } from '../../../redux/reducer/User';
import { AppDispatch, RootState } from '../../../redux/store/Store';

import "./Register.scss"
import { useNavigate } from 'react-router-dom';
import ToastC from '../../toasts';

interface RegisterFormProps {
    onLogin: (username: string, email: string, password: string) => void;
}

const RegisterForm: React.FC<RegisterFormProps> = () => {
    const dispatch = useDispatch<AppDispatch>();
    const [username, setUsername] = useState('');
    const [password, setPassword] = useState('');
    const [email, setEmail] = useState('');
    const [isRegisterSuccess, setIsRegisterSuccess] = useState<boolean>(false);
    const [showToast, setShowToast] = useState(false);

    const { loadingRegister, inforRegister, successRegister, errRegister } = useSelector((state: RootState) => state.User);

    const navigate = useNavigate()

    useEffect(() => {
        if (successRegister === true) {

            setIsRegisterSuccess(true);
            setShowToast(true);
            localStorage.setItem('name', inforRegister?.name);
            localStorage.setItem('email', inforRegister?.email);
            localStorage.setItem('token', inforRegister?.token);

            navigate('/')
        }
        if (errRegister !== null && successRegister === false) {
            setIsRegisterSuccess(false);
            setShowToast(true);
        }
    }, [successRegister, errRegister])



    const handleRegister = async (e: React.FormEvent<HTMLFormElement>) => {
        e.preventDefault();
        await dispatch(register({ username, email, password }));
    }
    const navigateLogin = () => {
        navigate('/login')
    }

    return (
        <div style={{ display: 'flex', justifyContent: 'center' }}>
            {
                showToast && <ToastC
                    isShow={showToast}
                    variant={isRegisterSuccess === true
                        ? 'success' : 'danger'}
                    message={isRegisterSuccess === true
                        ? 'Register successfully' : 'Register failed'}
                    onDismiss={() => setShowToast(false)} />
            }
            {
                loadingRegister === false ? (
                    <div className='wrapper-register'>
                        <h1 style={{ textAlign: 'center' }}>Register</h1>
                        <Form onSubmit={handleRegister}>
                            <Form.Group controlId="formBasicEmail">
                                <Form.Label style={{ textAlign: 'left' }}>Username</Form.Label>
                                <Form.Control
                                    type="text"
                                    placeholder="Enter username"
                                    value={username}
                                    onChange={(e: React.ChangeEvent<HTMLInputElement>) =>
                                        setUsername(e.target.value)
                                    }
                                />
                            </Form.Group>
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

                                <Button style={{ marginTop: '8px' }} variant="primary" type="submit">
                                    Register
                                </Button>
                                <Button style={{ marginTop: '8px', backgroundColor: 'green' }} variant="primary" onClick={navigateLogin} >
                                    Login
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

export default RegisterForm;
