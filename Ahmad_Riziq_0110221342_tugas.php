<?php

# membuat class Animal
class Animal
{
    
    # property animals
    public $hewan;
    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($data) {
    $this->hewan = $data;
    }

    # method index - menampilkan data animals
    public function index()
    {
        # gunakan foreach untuk menampilkan data animals (array)
        foreach($this->hewan as $animal) {
            echo $animal . '\n';
        }
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($data)
    {
        # gunakan method array_push untuk menambahkan data baru
        array_push($this->hewan, $data);
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $data) {
        if(isset($this->hewan[$index])) {
            $this->hewan[$index] = $data;
        } 
        else {
            echo 'sorry gak ada';
        }
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {
        # gunakan method unset atau array_splice untuk menghapus data array
    if(isset($this->hewan[$index])) {
        unset($this->hewan[$index]);
    }
    else {
        echo 'Agak Laen';
    }
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(["Ayam,","Anjing","Kucing"]);

echo "Index - Menampilkan seluruh hewan \n";
$animal->index();
echo "\n";

echo "Store - Menambahkan hewan baru \n";
$animal->store('burung');
$animal->index();
echo "\n";

echo "Update - Mengupdate hewan \n"; 
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "\n";

echo "Destroy - Menghapus hewan \n";
$animal->destroy(1);
$animal->index();
echo "\n";