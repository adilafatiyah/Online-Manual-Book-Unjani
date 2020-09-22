<?php
include('fragment/header.php');
include('fragment/sidemenu_research.php');
?>
<article class="col-md-9 p-b-40 b-l p-40">
 <!--Intoroduction-->
            <section id="introduction">
                    <div class="row">
                        <div class="col-md-12">
                            <h4><i class="icon icon-smiling-face"></i> Introduction</h4>
                            <hr>
                            <p> Modul research adalah modul yang berisi registrasi, kelola, dan monitoring data seperti 
                                TA/PA, Ijazah, Yudisium, Wisuda dll. Sehingga proses research dan TA/PA pada universitas
                                berjalan dengan lancar dan terpantau pada suatu sistem.
                            </p>
                        </div>
                    </div>
            </section>
<!--/. Intoroduction-->
<!--PPM-->
            <section id="#" class="">
                    <section id="PPM">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Aktor Menu PPM</h4>
                                <hr>
                                <p>Berikut ini adalah aktor proses dari menu PPM</p>
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="row"><code>Admin PPM</code></th>
                                            <td> Admin PPM bertugas membuat acara PPM.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><code>Evaluator</code></th>
                                            <td> Evaluator bertugas evaluasi proposal.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><code>Dosen</code></th>
                                            <td> Dosen bertugas mengikuti acara PPM / submit proposal.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <section id="PPM_createAcara">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Buat Acara PPM</h4>
                                <hr>
                                <p> Modul ini digunakan untuk membuat acara PPM oleh Admin PPM:
                                </p>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Tata cara buat acara PPM (Tahap 1):</li>
                                        <li class="list-group-item list-group-item-light">1. Scroldown menu PPM</li>
                                        <li class="list-group-item list-group-item-light">2. Scroldown menu acara</li>
                                        <li class="list-group-item list-group-item-light">3. Klik menu buat pengumuman</li>
                                        <li class="list-group-item list-group-item-light">4. Berikut adalah tampilan buat pengumuman
                                            <img src="assets/img/ibik/PPM/PPM_3tahap.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">5. Isi data form pada tahap 1 dan klik next button setelah semua data terisi
                                            <img src="assets/img/ibik/PPM/PPM_tahap1.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">6. Setalah mengisi data kemudian bertahap ke tahap 2 yaitu buat tahapan kegiatan</li>
                                    </ul>
                                </div>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Tata cara buat PPM (Tahap 2) :</li>
                                        <li class="list-group-item list-group-item-light">1. Klik tambah tahap monitoring button
                                            <img src="assets/img/ibik/PPM/PPM_tambahmonitoring.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">2. Pilih type tahapan/komponen skema penelitian
                                            <img src="assets/img/ibik/PPM/PPM_pilihskema.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">3. Berikut tampilan tahapan/komponen skema penelitian
                                            <img src="assets/img/ibik/PPM/PPM_tampilankomponenskema.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">4. Membuat form pada setiap tahapan (Pilih di bagian aksi -> form)
                                        </li>
                                        <li class="list-group-item list-group-item-light">5. Isi data pada form tahapan pengumpulan proposal
                                            <img src="assets/img/ibik/PPM/PPM_formPengumpulanProposal.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">6. Klik tambah pertanyaan button pada form tahapan pengumpulan proposal,
                                            kemudian isi data
                                            <img src="assets/img/ibik/PPM/PPM_addPertanyaan.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">7. Berikut tampilan form yang sudah diisi
                                            <img src="assets/img/ibik/PPM/PPM_FormIsi.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">8. Mengatur permission setiap tahapan
                                            <img src="assets/img/ibik/PPM/PPM_addPermission.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;"> 
                                        </li>
                                        <li class="list-group-item list-group-item-light">9. Berikut tampilan form permission
                                            <img src="assets/img/ibik/PPM/PPM_Permission.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">10. Setelah mengatur skema penelitian bisa lanjut ke tahapan ke 3 </li>
                                    </ul>
                                </div>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Tata cara buat PPM (Tahap 3):</li>
                                        <li class="list-group-item list-group-item-light">1. Mengatur tampilan laporan yang akan di munculkan</li>
                                        <li class="list-group-item list-group-item-light">2. Checklist dan pilih tampilkan pada tabel
                                            <img src="assets/img/ibik/PPM/PPM_Finish.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">3. Setelah selesai klik finish</li>
                                        <li class="list-group-item list-group-item-light">4. Melihat daftar kegiatan yang telah di buat
                                            <img src="assets/img/ibik/PPM/PPM_DaftarTable.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="PPM_pilihEvaluator">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Menentukan Evaluator</h4>
                                <hr>
                                <p> Modul ini digunakan untuk menentukan evaluator oleh PPM:
                                </p>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Tata cara menentukan evaluator:</li>
                                        <li class="list-group-item list-group-item-light">1. Scroldown menu PPM</li>
                                        <li class="list-group-item list-group-item-light">2. Scroldown menu acara </li>
                                        <li class="list-group-item list-group-item-light">3. Akses menu Penelitian, Publikasi, dan Abdimas</li>
                                        <li class="list-group-item list-group-item-light">4. Pilih jenis kegiatan, kemudian klik view journal pada column aksi 
                                            <img src="assets/img/ibik/PPM/PPM_assignEvaluator.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">5. Klik tambah evaluator pada column aksi
                                            <img src="assets/img/ibik/PPM/PPM_addEvaluator.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">6. Pilih evaluator
                                            <img src="assets/img/ibik/PPM/PPM_PilihEvaluator.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">Selain memilih evaluator dari internal, PPM juga bisa memilih evaluator dari external
                                            (PPM -> Manajemen User -> Evaluator)
                                            <img src="assets/img/ibik/PPM/PPM_addEvaluatorExternal.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">1. Isi data evaluator
                                            <img src="assets/img/ibik/PPM/PPM_isiDataForm.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">2. Klik Tambah</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="PPM_inputPenelitian">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Input Proposal Penelitian</h4>
                                <hr>
                                <p> Modul ini digunakan untuk menginputkan penelitian oleh dosen:
                                </p>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Tata cara input proposal penelitian:</li>
                                        <li class="list-group-item list-group-item-light">1. Scroldown menu PPM</li>
                                        <li class="list-group-item list-group-item-light">2. Akses menu acara</li>
                                        <li class="list-group-item list-group-item-light">3. Akses menu  Penelitian, Publikasi, dan Abdimas</li>
                                        <li class="list-group-item list-group-item-light">4. Klik submit proposal dalam kolom aksi 
                                            <img src="assets/img/ibik/PPM/PPM_addProposal.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">5. Mengisi form pada setiap tahapan
                                            <img src="assets/img/ibik/PPM/PPM_formIsiProposal.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">6. Berikut adalah tampilan proposal yang sudah diupload
                                            <img src="assets/img/ibik/PPM/PPM_formIsiProposal.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="PPM_evalProposal">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Evaluasi Proposal</h4>
                                <hr>
                                <p> Modul ini digunakan untuk evaluasi proposal oleh evaluator:
                                </p>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Tata cara evaluasi proposal:</li>
                                        <li class="list-group-item list-group-item-light">1. Scroldown menu PPM</li>
                                        <li class="list-group-item list-group-item-light">2. Akses menu acara</li>
                                        <li class="list-group-item list-group-item-light">3. Akses menu Penelitian, Publikasi, dan Abdimas</li>
                                        <li class="list-group-item list-group-item-light">4. Pilih nama kegiatan dan kemudian klik view journal pada column aksi
                                            <img src="assets/img/ibik/PPM/PPM_evaluasiPenelitian.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">5. Klik evaluation pada column aksi
                                            <img src="assets/img/ibik/PPM/PPM_evaluationAdd.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">6. Evaluasi tahap 1 adalah Evaluator melakukan evaluasi dengan
                                        melihat proposal yang sudah di upload
                                            <img src="assets/img/ibik/PPM/PPM_evaluationStep1.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">7. Evaluasi tahap 2, evaluator dapat memberikan summary
                                            <img src="assets/img/ibik/PPM/PPM_evaluationStep2.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">8. Evaluasi tahap 3, penentuan kelulusan yang sebelum nya di assign kepada PPM
                                            <img src="assets/img/ibik/PPM/PPM_evaluationStep3.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">9. Evaluasi tahap 4, penentuan dana
                                            <img src="assets/img/ibik/PPM/PPM_evaluationStep4.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">10. Evaluasi tahap 5 dan 6 upload kemajuan proposal dan proposal akhir
                                            <img src="assets/img/ibik/PPM/PPM_evaluationStep5.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Tata cara melihat laporan jurnal, menggunakan admin PPM:</li>
                                        <li class="list-group-item list-group-item-light">1. Scroldown PPM</li>
                                        <li class="list-group-item list-group-item-light">2. Scroldown menu Laporan Penelitian</li>
                                        <li class="list-group-item list-group-item-light">3. Terdapat laporan semua jurnal, keuangan, penelitian dosen</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
