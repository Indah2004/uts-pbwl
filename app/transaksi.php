<?php

namespace App;
use Inc\Koneksi as Koneksi;

class transaksi extends koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_transaksi";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $transaksi_pelanggan_id = $_POST['transaksi_pelanggan_id'];
        $transaksi_tanggal = $_POST['transaksi_tanggal'];
        $transaksi_kapster = $_POST['transaksi_kapster'];
        $transaksi_id = $_POST['transaksi_id'];

        $sql = "INSERT INTO tb_transaksi (transaksi_pelanggan_id, transaksi_tanggal, transaksi_kapster)
        VALUES (:transaksi_pelanggan_id, :transaksi_tanggal, :transaksi_kapster)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":transaksi_pelanggan_id", $transaksi_pelanggan_id);
        $stmt->bindParam(":transaksi_tanggal", $transaksi_tanggal);
        $stmt->bindParam(":transaksi_kapster", $transaksi_kapster);
        $stmt->execute();
    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_transaksi WHERE transaksi_id=:transaksi_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":transaksi_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $transaksi_pelanggan_id = $_POST['transaksi_pelanggan_id'];
        $transaksi_tanggal = $_POST['transaksi_tanggal'];
        $transaksi_kapster = $_POST['transaksi_kapster'];
        $transaksi_id = $_POST['transaksi_id'];

        $sql = "UPDATE tb_transaksi SET transaksi_pelanggan_id=:transaksi_pelanggan_id, transaksi_tanggal=:transaksi_tanggal,
        transaksi_kapster=:transaksi_kapster WHERE transaksi_id=:transaksi_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":transaksi_pelanggan_id", $transaksi_pelanggan_id);
        $stmt->bindParam(":transaksi_tanggal", $transaksi_tanggal);
        $stmt->bindParam(":transaksi_kapster", $transaksi_kapster);
        $stmt->bindParam(":transaksi_id", $transaksi_id);
        $stmt->execute();
    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_transaksi WHERE transaksi_id=:transaksi_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":transaksi_id", $id);
        $stmt->execute();
    }
}