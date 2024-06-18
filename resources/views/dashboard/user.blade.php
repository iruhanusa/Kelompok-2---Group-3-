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
                <p class="m-0">ID Pengguna</p>
                <h3 class="m-0">123456</h3>
            </div>
            <div style="background-color: #0A6847;" class="py-3 px-4 rounded text-white">
                <p class="m-0">Total Pendapatan</p>
                <h3 class="m-0">Rp. 100.000</h3>
            </div>
            <div style="background-color: #0A6847;" class="py-3 px-4 rounded text-white">
                <p class="m-0">Total Berat</p>
                <h3 class="m-0">3 Kg</h3>
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