<!--/PPM-->
<!--TA/PA-->
                <section>
                <section id="TAPA">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>TA/PA</h4>
                                <hr>
                                <p> Aplikasi TA/PA merupakan aplikasi yang terintegrasi pada XGracias dan berfungsi untuk merapikan administrasi terkait proses berlangsungnya
                                    TA/PA. Aplikasi ini memfasilitasi mahasiswa ketika mengambil TA/PA hingga kelulusan, serta membantu bagian Layanan Administrasi Akademik
                                    Kemahasiswaan (LAAK) fakultas dalam melakukan penjadwalan maupun pengunduhan dan penyimpanan berkas TA/PA.</p>
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="row"><code>Dosen Pembimbing / Dosen Penguji</code></th>
                                            <td>Dosen mempunyai dua fungsi yaitu sebagai pembimbing dan sebagai penguji</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><code>Wakil Dekan 1</code></th>
                                            <td>Wadek 1 mempunyai tugas untuk kelola keahlian dan melihat laporan akhir karya mahasiswa serta 
                                            laporan dosen pembimbing</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><code>Koordinator / Kelompok Keahlian</code></th>
                                            <td> Ketua KK bertugas mengalola kelompok keahlian dan aproval dosen pembimbing</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><code>Admin LAAK</code></th>
                                            <td> Admin LAAK bertugas mengenai pengaturan pra pasca sidang dan penerbitan SK.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <img src="assets/img/ibik/TAPA/Dosen_1.PNG"
                                     class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                            </div>
                        </div>
                    </section>
                    <section id="tapa_dosen">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>TA/PA For Lecturer</h4>
                                <hr>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Beranda</li>
                                        <li class="list-group-item list-group-item-light">
                                            <p>Beranda merupakan salah satu menu dan merupakan halaman awal pada aplikasi TA/PA. Pada menu ini, terdapat informasi mengenai status
                                                pembimbing dan kuota dari dosen yang bersangkutan. Selain itu, terdapat juga informasi mengenai alur keterlibatan dosen dalam proses
                                                pengerjaan TA/PA mahasiswa. Dosen dibedakan menjadi dua, yaitu dosen pembimbing dan dosen penguji. Berikut tampilan beranda aplikasi
                                                TA/PA</p>
                                            <img src="assets/img/ibik/TAPA/Dosen_2.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Daftar Bimbingan Mahasiswa</li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Daftar Mahasiswa Bimbingan merupakan sub-menu aplikasi TA/PA yang berfungsi untuk memudahkan dosen pembimbing dalam melihat
                                                informasi mengenai mahasiswa bimbingannya termasuk daftar log bimbingan, diskusi, dan berkas yang diunggah oleh mahasiswa. Selain itu juga
                                                terdapat informasi mengenai SK dan fitur untuk melakukan approval sidang mahasiswa. Berikut tampilan sub-menu ini:</p>
                                            <img src="assets/img/ibik/TAPA/Dosen_3.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">Klik tombol bimbingan, maka akan tampil log bimbingan mahasiswa sbb:
                                            <img src="assets/img/ibik/TAPA/Dosen_4.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">Klik tombol diskusi,  maka akan tampil daftar diskusi yang dilakukan oleh mahasiswa dan pembimbing sbb:
                                            <img src="assets/img/ibik/TAPA/Dosen_5.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">Klik tombol berkas,  maka akan tampil daftar berkas/dokumen yang dapat diunggah dosen maupun mahasiswa sbb:
                                            <img src="assets/img/ibik/TAPA/Dosen_6.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Daftar Mahasiswa Bimbingan Sudah Sidang</li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Daftar Mahasiswa Bimbingan yang Sudah Sidang merupakan sub-menu aplikasi TA/PA yang berfungsi untuk memudahkan dosen pembimbing
                                                dalam melihat informasi mengenai mahasiswa bimbingannya yang telah melakukan sidang. Menu ini memiliki fitur revisi yang terdiri dari revisi
                                                judul bahasa inggris, batas waktu & komponen revisi, status paper, dan input nilai akhir. Berikut tampilan sub-menu ini:</p>
                                            <img src="assets/img/ibik/TAPA/Dosen_7.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">Klik tombol revisi,  maka akan tampil pop up sbb:
                                            <img src="assets/img/ibik/TAPA/Dosen_8.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Jadwal</li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Jadwal merupakan sub-menu aplikasi TA/PA yang berfungsi untuk memudahkan dosen pembimbing maupun penguji dalam melihat jadwal
                                                sidang mahasiswa. Berikut tampilan sub-menu ini:</p>
                                            <img src="assets/img/ibik/TAPA/Dosen_9.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="tapa_wadek">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>TA/PA For Vice Dean</h4>
                                <hr>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Beranda</li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Beranda merupakan salah satu menu dan merupakan halaman awal pada aplikasi TA/PA. Pada menu ini, terdapat informasi mengenai alur yang dapat dilakukan wakil dekan
                                                terkait proses berlangsungnya TA/PA yang telah diakomodir sistem. Berikut tampilan beranda aplikasi TA/PA: </p>
                                            <img src="assets/img/ibik/TAPA/wadek_1.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Daftar TA/PA</li>
                                        <li class="list-group-item list-group-item-light">Mengatur Kelompok Keahlian
                                            <p> Mengatur Kelompok Keahlian merupakan sub-menu aplikasi TA/PA yang berfungsi untuk memudahkan wakil dekan dalam mengatur
                                                kelompok keahlian yang ada dalam fakultasnya. Berikut tampilan sub-menu ini:</p>
                                            <img src="assets/img/ibik/TAPA/wadek_2.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">
                                            <p>Ketika klik tombol Input Kelompok Keahlian, maka akan tampil pop up sbb:</p>
                                            <img src="assets/img/ibik/TAPA/wadek_3.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light"> Laporan TA/PA Mahasiswa
                                            <p> Laporan TA/PA Mahasiwa merupakan sub-menu aplikasi TA/PA yang berfungsi untuk melihat informasi TA/PA mahasiswa yang sedang
                                                berlangsung pada tiap-tiap Kelompok Keahlian dalam satu fakultas tersebut. Berikut tampilan sub-menu ini:</p>
                                            <img src="assets/img/ibik/TAPA/wadek_4.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Ketika klik angka pada kolom jumlah, maka akan tampil informasi daftar mahasiswa yang mengambil TA/PA dengan kelompok keahlian
                                                tersebut sbb:</p>
                                            <img src="assets/img/ibik/TAPA/wadek_5.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light"> Lihat Dosen Pembimbing
                                            <p> Lihat Dosen Pembimbing merupakan sub-menu aplikasi TA/PA yang berfungsi untuk melihat informasi kuota dosen pembimbing, baik
                                                pembimbing 1 maupun pembimbing 2. Berikut tampilan sub-menu ini:</p>
                                            <img src="assets/img/ibik/TAPA/wadek_6.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light"> Lihat Dosen Pembimbing di Kelompok Keahlian
                                            <p> Lihat Dosen Pembimbing di Kelompok Keahlian merupakan sub-menu aplikasi TA/PA yang berfungsi untuk melihat daftar dosen
                                                pembimbing pada setiap kelompok keahlian di fakutlas tersebut. Berikut tampilan sub-menu ini:</p>
                                            <img src="assets/img/ibik/TAPA/wadek_7.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Ketika klik angka pada kolom Jumlah Pembimbing, maka akan tampil informasi daftar dosen pembimbing pada kelompok keahlian
                                                tersebut sbb:</p>
                                            <img src="assets/img/ibik/TAPA/wadek_8.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="tapa_kk">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>TA/PA For Group Expertise Leader</h4>
                                <hr>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Beranda</li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Beranda merupakan salah satu menu dan merupakan
                                                halaman awal pada aplikasi TA/PA. Pada menu ini, terdapat
                                                penjelasan apa yang harus dilakukan Ketua KK dalam proses
                                                TA/PA mahasiswa. Berikut tampilan beranda aplikasi
                                                TA/PA</p>
                                            <img src="assets/img/ibik/TAPA/kk_1.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Daftar TA/PA</li>
                                        <li class="list-group-item list-group-item-light">Status TA/PA Mahasiswa
                                            <p> Status TA/PA Mahasiswa merupakan salah satu sub-menu pada menu Daftar TA/PA yang berfungsi untuk membantu Ketua KK dalam
                                                melakukan approval dosen pembimbing TA/PA. Berikut tampilan sub-menu ini:</p>
                                            <img src="assets/img/ibik/TAPA/kk_2.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                            <p>Berikut keterangan warna tombol pada fitur:</p>
                                            <img src="assets/img/ibik/TAPA/kk_3.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Ketika klik tombol Perencanaan Pembimbing, maka akan tampil pop-up untuk melakukan approval
                                                dosen pembimbing sbb:</p>
                                            <img src="assets/img/ibik/TAPA/kk_4.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Menetapkan Dosen Kelompok Keahlian</li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Menetapkan Dosen Kelompok Keahlian merupakan salah satu sub-menu pada menu Daftar TA/PA yang berfungsi untuk membantu Ketua
                                                KK dalam memasukkan dosen pada KK tersebut. Berikut tampilan sub-menu ini:</p>
                                            <img src="assets/img/ibik/TAPA/kk_5.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Ketika klik tombol Input Dosen Kelompok Keahlian, maka akan tampil pop-up untuk memasukkan
                                                dosen ke dalam KK sbb:</p>
                                            <img src="assets/img/ibik/TAPA/kk_6.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Input Dosen Pembimbing</li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Input Dosen Pembimbing merupakan salah satu sub-menu pada menu Daftar TA/PA yang berfungsi untuk membantu Ketua KK dalam
                                                peng-input-an dan pengelolaan kuota dosen pembimbing. Dosen yang dapat di-input-kan adalah dosen yang telah ditetapkan menjadi
                                                anggota KK tersebut sebelumnya. Berikut tampilan sub-menu ini:</p>
                                            <img src="assets/img/ibik/TAPA/kk_7.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Ketika klik tombol Input Dosen Pembimbing, maka akan tampil pop-up untuk melakukan input dosen
                                                pembimbing dan kuota sbb:</p>
                                            <img src="assets/img/ibik/TAPA/kk_8.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Ketika klik tombol Inport Dosen Pembimbing, maka akan tampil pop-up untuk melakukan import dosen
                                                pembimbing dan kuota dalam format excel sbb:
                                                </p>
                                            <img src="assets/img/ibik/TAPA/kk_9.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="tapa_laak">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>TA/PA For Admin LAAK</h4>
                                <hr>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Beranda</li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Beranda merupakan salah satu menu dan merupakan halaman awal pada aplikasi TA/PA. Pada menu ini, terdapat penjelasan mengenai alur proses admin
                                                (LAAK) dalam menggunakan aplikasi TA/PA. Berikut tampilan beranda aplikasi TA/PA untuk admin (LAAK): </p>
                                            <img src="assets/img/ibik/TAPA/laak_1.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Daftar TA/PA</li>
                                        <li class="list-group-item list-group-item-light">Status TA/PA Mahasiswa
                                            <p> Status TA/PA Mahasiswa merupakan salah satu sub-menu pada menu Daftar TA/PA yang berfungsi untuk mengelola status TA/PA mahasiswa.
                                            LAAK dapat memantau progres pengerjaan TA/PA masing-masing mahasiswa. Berikut tampilan sub-menu ini: </p>
                                            <img src="assets/img/ibik/TAPA/laak_2.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                            <p>Detail Fitur:</p>
                                            <img src="assets/img/ibik/TAPA/laak_3.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                            <p>Pengumpulan Pengajuan Sidang:</p>
                                            <img src="assets/img/ibik/TAPA/laak_4.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">Unggah Mahasiswa yang Telah Lulus Sidang Akademik untuk Siap Sidang</li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Unggah Mahasiswa yang Telah Lulus Sidang Akademik untuk Siap Sidang merupakan sub-menu pada menu Daftar TA/PA yang berfungsi untuk
                                                mengunggah mahasiswa yang telah dinyatakan siap sidang. Berikut tampilan sub-menu:</p>
                                            <img src="assets/img/ibik/TAPA/laak_5.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary"> KELOLA SK</li>
                                        <li class="list-group-item list-group-item-light">Terbitkan SK
                                            <p> Terbitkan SK merupakan sub-menu dari menu Kelola SK yang berfungsi untuk
                                                melakukan penerbitan SK TA/PA. Berikut tampilan submenu ini:
                                             </p>
                                             <img src="assets/img/ibik/TAPA/laak_6.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Ketika tombol Kelola SK di-klik, maka akan tampil pop-up yang berupa isian form untuk informasi yang akan ditampilkan
                                                pada SK TA/PA. Berikut tampilan pop-up:</p>
                                            <img src="assets/img/ibik/TAPA/laak_7.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Jadwal</li>
                                        <li class="list-group-item list-group-item-light"> Jadwal Sidang TA/PA
                                            <p> Jadwal Sidang TA/PA merupakan salah satu menu aplikasi TA/PA yang berfungsi untuk membuat jadwal sidang mahasiswa. Berikut
                                                tampilan menu Jadwal:</p>
                                            <img src="assets/img/ibik/TAPA/laak_8.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Ketika klik tombol Tambah Jadwal, maka akan muncul pop-up untuk menambahkan jadwal sidang mahasiswa sbb:</p>
                                            <img src="assets/img/ibik/TAPA/laak_9.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Ketika klik tombol Import ( ), maka akan muncul pop-up untuk melakukan import
                                            jadwal sidang mahasiswa sbb:</p>
                                            <img src="assets/img/ibik/TAPA/laak_10.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Nota Dinas</li>
                                        <li class="list-group-item list-group-item-light">Penugasan
                                            <p> Penugasan merupakan sub-menu aplikasi TA/PA yang berfungsi untuk membantu admin (LAAK) dalam pembuatan nota dinas
                                                penugasan untuk penguji sidang. Nota dinas penugasan merupakan nota dinas pertama kepada dosen penguji yang ditunjuk. Berikut
                                                tampilan sub-menu ini:</p>
                                            <img src="assets/img/ibik/TAPA/laak_11.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">Realisasi
                                            <p> Realisasi merupakan sub-menu aplikasi TA/PA yang berfungsi untuk membantu admin (LAAK) dalam pembuatan nota dinas realisasi
                                                untuk penguji sidang. Nota dinas realisasi merupakan nota dinas untuk dosen penguji yang melaksanakan nota dinas penugasan. Berikut
                                                tampilan sub-menu ini:
                                                </p>
                                            <img src="assets/img/ibik/TAPA/laak_12.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Sidang Akademik</li>
                                        <li class="list-group-item list-group-item-light">Pasca-sidang (Hasil Kelulusan)
                                            <p> Pasca-sidang (Hasil Kelulusan) merupakan sub-menu aplikasi TA/PA yang berfungsi untuk mengelola informasi sidang yudisium
                                                mahasiswa. Berikut tampilan sub-menu ini:</p>
                                            <img src="assets/img/ibik/TAPA/laak_13.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Ketika klik tombol, maka akan tampil pop-up untuk menggunggah informasi sidang yudisium sbb:
                                            </p>
                                            <img src="assets/img/ibik/TAPA/laak_14.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Pengaturan</li>
                                        <li class="list-group-item list-group-item-light">Kebutuhan Pre-Sidang
                                            <p> Kebutuhan Pre-Sidang merupakan sub-menu aplikasi TA/PA yang berfungsi untuk membatu admin (LAAK) dalam mempersiapkan
                                                pengaturan kebutuhan yang harus dilengkapi mahasiswa sebelum melaksanakan sidang. Berikut tampilan sub-menu ini:</p>
                                            <img src="assets/img/ibik/TAPA/laak_15.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Ketika klik tombol Tambah Kebutuhan, maka akan muncul pop-up untuk mengisi kebutuhan pre-sidang sbb:
                                            </p>
                                            <img src="assets/img/ibik/TAPA/laak_16.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">Kebutuhan Pasca-Sidang
                                            <p> Kebutuhan Pasca-Sidang merupakan sub-menu aplikasi TA/PA yang berfungsi untuk membatu admin (LAAK) dalam mempersiapkan
                                                pengaturan kebutuhan yang harus dilengkapi mahasiswa setelah melaksanakan sidang. Berikut tampilan sub-menu ini:</p>
                                            <img src="assets/img/ibik/TAPA/laak_17.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">SK Dekan
                                            <p> SK Dekan merupakan sub-menu aplikasi TA/PA yang berfungsi untuk membantu admin (LAAK) dalam mengelola nomor SK Dekan.
                                                Berikut tampilan sub-menu ini:</p>
                                            <img src="assets/img/ibik/TAPA/laak_18.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">
                                            <p> Ketika klik tombol Tambah SK, maka akan muncul pop-up untuk menambahkan nomor SK Dekan sbb:</p>
                                            <img src="assets/img/ibik/TAPA/laak_19.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">Format SK Dekan
                                            <p> Format Nomor SK merupakan sub-menu aplikasi TA/PA yang berfungsi untuk mengelola format nomor
                                                SK TA/PA. Berikut tampilan sub-menu ini::</p>
                                            <img src="assets/img/ibik/TAPA/laak_20.PNG"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
            </section>
