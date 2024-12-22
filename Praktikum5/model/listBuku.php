<<<<<<< HEAD
<?php 

require_once 'buku.php';
require_once "Database/database.php";

class listBuku {
  public function getData() {
    $db = new Database();
    $koneksi= $db->getKoneksi();
    $sql="SELECT * FROM Buku";
    $query=$koneksi->query($sql);
    
    $List_Buku=[];

    if($query->num_rows>0){
      while($row=$query->fetch_assoc()) {
        $buku=new Buku($row['judul'], $row['pengarang'], $row['penerbit'], $row['tahun']);
        $buku->setId($row['id']);
        array_push($List_Buku, $buku);
      }
    }
    return $List_Buku;
  }
=======
<?php 

require_once 'buku.php';
require_once "Database/database.php";

class listBuku {
  public function getData() {
    $db = new Database();
    $koneksi= $db->getKoneksi();
    $sql="SELECT * FROM Buku";
    $query=$koneksi->query($sql);
    
    $List_Buku=[];

    if($query->num_rows>0){
      while($row=$query->fetch_assoc()) {
        $buku=new Buku($row['judul'], $row['pengarang'], $row['penerbit'], $row['tahun']);
        $buku->setId($row['id']);
        array_push($List_Buku, $buku);
      }
    }
    return $List_Buku;
  }
>>>>>>> 753e988390e1b395992f377d210eaa17c493d6e6
}