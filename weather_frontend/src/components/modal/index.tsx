import React, { useEffect, useState } from 'react';
import { Button, Modal } from 'react-bootstrap';
import { useNavigate } from 'react-router-dom';
import { ShowModalProps } from '../pages/module';

const ShowModal: React.FC<ShowModalProps> = ({ message, handleOnClickOke }) => {
    const [showModal, setShowModal] = useState(false);
    const navigate = useNavigate()

    useEffect(() => {
        const token = localStorage.getItem('token');
        if (!token) {
            setShowModal(true);
        }
    }, []);

    const handleClose = () => setShowModal(false);
    const HanndleSendMail = () => {
        navigate('/register');
    }

    return (
        <>
            <Modal show={showModal} onHide={handleClose}>
                <Modal.Header closeButton>
                    <Modal.Title>Notification</Modal.Title>
                </Modal.Header>
                <Modal.Body>{message}</Modal.Body>
                <Modal.Footer>
                    <Button variant="secondary" onClick={handleOnClickOke}>
                        Oke
                    </Button>
                    <Button variant="secondary" onClick={handleClose}>
                        Cancel
                    </Button>
                </Modal.Footer>
            </Modal>
            {/* rest of your app */}
        </>
    );
};

export default ShowModal;