<!--TA/PA-->
<!--Yudisium-->
<section id="#" class="">
                    <section id="Yudisium">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Aktor Menu Yudisium</h4>
                                <hr>
                                <p>Berikut ini adalah aktor proses dari menu Yudisium</p>
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="row"><code>Admin LAAK</code></th>
                                            <td> Admin LAAK bertugas menginputkan pengajuan sidang akademik</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <section id="yudisium_sidang">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Pengajuan sidang akademik</h4>
                                <hr>
                                <p> Modul ini digunakan untuk pengajuan sidang akademik oleh admin LAAK:
                                </p>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Tata cara Pengajuan Sidang Akademik:</li>
                                        <li class="list-group-item list-group-item-light">1. Scroldown menu TA/PA</li>
                                        <li class="list-group-item list-group-item-light">2. Scroldown menu Sidang Akademik</li>
                                        <li class="list-group-item list-group-item-light">3. Klik menu Pasca-sidang (Hasil Kelulusan)</li>
                                        <li class="list-group-item list-group-item-light">4. Klik tombol UNGGAH MAHASISWA untuk menginput data mahasiswa yang sidang
                                        yudisium dengan menggunakan template yang tersedia. Klik tombol download template
                                            <img src="assets/img/ibik/Yudisium/yud_1.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">5. Isi Data pada excel
                                            <img src="assets/img/ibik/Yudisium/yud_2.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">6. Kemudian klik browse dan cari dokumen yang telah diisi, dan klik ‘Upload’
                                            <img src="assets/img/ibik/Yudisium/yud_3.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
