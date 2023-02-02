
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
        {{-- css --}}
    
    </head>
    <body>
        @foreach ($alat as $a)
        @foreach ($beli as $b)
        <div class="container mt-5 mb-3">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="d-flex flex-row p-2"> <img src="{{ asset('template\front') }}/images/lgo1.png" style="height:150px" width="48">
                            <div class="d-flex flex-column"> <span class="font-weight-bold">Tax Invoice</span> <small>INV-001</small> </div>
                        </div>
                        <hr>
                        <div class="table-responsive p-2">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr class="add">
                                        <td>To</td>
                                        <td>From</td>
                                    </tr>
                                    <tr class="content">
                                        <td class="font-weight-bold">{{ $b->nama_beli }} <br>{{ $b->alamat_beli }} </td>
                                        <td class="font-weight-bold">Fajar Listiyanto <br> Candirejo, Gedangan, Cepogo, Boyolali </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                                   
                        <div class="products p-2">
                            <table class="table table-borderless">
                                <tbody>
    
                                    <tr class="add">
                                        <td>Nama Barang</td>
                                        <td>Jumlah</td>
                                        <td>Harga</td>
                                        <td class="text-center">Total</td>
                                    </tr>
                                    <tr class="content">
                                    
                                        <td>{{ $a->nama_alat}}</td>
                                      
                                        <td>{{ $b->jumlah_beli }}</td>
                                      
                                        <td>{{ $p->harga }}.000</td>
                                       
    
                                        <td class="text-center">{{ $p->harga * $b->jumlah_beli }}.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        
                        <hr>
                        <div class="address p-2">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr class="add">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="https://api.whatsapp.com/send?phone=6288216097050&text=Pastikan%20Data%20Sudah%20Benar%F0%9F%98%80%0A..%0A%0ANama%20%20%20%20%3A%20%20{{ $b->nama_beli }}%0AAlamat%20%20%20%3A{{ $b->alamat_beli }}%0APesanan%20%3A%20%20{{ $a->nama_alat }}({{ $p->kualitas }})%0AJumlah(/kg)%20%20%20%20%3A%20%20{{ $b->jumlah_beli }}%0AHarga%20%20%20%20%3A%20%20{{ $p->harga*$b->jumlah_beli }}.000%0A%0A%0Ajika%20sudah%20benar%20langsung%20trasfer%20ke%20%3A%0ABCA%2001292711%0ABRI%20%2008926723979180%0AGOPAY%20088216097050%0ADANA%20%20088216097050">bayar</a>
                                        </td>
                                    </tr>
                                    <tr class="content">
                                         </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endforeach
    </body>
    </html>
    