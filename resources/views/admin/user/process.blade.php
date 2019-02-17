@extends('admin.layouts.new_master')
@section('content')
<section class="invoice">
	<div class="container-fluid">
		<table class="table table-responsive">
			<thead>
							<th style="padding: 15px 0px; text-align: center;">Order Code</th>
                            <th style="text-align: center;">Name</td>
                            <th style="text-align: center;">Color</th>
                            <th style="text-align: center;">Size</th>
                            <th style="text-align: center;">Quantity</th>
                            <th style="text-align: center;">Price</th>
			</thead>
			<tbody>
				@foreach($orDetails as $detail)
                        <tr>
                            <td style="padding: 15px 0px;text-align: center;">{{$detail->order_code}}</td>
                            <td style="text-align: center;">
                                @foreach($products as $prod)
                                    @if($detail->product_id == $prod->id)
                                        {{$prod->name}}
                                    @endif 
                                @endforeach
                            </td>       
                            <td style="text-align: center;">
                                @foreach($tDetails as $td)
                                    @if($pDetails[$detail->product_detail_id] == $td->id )
                                        @foreach($colors as $color)
                                            @if($color->id == $td->color_id)
                                                {{$color->name}}
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            </td>
                            <td style="text-align: center;">
                                @foreach($tDetails as $td)
                                    @if($pDetails[$detail->product_detail_id] == $td->id )
                                        @foreach($sizes as $size)
                                            @if($size->id == $td->size_id)
                                                {{$size->name}}
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            </td>
                            <td style="text-align: center;">{{$detail->quantity}}</td>
                            <td style="text-align: center;">{{$detail->total_price}}</td>
                        </tr>    
                @endforeach
			</tbody>
		</table>	
        <form action="/admin/confirm/{{$order->code}}" method="GET">
            @csrf
    		<div style="text-align: right;">
    			<button  class="btn btn-success" style="text-align: left;">Xử lý</button>
    		</div>
        </form>
	</div>
</section>
@endsection