<!--/Yudisium-->
<!--Transkrip-->
<section id="#" class="">
                    <section id="Transkrip">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Aktor Menu Transkrip Nilai</h4>
                                <hr>
                                <p>Berikut ini adalah aktor proses dari menu transkrip nilai</p>
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="row"><code>Admin LAAK</code></th>
                                            <td> Admin LAAK bertugas cetak SKL dan Transkrip Nilai.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <section id="trans_cetak">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Cetak Transkrip</h4>
                                <hr>
                                <p> Modul ini digunakan untuk melakukan cetak transkrip oleh admin LAAK:
                                </p>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Tata cara buat acara cetak Transkrip:</li>
                                        <li class="list-group-item list-group-item-light">1. Scroldown menu TA/PA</li>
                                        <li class="list-group-item list-group-item-light">2. Scroldown menu Transkrip Nilai</li>
                                        <li class="list-group-item list-group-item-light">3. Klik menu Transkrip Angkatan</li>
                                        <li class="list-group-item list-group-item-light">4. Pilih Mahasiswa kemudian klik transkrip button pada column aksi 
                                            <img src="assets/img/ibik/Transkrip/trans_1.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">5. Pilih tingkat kemudian pilih type pencetakan
                                            <img src="assets/img/ibik/Transkrip/trans_2.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">6. Klik cetak button</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="trans_skl">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Cetak SKL</h4>
                                <hr>
                                <p> Modul ini digunakan untuk melakukan cetak SKL oleh admin LAAK:
                                </p>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-secondary">Tata cara buat acara cetak SKL:</li>
                                        <li class="list-group-item list-group-item-light">1. Scroldown menu TA/PA</li>
                                        <li class="list-group-item list-group-item-light">2. Scroldown menu Transkrip Nilai</li>
                                        <li class="list-group-item list-group-item-light">3. Klik menu Surat keterangan Lulus</li>
                                        <li class="list-group-item list-group-item-light">4. Pilih Program Studi, Angkatan, dan Periode Yudisium, dan kemudian isikan column mahasiswa dengan nama atau nim mahasiswa
                                            <img src="assets/img/ibik/Transkrip/trans_3.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">5. Klik Cetak button</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
