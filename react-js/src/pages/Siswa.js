import Listsiswa from './Listsiswa';

function Siswa() {

    const nama=['fance','satria', 'nusan', 'tara']
    return (
      <div className="App">
        <Listsiswa judul={nama} />
      </div>
    );
  }
  
  export default Siswa;
  