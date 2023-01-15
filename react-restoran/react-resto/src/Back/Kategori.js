import React, { useState, useEffect } from "react";
import { link } from "../Axios/link";
import { useForm } from "react-hook-form";

const Kategori = () => {
  //variabel utk mengambil nilai
  const [isi, setIsi] = useState([]);
  //mengambil pesan dr console log
  const [pesan, setPesan] = useState("");
  //utk menyimpan id
  const [idkategori, setIdkategori] = useState("");
  //utk pilihan button submit/edit
  const [pilihan, setPilihan] = useState(true);

  //untuk useForm / react hook form
  const {
    register,
    handleSubmit,
    reset,
    formState: { errors },
    setValue,
  } = useForm();

  //utk fetchdata
  async function fetchData() {
    const request = await link.get("/kategori");
    //console.log(request.data);
    setIsi(request.data);
  }

  //utk handlesubmit dan function untuk insert data
  function simpan(data) {
    if (pilihan) {
      link.post("/kategori", data).then((res) => setPesan(res.data.pesan));
    } else {
      link
        .put("/kategori/" + idkategori, data)
        .then((res) => setPesan(res.data.pesan));
      setPilihan(true);
    }

    reset();
    //fetchData(); ini dh dipake krn dh pke useeffect yg diisi triger isi
  }

  //utk delete data
  async function hapus(id) {
    //membuat konfirmasi
    if (window.confirm("Anda akan menghapus item ini?")) {
      const res = await link.delete("/kategori/" + id);
      setPesan(res.data.pesan);
    }
  }

  //function utk edit / show data
  async function showData(id) {
    const res = await link.get("/kategori/" + id);
    setValue("kategori", res.data[0].kategori);
    setValue("keterangan", res.data[0].keterangan);
    setIdkategori(res.data[0].idkategori);
    setPilihan(false);
  }

  //fetchData();

  useEffect(() => {
    fetchData(); //menjalankan functionnya
  }, [isi]);

  let no = 1;
  let title, button;

  //judul form
  if (pilihan) {
    title = "Add Data";
  } else {
    title = "Edit Data";
  }

  //pilihan button
  if (pilihan) {
    button = "Add"
  } else {
    button = "Save Change"
  }

  return (
    <div>
      <div className="row">
        <h2 className="display-3">DATA KATEGORI</h2>
      </div>

      <div className="row">
        <div className="col-4">
          <h4>{title}</h4>
          <form onSubmit={handleSubmit(simpan)}>
            <div className="mb-3">
              <label htmlFor="kategori" className="form-label">
                Kategori
              </label>
              <input
                type="text"
                className="form-control"
                placeholder="Kategori"
                {...register("kategori", { required: true })}
              />
              {errors.kategori && <span>*Kategori is required!</span>}
            </div>
            <div className="mb-3">
              <label htmlFor="keterangan" className="form-label">
                Keterangan
              </label>
              <input
                type="text"
                className="form-control"
                name="keterangan"
                placeholder="Keterangan"
                {...register("keterangan", { required: true })}
              />
              {errors.keterangan && <span>*Keterangan is required!</span>}
            </div>
            <div className="mb-2">
              <input type="submit" className="btn btn-primary" name="submit" value={button} />
            </div>
          </form>
        </div>
      </div>

      <div className="row mt-2">
        <p className="alert alert-dark" role="alert">
          {pesan}
        </p>
      </div>

      <div className="row">
        <table className="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Kategori</th>
              <th>Keterangan</th>
              <th>Delete</th>
              <th>Change</th>
            </tr>
          </thead>

          <tbody>
            {isi.map((val, index) => (
              <tr key={index}>
                <td>{no++}</td>
                <td>{val.kategori}</td>
                <td>{val.keterangan}</td>
                <td>
                  <button onClick={() => hapus(val.idkategori)} className="btn btn-danger"> Delete</button>
                </td>
                <td>
                  <button onClick={() => showData(val.idkategori)} className="btn btn-secondary">Edit</button>
                </td>
              </tr>
            ))}
          </tbody>
        </table>
      </div>
    </div>
  );
};

export default Kategori;
