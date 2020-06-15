<?php

class Rw5_model extends CI_model
{

    public function all_pasien()
    {
        $hsl = $this->db->query("SELECT * FROM rw5");
        return $hsl;
    }

    public function all_periksa()
    {
        $hsl = $this->db->query("SELECT * FROM pemeriksaan_rw5");
        return $hsl;
    }

    public function all_periksa_byId($id)
    {
        $hsl = $this->db->query("SELECT * FROM rw5 WHERE id = '$id'");
        return $hsl;
    }

    public function rw5_byId($id)
    {
        $hsl = $this->db->query("SELECT * FROM rw5 WHERE id = '$id'");
        return $hsl;
    }

    public function periksa_byId($id)
    {
        $hsl = $this->db->query("SELECT * FROM pemeriksaan_rw5 WHERE id = '$id'");
        return $hsl;
    }

    public function pasien_byNama($nama_warga)
    {
        $hsl = $this->db->query("SELECT * FROM pemeriksaan_rw5 WHERE nama_warga = '$nama_warga' ORDER BY tanggal_periksa ASC");
        return $hsl;
    }

    public function simpan()
    {
        $data = [
            'id'     => htmlspecialchars($this->input->post('id', true)),
            'nama_warga'    => htmlspecialchars($this->input->post('nama_warga', true)),
            'tanggal_periksa' => htmlspecialchars($this->input->post('tanggal_periksa', true))
        ];
        $this->db->insert('rw5', $data);
    }

    public function ubah()
    {
        $data = [
            'id'     => htmlspecialchars($this->input->post('id', true)),
            'nama_warga'    => htmlspecialchars($this->input->post('nama_warga', true)),
            'tanggal_periksa' => htmlspecialchars($this->input->post('tanggal_periksa', true))
        ];

        $data1 = [
            'nama_warga'    => htmlspecialchars($this->input->post('nama_warga', true))
        ];



        $this->db->where('id', $this->input->post('id'));
        $this->db->update('rw5', $data);
        $this->db->where('nama_warga', $this->input->post('nama_warga1'));
        $this->db->update('pemeriksaan_rw5', $data1);
    }

    public function hapus()
    {
        // $this->db->where('id', $this->input->post('id'));
        // $this->db->delete('obatkeluar');

        $this->db->where('id', $this->input->post('id'));
        $this->db->delete('rw5');
    }



    public function simpan_periksa()
    {
        if ($this->input->post('sistol') <= 129) {
            $kategori = 'Normal';
        } elseif ($this->input->post('sistol') >= 130 && $this->input->post('sistol') <= 139) {
            $kategori = 'PraHipertensi';
        } elseif ($this->input->post('sistol') >= 140 && $this->input->post('sistol') <= 159) {
            $kategori = 'Ringan';
        } elseif ($this->input->post('sistol') >= 160 && $this->input->post('sistol') <= 179) {
            $kategori = 'Sedang';
        } elseif ($this->input->post('sistol') >= 180) {
            $kategori = 'Tinggi';
        }

        // cek gula_darah
        if ($this->input->post('gula_darah') <= 80) {
            $kategori = 'Rendah';
        } elseif ($this->input->post('gula_darah') >= 80 && $this->input->post('gula_darah') <= 119) {
            $kategori_dm = 'Normal';
        } elseif ($this->input->post('gula_darah') >= 120 && $this->input->post('gula_darah') <= 125) {
            $kategori_dm = 'Sedang';
        } elseif ($this->input->post('gula_darah') >= 126) {
            $kategori_dm = 'Tinggi';
        }

        $data = [
            'id'     => htmlspecialchars($this->input->post('id', true)),
            'nama_warga'    => htmlspecialchars($this->input->post('nama_warga', true)),
            'sistol'        => htmlspecialchars($this->input->post('sistol', true)),
            'diastol'        => htmlspecialchars($this->input->post('diastol', true)),
            'gula_darah'        => htmlspecialchars($this->input->post('gula_darah', true)),
            'kategori_dm'        => htmlspecialchars($kategori_dm),
            'kategori'        => htmlspecialchars($kategori),
            'tanggal_periksa' => htmlspecialchars($this->input->post('tanggal_periksa', true)),
        ];
        $this->db->insert('pemeriksaan_rw5', $data);
    }

    public function ubah_periksa()
    {
        // cek hipertensi
        if ($this->input->post('sistol') <= 129) {
            $kategori = 'Normal';
        } elseif ($this->input->post('sistol') >= 130 && $this->input->post('sistol') <= 139) {
            $kategori = 'PraHipertensi';
        } elseif ($this->input->post('sistol') >= 140 && $this->input->post('sistol') <= 159) {
            $kategori = 'Ringan';
        } elseif ($this->input->post('sistol') >= 160 && $this->input->post('sistol') <= 179) {
            $kategori = 'Sedang';
        } elseif ($this->input->post('sistol') >= 180) {
            $kategori = 'Tinggi';
        }

        // cek gula_darah
        if ($this->input->post('gula_darah') <= 80) {
            $kategori_dm = 'Rendah';
        } elseif ($this->input->post('gula_darah') >= 80 && $this->input->post('gula_darah') <= 119) {
            $kategori_dm = 'Normal';
        } elseif ($this->input->post('gula_darah') >= 120 && $this->input->post('gula_darah') <= 125) {
            $kategori_dm = 'Sedang';
        } elseif ($this->input->post('gula_darah') >= 126) {
            $kategori_dm = 'Tinggi';
        }

        $data = [
            'id'     => htmlspecialchars($this->input->post('id', true)),
            'nama_warga'    => htmlspecialchars($this->input->post('nama_warga', true)),
            'sistol'        => htmlspecialchars($this->input->post('sistol', true)),
            'diastol'        => htmlspecialchars($this->input->post('diastol', true)),
            'gula_darah'        => htmlspecialchars($this->input->post('gula_darah', true)),
            'kategori_dm'        => htmlspecialchars($kategori_dm),
            'kategori'        => htmlspecialchars($kategori),
            'tanggal_periksa' => htmlspecialchars($this->input->post('tanggal_periksa', true)),
        ];
        // $data1 = [
        //     'nama_warga'    => htmlspecialchars($this->input->post('nama_warga', true))
        // ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pemeriksaan_rw5', $data);
        // $this->db->where('nama_warga', $this->input->post('nama_warga1'));
        // $this->db->update('rw5', $data1);
    }

    public function hapus_periksa()
    {
        // $this->db->where('id', $this->input->post('id'));
        // $this->db->delete('obatkeluar');

        $this->db->where('id', $this->input->post('id'));
        $this->db->delete('pemeriksaan_rw5');
    }
}
