@extends('front.f_template2')
@section('nama','indexP')
@section('content2')


<!--/banner-->
<div class="bikes">		 
	 <div class="mountain-sec">
		 <h2>Tembakau Premium</h2>
         @foreach ($produk as $p)
			 <div class="bike" >				 
			 <img src="{{ asset('gambar/'. $p->gambar) }}" style="width:200px; height:170px; " alt=""/>
		     <div class="bike-cost" style="width:200px; height:80px; ">
					 <div class="bike-mdl">
						 <h4>{{ $p->nama }}
						 </h4><h4>
							<span>{{ $p->kualitas }}</span></h4>
					 </div>
					 <div class="bike-cart">						 
						
							<!-- Trigger the modal with a button -->
							 <button type="button" class="buy" data-toggle="modal" data-target="#myModal">BELI</button>
						  
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
<!---->



@endsection