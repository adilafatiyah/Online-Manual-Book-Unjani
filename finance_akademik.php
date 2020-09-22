<?php
include('fragment/header.php');
include('fragment/sidemenu_financeAkademik.php');
?>
<article class="col-md-9 p-b-40 b-l p-40">
    <!--Intoroduction-->
                <section id="introduction">
                    <div class="row">
                        <div class="col-md-12">
                            <h4><i class="icon icon-smiling-face"></i> Introduction</h4>
                            <hr>
                            <p> Aplikasi Sinau terbagi menjadi tiga modul, yaitu Modul akademik (digunakan untuk
                                aktivitas akademik), Modul finance akademik (digunakan untuk kelola keuangan akademik),
                                dan Modul HR (digunakan untuk kelola data pegawai).
                            </p>
                        </div>
                    </div>
                </section>
    <!--/. Intoroduction-->
    <section id="finance" class="">
                    <div class="row">
                        <div class="col-md-12">
                            <h4><i class="icon icon-folders"></i>Aktor Modul Keuangan</h4>
                            <hr>
                            <p>Berikut ini adalah aktor dan alur proses dari Modul Keuangan:</p>
                            <table class="table table-bordered table-striped">
                                <tbody>
                                <tr>
                                    <th scope="row"><code>Admin Keuangan</code></th>
                                    <td>Keuangan wajib melakukan validasi pelunasan biaya pendidikan terhadap mahasiswa yang 
                                        sudah melakukan pembayaran.
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <div class="table-responsive">
                            </div>
                        </div>
                    </div>
            </section>
    <section id="finance_verifikasi">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Verifikasi Tagihan Pembayaran</h4>
                                <hr>
                                <p>
                                    Modul ini digunakan untuk verifikasi pelunasan tagihan pembayaran oleh bagian keuangan, agar mahasiswa
                                    dapat melanjutkan proses pendaftaran. Tata cara untuk melakukan verifikasi
                                    pelunasan tagihan adalah sebagai berikut:
                                    <div class="list-group" style="margin-bottom: 25px;">
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-item-primary">Tata cara verifikasi keuangan:</li>
                                            <li class="list-group-item list-group-item-light">1. Scrolldown menu finansial</li>
                                            <li class="list-group-item list-group-item-light">2. Scrolldown menu data transaksi bank</li>
                                            <li class="list-group-item list-group-item-light">3. Akses menu transaksi rekening koran</li>
                                            <li class="list-group-item list-group-item-light">4. Pilih Tab NON HOST 2 HOST</li>
                                            <li class="list-group-item list-group-item-light">5. Pilih button "Download Template Non-H2H BNI"</li>
                                            <li class="list-group-item list-group-item-light">6. Berikut tampilan excel yang sudah diunduh
                                                <img src="assets/img/unjani/registermahasiswalama/keuangan_excel.png"
                                                    class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                                    <p>Yang perlu diketahui adalah baris kedua merupakan contoh, sehingga diharuskan untuk
                                                        menghapus baris tersebut. Kemudian user dapat mengisi
                                                        template excel dari data mahasiswa yang telah melunasi tagihan.
                                                        gambar diatas adalah contoh proses pengisian data</p>
                                                    <P>Dan jangan lupa untuk menambahkan biaya admin sesuai dengan ketentuan</P>
                                            </li>
                                            <li class="list-group-item list-group-item-light">7. Unggah file excel, Kemudian klik preview</li>
                                            <li class="list-group-item list-group-item-light">8. Klik Tombol Generate
                                                <img src="assets/img/unjani/registermahasiswalama/keuangan_generate.png"
                                                    class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                                <p>Setelah  proses pada menu TRANSAKSI REKENING KORAN selesai,
                                                    maka selanjutnya adalah proses pelunasan
                                                </p>
                                            </li>
                                            <li class="list-group-item list-group-item-primary">Tata cara pelunasan </li>
                                            <li class="list-group-item list-group-item-light">9. Scrolldown menu finansial</li>
                                            <li class="list-group-item list-group-item-light">10. Scrolldown menu pembayaran reguler</li>
                                            <li class="list-group-item list-group-item-light">11. Akses menu data pembayaran</li>
                                            <li class="list-group-item list-group-item-light">12. Klik tab MABA</li>
                                            <li class="list-group-item list-group-item-light">13. Pilih nama mahasiswa dan klik button "pencil" pada kolom aksi</li>
                                            <li class="list-group-item list-group-item-light">14. Klik icon uang pada kolom aksi
                                                <img src="assets/img/unjani/admisi/admisi_verifikasikeuangan.PNG"
                                                    class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                            </li>
                                            <li class="list-group-item list-group-item-light">15. Klik button tambah pembayaran
                                                <img src="assets/img/unjani/admisi/admisi_addbutton.png"
                                                    class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                            </li>
                                            <li class="list-group-item list-group-item-light">16. Isi data pembayaran
                                                <img src="assets/img/unjani/admisi/admisi_addpelunanasan.png"
                                                    class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                                <p> Pada pop up tersebut, ADMIN KEUANGAN dapat mengisi data sesuai dengan data yang telah
                                                    diunggah melalui menu TRANSAKSI REKENING KORAN</p>
                                            </li>
                                            <li class="list-group-item list-group-item-light">17. Klik simpan</li>
                                          </ul>
                                      </div>
                                </p>
                            </div>
                        </div>
                    </section>
<?php
include('fragment/footer.php');
?>