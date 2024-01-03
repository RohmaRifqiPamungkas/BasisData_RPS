<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('nik', 'NIK', 'trim'); // Tidak perlu wajib diisi
        $this->form_validation->set_rules('full_name_dos', 'Full Name Dosen', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('handphone', 'No Handphone', 'required|trim');
        $this->form_validation->set_rules('alamat_asal', 'Alamat Asal', 'required|trim');
        $this->form_validation->set_rules('kec_kab_prov_asal', 'Kecamatan/Kabupaten/Provinsi Asal', 'required|trim');
        $this->form_validation->set_rules('kode_pos_asal', 'Kode Pos Asal', 'required|trim');
        $this->form_validation->set_rules('alamat_ting', 'Alamat Tinggal', 'required|trim');
        $this->form_validation->set_rules('kec_kab_prov_ting', 'Kecamatan/Kabupaten/Provinsi Tinggal', 'required|trim');
        $this->form_validation->set_rules('kode_pos_ting', 'Kode Pos Tinggal', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                    return;
                }
            }

            // Menambahkan update untuk kolom 'nik' hanya jika tidak kosong
            $nik = $this->input->post('nik');
            if (!empty($nik)) {
                $this->db->set('nik', $nik);
            }

            // Menambahkan update untuk kolom 'full_name_dos'
            $full_name_dos = $this->input->post('full_name_dos');
            $this->db->set('full_name_dos', $full_name_dos);

            // Menambahkan update untuk kolom 'jenis_kelamin'
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $this->db->set('jenis_kelamin', $jenis_kelamin);

            // Menambahkan update untuk kolom 'agama'
            $agama = $this->input->post('agama');
            $this->db->set('agama', $agama);

            // Menambahkan update untuk kolom 'kewarganegaraan'
            $kewarganegaraan = $this->input->post('kewarganegaraan');
            $this->db->set('kewarganegaraan', $kewarganegaraan);

            // Menambahkan update untuk kolom 'tempat_lahir'
            $tempat_lahir = $this->input->post('tempat_lahir');
            $this->db->set('tempat_lahir', $tempat_lahir);

            // Menambahkan update untuk kolom 'tanggal_lahir'
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $this->db->set('tanggal_lahir', $tanggal_lahir);

            // Menambahkan update untuk kolom 'handphone'
            $handphone = $this->input->post('handphone');
            $this->db->set('handphone', $handphone);

            // Menambahkan update untuk kolom 'alamat_asal'
            $alamat_asal = $this->input->post('alamat_asal');
            $this->db->set('alamat_asal', $alamat_asal);

            // Menambahkan update untuk kolom 'kec_kab_prov_asal'
            $kec_kab_prov_asal = $this->input->post('kec_kab_prov_asal');
            $this->db->set('kec_kab_prov_asal', $kec_kab_prov_asal);

            // Menambahkan update untuk kolom 'kode_pos_asal'
            $kode_pos_asal = $this->input->post('kode_pos_asal');
            $this->db->set('kode_pos_asal', $kode_pos_asal);

            // Menambahkan update untuk kolom 'alamat_ting'
            $alamat_ting = $this->input->post('alamat_ting');
            $this->db->set('alamat_ting', $alamat_ting);

            // Menambahkan update untuk kolom 'kec_kab_prov_ting'
            $kec_kab_prov_ting = $this->input->post('kec_kab_prov_ting');
            $this->db->set('kec_kab_prov_ting', $kec_kab_prov_ting);

            // Menambahkan update untuk kolom 'kode_pos_ting'
            $kode_pos_ting = $this->input->post('kode_pos_ting');
            $this->db->set('kode_pos_ting', $kode_pos_ting);

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil Anda telah diperbarui!</div>');
            redirect('user');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }

    public function Datarps()
    {
        $this->load->model('Datarps_model');
        $data['title'] = 'Lecturer';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['datarps'] = $this->Datarps_model->getAllDatarps();

        // Kondisi Search Data
        if ($this->input->post('keyword')) {
            $data['datarps'] = $this->Datarps_model->searchDataRps();
        }

        $this->form_validation->set_rules('mata_kuliah', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('program_studi', 'Program Studi', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('kode_matkul', 'Semester', 'required');
        $this->form_validation->set_rules('semester', 'Kode Mata Kuliah', 'required');
        $this->form_validation->set_rules('nik_dos', 'NID Dosen', 'required');
        $this->form_validation->set_rules('dosen_pengampu', 'Dosen Pengampu', 'required');
        $this->form_validation->set_rules('presentase_nilai', 'Presentase Nilai', 'required');
        $this->form_validation->set_rules('bobot_sks', 'Bobot SKS', 'required');
        $this->form_validation->set_rules('gambaran_umum', 'Gambaran Umum', 'required');
        $this->form_validation->set_rules('capaian_pembelajaran', 'Capaian Pembelajaran', 'required');
        $this->form_validation->set_rules('prasyarat', 'Prasyarat', 'required');
        $this->form_validation->set_rules('pembelajaran', 'Pembelajaran', 'required');
        $this->form_validation->set_rules('kemampuan_akhir', 'Kemampuan Akhir', 'required');
        $this->form_validation->set_rules('indikator', 'Indikator', 'required');
        $this->form_validation->set_rules('bahan_kajian', 'Bahan Kajian', 'required');
        $this->form_validation->set_rules('metode_pembelajaran', 'Metode Pembelajaran', 'required');
        $this->form_validation->set_rules('waktu_unit', 'Waktu Unit', 'required');
        $this->form_validation->set_rules('metode_penilaian', 'Metode Penilaian', 'required');
        $this->form_validation->set_rules('bahan_ajar', 'Bahan Ajar', 'required');
        $this->form_validation->set_rules('tugas_aktivitas', 'Tugas Aktivitas', 'required');
        $this->form_validation->set_rules('kemampuan_akhir_tap', 'Kemampuan Akhir TAP', 'required');
        $this->form_validation->set_rules('waktu_tap', 'Waktu TAP', 'required');
        $this->form_validation->set_rules('bobot_tap', 'Bobot TAP', 'required');
        $this->form_validation->set_rules('kriteria_penilaian', 'Kriteria Penilaian', 'required');
        $this->form_validation->set_rules('indikator_penilaian', 'Indikator Penilaian', 'required');
        $this->form_validation->set_rules('referensi', 'Referensi', 'required');
        $this->form_validation->set_rules('minggu_pertemuan', 'Minggu Pertemuan', 'required');
        $this->form_validation->set_rules('kemampuan_akhir_rpp', 'Kemampuan Akhir RPP', 'required');
        $this->form_validation->set_rules('indikator_rpp', 'Indikator RPP', 'required');
        $this->form_validation->set_rules('topik_subtopik', 'Topik Subtopik', 'required');
        $this->form_validation->set_rules('strategi_pembelajaran', 'Strategi Pembelajaran', 'required');
        $this->form_validation->set_rules('waktu_rpp', 'Waktu RPP', 'required');
        $this->form_validation->set_rules('penilaian_rpp', 'Penilaian RPP', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/datarps', $data);
            $this->load->view('templates/footer');
        } else {
            // Cek jika ada gambar yang akan diupload
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/ttd/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('tanda_tangan')) {
                $new_image = $this->upload->data('file_name');

                // Validasi tambahan untuk memastikan bahwa yang diupload adalah gambar
                $image_info = getimagesize($_FILES['tanda_tangan']['tmp_name']);
                if ($image_info !== FALSE) {
                    // Simpan semua data yang diperlukan sesuai dengan nama field yang benar
                    $datarps_data = array(
                        'mata_kuliah'           => $this->input->post('mata_kuliah'),
                        'program_studi'         => $this->input->post('program_studi'),
                        'deskripsi'             => $this->input->post('deskripsi'),
                        'kode_matkul'           => $this->input->post('kode_matkul'),
                        'semester'              => $this->input->post('semester'),
                        'nik_dos'               => $this->input->post('nik_dos'),
                        'dosen_pengampu'        => $this->input->post('dosen_pengampu'),
                        'tanda_tangan'          => $new_image, // Nama field yang menyimpan nama file gambar
                        'created'               => date('Y-m-d H:i:s'),
                        'presentase_nilai'      => $this->input->post('presentase_nilai'),
                        'bobot_sks'             => $this->input->post('bobot_sks'),
                        'gambaran_umum'         => $this->input->post('gambaran_umum'),
                        'capaian_pembelajaran'  => $this->input->post('capaian_pembelajaran'),
                        'prasyarat'             => $this->input->post('prasyarat'),
                        'pembelajaran'          => $this->input->post('pembelajaran'),
                        'kemampuan_akhir'       => $this->input->post('kemampuan_akhir'),
                        'indikator'             => $this->input->post('indikator'),
                        'bahan_kajian'          => $this->input->post('bahan_kajian'),
                        'metode_pembelajaran'   => $this->input->post('metode_pembelajaran'),
                        'waktu_unit'            => $this->input->post('waktu_unit'),
                        'metode_penilaian'      => $this->input->post('metode_penilaian'),
                        'bahan_ajar'            => $this->input->post('bahan_ajar'),
                        'tugas_aktivitas'       => $this->input->post('tugas_aktivitas'),
                        'kemampuan_akhir_tap'   => $this->input->post('kemampuan_akhir_tap'),
                        'waktu_tap'             => $this->input->post('waktu_tap'),
                        'bobot_tap'             => $this->input->post('bobot_tap'),
                        'kriteria_penilaian'    => $this->input->post('kriteria_penilaian'),
                        'indikator_penilaian'   => $this->input->post('indikator_penilaian'),
                        'referensi'             => $this->input->post('referensi'),
                        'minggu_pertemuan'      => $this->input->post('minggu_pertemuan'),
                        'kemampuan_akhir_rpp'   => $this->input->post('kemampuan_akhir_rpp'),
                        'indikator_rpp'         => $this->input->post('indikator_rpp'),
                        'topik_subtopik'        => $this->input->post('topik_subtopik'),
                        'strategi_pembelajaran' => $this->input->post('strategi_pembelajaran'),
                        'waktu_rpp'             => $this->input->post('waktu_rpp'),
                        'penilaian_rpp'         => $this->input->post('penilaian_rpp'),
                    );

                    $this->db->insert('user_datarps', $datarps_data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data added!</div>');
                    redirect('user/datarps');
                } else {
                    // Hapus file yang sudah diupload karena bukan gambar
                    unlink(FCPATH . 'assets/img/ttd/' . $new_image);
                    echo "File bukan gambar!";
                }
            } else {
                echo $this->upload->display_errors();
            }
        }
    }


    public function editDataRps($id)
    {
        $this->load->model('Datarps_model');
        $data['title'] = 'Edit Data RPS';
        $data['datarps'] = $this->Datarps_model->getDatarpsById($id);

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('mata_kuliah', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('program_studi', 'Program Studi', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('kode_matkul', 'Semester', 'required');
        $this->form_validation->set_rules('semester', 'Kode Mata Kuliah', 'required');
        $this->form_validation->set_rules('nik_dos', 'NID Dosen', 'required');
        $this->form_validation->set_rules('dosen_pengampu', 'Dosen Pengampu', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/editdatarps', $data);
            $this->load->view('templates/footer');
        } else {
            // Simpan semua data yang diperlukan sesuai dengan nama field yang benar
            $datarps_data = array(
                'mata_kuliah'    => $this->input->post('mata_kuliah'),
                'program_studi'  => $this->input->post('program_studi'),
                'deskripsi'      => $this->input->post('deskripsi'),
                'kode_matkul'    => $this->input->post('kode_matkul'),
                'semester'       => $this->input->post('semester'),
                'nik_dos'        => $this->input->post('nik_dos'),
                'dosen_pengampu' => $this->input->post('dosen_pengampu')
                // Tambahkan field lain sesuai kebutuhan
            );

            $this->db->insert('user_datarps', $datarps_data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edited data success!</div>');
            redirect('user/datarps');
        }
    }

    public function hapus($id)
    {
        $this->load->model('Datarps_model');
        $this->Datarps_model->hapusDataRps($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted!</div>');
        redirect('user/datarps');
    }

    public function searchDataRps()
    {
        $this->load->model('Datarps_model');

        $keyword = $this->input->post('keyword', true);

        // Panggil fungsi pencarian dari model
        $data['datarps'] = $this->Datarps_model->searchDataRps($keyword);
    }

    public function detail($id)
    {
        $this->load->model('Datarps_model');
        $data['title'] = 'Views Data RPS';
        $data['datarps'] = $this->Datarps_model->getDatarpsById($id);

        // Mendapatkan data user, contoh:
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header_rps', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('templates/footer_rps');
    }

    public function printRps($id)
    {
        // title dari pdf
        $data['title'] = 'Print Data RPS';
        $this->load->model('Datarps_model');
        $data['datarps'] = $this->Datarps_model->getDatarpsById($id);

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/print_header', $data);
        $this->load->view('user/printrps', $data);
        $this->load->view('templates/print_footer');
    }

    public function addMateri()
    {
        $data['title'] = 'Materi';
        $this->load->model('Materi_model');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['materi'] = $this->Materi_model->getAllMateri();

        $this->form_validation->set_rules('materi', 'Materi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/materi', $data);
            $this->load->view('templates/footer');
        } else {
            // Upload file
            $config['upload_path']   = './assets/file/';
            $config['allowed_types'] = 'pdf|doc|docx|ppt|pptx';
            $config['max_size']      = 5120;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_path_materi')) {
                $file_data = $this->upload->data();
                $file_path = $file_data['file_name']; // Hanya menyimpan nama file

                $data_materi = [
                    'materi'           => $this->input->post('materi', true),
                    'file_path_materi' => $file_path,
                    'created_materi'   => date('Y-m-d H:i:s'),
                ];

                $this->db->insert('user_materi', $data_materi);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Materi added!</div>');
                redirect('user/addmateri');
            } else {
                // Display upload error message
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $error . '</div>');
                redirect('user/addmateri');
            }
        }
    }

    public function presensiRps()
    {
        $this->load->model('Presensi_model');
        $data['presensi'] = $this->Presensi_model->getAllPresensi();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nim', 'Nim Mahasiswa', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Presensi';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/presensirps', $data);
            $this->load->view('templates/footer');
        } else {
            $nim = $this->input->post('nim', true);

            // Update status to 'Hadir'
            $this->Presensi_model->updateStatusToHadir($nim);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Presensi berhasil!</div>');
            redirect('user/presensirps');
        }
    }
}
