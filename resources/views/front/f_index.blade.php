@extends('front.f_template')
@section('nama','index')
@section('content')

<div id="cate" class="categories">
    <div class="container">
        <h3>CATEGORIES</h3>
        <div class="categorie-grids">
            <a href="/"><div class="col-md-4 cate-grid grid1">
                <h4>Grade A+</h4>
                <p>Sedia berbagai rasa tembakau linting dengan kualitas tinggi</p>
                <a class="store" href="/indexG?kategori=Grade A">GO TO STORE</a>
            </div></a>
            <a href="/indexP"><div class="col-md-4 cate-grid grid2">
                <h4>PREMIUM</h4>
                <p>Sedia berbagai rasa tembakau linting dengan kualitas tinggi</p>
                <a class="store" href="/indexP?kategori=Premium">GO TO STORE</a> 
            </div></a>
            <a href="/indexH"><div class="col-md-4 cate-grid grid3">
                <h4>High Class</h4>
                <p>Sedia berbagai rasa tembakau linting dengan kualitas tinggi</p>
                <a class="store" href="/indexH?kategori=High Class">GO TO STORE</a>
            </div></a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--bikes-->
{{-- <div class="bikes">	
        <h3>Stok Tersedia</h3>
        <div class="bikes-grids">			 
            <ul id="flexiselDemo1">
                @foreach ($produk as $p)
                <li>
                    <img src="{{ asset('gambar/'. $p->gambar) }}" style="width:250px; height:230px; border-radius:7px;" alt=""/>
                    <div class="bike-info">
                        <div class="model">
                            <h4>{{ $p->nama }}<span>Rp.{{ $p->harga }}.000</span></h4>							 
                        </div>
                        <div class="model-info">
                            <a href="/detail/{{ $p->id_produk }}">BUY</a>
                        </div>						 
                        <div class="clearfix"></div>
                    </div>
                    <div class="viw">
                       <a href="/detail/{{ $p->id_produk }}">Quick View</a>
                    </div>
                </li>                   
                @endforeach
           </ul>
           <script type="text/javascript">
            $(window).load(function() {			
             $("#flexiselDemo1").flexisel({
               visibleItems: 3,
               animationSpeed: 1000,
               autoPlay: true,
               autoPlaySpeed: 3000,    		
               pauseOnHover:true,
               enableResponsiveBreakpoints: true,
               responsiveBreakpoints: { 
                   portrait: { 
                       changePoint:480,
                       visibleItems: 1
                   }, 
                   landscape: { 
                       changePoint:640,
                       visibleItems: 2
                   },
                   tablet: { 
                       changePoint:768,
                       visibleItems: 3
                   }
               }
           });
           });
           </script>
           <script type="text/javascript" src="{{ asset('template\front') }}/js/jquery.flexisel.js"></script>			 
   </div>
</div> --}}
<!---->

<div class="bikes">	
    <h3>Alat Tersedia</h3>
    <div class="bikes-grids">			 
        <ul id="flexiselDemo2">
            @foreach ($alat as $a)
            <li>
                <img src="{{ asset('gambar/'. $a->gambar_alat) }}" style="width:250px; height:230px; border-radius:7px;" alt=""/>
                <div class="bike-info">
                    <div class="model">
                        <h4>{{ $a->nama_alat }}<span>Rp.{{ $a->harga_alat }}.000</span></h4>							 
                    </div>
                    <div class="model-info">
                        <input type="button" class="btn btn-primary"  onclick="addtocart('{{ $a->id_alat }}', '1')" value="Add cart">
                    </div>						 
                    <div class="clearfix"></div>
                </div>
                <div class="viw">
                   <a href="/detailalat/{{ $a->id_alat }}">Quick View</a>
                </div>
            </li>                   
            @endforeach
       </ul>
       <script type="text/javascript">
        $(window).load(function() {			
         $("#flexiselDemo2").flexisel({
           visibleItems: 3,
           animationSpeed: 1000,
           autoPlay: true,
           autoPlaySpeed: 3000,    		
           pauseOnHover:true,
           enableResponsiveBreakpoints: true,
           responsiveBreakpoints: { 
               portrait: { 
                   changePoint:480,
                   visibleItems: 1
               }, 
               landscape: { 
                   changePoint:640,
                   visibleItems: 2
               },
               tablet: { 
                   changePoint:768,
                   visibleItems: 3
               }
           }
       });
       });
       </script>
       <script type="text/javascript" src="{{ asset('template\front') }}/js/jquery.flexisel.js"></script>			 
