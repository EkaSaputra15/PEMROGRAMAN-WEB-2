<<<<<<< HEAD
<?php

require_once "buku.php";

class listbuku{

    public function getdata(){
        $list_buku = array(
            new buku('Belajar PHP Dasar', 'Eka Saputra', 'informatika', '2024'),
            new buku('Matematika Diskrit', 'Dendi', 'andi publisher', '2023'),
            new buku('Kalkulus 2', 'Aldi', 'erlangga', '2022'),
            new buku('Metode Penelitian', 'Danda', 'informatika sains', '2021'),
        );

        return $list_buku;
    }
=======
<?php

require_once "buku.php";

class listbuku{

    public function getdata(){
        $list_buku = array(
            new buku('Belajar PHP Dasar', 'Eka Saputra', 'informatika', '2024'),
            new buku('Matematika Diskrit', 'Dendi', 'andi publisher', '2023'),
            new buku('Kalkulus 2', 'Aldi', 'erlangga', '2022'),
            new buku('Metode Penelitian', 'Danda', 'informatika sains', '2021'),
        );

        return $list_buku;
    }
>>>>>>> 753e988390e1b395992f377d210eaa17c493d6e6
}