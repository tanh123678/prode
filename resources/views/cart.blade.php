<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cart</title>
  <link rel="stylesheet" href="">
</head>
<body>
  <table>
      <thead>
          <tr>
              <th>Product</th>
              <th>Qty</th>
              <th>Price</th>
              <th>Subtotal</th>
          </tr>
      </thead>

      <tbody>
        @foreach (Cart::content() as $row)
            <tr>
                <td>
                    <p><strong>{{$row->name}}</strong></p>
                    <p>@if($row->options->has('size'))
                     {{$row->options->size}} @endif </p>
                </td>
                <td><input type="text" value="{{$row->qty}}"></td>
                <td>${{$row->price}}</td>
                <td>${{$row->total}}</td>
            </tr>
        @endforeach

      </tbody>
      
      <tfoot>
        <tr>
          <td colspan="2">&nbsp;</td>
          <td>Subtotal</td>
          <td>{{Cart::subtotal()}}</td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          <td>Tax</td>
          <td>{{Cart::tax()}}</td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          <td>Total</td>
          <td>{{Cart::total()}}</td>
        </tr>
      </tfoot>
  </table>
  
</body>
</html>