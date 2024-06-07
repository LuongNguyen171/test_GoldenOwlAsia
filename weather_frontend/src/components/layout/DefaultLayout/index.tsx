import React, { ReactNode } from 'react';
import Header from '../header';
import './DefaultLayout.scss';

interface DefaultLayoutProps {
    children: ReactNode;
}

const DefaultLayout: React.FC<DefaultLayoutProps> = ({ children }) => {
    return (
        <div className='wrapper'>
            <div className='header'>
                <Header />

            </div>
            <div className='content'>
                <div>{children}</div>
            </div>

        </div>
    );
}

export default DefaultLayout;
