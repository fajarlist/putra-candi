@extends('layout/v_template')
@section('nama','pesanan')
@section('content')


<section class="section">
    <div class="card">
        <div class="card-body">
            <h4 style="text-align: center;">DATA PESANAN</h4><br>
            <table class="table table-striped" id="table1">
                <thead style="text-align: center;">
           <tr>
              <th>Nama</th>
              <th>Invoice</th>
              <th>Status</th>
              <th>Harga</th>
           </tr> 
        </thead>
        <tbody>
           @foreach($trans as $trans)	<div class="col-lg-4 col-6">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h3>
					{{ $pendapatanHarian }}.000
				</h3>
				<p>PENDAPATAN HARI INI</p>
			</div>
			<div class="icon">
				<i class="ion ion-pricetag"></i>
			</div>
		</div>
	</div>

    <div class="col-lg-4 col-6">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h3>
					{{ $pendapatanBulanan }}.000
				</h3>
				<p>PENDAPATAN BULAN INI</p>
			</div>
			<div class="icon">
				<i class="ion ion-pricetag"></i>
			</div>
		</div>
	</div>

	<div class="col-lg-4 col-6">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h3>
					{{ $pendapatanTahunan }}.000
				</h3>
				<p>PENDAPATAN TAHUN INI</p>
			</div>
			<div class="icon">
				<i class="ion ion-pricetag"></i>
			</div>
		</div>
	</div>
</div>

<!-- PIE CHART -->
<div class="row">
<div class="col-sm-6 col-12 card-danger">
    <div class="card-header">
        <h3 class="card-title">Pie Chart</h3>
    </div>
    <div class="card-body">
        <div class="inner">
            <div class="small-box-footer mb-4"></div>
            <canvas id="myChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>  
        </div>
    </div>
</div>

<div class="col-sm-6 col-12  card-success">
    <div class="card-header">
        <h3 class="card-title">Bar Chart</h3>
    </div>
    <div class="card-body">
        <div class="inner">
            <div class="small-box-footer mb-4"></div>
            <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>  
        </div>
    </div>
</div>
</div>


<script>
	var xValues = ["Grade A","Premium","High Class"];
	var yValues = [{{ DB::table('item')->join('produk','item.id_produk','=','produk.id_produk')->where('kualitas', 'Grade A')->count() }},
                  {{ DB::table('item')->join('produk','item.id_produk','=','produk.id_produk')->where('kualitas', 'Premium')->count() }},
                  {{ DB::table('item')->join('produk','item.id_produk','=','produk.id_produk')->where('kualitas', 'High Class')->count() }},
				];
	var barColors = [
		'rgb(54, 162, 235)',
		'rgb(255, 99, 132)',
        'rgb(355, 111, 173)'
	];
	new Chart("myChart", {
		type: "pie",
		data: {
			labels: xValues,
			datasets: [{
			backgroundColor: barColors,
			data: yValues
			}]
		},
		options: {
              <tr>
                 <td style="text-align: center">{{ Auth::user()->name }}</td>
                 <td style="text-align: center">{{ $trans->nota }}</td>
                 <td style="text-align: center">
                    <input data-id="{{$trans->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="BAYAR" data-off="BELUM BAYAR" {{ $trans->status ? 'checked' : '' }}>
                 </td>
                 <td style="text-align: center">{{ $trans->jumlah }}.000</td>
              </tr>
           @endforeach
        </tbody>
    </table>
</div>
</body>
<script>
$(function() {
$('.toggle-class').change(function() {
    var status = $(this).prop('checked') == true ? 1 : 0; 
    var id_nota = $(this).data('id'); 

    
    $.ajax({
        type: "GET",
        dataType: "json",
        url: '/changeStatus',
        data: {'status': status, 'id_nota': id_nota},
        success: function(data){
         console.log(data.success)
        }
    });
})
})
</script>


</section>
@endsection