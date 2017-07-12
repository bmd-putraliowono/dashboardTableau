@extends('layouts.menu')
@section('title')
    <title>Bhinneka Tab | Home</title>
@endsection

@section('content')
    {{-- Content --}}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    {{-- box header --}}
                    <div class="box-header with-border">
                        <h3 class="box-title">Google Analytics</h3>
                        <small>  Overall Trends</small>
                    </div>
                    {{-- ./box hearder --}}
                    {{-- box body --}}
                    <div class="box-body" id="gaOtContainer"></div>
                    {{-- ./box body --}}
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    {{-- box-header --}}
                    <div class="box-header with-border">
                        <h3 class="box-title">Google Analytics</h3>
                        <small>  Content Analysis</small>
                    </div>
                    {{-- /.box-header --}}
                    {{-- box body --}}
                    <div class="box-body" id="gaCaContainer"></div>
                    {{-- ./box body --}}
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    {{-- box-header --}}
                    <div class="box-header with-border">
                        <h3 class="box-title">Executive Salesforce</h3>
                        <small>  Sales Growth</small>
                    </div>
                    {{-- /.box-header --}}
                    {{-- box body --}}
                    <div class="box-body" id="esSgContainer"></div>
                    {{-- ./box body --}}
                </div>
            </div>
        </div>
    </section>
    <!-- /.main-content -->
    {{-- /.content --}}
@endsection

@section('script')
    {{-- <script type="text/javascript" src="{{asset('js/tableau/ga.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/tableau/salesforce.js')}}"></script> --}}
    {{-- <script>
        window.onload = function(){
            initGaOt();
            initGaCa();
            initEsSg();
        };
    </script> --}}
@endsection