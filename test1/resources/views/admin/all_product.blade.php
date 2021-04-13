@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê sản phẩm
    </div>
   
    <div class="table-responsive">
        <?php
            $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">',$message.'</span>';
                     Session::put('message',null);
                    } 
                ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh </th>
            <th>Giá </th>
            
            <th>Danh mục </th>
            <th>Thương hiệu </th>
            <th>Hiển thị</th>
            <th>Chỉnh sửa</th>
            <th>tam</th>
     
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($all_product as $key => $pro) 
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$pro->product_name}}</td>
            <td><img src="public/uploads/product/{{$pro->product_image}}" height="100" width="100"></td>
            
            <td>{{$pro->product_gia}}</td>
            
            <td>{{$pro->category_name}}</td>
            <td>{{$pro->brand_name}}</td>
            <td><span class="text-ellipsis">
                <?php
                if($pro->product_status==0){
                    ?>
                    <a href="{{URL::to('/unactive-product/'.$pro->product_id)}}"><span class= "fa-thumb-styling fa fa-thumbs-up"></span></a>  
                    <?php
                    }else{
                    ?>
                    <a href="{{URL::to('/active-product/'.$pro->product_id)}}"><span class= "fa-thumb-styling fa fa-thumbs-down"></span></a>
                    <?php
                }   
                ?>
            </span></td>
                        <td>
                <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                <a onclick="return confirm('Bạn có chắc xóa mục này?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
            </td>
            <td>
                {{$pro->category_name}} + {{$pro->brand_name}}
            </td>
          </tr>
          @endforeach 
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
     
    </footer>
  </div>
</div>
@endsection