</div>
</div>

<div class="bikes">		 
    <div class="mountain-sec">
        <h2>Tembakau Tersedia</h2>
        @foreach ($produk as $p)
            <div class="bike" >				 
            <img src="{{ asset('gambar/'. $p->gambar) }}" style="width:200px; height:170px; " alt=""/>
            <div class="bike-cost" style="width:200px; height:80px; ">
                    <div class="bike-mdl">
                        <h4>{{ $p->nama }}<span>{{ $p->kualitas }}</span></h4>
                    </div>
                    <div class="bike-cart">	
                           <!-- Trigger the modal with a button -->
                                                          <input type="button" class="btn btn-primary"  onclick="addtocart('{{ $p->id_produk }}', '1')" value="Add cart">
                         
                            {{-- Modal  --}}
                           <div class="modal fade" id="myModal" role="dialog">
                             <div class="modal-dialog">
                             
                               <!-- Modal content-->
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                                   <h4 class="modal-title">Putra Candi</h4>
                                 </div>
                                 <div class="modal-body">
                                   <form action="/beli/insert" method="POST" enctype="multipart/form-data">
                                     @csrf
                                     <h4 style="text-align: center;"> FORM PEMBELIAN </h4>
                                     <div class="content">
                                         <div class="column">
                                             <div>
                                                 <div class="form-grup">
                                                     <label for="">Nama </label>
                                                     <input name="nama_beli" class="form-control" value="{{ old('nama_beli')}}">
                                                     <div class="text-denger">
                                                         @error('nama_beli')
                                                         {{$message}}
                                                         @enderror
                                                     </div>
                                                 </div>
                                             </div>
                                     
                                             <div>
                                                 <div class="form-grup">
                                                     <label for="">Alamat</label>
                                                     <input name="alamat_beli" class="form-control" value="{{ old('alamat_beli')}}">
                                                     <div class="text-denger">
                                                         @error('alamat_beli')
                                                         {{$message}}
                                                         @enderror
                                                     </div>
                                                 </div>
                                             </div>
                                     
                                             <div> 
                                                 <div class="form-grup">
                                                     <label for="">Jumlah</label>
                                                     <input name="jumlah_beli" class="form-control" value="{{ old('jumlah_beli')}}">
                                                     <div class="text-denger">
                                                         @error('jumlah_beli')
                                                         {{$message}}
                                                         @enderror
                                                     </div>
                                                 </div>
                                             </div>
                                   
                                     
                                             <div class="form-grup">
                                                 <button class="btn btn-primary btn-sm">Beli</button>
                                             </div>
                                     
                                         </div>
                                     </div>
                                     </form>
                                     
                                 </div>
                               </div>
                               
                             </div>
                           </div> 
       
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="fast-viw">
                       <a href="/detail/{{ $p->id_produk }}">Quick View</a>
                </div>
            </div></a>
            @endforeach
            <div class="clearfix"></div>
     </div>
   </div> 
    </div>
</div>


        <div class="contact">
            <div class="container" >
                <h3>Request Rasa</h3>
                <p>Jika anda ingin requst silahka tiggalkan pesa pada form dibawah ini.</p>
                <form action="/contact/insert" method="POST">
                    @csrf
                     <input type="text" name="nama_contact" value="{{ old('nama_contact')}}" placeholder="NAMA" required="">
                     <input type="text" name="telp"  value="{{ old('telp')}}" placeholder="NO.TELP" required="">			 
                     <input class="user" type="text" name="email" value="{{ old('email')}}" placeholder="USER@DOMAIN.COM" required=""><br>
                     <textarea name="pesan" value="{{ old('pesan')}}" placeholder="MASUKAN REQUEST RASA"></textarea>
                     <input type="submit" value="SEND">

       </form>
   </div>
</div>
@endsection