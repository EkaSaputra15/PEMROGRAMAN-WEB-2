<<<<<<< HEAD
<?php 
class buku {
  protected $id;
protected $judul;
protected $pengarang;
protected $penerbit;
protected $tahun;

public function __construct($judul, $pengarang, $penerbit, $tahun) {
$this->judul=$judul;
$this->pengarang=$pengarang;
$this->penerbit=$penerbit;
$this->tahun=$tahun;
}

public function setId($id){
  $this->id=$id;
}

public function getId($id){
  return $this->id;
}

public function getJudul() {
  return $this->judul;
}

public function getPengarang() {
  return $this->pengarang;
}

public function getPenerbit() {
  return $this->penerbit;
}

public function getTahun() {
  return $this->tahun;
}
=======
<?php 
class buku {
  protected $id;
protected $judul;
protected $pengarang;
protected $penerbit;
protected $tahun;

public function __construct($judul, $pengarang, $penerbit, $tahun) {
$this->judul=$judul;
$this->pengarang=$pengarang;
$this->penerbit=$penerbit;
$this->tahun=$tahun;
}

public function setId($id){
  $this->id=$id;
}

public function getId($id){
  return $this->id;
}

public function getJudul() {
  return $this->judul;
}

public function getPengarang() {
  return $this->pengarang;
}

public function getPenerbit() {
  return $this->penerbit;
}

public function getTahun() {
  return $this->tahun;
}
>>>>>>> 753e988390e1b395992f377d210eaa17c493d6e6
}