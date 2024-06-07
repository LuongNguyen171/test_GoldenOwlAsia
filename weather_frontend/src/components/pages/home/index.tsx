import React, { useEffect } from 'react';
import WeatherDashboard from './WeatherDashboard';
import './Home.scss'
import ShowModal from '../../modal';
import { useNavigate } from 'react-router-dom';
const HomePage: React.FC = () => {

  const [message, setMessage] = React.useState('' as string);
  const navigate = useNavigate();

  let name = localStorage.getItem('name');
  let email = localStorage.getItem('email');
  let token = localStorage.getItem('token');


  useEffect(() => {
    if (!name || !email || !token) {
      setMessage('Please login to continue');
    }
  }, [name, email, token]);

  const handleOnClickOke = () => {
    if (!name || !email || !token) {
      navigate('/login');
    } else {

    }
  }

  return (
    <div className='wrapper'>
      <ShowModal message={message} handleOnClickOke={handleOnClickOke} />
      <WeatherDashboard />
    </div>

  );
}


export default HomePage;

