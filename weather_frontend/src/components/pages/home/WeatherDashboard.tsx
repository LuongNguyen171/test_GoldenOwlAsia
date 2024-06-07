import React, { useEffect, useState } from 'react';
import { Container, Form, Button, Row, Col, Card, Spinner } from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import { useDispatch, useSelector } from 'react-redux';
import { AppDispatch, RootState } from '../../../redux/store/Store';
import { getWeatherCurrent, getWeatherCurrentByCoordinates, getWeatherForecast, getWeatherForecastByCoordinates, subscribeWeatherMail, unSubscribeWeatherMail } from '../../../redux/reducer/Weather';
import { useNavigate } from 'react-router-dom';
import ShowModal from '../../modal';
import ToastC from '../../toasts';


const App: React.FC = () => {
  const [city, setCity] = useState<string>('');
  const [numCardsToShow, setNumCardsToShow] = useState(4);
  const dispatch = useDispatch<AppDispatch>();
  const [message, setMessage] = useState('');
  const { loadingWeatherCurrent,
    weatherCurrent,
    loadingWeatherForecastDay,
    weatherForecastDay,
    loadingSub,
    errSub,
    inforSub,
    successSub,
    loadingUnSub,
    errUnSub,
    successUnSub

  } = useSelector((state: RootState) => state.Weather);
  const [isSuccessSub, setIsSuccessSub] = useState<boolean>(false);
  const [showToast, setShowToast] = useState(false);

  const navigate = useNavigate()

  let name = localStorage.getItem('name');
  let email = localStorage.getItem('email');
  let token = localStorage.getItem('token');

  useEffect(() => {
    if (process.env.REACT_APP_ENVIROMENT === 'production') {
      // console.log('production')
      dispatch(getWeatherCurrent('TP Ho Chi Minh'));
    } else {
      navigator.geolocation.getCurrentPosition(async (position) => {
        const { latitude, longitude } = position.coords;

        dispatch(getWeatherCurrentByCoordinates({ latitude, longitude }));
      });
    }
  }, []); //

  useEffect(() => {
    if (process.env.REACT_APP_ENVIROMENT === 'production') {
      // console.log('production')
      dispatch(getWeatherForecast({ city: 'Tp Ho Chi Minh', days: numCardsToShow }));
    } else {
      navigator.geolocation.getCurrentPosition(async (position) => {
        const { latitude, longitude } = position.coords;

        dispatch(getWeatherForecastByCoordinates({ latitude, longitude, days: numCardsToShow }));
      });
    }

  }, [numCardsToShow])

  useEffect(() => {
    if (successSub === true) {
      setIsSuccessSub(true);
      setShowToast(true);
    }
    if (errSub !== null && successSub === false) {
      setIsSuccessSub(false);
      setShowToast(true);
    }
  }, [successSub, errSub])



  const handleSearch = async () => {

    dispatch(getWeatherCurrent(city));
    dispatch(getWeatherForecast({ city, days: numCardsToShow }));
  };

  const handleCurrentLocation = () => {
    if (process.env.REACT_APP_ENVIROMENT === 'production') {
      // console.log('production')
      dispatch(getWeatherCurrent('Tp Ho Chi Minh'));
      dispatch(getWeatherForecast({ city, days: numCardsToShow }));
    } else {

      navigator.geolocation.getCurrentPosition(async (position) => {
        const { latitude, longitude } = position.coords;

        dispatch(getWeatherCurrentByCoordinates({ latitude, longitude }));
        dispatch(getWeatherForecastByCoordinates({ latitude, longitude, days: numCardsToShow }));

      });
    }
  };

  const handleSub = () => {
    if (name && email && token) {
      dispatch(subscribeWeatherMail({ email }))
    } else {
      navigate('/login')
    }
  }

  const handleUnSub = () => {
    if (name && email && token) {
      dispatch(unSubscribeWeatherMail({ email }))
    } else {
      navigate('/login')
    }
  }


  return (
    <Container fluid className="d-flex flex-column" style={{ minHeight: '80vh' }}>
      <h1 className="text-center mb-4">Weather Dashboard</h1>
      {
        showToast && <ToastC
          isShow={showToast}
          variant={isSuccessSub === true
            ? 'success' : 'danger'}
          message={isSuccessSub === true && !loadingSub
            ? 'Subscribed successfully!. please check mail...' : `${errSub}`}
          onDismiss={() => setShowToast(false)} />
      }
      <Row className="flex-grow-1">
        <Col xs={12} md={3} style={{ marginBottom: '24px', marginRight: '10px' }} >
          <Row>
            <Form.Group controlId="formCityName">
              <Form.Control
                type="text"
                placeholder="Enter a City Name"
                value={city}
                onChange={(e) => setCity(e.target.value)}
              />
            </Form.Group>
            <Button className="w-100 mt-2" variant="primary" onClick={handleSearch}>
              Search
            </Button>
            <div className="text-center mt-2">or</div>
            <Button className="w-100 mt-2" variant="secondary" onClick={handleCurrentLocation}>
              Use Current Location
            </Button>
          </Row>

          <Row className="mt-4">
            {
              loadingSub === true ? (
                <div style={{ textAlign: 'center' }}>

                  <Spinner animation="border" role="status">
                    <span className="visually-hidden">Loading...</span>
                  </Spinner>
                </div>
              ) : (
                <Button className="w-100 mt-2" variant="success" onClick={handleSub}>Sign up to receive email notifications</Button>

              )
            }
            {
              loadingUnSub === true ? (
                <div style={{ textAlign: 'center' }}>
                  <Spinner animation="border" role="status">
                    <span className="visually-hidden">Loading...</span>
                  </Spinner>
                </div>
              ) : (
                <Button className="w-100 mt-2" variant="danger" onClick={handleUnSub}>Unsubcrise</Button>
              )
            }
            {
              errUnSub && (
                <p style={{ textAlign: 'center', color: 'red' }}>
                  {errUnSub}
                </p>
              )
            }
            {
              successUnSub && (
                <p style={{ textAlign: 'center', color: 'green' }}>
                  unsubscribed successfully
                </p>
              )
            }
          </Row>


        </Col>

        <Col xs={12} md={8}>
          <Row>
            {
              loadingWeatherCurrent === true ? (
                <div style={{ textAlign: 'center' }}>
                  <Spinner animation="border" role="status">
                    <span className="visually-hidden">Loading...</span>
                  </Spinner>

                </div>

              ) : (
                <Card className="mb-4" bg="primary" text='white'>
                  <Card.Body>
                    <Card.Title style={{ textAlign: 'left' }}>
                      {weatherCurrent.location.name} ({weatherCurrent?.location?.localtime?.split(' ')[0]})
                    </Card.Title>
                    <div style={{ display: 'flex', justifyContent: 'space-between', alignItems: 'center' }}>
                      <Card.Text style={{ textAlign: 'left' }}>
                        <strong>Temperature:</strong> {weatherCurrent.current.temp_c}°C <br />
                        <strong>Wind:</strong> {weatherCurrent.current.wind_kph} kph <br />
                        <strong>Humidity:</strong> {weatherCurrent.current.humidity}% <br />

                      </Card.Text>
                      <div>
                        <img src={weatherCurrent?.current?.condition?.icon || ""} alt="" />
                        <p>{weatherCurrent.current.condition.text}</p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
              )

            }

          </Row>
          <Row>
            <h2 className="mb-4" style={{ textAlign: 'left' }}>{numCardsToShow}-Day Forecast</h2>
            {
              loadingWeatherForecastDay === true ? (
                <div style={{ textAlign: 'center' }}>
                  <Spinner animation="border" role="status">
                    <span className="visually-hidden">Loading...</span>
                  </Spinner>
                </div>
              ) : (
                weatherForecastDay?.forecast?.forecastday?.slice(0, numCardsToShow).map((day) => (
                  <Col key={day.date} xs={12} md={3}>
                    <Card className="mb-4 color-card" text='white'>
                      <Card.Body>
                        <Card.Title>{day.date}</Card.Title>
                        <img src={day.day.condition.icon || ""} alt="" />
                        <Card.Text style={{ textAlign: 'left' }}>
                          <strong>Temp:</strong> {day.day.avgtemp_c}°C <br />
                          <strong>Wind:</strong> {day.day.maxwind_kph} kph <br />
                          <strong>Humidity:</strong> {day.day.avghumidity}% <br />
                        </Card.Text>
                      </Card.Body>
                    </Card>
                  </Col>
                ))
              )
            }

          </Row>
          <Button onClick={() => setNumCardsToShow(numCardsToShow + 4)}>Show More</Button>
        </Col>
      </Row>
    </Container>
  );
};


export default App;
