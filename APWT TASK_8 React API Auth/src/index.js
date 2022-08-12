import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
 import App from './App';
import reportWebVitals from './reportWebVitals';
import Nav from './Components/Nav';
import Footer from './Components/Footer';
import RLogin from './Components/Login/RLogin';
import RLogout from './Components/RLogout';
import ShowInfo from './Components/ShowInfo';

import {BrowserRouter as Router, Route, Routes} from 'react-router-dom'


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>
     <Router>
     <Routes>
     <Route exact path='/RLogin' element={<RLogin/>} />
     <Route exact path='/Logout' element={<RLogout/>} />
     </Routes>
<Nav />
      <Routes>
      <Route exact path='/' element={<App/>} />
        <Route exact path='/Api' element={<ShowInfo/>} />
      </Routes>
      <Footer />
    </Router>
  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();