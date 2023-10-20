@extends("admin.layouts.app_admin")
@section('content')
    <div  class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 style="margin-left:50px;border: blueviolet solid 2px;width: 250px;text-align: center;background-color: #9229fa;color: white;border-radius: 6px;padding-top: 6px;padding-bottom: 6px" class="card-title"><a href="{{url("admin/product/create")}}">Create new car</a> </h3>


                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th style="width: 100px" scope="col">No.</th>
                            <th style="width: 300px" scope="col">Image</th>
                            <th style="width: 200px" scope="col">Name</th>
                            <th style="width: 100px" scope="col">Price</th>
                            <th style="width: 100px" scope="col">Qty</th>
                            <th style="width: 100px" scope="col">Category</th>
                            <th style="width: 100px" scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $item)
                            <tr>
                                <td style="text-align: center">#{{$loop->index+1}}</td>
                                <td><img  style="margin-left: 50px;margin-bottom: 20px" width="200" src="{{$item->thumbnail}}" /></td>
                                <td style="text-align: center">{{$item->name}}</td>
                                <td style="text-align: center">{{$item->price}}</td>
                                <td style="text-align: center">{{$item->qty}}</td>
                                <td style="text-align: center">{{$item->Category->name}}</td>
                                <td style="text-align: center;" >
                                    <a  href="{{url("admin/product/edit",['product'=>$item->id])}}" style="border-radius: 4px;border: #8d4ff3 solid 2px;padding-left: 22px;padding-right: 22px;padding-top:4px;background-color:#8d4ff3;color: white ">Edit<i style="margin-left: 8px" class="fa-regular fa-pen-to-square"></i></a>
                                    <form action="{{url("admin/product/delete",['product'=>$item->id])}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button style="border-radius: 4px;border: red solid 2px;width: 100px;background-color:#fc3c3c;color: white " onclick="return confirm('Chắc chắn muốn xoá sản phẩm: {{$item->name}}')" class="btn btn-outline-danger" type="submit">Delete<i style="margin-left: 8px" class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $products->links("pagination::bootstrap-4") !!}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection
