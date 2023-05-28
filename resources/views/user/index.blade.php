@extends('user.layouts.master')
@section('content')
    

        <div class="container-fluid">
            <!-- Widgets  -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="images/icon.png" alt="blood icon">
                                </div>
                                <div class="col-md-6">
                                    <div class="text-left">
                                        <h3>206</h3>
                                        <p>Donor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="images/icon.png" alt="blood icon">
                                </div>
                                <div class="col-md-6">
                                    <div class="text-left">
                                        <h3>50</h3>
                                        <p>Blood Stock</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="images/icon.png" alt="blood icon">
                                </div>
                                <div class="col-md-6">
                                    <div class="text-left">
                                        <h3>128</h3>
                                        <p>Request</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="images/icon.png" alt="blood icon">
                                </div>
                                <div class="col-md-6">
                                    <div class="text-left">
                                        <h3>52</h3>
                                        <p>Review</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Widgets -->


            <!-- chart -->
            <div class="chart">
                <script>
                    window.onload = function () {

                    var options = {
                        title: {
                            text: "Hemoglobin Blood Bank System"
                        },
                        subtitles: [{
                            text: ""
                        }],
                        animationEnabled: true,
                        data: [{
                            type: "pie",
                            startAngle: 40,
                            toolTipContent: "<b>{label}</b>: {y}%",
                            showInLegend: "true",
                            legendText: "{label}",
                            indexLabelFontSize: 16,
                            indexLabel: "{label} - {y}%",
                            dataPoints: [
                                { y: 55.20, label: "Total Donor" },
                                { y: 20, label: "A+" },
                                { y: 10.37, label: "A-" },
                                { y: 6.98, label: "B+" },
                                {y: 10.00, label: "B-"},
                                { y: 2.60, label: "O+" },
                                { y: 1.45, label: "O-" },
                                { y: 0.79, label: "AB+" },
                                { y: 0.79, label: "AB-" }
                            ]
                        }]
                    };
                    $("#chartContainer").CanvasJSChart(options);

                    }
                    </script>
                <div id="chartContainer" style="height: 300px; width: 100%;"></div>
            </div> <!-- .chart end -->



        </div> <!-- .container-fluid end -->


@endsection