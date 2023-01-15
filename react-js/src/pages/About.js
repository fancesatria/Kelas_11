import { useState } from 'react';

function About() {

    const [count, setCount] = useState(0);
    function tambah() {
      setCount(count+1)
    }

    function kurang() {
      if (count > 0){
        setCount(count-1)
      } 
      
    }

    return (
      <div className="App">
        <h1>About Fance Satria counter : {count}</h1>
        <p>About sidoarjo</p>
        <button type="button" className="btn btn-primary" onClick={tambah}>Tambah</button>
        <button type="button" className="btn btn-danger" onClick={kurang}>Kurang</button>
      </div>
    );
  }
  
  export default About;