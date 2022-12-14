@extends('layouts.app')

@section('style')
    @vite(['resources/css/welcome.css'])

@endsection


@section('content')
    <div class="container marketing">
        <!-- START THE FEATURETTES -->
        <div class="row featurette">
            <div class="col-md-10 mx-auto">

                <canvas id="lineChart"></canvas>

            </div>

        </div>

    </div>
@endsection


@section('link')
    <!-- MDB -->
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script>//line

        var cData = JSON.parse(`<?php echo $chart_data; ?>`);
        var ctxL = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: cData.label,
                datasets: [{
                    label: "Динамика изменения веса",
                    data: cData.data,
                    backgroundColor: [
                        'rgba(3, 185, 44, .2)',
                    ],
                    borderColor: [
                        'rgb(3,185,44)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true
            }
        })
        ;</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    {{--</body>--}}
    {{--</html>--}}

@endsection
