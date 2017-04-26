@extends('layouts.app')
	@section('content')

    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <!-- /.aside -->
        <div class="content-page">
          <!-- Start content -->
          <div class="content">
              <div class="container">

                  <!-- Page-Title -->
                  <div class="row">
                      <div class="col-sm-12">
                          <h4 class="page-title">Products</h4>
                      </div>
                  </div>
                  <!-- Modal -->

                <button class="btn btn-primary pull-right pull-up" data-toggle="modal" data-target=".bd-example-modal-lg" style="    background-color: #5fbeaa !important;
                  border: 1px solid #5fbeaa !important;">
                Add New Product
                </button>
                <form action="/add_product" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="card-box">
                              <h5 class="text-muted text-uppercase m-t-0 m-b-20"><b>General</b></h5>
                              <div class="form-group col-m-b-20">
                                  <label>Product name <span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" placeholder="e.g : Apple iMac" name="product_name">
                              </div>
                              <div class="form-group m-b-20">
                                  <label>Product Amount<span class="text-danger">*</span></label>
                                  <input type="text" class="form-control" value="$ 562.56" name="product_price">
                              </div>
                              <div class="form-group m-b-20">
                                  <label>Product Description <span class="text-danger">*</span></label>
                                  <textarea class="form-control" rows="7" placeholder="Please enter description" name="product_description">
                                  </textarea>
                              </div>
                              
                              <div class="form-group">
                                <label>Product Image
                                  <span class="text-danger">*</span>
                                </label>
                                <center>
                                  <div class="fileupload fileupload-new" data-provides="fileupload">
                                  <div class="fileupload-new thumbnail" style="width: 150px;">
                                      <img src="./img/profile_avatar.jpg" alt="Click on the buttom bellow to Upload image" class="img-responsive" style="padding-top: 0px;" />
                                  </div>
                                  <div class="fileupload-preview fileupload-exists thumbnail" style="width: 150px;"></div>
                                  <div>
                                    <span class="btn btn-default  btn-file" style="">
                                        <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                        <input type="file" name="product_image" class="default"/>
                                    </span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">
                                    <i class="fa fa-trash"></i> Remove</a>
                                  </div>
                                </div>
                                </center>
                                
                              </div>
                              <div class="panel-footer" style="padding-top: 40px;padding-bottom: 40px;">
                                <div class="form-group pull-right" style="margin-top: -15px;">
                                  <button type="Reset" class="btn btn-danger"> Reset</button>
                                  <button type="Submit" class="btn btn-success"> Submit</button>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  @foreach($products->chunk(3) AS $productChunk)
                    <div class="row"> 
                            @foreach($productChunk AS $value)

                        <div class="col-xs-18 col-sm-6 col-md-3">
                          <div class="thumbnail">
                            <img src="img/{{$value->product_image}}" alt="">
                              <div class="caption">
                                <h4>{{$value->product_name}}</h4>
                                <p><h2>{{$value->product_price}}</h2></p>
                                <p>{{$value->product_description}}</p>
                                <p><a href="{{ route ('AddToCart' , ['id' =>$products->id])}}" class="btn btn-success" role="button">Add To Cart</a></p>
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div><!-- End row -->
                      @endforeach
                    </div><!-- End container -->
                </div>
            </div>
        </div>
@endsection
