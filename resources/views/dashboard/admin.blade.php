@extends('layouts.master')
@section('content')
    <style>
        #header_dashboard{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        @media(width < 600px){
            #header_dashboard{
                grid-template-columns: repeat(1, 1fr);
                margin: 0px 8px;
            }
        }
    </style>
    <section id="dashboard" style="padding: 50px 20px;">
        <div id="header_dashboard">
            <div style="background-color: #0A6847;" class="py-3 px-4 rounded text-white">
                <p class="m-0">ID Admin</p>
                <h3 class="m-0">123456</h3>
            </div>
            <div style="background-color: #0A6847;" class="py-3 px-4 rounded text-white">
                <p class="m-0">Total Berat</p>
                <h3 class="m-0">3 Kg</h3>
            </div>
            <button class="border-success border-1 rounded bg-body p-3" data-bs-toggle="modal" data-bs-target="#input_data">
                {{-- <a href="{{route('get_beranda')}}" class="fs-4 text-decoration-none text-success fw-bold">Input Data</a> --}}
                <p class="fs-3 text-success fw-bold m-0">Input Data</p>
            </button>
            <!-- Modal -->
            <div class="modal fade" id="input_data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-success">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Input Data Sampah</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" method="">
                            <div class="modal-body">
                                <label for="user_id" class="form-label text-light">User ID</label>
                                <input type="number" class="form-control" id="user_id" name="user_id" placeholder="Isi User ID disini" required>
                                
                                <label for="jenis_sampah" class="form-label text-light mt-3">Jenis Sampah</label>
                                <select class="form-select form-control"aria-label="Default select example" name="jenis_sampah" required>
                                    <option selected>Pilih Jenis Sampah Barang</option>
                                    <option value="kaca">Kaca</option>
                                    <option value="plastik">Plastik</option>
                                    <option value="kertas">Kertas</option>
                                    <option value="kaleng">Kaleng</option>
                                    <option value="elektronik">Elektronik</option>
                                    <option value="tesktil">Tesktil</option>
                                    {{-- <option value="Bekas" {{ old('kondisi') === 'Bekas' ? 'selected' : '' }}>Bekas</option>
                                    <option value="Baru" {{ old('kondisi') === 'Baru' ? 'selected' : '' }}>Baru</option> --}}
                                </select>

                                <label for="nama_sampah" class="form-label text-light mt-3">Nama Sampah</label>
                                <input type="text" class="form-control" id="nama_sampah" name="nama_sampah" placeholder="Isi Nama Sampah disini" required>
                                <label for="berat" class="form-label text-light mt-3">Berat</label>
                                <input type="number" class="form-control" id="berat" name="berat" placeholder="Isi Berat Sampah disini" required>
                                <label for="harga" class="form-label text-light mt-3">Harga</label>
                                <input type="number" class="form-control" id="harga" name="harga" placeholder="Isi Harga Sampah disini" required>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-light">Tambah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive mt-4">
            <table class="table text-success">
                <thead class="">
                <tr class="text-center">
                    <th class="text-success">Tanggal</th>
                    <th class="text-success">ID User</th>
                    <th class="text-success">Nama User</th>
                    <th class="text-success">Sampah</th>
                    <th class="text-success">Jenis</th>
                    <th class="text-success">Berat</th>
                    <th class="text-success">Harga</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                <tr class="text-center">
                    <td  class="text-success">1</td>
                    <td class="text-success">1</td>
                    <td class="text-success">John lennon</td>
                    <td class="text-success">Buku</td>
                    <td class="text-success">Kertas</td>
                    <td class="text-success">1 Kg</td>
                    <td class="text-success">Rp. 3.500</td>
                </tr>
                <tr class="text-center">
                    <td  class="text-success">2</td>
                    <td class="text-success">1</td>
                    <td class="text-success">John lennon</td>
                    <td class="text-success">Buku</td>
                    <td class="text-success">Kertas</td>
                    <td class="text-success">1 Kg</td>
                    <td class="text-success">Rp. 3.500</td>
                </tr>
                <tr class="text-center">
                    <td  class="text-success">3</td>
                    <td class="text-success">1</td>
                    <td class="text-success">John lennon</td>
                    <td class="text-success">Buku</td>
                    <td class="text-success">Kertas</td>
                    <td class="text-success">1 Kg</td>
                    <td class="text-success">Rp. 3.500</td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection