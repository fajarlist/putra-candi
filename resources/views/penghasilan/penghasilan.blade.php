@extends('layout/v_template')
@section('nama','pesanan')
@section('content')

<div class="row">
	<div class="col-lg-4 col-6">
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
			title: {
			display: true,
			text: "Kualitas"
			},
			plugins: {
				labels: {
					render: 'persentage',
					fontColor: '#fff',
					precision: 2
				}
			}
		}
	});
</script>

<script>
var xValues = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
	var yValues = [{{ DB::table('trans')->where('tanggal', 'LIKE', '%' . '-01'.'%')->count() }},
				   {{ DB::table('trans')->where('tanggal', 'LIKE', '%' . '-02'.'%')->count() }},
				   {{ DB::table('trans')->where('tanggal', 'LIKE', '%' . '-03'.'%')->count() }},
				   {{ DB::table('trans')->where('tanggal', 'LIKE', '%' . '-04'.'%')->count() }},
				   {{ DB::table('trans')->where('tanggal', 'LIKE', '%' . '-05'.'%')->count() }},
				   {{ DB::table('trans')->where('tanggal', 'LIKE', '%' . '-06'.'%')->count() }},
				   {{ DB::table('trans')->where('tanggal', 'LIKE', '%' . '-07'.'%')->count() }},
				   {{ DB::table('trans')->where('tanggal', 'LIKE', '%' . '-08'.'%')->count() }},
				   {{ DB::table('trans')->where('tanggal', 'LIKE', '%' . '-09'.'%')->count() }},
				   {{ DB::table('trans')->where('tanggal', 'LIKE', '%' . '-10'.'%')->count() }},
				   {{ DB::table('trans')->where('tanggal', 'LIKE', '%' . '-11'.'%')->count() }},
				   {{ DB::table('trans')->where('tanggal', 'LIKE', '%' . '-12'.'%')->count() }}
				];
	var barColors = ["red", "green","blue","orange", "black", "yellow", "brown", "grey", "pink", "gold", "purple", "lime"];
	var dates = new Date()
	var date = dates.getFullYear()

	new Chart("barChart", {
		type: "bar",
		data: {
			labels: xValues,
			datasets: [{
			backgroundColor: barColors,
			data: yValues
			}]
		},
		options: {
			legend: {display: false},
			title: {
			display: true,
			text: "Data Penjualan "+ date
			}
		}
	});
</script>

@endsection