<!--/Transkrip-->
<!--Wisuda-->
<section id="#" class="">
                    <section id="wisuda">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Aktor Menu Wisuda</h4>
                                <hr>
                                <p>Berikut ini adalah aktor proses dari menu Wisuda</p>
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="row"><code>Admin LAAK</code></th>
                                            <td> Admin LAAK bertugas melakukan approval mahasiswa siap wisuda, dan approval pendaftaran wisuda mahasiswa.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><code>Admin BAA</code></th>
                                            <td> Admin BAA bertugas melakukan create periode wisuda, dan cetak buku wisuda.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><code>CDC</code></th>
                                            <td> CDC bertugas untuk melakukan pengaturan tracer study.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <section id="wisuda_periode">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Create Periode Wisuda</h4>
                                <hr>
                                <p> Modul ini digunakan untuk melakukan create periode wisuda oleh BAA:
                                </p>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-light">Akses Wisuda >> Periode Wisuda >> klik button tambah baru >> isi data
                                            <img src="assets/img/ibik/Wisuda/wisuda_1.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="wisuda_approval">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Approval Mahasiswa siap Wisuda</h4>
                                <hr>
                                <p> Modul ini digunakan untuk melakukan approval mahasiswa siap wisuda oleh LAAK:
                                </p>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-light">Akses Wisuda >> Approval diizinkan Wisuda >> filter berdasarkan sidang akademik >> pilih mahasiswa >> pilih aksi acc dan klik tombol GO
                                            <img src="assets/img/ibik/Wisuda/wisuda_2.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">Tampilan setelah mahasiswa berhasil di ACC
                                            <img src="assets/img/ibik/Wisuda/wisuda_3.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="wisuda_tracer">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Pengaturan Tracer Study</h4>
                                <hr>
                                <p> Modul ini digunakan untuk melakukan menambah responden mahasiswa wisuda oleh CDC:
                                </p>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-light">Akses Wisuda >> klik tambah responden >> pilih mahasiswa
                                            <img src="assets/img/ibik/Wisuda/wisuda_4.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="wisuda_approvalPendaftaran">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Approval pendaftaran wisuda mahasiswa</h4>
                                <hr>
                                <p> Modul ini digunakan untuk melakukan menambah responden mahasiswa wisuda oleh Admin LAAK:
                                </p>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-light">Akses Wisuda >> Akses peserta >> Klik tombol APPROVE yang ada di pojok kanan untuk menyetujui pendaftaran wisuda mahasiswa tersebut
                                            <img src="assets/img/ibik/Wisuda/wisuda_5.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">Berikut adalah tampilan setelah di approve
                                            <img src="assets/img/ibik/Wisuda/wisuda_6.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="wisuda_cetakBuku">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Cetak buku lulusan</h4>
                                <hr>
                                <p> Modul ini digunakan untuk melakukan cetak buku lulusan oleh BAA:
                                </p>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-light">Akses Wisuda >> Akses Buku lulusan >> Filter tanggal yudisium, program studi, judul tugas akhir >> Klik view
                                            <img src="assets/img/ibik/Wisuda/wisuda_7.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">
                                            <img src="assets/img/ibik/Wisuda/wisuda_8.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
