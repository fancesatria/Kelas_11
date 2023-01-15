import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';

ReactDOM.render(
  //app mrupakan component utama 
  <React.StrictMode>
    <App /> 
  </React.StrictMode>,
  //komponen app diatas diambil dari className di file App.js
  document.getElementById('root')//root ini isinya adalah komponen app yg ada diatasnya
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
