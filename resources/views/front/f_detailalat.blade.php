@extends('front.f_template3')
@section('nama','detailalat')
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
                   <img class="etalage_thumb_image" src="{{ asset('gambar/'. $alat->gambar_alat) }}"  />
                   <img class="etalage_source_image" src="{{ asset('gambar/'. $alat->gambar_alat) }}"  class="img-responsive" title="" />
               </a>
           </li>
       </ul>
       </div>
    </div>
                    </div>
                    <div class="details-left-info">
                           <h3>{{ $alat->nama_alat }}</h3>
                           <h4></h4>
                           <p><label>Rp.</label> {{ $alat->harga_alat }} .000</p>
                           <div class="btn_form">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">BELI</button>
                              
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
                           <h5>Description  ::</h5>
                           <p class="desc">{{$alat->deskripsi_alat}}</p>
                    </div>
                    <div class="clearfix"></div>				 	
                 </div>
             </div>
             <div class="single-bottom2 justify-content-center">
                <h6>Related Products</h6>
                @foreach ($alat1 as $p)
               <div class="product">
                       <div class="product-desc">
                            <div class="product-img product-img2">
                               <img src="{{ asset('gambar/'. $p->gambar_alat) }}" style="width:200px; height:170px; "  class="img-responsive " alt=""/>
                           </div>
                           <div class="prod1-desc">
                                  <h5><a class="product_link" href="bicycles.html">{{ $p->nama_alat }}</a></h5>
                                  <p class="product_descr"> {{ $p->deskripsi_alat }}</p>									
                           </div>
                           <div class="clearfix"></div>
                       </div>
                       <div class="product_price">
                              <span class="price-access">{{ $p->harga_alat }}.000</span>								
                              {{-- <button type="button" class="c" data-toggle="modal" data-target="#myModal">BELI</button>
                              
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
                              </div> --}}
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