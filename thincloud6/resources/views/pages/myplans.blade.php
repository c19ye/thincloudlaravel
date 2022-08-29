@extends('layout')
@extends('sabit.nav')
@section('title')
    Planlarım
@endsection
@section('breadcrumb')
    <div class="content-header-left col-md-9 col-12 mt-50 ms-2 d-none d-sm-block">
        <div class="row breadcrumbs-top">
            <div class="col-md-12 d-none d-md-block">
                <h2 class="content-header-title float-start mb-0 me-1">
                    @yield('title')
                </h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Anasayfa</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">ThinCloud' um</a>
                        </li>

                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png" />
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet" />

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css" />
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/bordered-layout.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css" />

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/page-pricing.css" />
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/page-faq.css" />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css" />
    <!-- END: Custom CSS-->
@endsection

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            @if($var == 1)
                <div class="content-body">
                <div class="row">
                    <div class="col-12 text-center mt-5 mb-5">
                    <h1>Henüz bir sanal makineniz yok. Bir sanal makine oluşturmak ister misiniz?</h1>
                    </div>
                    <div class="center col-12">
                    <a href={{route('virtualmachines')}}>
                    <button type="submit" class="btn btn-primary col-12">
                        Oluştur
                    </button>
                    </a>
                    </div>
                </div>
                </div>
            @else
            <div class="content-body">
                <section id="pricing-plan ">
                    <!-- title text -->
                    <div class="text-center">
                        <h1 class="">Üyelik Planları</h1>
                        <br />
                        <br />
                    </div>
                    <!--/ title text -->

                    <!-- pricing plan cards -->
                    <section id="faq-tabs">
                        <!-- vertical tab pill -->
                        <div class="row">
                            <div class="col-lg-2 col-md-12 col-sm-12 ">
                                <div class="d-flex justify-content-between flex-column mb-2 mb-md-0 overflow-auto pe-2">
                                    <!-- pill tabs navigation -->
                                    <ul class="nav nav-pills nav-left flex-column" role="tablist">
                                        <li class="mx-auto mb-2">

                                            <h4>Sanal Bilgisayarlar</h4>
                                        </li>
                                        <!-- payment -->
                                        @foreach ($virtualmachinemodel as $virtualmachine)


                                        <li class="nav-item mb-2">
                                            <a class="nav-link {{ $plannumber->name == $virtualmachine->thincloudname ? 'active' : '' }} getid" id="{{$virtualmachine->my_plans_id}}" data-bs-toggle="pill"
                                                href="#myplans-vm1" aria-expanded="true" role="tab">
                                                <i data-feather="server"></i>
                                                <span class="fw-bold">{{$virtualmachine->thincloudname}}</span>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>

                                    <!-- FAQ image -->
                                </div>
                            </div>



                            <div id="tbody" class="col-lg-10 col-md-12 col-sm-12">
                                <!-- pill tabs tab content -->
                                <div class="tab-content">
                                    <!-- VM-1 -->
                                    <div role="tabpanel" class="tab-pane active" id="myplans-vm1" aria-labelledby="vm1"
                                        aria-expanded="true">
                                        <div class="row pricing-card">
                                            <div
                                                class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-12 mx-auto">
                                                <div class="row">
                                                    <!-- basic plan -->
                                                    <div class="col-12 col-md-3">
                                                        <div class="card basic-pricing text-center">
                                                            <div class="card-body height-600 position-relative">
                                                                <img src="../../../app-assets/images/illustration/Pot1.svg"
                                                                    class="mb-2 mt-5" alt="svg img" />
                                                                <h3>{{$data[0]->name}} </h3>
                                                                <div class="annual-plan">
                                                                    <div class="plan-price mt-2">
                                                                        <sup
                                                                            class="font-medium-1 fw-bold text-primary">₺</sup>
                                                                        <span
                                                                            class="pricing-basic-value fw-bolder text-primary">{{$data[0]->price}}</span>
                                                                        <sub
                                                                            class="pricing-duration text-body font-medium-1 fw-bold">/Aylık</sub>
                                                                    </div>
                                                                    <small
                                                                        class="annual-pricing d-none text-muted"></small>
                                                                </div>
                                                                <div class="">
                                                                    <ul class="list-group list-group-circle text-start">
                                                                        @foreach ($temel as $feature)
                                                                        @foreach ($feature->toArray() as $column)

                                                                            @if ($column != NULL)
                                                                                <li class="list-group-item">
                                                                                    {{$column}}
                                                                                </li>
                                                                            @endif

                                                                        @endforeach
                                                                        @endforeach


                                                                    </ul>
                                                                </div>
                                        
                                                            </div>
                                                            @if ($plannumber->data == 1)
                                                            <div class="row">
                                                                <div
                                                                    class="divider divider-primary position-absolute bottom-0 start-0 translate-middle-y">
                                                                    <div class="divider-text mb-5">
                                                                        @if ($virt != null)
                                                                        Bitiş: {{$virt->end_date}}
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                            <button  class="btn btn-outline-success m-2">
                                                                Planınız
                                                            </button>
                                                      
                                                            @else
                                                            
                                                            <a href={{route('billing')}}>
                                                            <button class="btn btn-primary m-2">
                                                                Güncelle
                                                            </button>
                                                            </a>
                                                            @endif


                                                        </div>
                                                    </div>
                                                    <!--/ basic plan -->

                                                    <!-- standard plan -->
                                                    <div class="col-12 col-md-3">
                                                        <div class="card standard-pricing text-center">
                                                            <div class="card-body height-600">
                                                                <img src="../../../app-assets/images/illustration/Pot1.svg"
                                                                    class="mb-2 mt-5" alt="svg img" />
                                                                <h3>{{$data[1]->name}}</h3>
                                                                <div class="annual-plan">
                                                                    <div class="plan-price mt-2">
                                                                        <sup
                                                                            class="font-medium-1 fw-bold text-primary">₺</sup>
                                                                        <span
                                                                            class="pricing-standard-value fw-bolder text-primary">{{$data[1]->price}}</span>
                                                                        <sub
                                                                            class="pricing-duration text-body font-medium-1 fw-bold">/Aylık</sub>
                                                                    </div>
                                                                    <small
                                                                        class="annual-pricing d-none text-muted"></small>
                                                                </div>

                                                                <div class="">
                                                                    <ul class="list-group list-group-circle text-start">
                                                                        @foreach ($standart as $feature)
                                                                        @foreach ($feature->toArray() as $column)

                                                                            @if ($column != NULL)
                                                                                <li class="list-group-item">
                                                                                    {{$column}}
                                                                                </li>
                                                                            @endif

                                                                        @endforeach
                                                                        @endforeach

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            @if ($plannumber->data == 2)
                                                            <div class="row">
                                                                <div
                                                                    class="divider divider-primary position-absolute bottom-25 start-0 translate-middle-y">
                                                                    <div class="divider-text mb-5">
                                                                        @if ($virt != null)
                                                                        Bitiş: {{$virt->end_date}}
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <button  class="btn btn-outline-success m-2">
                                                                Planınız
                                                            </button>
                                                            @else
                                                            <a href={{route('billing')}}>
                                                            <button class="btn btn-primary m-2">
                                                                Güncelle
                                                            </button>
                                                            </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--/ standard plan -->

                                                    <!-- enterprise plan -->
                                                    <div class="col-12 col-md-3">
                                                        <div class="card enterprise-pricing text-center">
                                                            <div class="card-body height-600">
                                                                <img src="../../../app-assets/images/illustration/Pot1.svg"
                                                                    class="mb-2 mt-5" alt="svg img" />
                                                                <h3>{{$data[2]->name}}</h3>
                                                                <div class="annual-plan">
                                                                    <div class="plan-price mt-2">
                                                                        <sup
                                                                            class="font-medium-1 fw-bold text-primary">₺</sup>
                                                                        <span
                                                                            class="pricing-enterprise-value fw-bolder text-primary">{{$data[2]->price}}</span>
                                                                        <sub
                                                                            class="pricing-duration text-body font-medium-1 fw-bold">/Aylık</sub>
                                                                    </div>
                                                                    <small
                                                                        class="annual-pricing d-none text-muted"></small>
                                                                </div>
                                                                <div class="">
                                                                    <ul class="list-group list-group-circle text-start">
                                                                        @foreach ($isletme as $feature)
                                                                        @foreach ($feature->toArray() as $column)

                                                                            @if ($column != NULL)
                                                                                <li class="list-group-item">
                                                                                    {{$column}}
                                                                                </li>
                                                                            @endif

                                                                        @endforeach
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            @if ($plannumber->data == 3)
                                                            <div class="row">
                                                                <div
                                                                    class="divider divider-primary position-absolute bottom-0 start-0 translate-middle-y">
                                                                    <div class="divider-text mb-5">
                                                                        @if ($virt != null)
                                                                        Bitiş: {{$virt->end_date}}
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button  class="btn btn-outline-success m-2">
                                                                Planınız
                                                            </button>
                                                            @else
                                                            <a href={{route('billing')}}>
                                                                <button class="btn btn-primary m-2">
                                                                    Güncelle
                                                                </button>
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!--/ enterprise plan -->

                                                    <!--Coorporate plan-->
                                                    <div class="col-12 col-md-3">
                                                        <div class="card basic-pricing text-center">
                                                            <div class="card-body height-600">
                                                                <img src="../../../app-assets/images/illustration/Pot1.svg"
                                                                    class="mb-2 mt-5" alt="svg img" />
                                                                <h3>{{$data[3]->name}}</h3>
                                                                <div class="annual-plan">
                                                                    <div class="plan-price mt-2">
                                                                        <sup
                                                                            class="font-medium-1 fw-bold text-primary">₺</sup>
                                                                        <span
                                                                            class="pricing-basic-value fw-bolder text-primary">{{$data[3]->price}}</span>
                                                                        <sub
                                                                            class="pricing-duration text-body font-medium-1 fw-bold">/Aylık</sub>
                                                                    </div>
                                                                    <small
                                                                        class="annual-pricing d-none text-muted"></small>
                                                                </div>
                                                                <div>
                                                                    <ul class="list-group list-group-circle text-start">
                                                                        @foreach ($kurumsal as $feature)
                                                                        @foreach ($feature->toArray() as $column)

                                                                            @if ($column != NULL)
                                                                                <li class="list-group-item">
                                                                                    {{$column}}
                                                                                </li>
                                                                            @endif

                                                                        @endforeach
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            @if ($plannumber->data == 4)
                                                            <div class="row">
                                                                <div
                                                                    class="divider divider-primary position-absolute bottom-0 start-0 translate-middle-y">
                                                                    <div class="divider-text mb-5">
                                                                        @if ($virt != null)
                                                                        Bitiş: {{$virt->end_date}}
                                                                        @endif
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button  class="btn btn-outline-success m-2">
                                                                Planınız
                                                            </button>
                                                            @else
                                                            <a href={{route('billing')}}>
                                                                <button class="btn btn-primary m-2">
                                                                    Güncelle
                                                                </button>
                                                                </a>
                                                            @endif


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </section>

                    <!--/ pricing plan cards -->
                </section>
            </div>
            @endif

        </div>
    </div>



    <!-- END: Content-->
@endsection

@section('js')
    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
    integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  ></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/page-pricing.js"></script>
    <!-- END: Page JS-->

    <script>
        $(document).ready(function(){
            $(".getid").click(function(){
                $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
                var asd=$(this).attr("id");
                var name=$(this).find("span").text();
                $.ajax({
                    type: "GET",
                    url: "/mythincloud/myplans?planid="+asd+"&name="+name,
                    dataType: "json",
                    success: function (response) {
                        console.log("success");

                    }
                });
                var base = '{!! route('myplans') !!}';
                var url = base+'?data='+asd+"&name="+name ;
                window.location.href=url;



            });


        });
     </script>
    <script>
        $(window).on("load", function() {


            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14,
                });
            }
        });
    </script>
@endsection
