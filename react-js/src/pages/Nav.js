import { Link } from 'react-router-dom'; //ini import library dom
function Nav() {
    return (
      <div className="App">
        <ul>
            <Link to="/">
            <li>Home</li>
            </Link>

            <Link to="/history">
              <li>History</li>
            </Link>

            <Link to="/about">
              <li>About</li>
            </Link>

            <Link to="/contact">
              <li>Contact</li>
            </Link>

            <Link to="/siswa">
              <li>Siswa</li>
            </Link>

            <Link to="/menu">
              <li>Menu</li>
            </Link>
        </ul>
      </div>
    );
  }
  
  export default Nav;