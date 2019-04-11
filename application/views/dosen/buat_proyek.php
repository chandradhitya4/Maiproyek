
<!DOCTYPE HTML>

<html>

<head>
    <style>
    button{
    background-color: #F44647; /* Green */
    border: none;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    width: 500px;
}
fieldset {color: #03A678}
.teks{
    width: 300px;
    height: 30px;
}

.kelas{
    width: 300px;
    height: 30px;
}

h1 {text-align: center;font-size: 15pt;color: red}
p {text-align: center;}
div {
    border-radius: 5px;
    background-color: white
    padding: 30px;
}



legend { font-size: 20pt; font-style:inherit; font-family: facifio }
        </style>

<title>Membuat Proyek</title>


</head>

<body>
        <p><img src="<?php echo base_url().'asset/img/logo.png" width="300" height="100"'?>></p>
    <center>
    <div class="BuatProyek">
            
            <tr></tr><tr></tr>
            <fieldset style="width: 35%">
            <legend><b>MEMBUAT PROYEK</b></legend>
            <table border = "0" cellspacing="10" style="text-align:center">
                <tr>
                    <td>Nama Proyek</td>
                </tr>

                <tr></tr>
                <tr>
                    <td><input type="text" name="inputNama" id="nama" class="teks"></td>
                </tr>

                </tr>
                <tr>
                    <td>Universitas</td>
                </tr>
                <tr>
                    <td><input type="text" name="inputUniv" id="masukanUniv" class="teks"></td>
                </tr>

                <tr>
                    <td>Fakultas</td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td><select class="kelas" id="pilihan">
                        <option>Pilih fakultas</option>
                        <option>FTE</option>
                        <option>FRI</option>
                        <option>FIF</option>
                        <option>FEB</option>
                        <option>FKB</option>
                        <option>FIK</option>
                        <option>FIT</option>            
                        </select>
                  
                </tr>

                <tr>
                    <td>Jurusan</td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td><select class="kelas" id="pilihan">
                        <option>Pilih fakultas</option>
                        <option>S1 Teknik Elektro</option>
                        <option>S1 Teknik Telekomunikasi</option>
                        <option>S1 Teknik Fisika</option>
                        <option>S1 Sistem Komputer</option>
                        <option>S2 Teknik Elektro</option>
                        <option>S1 Teknik Industri</option>
                        <option>S1 Sistem Informasi</option>        
                        <option>S2 Teknik Industri</option>      
                        </select>
                  
                </tr>
                <tr></tr>
                
                <tr>
                    <td>Deskripsi Proyek</td>
                </tr>

        
                <tr>
                    <td><textarea cols="39" rows="7" name="textDeskripsi" id="Deskripsi"></textarea></td>
                
                </tr>
                <tr>
                    <td>Bidang</td>
                </tr>

                <tr></tr>
                <tr>
                    <td><input type="text" name="inputBidang" id="masukanBidang" class="teks"></td>
                
                </tr>
                
                <tr></tr>
                <tr>
                        <td>Keahlian Yang Dibutuhkan</td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td><input type="text" name="inputKeahlian" id="masukanKeahlian" class="teks"></td>
                    </tr>

                    <tr></tr>
                <tr>
                    <td>Jumlah Mahasiswa Yang Dibutuhkan</td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr>
                    <td><select class="kelas" id="pilihan">
                        <option>Pilih jumlah mahasiswa</option>
                        <option >2</option>
                        <option >3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>            
                        <option>9</option>
                        <option>10</option>
                        </select>
                  
                </tr>
                <tr></tr>
                <tr>
                    <td>Penawaran Gaji?</td>
                </tr>
                <tr></tr>
                <tr>
                        <td><input type="text" name="inputGaji" id="penawaranGaji" class="teks"></td>
                    </tr>
                <tr>
                    <tr></tr>
                        <td>Dapat ditawar?</td>
                    </tr>
                    <tr>
                    <td><input type="radio" name="pilihanIya" id="radioIya">Iya
                        <input type="radio" name="pilihanTidak" id="radioTidak">Tidak</td>
                   
                </tr>
                <tr>
                    <tr></tr>
                        <td><input type="checkbox" name="setuju" id="persetujuan"> Dengan ini saya menyetujui persyaratan dan persetujuan yang berlaku</td>
                    </tr>
                <tr>
                    <td><button type="submit" onclick="window.print()">PASANG IKLAN</button></td>
                </tr>

            </table>

        </center>  

    </div>
</body>
</html>