<!--/Wisuda-->
<!--Ijazah-->
<section id="#" class="">
                    <section id="ijazah">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Aktor Ijazah</h4>
                                <hr>
                                <p>Berikut ini adalah aktor proses dari menu Ijazah</p>
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="row"><code>Admin BAA</code></th>
                                            <td> Admin BAA bertugas melakukan approval mahasiswa siap wisuda, dan approval pendaftaran wisuda mahasiswa.</td>
                                        </tr>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <section id="ijazah_cetak">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Cetak Ijazah</h4>
                                <hr>
                                <p> Modul ini digunakan untuk melakukan cetak ijazah oleh BAA:
                                </p>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-light">Akses TA/PA >> Ijazah >> Ijazah mahasiswa</li>
                                        <li class="list-group-item list-group-item-light">Kemudian filter data >> Hasilkan PDF ijazah
                                            <img src="assets/img/ibik/Ijazah/ijazah_1.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                        <li class="list-group-item list-group-item-light">Setelah ter-generated, lakukan cetak semua ijazah sesuai filter
                                            <img src="assets/img/ibik/Ijazah/ijazah_2.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                            <p>Selain unduh semua ijazah, BAA juga bisa melakukan cetak ijazah satu persatu</p>
                                            <img src="assets/img/ibik/Ijazah/ijazah_3.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="ijazah_edit">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Edit Profil Mahasiswa</h4>
                                <hr>
                                <p> Modul ini digunakan untuk melakukan edit profil mahasiswa oleh BAA:
                                </p>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-light">Akses TA/PA >> Ijazah >> Ijazah mahasiswa</li>
                                        <li class="list-group-item list-group-item-light">Kemudian filter data >> Pilih mahasiswa >> Klik lihat profil mahasiswa
                                            <img src="assets/img/ibik/Ijazah/ijazah_4.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="ijazah_perforasi">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Perforasi</h4>
                                <hr>
                                <p> Modul ini digunakan untuk melakukan edit perforasi oleh BAA:
                                </p>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-light">Akses TA/PA >> Ijazah >> Perforasi ijazah</li>
                                        <li class="list-group-item list-group-item-light">Kemudian filter data >> Klik unduh template >> Klik unggah template
                                            <img src="assets/img/ibik/Ijazah/ijazah_5.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                            <p>Selain itu, BAA juga bisa edit perforasi satu - persatu</p>
                                            <img src="assets/img/ibik/Ijazah/ijazah_6.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="ijazah_laporan">
                        <div class="row">
                            <div class="col-md-12">
                                <h4><i class="icon icon-folder5"></i>Laporan</h4>
                                <hr>
                                <p> Modul ini digunakan untuk melihat laporan ijazah oleh BAA:
                                </p>
                                <div class="list-group" style="margin-bottom: 15px;">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-light">Akses TA/PA >> Ijazah >> Laporan</li>
                                        <li class="list-group-item list-group-item-light">Kemudian filter data
                                            <img src="assets/img/ibik/Ijazah/ijazah_7.png"
                                                class="img-fluid" alt="Responsive image" style="margin-bottom: 10px;margin-top: 10px;">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
            </section>
<!--/Ijazah-->
</article>
<?php
include('fragment/footer.php');
?>