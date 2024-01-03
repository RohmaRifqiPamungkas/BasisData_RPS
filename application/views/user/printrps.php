<div class="container">
    <div class="row content">
        <div class="container">
            <table class="table text-center border-dark">
                <tr>
                    <td colspan="4" style="border-bottom: 1px #000000 solid;">
                        <h1>RENCANA PEMBELAJARAN SEMESTER (RPS)</h1>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="padding: 1px;">
                        <h6 style="margin:0; padding: 0;">FM-PJM-011/Rev.00/25 Jan 2018</h6>
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><img src="<?= base_url('assets/img/icon/logoamikom.png'); ?>" width="300"></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <h3 style="margin:0; padding: 0;">MATA KULIAH : <?= $datarps['mata_kuliah']; ?> (<?= $datarps['kode_matkul']; ?>)</h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <h3 style="margin:0; padding: 0;">Program Studi: <?= $datarps['program_studi']; ?></h3>
                    </td>
                </tr>
                <tr>
                    <td>No</td>
                    <td>Tgl Berlaku</td>
                    <td>Tgl Disusun</td>
                    <td>Revisi</td>
                </tr>
                <tr>
                    <td>RPS-DT-00</td>
                    <td>2 Juni 2023</td>
                    <td><?= date('j F Y', strtotime($datarps['created'])); ?></td>
                    <td>00</td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td>Disetujui oleh
                        <p>Dekan Ilmu Komputer</p>
                    </td>
                    <td>Diperiksa oleh
                        <p>Kaprodi D3TI</p>
                    </td>
                    <td>Disusun oleh
                        <p><?= $datarps['dosen_pengampu']; ?></p>
                    </td>
                    <td>Dikendalikan oleh
                        <p>Sekprodi D3TI</p>
                    </td>
                </tr>
                <tr>
                    <td><img src="<?= base_url('assets/img/ttd/') ?>" alt="" width="100px" height="100px"></td>
                    <td><img src="/assets/img/ttd.jpg" alt="" width="100px" height="100px"></td>
                    <td><img src="<?= base_url('assets/img/ttd/') . $datarps['tanda_tangan']; ?>" alt="" width="100px" height="100px"></td>
                    <td><img src="/assets/img/ttd.jpg" alt="" width="100px" height="100px"></td>
                </tr>
                <tr>
                    <td>Barka Satya, M.Kom</td>
                    <td>Barka Satya, M.Kom</td>
                    <td><?= $datarps['dosen_pengampu']; ?></td>
                    <td>Barka Satya, M.Kom</td>
                </tr>
                <tr>
                    <td>NIK. 190302096</td>
                    <td>NIK. 190302126</td>
                    <td>NIK. <?= $datarps['nik_dos']; ?></td>
                    <td>NIK. 190302151</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <h2 style="margin:0; padding: 0;">UNIVERSITAS AMIKOM YOGYAKARTA</h1>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <h2 style="margin:0; padding: 0;">YOGYAKARTA</h1>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <h2 style="margin:0; padding: 0;">2023</h1>
                    </td>
                </tr>

            </table>
        </div>

        <br>
        <div class="container">
            <table class="table text-center kop table-bordered">
                <tr>
                    <td rowspan="2">
                        <img src="<?= base_url('assets/img/icon/logoamikom.png'); ?>" width="200" class="my-5">
                    </td>
                    <td rowspan="2">
                        <h5 class="mt-4" style="font-weight: bold;">RENCANA PEMBELAJARAN SEMESTER (RPS)</h5>
                        <h5 style="font-weight: bold;">PROGRAM STUDI : <?= strtoupper($datarps['program_studi']); ?></h5>
                        <h4 style="font-weight: bold;">MATA KULIAH <?= strtoupper($datarps['mata_kuliah']); ?></h4>
                    </td>

                    <td>
                        <p style="font-style: italic;">No</p>
                        <p style="font-style: italic;">Tgl Disusun</p>
                        <p style="font-style: italic;">Revisi</p>
                    </td>
                    <td>
                        <p style="font-style: italic;">: RPS-DT-DT081</p>
                        <p style="font-style: italic;">: <?= date('j F Y', strtotime($datarps['created'])); ?></p>
                        <p style="font-style: italic;">: 00</p>
                    </td>

                </tr>
                <tr>
                    <td>
                        <p style="font-style: italic;">Halaman</p>
                    </td>
                    <td>
                        <p style="font-style: italic;">: Hal. 2 dari 7</p>
                    </td>
                </tr>
            </table>
        </div>

        <div class="container">
            <div class="box" style="background-color: #808080">
                <p class="py-2 mx-4"><b>1. Identitas</b></p>
            </div>
        </div>

        <div class="container-fluid">
            <table class="table text-center kop table-bordered">
                <tr>
                    <td>Program Studi</td>
                    <td colspan="2"><?= $datarps['program_studi']; ?></td>
                    <td>Semester</td>
                    <td colspan="2"><?= $datarps['jumlah_semester']; ?> <?= $datarps['semester']; ?></td>
                </tr>

                <tr>
                    <td>Nama & Kode Mata Kuliah</td>
                    <td colspan="2"><?= $datarps['mata_kuliah']; ?> | <?= $datarps['kode_matkul']; ?></td>
                    <td>Bobot SKS</td>
                    <td colspan="2"><?= $datarps['bobot_sks']; ?></td>
                </tr>

                <tr>
                    <td>Presentase nilai</td>
                    <td colspan="2"><?= $datarps['presentase_nilai']; ?></td>
                    <td>Dosen Pengampu</td>
                    <td colspan="2"><?= $datarps['dosen_pengampu']; ?></td>
                </tr>

                <tr>
                    <td colspan="7" class="text-center">Klasifikasi Nilai:</td>
                </tr>

                <tr>
                    <td colspan="2"> >80% = A</td>
                    <td>60 & < 80=B</td>
                    <td>40 & < 60=C</td>
                    <td>20 & < 40=D</td>
                    <td colspan="2">
                        < 20=E</td>
                </tr>
            </table>
        </div>

        <div class="container">
            <div class="box" style="background-color: #808080">
                <p class="py-2 mx-4"><b>2. Gambaran Umum</b></p>
            </div>
            <div class="gambaran-umum mx-4">
                <p><?= $datarps['gambaran_umum']; ?></p>
                <p><?= $datarps['gambaran_umum']; ?></p>
            </div>
        </div>

        <div class="container">
            <div class="box" style="background-color: #808080">
                <p class="py-2 mx-4"><b>3. Persyaratan dan Pengetahuan Awal</b></p>
            </div>
            <div class="gambaran-umum mx-4">
                <p><?= $datarps['capaian_pembelajaran']; ?></p>
                <p><?= $datarps['capaian_pembelajaran']; ?></p>
            </div>
        </div>
        <div class="container">
            <div class="box" style="background-color: #808080">
                <p class="py-2 mx-4"><b>4. Pembelajaran dan Pengetahuan Awal(Prior Knowledge)</b></p>
            </div>
            <div class="gambaran-umum mx-4">
                <p><?= $datarps['prasyarat']; ?></p>
                <p><?= $datarps['prasyarat']; ?></p>
            </div>
        </div>

        <div class="container">
            <table class="table text-center kop table-bordered">
                <tr>
                    <td rowspan="2">
                        <img src="<?= base_url('assets/img/icon/logoamikom.png'); ?>" width="200" class="my-5">
                    </td>
                    <td rowspan="2">
                        <h5 class="mt-4" style="font-weight: bold;">RENCANA PEMBELAJARAN SEMESTER (RPS)</h5>
                        <h5 style="font-weight: bold;">PROGRAM STUDI : <?= strtoupper($datarps['program_studi']); ?></h5>
                        <h4 style="font-weight: bold;">MATA KULIAH <?= strtoupper($datarps['mata_kuliah']); ?></h4>
                    </td>

                    <td>
                        <p style="font-style: italic;">No</p>
                        <p style="font-style: italic;">Tgl Disusun</p>
                        <p style="font-style: italic;">Revisi</p>
                    </td>
                    <td>
                        <p style="font-style: italic;">: RPS-DT-DT081</p>
                        <p style="font-style: italic;">: <?= date('j F Y', strtotime($datarps['created'])); ?></p>
                        <p style="font-style: italic;">: 00</p>
                    </td>

                </tr>
                <tr>
                    <td>
                        <p style="font-style: italic;">Halaman</p>
                    </td>
                    <td>
                        <p style="font-style: italic;">: Hal. 2 dari 7</p>
                    </td>
                </tr>
            </table>
        </div>

        <div class="container mt-1">
            <div class="box" style="background-color: #808080">
                <p class="py-2 mx-4 "><b>5. Unit-Unit Pembelajaran secara Spesifik</b></p>
            </div>
            <div class="tabel1">
                <div class="table-responsive">
                    <table class="table table-bordered mb-4" id="table">
                        <thead>
                            <tr class="text-center" style="background-color: rgb(218, 115, 225);">
                                <th scope="col">Kemampuan Akhir yang diharapkan</th>
                                <th scope="col">Indikator</th>
                                <th scope="col">Bahan Kajian</th>
                                <th scope="col">Metode Pembelajaran</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Metode Penilaian</th>
                                <th scope="col">Bahan Ajar</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><?= $datarps['kemampuan_akhir']; ?></td>
                                <td><?= $datarps['indikator']; ?></td>
                                <td><?= $datarps['bahan_kajian']; ?></td>
                                <td><?= $datarps['metode_pembelajaran']; ?></td>
                                <td><?= $datarps['waktu_unit']; ?></td>
                                <td><?= $datarps['metode_penilaian']; ?></td>
                                <td><?= $datarps['bahan_ajar']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="container mt-1">
            <div class="box" style="background-color: #808080">
                <p class="py-2 mx-4 "><b>6. Tugas/Aktivitas dan Penilaian</b></p>
            </div>
            <div class="tabel2">
                <div class="table-responsive">
                    <table class="table table-bordered mb-4" id="table">
                        <thead>
                            <tr class="text-center" style="background-color: rgb(218, 115, 225);">
                                <th scope="col">Tugas/ <br> Aktivitas</th>
                                <th scope="col">Kemampuan akhir yang diharapkan</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Bobot</th>
                                <th scope="col">Kriterian Penilaian</th>
                                <th scope="col">Indikator Penilaian</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><?= $datarps['tugas_aktivitas']; ?></td>
                                <td><?= $datarps['kemampuan_akhir_tap']; ?></td>
                                <td><?= $datarps['waktu_tap']; ?></td>
                                <td><?= $datarps['bobot_tap']; ?></td>
                                <td><?= $datarps['kriteria_penilaian']; ?></td>
                                <td><?= $datarps['indikator_penilaian']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="box" style="background-color: #808080">
                <p class="py-2 mx-4"><b>7. Referensi</b></p>
            </div>
            <div class="gambaran-umum mx-4">
                <p><?= $datarps['referensi']; ?></p>
                <p><?= $datarps['referensi']; ?></p>
            </div>
        </div>

        <div class="container  mt-3 mb-3">
            <div class="box" style="background-color: #808080">
                <p class="py-2 mx-4 "><b>8. Rencana Pelaksanaan Pembelajaran</b></p>
            </div>

            <div class="tabel3">
                <div class="table-responsive">
                    <table class="table table-bordered mb-4" id="table">
                        <thead>
                            <tr class="text-center" style="background-color: rgb(218, 115, 225);">
                                <th scope="col">Minggu/Pertemuan</th>
                                <th scope="col">Kemampuan Akhir </th>
                                <th scope="col">Indikator</th>
                                <th scope="col">Topik & Sub Topik</th>
                                <th scope="col">Strategi Pembelajaran</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Penilaian</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><?= $datarps['minggu_pertemuan']; ?></td>
                                <td><?= $datarps['kemampuan_akhir_rpp']; ?></td>
                                <td><?= $datarps['indikator_rpp']; ?></td>
                                <td><?= $datarps['topik_subtopik']; ?></td>
                                <td><?= $datarps['strategi_pembelajaran']; ?></td>
                                <td><?= $datarps['waktu_rpp']; ?></td>
                                <td><?= $datarps['penilaian_rpp']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>