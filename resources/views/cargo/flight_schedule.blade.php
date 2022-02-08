@extends('cargo.layout.index',['page'=>'schedule'])
@section('content')
<!-- Content -->
<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url(images/background/schedule.jpg);">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">Flight Schedule Monitor</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li>flight-scheduled</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full p-t70 p-b40">
            @dump($contents)

            <!-- Services  -->
            <div class="container">
                <div class="row">
                <table class="table table-hover table-sm">
                <thead class="text-uppercase">
                    <tr class="table-info">
                    <th scope="col">flight date</th>
                    <th scope="col">flight status</th>
                    <th scope="col">departure</th>
                    <th scope="col">arrival</th>
                    <th scope="col">airline</th>
                    <th scope="col">flight</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($contents->data as $f)
                    <tr>
                        <td>{{$f->flight_date}}</td>
                        <td>{{$f->flight_status}}</td>
                        <td>
                            <div class="widget widget_getintuch">
                                <ul>
                                    <li>
                                        <strong>{{$f->departure->airport}}/{{$f->departure->iata}}</strong> 
                                        Terminal: {{$f->departure->terminal}}, Gate: {{$f->departure->terminal}}<br>
                                        Schedule: {{$f->departure->scheduled}} <br>
                                        Delay: {{$f->departure->delay}}
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                </div>
            </div>
            <!-- Services END -->
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
@endsection()