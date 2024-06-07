import React, { useEffect, useState } from 'react';
import Col from 'react-bootstrap/Col';
import Row from 'react-bootstrap/Row';
import Toast from 'react-bootstrap/Toast';
import { ToastCProps } from '../pages/module';
import './Toast.scss';
function ToastC({ isShow, variant, message, onDismiss }: ToastCProps) {
    const [show, setShow] = useState(false);

    useEffect(() => {
        setShow(isShow);
    }, [isShow]);

    const handleShowToast = () => {
        setShow(false)
        onDismiss()
    }

    return (
        <div className="position-absolute top-0 end-0 z-index">
            <Row>
                <Col xs={6}>
                    <Toast onClose={() => handleShowToast()} show={show} delay={3000} autohide bg={variant} >
                        <Toast.Header>
                            <img
                                src="holder.js/20x20?text=%20"
                                className="rounded me-2"
                                alt=""

                            />
                            <strong className="me-auto">Notification</strong>
                        </Toast.Header>
                        <Toast.Body>{message}</Toast.Body>
                    </Toast>
                </Col>
            </Row>
        </div>
    );
}

export default ToastC;