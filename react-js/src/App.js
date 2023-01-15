import logo from './logo.svg';
import './App.css';
import Contact from './pages/Contact';
import Nav from './pages/Nav';
import History from './pages/History';
import About from './pages/About';
import Home from './pages/Home';
import Siswa from './pages/Siswa';
import Menu from './pages/Menu';
import { BrowserRouter, Route, Routes } from 'react-router-dom'; //ini import library dom

function App() {
  return (
    <BrowserRouter>
      <div className="App">
        <Nav /> 
        <Routes>
          <Route path='/' element={<Home/>} exact /> //exact ini mksdnya jika hanya muncul garis miring maka munculnya adalah element dr home
          <Route path='/about' element={<About/>} /> 
          <Route path='/history' element={<History/>} /> 
          <Route path='/contact' element={<Contact/>} /> 
          <Route path='/siswa' element={<Siswa/>} /> 
          <Route path='/menu' element={<Menu/>} /> 
        </Routes>
      </div>
    </BrowserRouter>
  );
}

export default App;
