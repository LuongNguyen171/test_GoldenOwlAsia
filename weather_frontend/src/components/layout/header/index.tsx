import React from 'react';
import { Navbar, Nav, Container } from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import './Header.scss'
const Header: React.FC = () => {
    return (
        <div className='wrapper'>
            <Navbar bg="dark" variant="dark">
                <Container fluid>
                    <Navbar.Brand href="#home">
                        <img
                            src={"https://static.topcv.vn/company_logos/gwYjcupPi3TZkzEIrl0nbPtrISyJsbuB_1645606215____339635860e604f3156f1977185f92f41.png"}
                            width="50"
                            height="50"
                            className="d-inline-block align-top"
                            alt="Logo"
                        />{' '}

                    </Navbar.Brand>
                    <Nav className="mr-auto">
                        <Nav.Link href="/">Weather</Nav.Link>
                        <Nav.Link href="/login">Login</Nav.Link>
                        <Nav.Link href="#pricing">other</Nav.Link>
                    </Nav>
                </Container>
            </Navbar>
        </div>
    );
};

export default Header;
