@extends('front.f_template3')
@section('nama','detail')
@section('content3')

<div class="product">
    <div class="container">
        <div class="ctnt-bar cntnt">
            <div class="content-bar">
                <div class="single-page">
                    <div class="product-head">
                       <a href="/">Home</a> <span>::</span>	
                       </div>
                    <!--Include the Etalage files-->
                       <link rel="stylesheet" href="{{ asset('template\front') }}/css/etalage.css">
                       <script src="{{ asset('template\front') }}/js/jquery.etalage.min.js"></script>
               <script>
           jQuery(document).ready(function($){

               $('#etalage').etalage({
                   thumb_image_width: 400,
                   thumb_image_height: 400,
                   source_image_width: 800,
                   source_image_height: 1000,
                   show_hint: true,
                   click_callback: function(image_anchor, instance_id){
                       alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                   }
               });

           });
       </script>

       <div class="details-left-slider">
        <div class="grid images_3_of_2">
         <ul id="etalage">
           <li>
               <a href="optionallink.html">
                   <img class="etalage_thumb_image" src="{{ asset('gambar/'. $produk->gambar) }}"  />
                   <img class="etalage_source_image" src="{{ asset('gambar/'. $produk->gambar) }}"  class="img-responsive" title="" />
               </a>
           </li>
       </ul>
       </div>
    </div>
                    </div>
                    <div class="details-left-info">
                           <h3>{{ $produk->nama }}</h3>
                           <h4></h4>
                           <p><label>Rp.</label> {{ $produk->harga }}.000 </p>
                           <div class="btn_form">
                            <div class="container">


<div>
                              <input type="button" class="btn btn-primary"  onclick="addtocart('{{ $produk->id_produk }}', '1')" value="Add to cart">
</div>
                            </div>
                            
                  


                           </div>
                           <div class="bike-type">
                           <p>Grade  ::<a href=  "#">{{ $produk->kualitas }}</a></p>
                           <p>Satuan  ::<a href="#">Kg</a></p>
                           </div>
                           <h5>Description  ::</h5>
                           <p class="desc">{{$produk->deskripsi}}</p>
                    </div>
                    <div class="clearfix"></div>				 	
                 </div>
             </div>
             <div class="single-bottom2 justify-content-center">
                <h6>Related Products</h6>
                @foreach ($produk1 as $p)
               <div class="product">
                       <div class="product-desc">
                            <div class="product-img product-img2">
                               <img src="{{ asset('gambar/'. $p->gambar) }}" style="width:200px; height:170px; "  class="img-responsive " alt=""/>
                           </div>
                           <div class="prod1-desc">
                                  <h5><a class="product_link" href="bicycles.html">{{ $p->nama }}</a></h5>
                                  <p class="product_descr"> {{ $p->deskripsi }}</p>									
                           </div>
                           <div class="clearfix"></div>
                       </div>
                       <div class="product_price">
                              <span class="price-access">{{ $p->harga }}.000</span>								
                              <input type="button" class="btn btn-primary"  onclick="addtocart('{{ $produk->id_produk }}', '1')" value="Add to cart">

                              
                              <!-- Modal -->
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
                                            <input type="hidden" name='nama' value="">
                                            <input type="hidden" name='harga' value="">
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
                                                        <label for="">Jumlah (Kg)</label>
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
               @endforeach
           </div>	
         </div>
    </div>
</div>
<!---->
@endsection