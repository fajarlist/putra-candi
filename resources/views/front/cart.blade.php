<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
 
 <table class="table table-bordered">
        <body>
            <?php $no=1; ?>
            @foreach ($item as $data)
                <tr>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->kualitas }}</td>
                    <td><span class="price">{{$data->harga}}.000</span></td>
                    <td><input type="number" name="qty" style=" width:50px" min="1" class="qty" value="{{ $data->qty }}" onchange="qtycart('{{ $data->id_item }}', this.value)" /> </td>
                    <td ><span class="total">{{ $data->qty * $data->harga }}.000</span></td>
                    <td><a href="javascript:void(0)" class="btn btn-danger" onclick="deleteItem('{{ $data->id_item }}')">X</a></td>
                </tr>
                
            @endforeach
            <tr hidden>
              <th colspan="2" style="text-align:right">Total:</th>
              <th colspan="2" style="text-align:center"><input type="text" id="sum" name="jumlah"></th>
            </tr>
        </body>
    </table>

    <script>
        function qtycart(id_item, qty){
          var data={
                'id_item': id_item,
                'qty':qty,
            }
            $.post(
              '{{ url("addQty") }}',
                JSON.stringify(data),
                function(res){
                  // alert('oke')
                },
                "JSON",
            )
        }
      </script>

      <script>
        calc_total();
       
        $(".qty").on('change', function(){
          var parent = $(this).closest('tr');
          var price  = parseFloat($('.price',parent).text());
          var choose = parseFloat($('.qty',parent).val());

          $('.total',parent).text(choose*price);

          calc_total();
        });

        function calc_total(){
          var sum = 0;
          $(".total").each(function(){
            sum += parseFloat($(this).text());
          });
          $('#sum').val(sum);
        }
      </script>