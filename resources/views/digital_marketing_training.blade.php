@include('inc.toppart')
<body class="hold-transition sidebar-collapse layout-top-nav">
<div class="wrapper">

@include('inc.navbar')

@include('inc.sidebar')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-center font-weight-bold">Digital Marketing Professional Training</small></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="form-group col-md-12">
                                <label for="inputName">Choose Subject</label>
                                <select id="inputStatus" class="form-control custom-select">
                                    <option selected disabled>Choose any one subject...</option>
                                    <option>Standard Package</option>
                                    <option>Premium Package</option>
                                    <option>Enterprise Package</option>
                                </select>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputName">Voucher Amount</label>
                                <input type="number" id="inputName" class="form-control">
                            </div>
                        

                        <div class="form-group col-md-6" >
                            <label>Insert Voucher Image</label>
                            <input type="file" class="form-control-file" name="image" >
                        </div>
                    </div>

                        <div class="form-group">
                        <label for="inputDescription">Write Message</label>
                        <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                        </div>
                        <input type="submit" value="Submit" class="btn btn-success float-right">
                    </div>
                </div>
                
                    </div>
                </div>

                <div class="content-header">
                    <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                        <h1 class="m-0 text-center font-weight-bold">Digital Marketing Training</small></h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12" style="text-align: center">
                        <div class="info-box">
                            <div class="info-box-content">
                                <span class="info-box-text">Certified Digital Marketing Professional Course</span>
                                <span class="info-box-number">
                                    NRs. 30,000 (2 Months Course + 3 Months Internship)
                                </span>
                                <a href="#" class="card-link">Learn More</a>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    <!-- /.info-box -->
                    </div>
                    <!-- /.info-box -->
                    </div>
                </div>
               
                    <!-- /.info-box -->
                    </div>
                </div>

                </div>

            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      
@include('inc.footer')
