@extends('template')
@section('css')
<style>.chart{ height: 350px; }</style>
@endsection
@section('content')
<div class="row">
	<div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Real Time Kurs</h3>
            </div>
            <div class="panel-body">
                <div class="chart" id="realTimeChart"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Transaction's Traffics</h3>
            </div>
            <div class="panel-body">
                <div id="basicChart" class="chart"></div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('js')
<script>
        jQuery(document).ready(function () {
            FlotChart.init();
        });
    </script>
@endsection

