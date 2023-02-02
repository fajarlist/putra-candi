
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    {{-- css --}}

</head>
<body>
    <div class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="d-flex flex-row p-2"> <img src="{{ asset('template\front') }}/images/lgo1.png" style="height:75px" alt=""/>
                        <div class="d-flex flex-column"> <span class="font-weight-bold">Tax Invoice</span> <small>{{ $trans->nota }}</small> </div>
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
                                    <td class="font-weight-bold">{{ Auth::user()->name }} <br>{{ Auth::user()->alamat }} </td>
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
                                <?php 
                                $total=0;
                                ?>
                                @foreach ($item as $i)
                                <tr class="content">
                                
                                    <td>{{ $i->nama}}</td>
                                  
                                    <td>{{ $i->qty }}</td>
                                  
                                    <td >{{ $i->harga }}.000</td>
                                   

                                    <td id="hitung" class="text-center">{{ $i->harga * $i->qty}}.000</td>
                                    
                                </tr>
                               <?php
                               $total += $i->harga * $i->qty
                               ?>


                                @endforeach
    <tr class="add">
        <td>Total</td>
        <td></td>
        <td></td>
        <td class="text-center">
            <?php echo $total ?>.000
            </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    
                    <hr>
                    <div class="address p-2">
                        <table class="table table-borderless">
                            <tbody>

                                <tr class="content">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="https://api.whatsapp.com/send?phone={{ Auth::user()->hp }}&text=Halllo%20{{ Auth::user()->name }}%0ATotal%20belanja%20anda%20adalah%20( <?php echo $total ?>.000)%0A%0ASilahkan%20transfer%20melalui%20platform%20dibawah%20%3A%0ADANA%20%3A%20088216097050%0ASHOPEE%20PAY%20%3A%20088216097050%0ABRI%20%3A%20190871700%0ABCA%20%3A%209787080775679%0A%0AKirim%20bukti%20transfer%20ke%20Whatsapp%20(%20wa.me/6288216097050%20)%0A%0ATerima%20kasih%F0%9F%98%81%0A%0ANB%20:berikut%20link%20invoice%20anda%20(%20127.0.0.1:8000/{{ $trans->nota }}%20)" class="btn btn-primary">Bayar</a>
                                    </td>
                                     </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    
 <script>
hitung();
    hitung(){
        var sum=0;
        $('#hitung').each(function (){
            sum += $(this).val();
        });
        $('#total').html(sum);
    }
 </script>
</body>
</html>
