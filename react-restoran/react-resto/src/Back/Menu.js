import React, {useState, useEffect} from 'react';

let count = 0;

const Menu = () => {
    function coba() {
        console.log('bbbbbbb');
        setTest(count++);
    }

    const [tes, setTest] = useState(0);
    useEffect(() => {
        console.log(tes);
    }, [tes]);

    return (
        <div>
            <h1>pilihan Menu</h1>
            <button onClick={coba}>Click</button>
        </div>
    );
}

export default Menu;
