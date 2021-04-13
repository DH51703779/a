@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt kê danh mục sản phẩm
    </div>
    <div class="row w3-res-tb">

    <div class="table-responsive">
        <?php
            $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">',$message.'</span>';
                     Session::put('message',null);
                    } 
                ?>

            <?php
              $thongbao = Session::get('thongbao');
               if($thongbao){
                    echo '<span class="text-alert">',$thongbao.'</span>';
                     Session::put('thongbao',null);
                    } 
            ?>
      <table class="table table-striped b-t b-light">
        <div class="table-responsive">
        
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Tên danh mục</th>
            
            <th>Hiển thị</th>
            <th>Chỉnh sửa</th>
     
            <th style="width:20px;"></th>
          </tr>
        </thead>
        <tbody>
            @foreach($all_category_product as $key => $cate_pro) 
          <tr>
            <td>{{$cate_pro->category_name}}</td>
            
            <td><span class="text-ellipsis">
                <?php
                if($cate_pro->category_status==0){
                    ?>
                    <a href="{{URL::to('/unactive-category-product/'.$cate_pro->category_id)}}"><span class= "fa-thumb-styling fa fa-thumbs-up"></span></a>  
                    <?php
                    }else{
                    ?>
                    <a href="{{URL::to('/active-category-product/'.$cate_pro->category_id)}}"><span class= "fa-thumb-styling fa fa-thumbs-down"></span></a>
                    <?php
                }   
                ?>
            </span></td>
                <td>
                <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                <a onclick="return confirm('Bạn có chắc xóa mục này?')" href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
            </td>
          </tr>
          @endforeach 
        </tbody>
      </table>
    </div>
   
  </div>
</div>
@endsection