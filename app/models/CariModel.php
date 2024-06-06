<?php
class CariModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getKecamatan() {
        $sql = "SELECT * FROM kecamatan";
        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function getPantiByKecamatan($kecamatan) {
        $sql = "SELECT * FROM profil_panti WHERE id_kecamatan = :kecamatan";
        var_dump($this->db->query($sql));
        $this->db->query($sql);
        $this->db->bind(':kecamatan', $kecamatan);
        $result = $this->db->resultSet();
        // var_dump($result);
        return $result;
    }
}
?>
