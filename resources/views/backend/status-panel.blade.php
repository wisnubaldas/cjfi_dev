@extends('backend.layouts.default',['sidebarTransparent' => true,])

@section('title', 'Status Panel')


@push('css')
<link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
<link href="/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" />
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Status Panel</a></li>
    <!-- <li class="breadcrumb-item active">Parkir</li> -->
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Status Panel</h1>
<!-- end page-header -->
<div class="row">
    <!-- begin row -->
            <div class="row row-space-10 m-b-20">
                <!-- begin col-4 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget-stats bg-gradient-green m-b-10">
                        <div class="stats-icon stats-icon-lg"><i class="fas fa-lightbulb"></i></div>
                        <div class="stats-content">
                            <div class="stats-title">STATUS LAMPU</div>
                            <div class="stats-number">ON</div>
                            <div class="stats-progress progress">
                                <div class="progress-bar" style="width: 100%;"></div>
                            </div>
                            <div class="stats-desc">Better than last week (70.1%)</div>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget-stats bg-gradient-blue m-b-10">
                        <div class="stats-icon stats-icon-lg"><i class="fas fa-bolt"></i></div>
                        <div class="stats-content">
                            <div class="stats-title">TEGANGAN BEBAN</div>
                            <div class="stats-number">180,200</div>
                            <div class="stats-progress progress">
                                <div class="progress-bar" style="width: 100%;"></div>
                            </div>
                            <div class="stats-desc">Better than last week (40.5%)</div>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget-stats bg-gradient-purple m-b-10">
                        <div class="stats-icon stats-icon-lg"><i class="fas fa-battery-three-quarters"></i></div>
                        <div class="stats-content">
                            <div class="stats-title">ARUS BEBAN</div>
                            <div class="stats-number">38,900</div>
                            <div class="stats-progress progress">
                                <div class="progress-bar" style="width: 100%;"></div>
                            </div>
                            <div class="stats-desc">Better than last week (76.3%)</div>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget-stats bg-gradient-black m-b-10">
                        <div class="stats-icon stats-icon-lg"><i class="fas fa-bolt"></i></div>
                        <div class="stats-content">
                            <div class="stats-title">TEGANGAN PV LAMPU</div>
                            <div class="stats-number">3,988</div>
                            <div class="stats-progress progress">
                                <div class="progress-bar" style="width: 100%;"></div>
                            </div>
                            <div class="stats-desc">Better than last week (54.9%)</div>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget-stats bg-gradient-orange m-b-10">
                        <div class="stats-icon stats-icon-lg"><i class="fas fa-bolt"></i></div>
                        <div class="stats-content">
                            <div class="stats-title">ARUS PV LAMPU</div>
                            <div class="stats-number">20</div>
                            <div class="stats-progress progress">
                                <div class="progress-bar" style="width: 100%;"></div>
                            </div>
                            <div class="stats-desc">More than last week (23.5%)</div>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget-stats bg-gradient-red m-b-10">
                        <div class="stats-icon stats-icon-lg"><i class="fa fa-exclamation-triangle fa-fw"></i></div>
                        <div class="stats-content">
                            <div class="stats-title">TEGANGAN PV BATERAI</div>
                            <div class="stats-number">5</div>
                            <div class="stats-progress progress">
                                <div class="progress-bar" style="width: 100%;"></div>
                            </div>
                            <div class="stats-desc">More than last week (10.5%)</div>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget-stats bg-gradient-gray m-b-10">
                        <div class="stats-icon stats-icon-lg"><i class="fa fa-exclamation-triangle fa-fw"></i></div>
                        <div class="stats-content">
                            <div class="stats-title">ARUS PV BATERAI</div>
                            <div class="stats-number">5</div>
                            <div class="stats-progress progress">
                                <div class="progress-bar" style="width: 100%;"></div>
                            </div>
                            <div class="stats-desc">More than last week (10.5%)</div>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget-stats bg-gradient-indigo m-b-10">
                        <div class="stats-icon stats-icon-lg"><i class="fa fa-exclamation-triangle fa-fw"></i></div>
                        <div class="stats-content">
                            <div class="stats-title">KELEMBAPAN UDARA</div>
                            <div class="stats-number">5</div>
                            <div class="stats-progress progress">
                                <div class="progress-bar" style="width: 100%;"></div>
                            </div>
                            <div class="stats-desc">More than last week (10.5%)</div>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget-stats bg-gradient-blue m-b-10">
                        <div class="stats-icon stats-icon-lg"><i class="fa fa-exclamation-triangle fa-fw"></i></div>
                        <div class="stats-content">
                            <div class="stats-title">TEMPERATUR SUHU</div>
                            <div class="stats-number">5</div>
                            <div class="stats-progress progress">
                                <div class="progress-bar" style="width: 100%;"></div>
                            </div>
                            <div class="stats-desc">More than last week (10.5%)</div>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget-stats bg-gradient-lime m-b-10">
                        <div class="stats-icon stats-icon-lg"><i class="fa fa-exclamation-triangle fa-fw"></i></div>
                        <div class="stats-content">
                            <div class="stats-title">PETA</div>
                            <div class="stats-number">5</div>
                            <div class="stats-progress progress">
                                <div class="progress-bar" style="width: 100%;"></div>
                            </div>
                            <div class="stats-desc">More than last week (10.5%)</div>
                        </div>
                    </div>
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
</div>

<!-- @dump($parkiran) -->
@endsection

@push('scripts')
<script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script>

</script>
@endpush