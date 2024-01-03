<?php

class Datarps_model extends CI_Model
{
    public function getAllDatarps()
    {
        return $this->db->get('user_datarps')->result_array();
    }

    public function createdDataRps()
    {
        $data = [
            "mata_kuliah"           => $this->input->post('mata_kuliah', true),
            "program_studi"         => $this->input->post('program_studi', true),
            "deskripsi"             => $this->input->post('deskripsi', true),
            "kode_matkul"           => $this->input->post('kode_matkul', true),
            "semester"              => $this->input->post('semester', true),
            "nik_dos"               => $this->input->post('nik_dos', true),
            "dosen_pengampu"        => $this->input->post('dosen_pengampu', true),
            'presentase_nilai'      => $this->input->post('presentase_nilai', true),
            'bobot_sks'             => $this->input->post('bobot_sks', true),
            'gambaran_umum'         => $this->input->post('gambaran_umum', true),
            'capaian_pembelajaran'  => $this->input->post('capaian_pembelajaran', true),
            'prasyarat'             => $this->input->post('prasyarat', true),
            'pembelajaran'          => $this->input->post('pembelajaran', true),
            'kemampuan_akhir'       => $this->input->post('kemampuan_akhir', true),
            'indikator'             => $this->input->post('indikator', true),
            'bahan_kajian'          => $this->input->post('bahan_kajian', true),
            'metode_pembelajaran'   => $this->input->post('metode_pembelajaran', true),
            'waktu_unit'            => $this->input->post('waktu_unit', true),
            'metode_penilaian'      => $this->input->post('metode_penilaian', true),
            'bahan_ajar'            => $this->input->post('bahan_ajar', true),
            'tugas_aktivitas'       => $this->input->post('tugas_aktivitas', true),
            'kemampuan_akhir_TAP'   => $this->input->post('kemampuan_akhir_TAP', true),
            'waktu_tap'             => $this->input->post('waktu_tap', true),
            'bobot_tap'             => $this->input->post('bobot_tap', true),
            'kriteria_penilaian'    => $this->input->post('kriteria_penilaian', true),
            'indikator_penilaian'   => $this->input->post('indikator_penilaian', true),
            'referensi'             => $this->input->post('referensi', true),
            'minggu_pertemuan'      => $this->input->post('minggu_pertemuan', true),
            'kemampuan_akhir_rpp'   => $this->input->post('kemampuan_akhir_rpp', true),
            'indikator_rpp'         => $this->input->post('indikator_rpp', true),
            'topik_subtopik'        => $this->input->post('topik_subtopik', true),
            'strategi_pembelajaran' => $this->input->post('strategi_pembelajaran', true),
            'waktu_rpp'             => $this->input->post('waktu_rpp', true),
            'penilaian_rpp'         => $this->input->post('penilaian_rpp', true),
        ];

        $this->db->insert('user_datarps', $data);
    }

    public function hapusDataRps($id)
    {
        // $this->db->where('id_data', $id);
        $this->db->delete('user_datarps', ['id_data' => $id]);
    }

    public function getDatarpsById($id)
    {
        return $this->db->get_where('user_datarps', ['id_data' => $id])->row_array();
    }

    public function editDataRps()
    {
        $data = [
            "mata_kuliah"    => $this->input->post('mata_kuliah', true),
            "program_studi"  => $this->input->post('program_studi', true),
            "deskripsi"      => $this->input->post('deskripsi', true),
            "kode_matkul"    => $this->input->post('kode_matkul', true),
            "semester"       => $this->input->post('semester', true),
            "nik_dos"        => $this->input->post('nik_dos', true),
            "dosen_pengampu" => $this->input->post('dosen_pengampu', true),
        ];

        $this->db->where('id_data', $this->input->post('id_data', true));
        $this->db->update('user_datarps', $data);
    }

    public function searchDataRps()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('semester', $keyword);
        $this->db->or_like('program_studi', $keyword);

        return $this->db->get('user_datarps')->result_array();
    }

    public function presensiRps()
    {
        $this->db->insert('user_datarps', $data);
    }
}
