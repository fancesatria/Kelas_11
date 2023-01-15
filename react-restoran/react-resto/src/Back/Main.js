import React from 'react';
import { Routes, Route } from 'react-router-dom';
import Content from './Content';

const Main = () => {
    
    return (
        <div>
            <Routes>
                <Route path=':isi' element={<Content />} />
            </Routes>
        </div>
    );
}

export default Main;
