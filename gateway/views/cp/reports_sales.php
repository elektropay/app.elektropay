<?= $this->load->view(branded_view('cp/header'), array('head_files' => '
<script type="text/javascript" src="' . branded_include('js/form.address.js') . '"></script>
<link rel="stylesheet" type="text/css" href="' . branded_include('css/style-shop.css') . '" />
<link rel="stylesheet" type="text/css" href="' . branded_include('css/geostyles.css') . '" />
<script type="text/javascript" src="' . branded_include('js/form.transaction.js') . '"></script>')); ?>

<style>

    #sidebar-clear{
        border-radius: 7px;
    }

    input[type="file"] {
        display: block;
        height: 50px;
        padding-top: 10px;
        color: #444;
    }

    #sidebar-default .page-menu li a {
        display: block;
        padding: 19px 10px 10px 20px;
        font-size: 16px;
        color: #eee;
        text-decoration: none;
        -webkit-transition: all 0.2s linear;
        -moz-transition: all 0.2s linear;
        -ms-transition: all 0.2s linear;
        -o-transition: all 0.2s linear;
        transition: all 0.2s linear;
    }

    .page-menu li a {
        display: block;
        padding: 13px 30px;
        font-size: 15px;
        color: #444;
        text-decoration: none;
        -webkit-transition: all 0.2s linear;
        -moz-transition: all 0.2s linear;
        -ms-transition: all 0.2s linear;
        -o-transition: all 0.2s linear;
        transition: all 0.2s linear;
    }

    .page-menu > li > .active {
        color: #6787DA;
    }

    .pagemenu li a i.ion-ios7-person-outline {
        font-size: 36px;
        position: relative;
        top: 4px;
        width: 38px;
    }

    .pagemenu li a i {
        font-size: 36px;
        position: relative;
        top: 4px;
        width: 38px;
    }

    #account #content #sidebar-default .page-menu li a i {
        min-width: 30px;
        font-size: 36px!important;
        position: relative;
        top: 4px;
        width: 38px;
    }

    #account-page #content #panel {
        top: 0;
        position: relative;
        width: 79%;
        margin-left: 35%;
        padding: 10px 60px;
        padding-bottom: 80px;
        float: right;
    }

    #account-page #content #panel.profile form {
        width: 85%!important;
        margin-top: 10px;
    }

    select {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        display: inline-block;
        height: 42px!important;
        width:80%;
        font-size: 14px;
    }

    .profile-user-info-striped .profile-info-name {
        color: #336199;
        background-color: #EDF3F4;
        border-top: 1px solid #F7FBFF;
    }

    .profile-info-row {
        display: table-row;
        width: 180px;
    }

    .profile-user-info {
        display: table;
        width: 98%;
        margin: 0 auto;
        margin-left: -25px;
    }

    .profile-user-info-striped {
        border: 1px solid #DCEBF7;
    }

    .profile-info-name {
        text-align: left;
        padding: 6px 10px 6px 4px;
        font-weight: 400;
        color: #667E99;
        text-transform: uppercase;
        color: #999;
        letter-spacing: .2px;
        background-color: transparent;
        border-top: 1px dotted #D5E4F1;
        display: table-cell;
        width: 130px;
        vertical-align: middle;
    }

    .profile-user-info-striped .profile-info-value {
        border-top: 1px dotted #DCEBF7;
        padding-left: 12px;
    }


    .profile-info-value {
        display: inline-block;
        padding: 6px 4px 6px 6px;
        border-top: 1px dotted #D5E4F1;
    }

    .profile-info-value > span {
        width: 120px;
        display: inline-block;
        font-size: 12px;
    }



</style>

<!-- END PAGE HEADER-->

<!-- BEGIN PAGE -->
<div id="content">


    <div class="menubar">
        <div class="sidebar-toggler visible-xs">
            <i class="ion-navicon"></i>
        </div>

        <div class="page-title">
            Reports / Sales this Year by Month
        </div>
        <div class="options pull-right hidden-xs">
            <a href="#"><i class="fa fa-print"></i> Print</a>
            <a href="#"><i class="fa fa-download"></i> Download</a>
        </div>
        <div class="date-range pull-right">
            <div class="input-group input-group-sm">
                <span class="input-group-addon">
                    <i class="fa fa-calendar-o"></i>
                </span>
                <input type="text" name="daterange" class="form-control" placeholder="05/01/2014 - 05/31/2014">
            </div>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="chart">
            <div class="bar-chart-wrapper">
                <div id="bar-chart" style="padding: 0px;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 996px; height: 240px;" width="996" height="240"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 223px; left: 36px; text-align: center;">January</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 223px; left: 115px; text-align: center;">February</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 223px; left: 203px; text-align: center;">March</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 223px; left: 288px; text-align: center;">April</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 223px; left: 370px; text-align: center;">May</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 223px; left: 449px; text-align: center;">June</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 223px; left: 532px; text-align: center;">July</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 223px; left: 606px; text-align: center;">August</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 223px; left: 677px; text-align: center;">September</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 223px; left: 765px; text-align: center;">October</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 223px; left: 840px; text-align: center;">November</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 83px; top: 223px; left: 922px; text-align: center;">December</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 209px; left: 23px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 168px; left: 6px; text-align: right;">2000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 126px; left: 6px; text-align: right;">4000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 84px; left: 6px; text-align: right;">6000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 42px; left: 6px; text-align: right;">8000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 0px; text-align: right;">10000</div></div></div><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 996px; height: 240px;" width="996" height="240"></canvas></div>
            </div>
            <label class="yaxis">Month, year, Sales</label>
        </div>

        <div class="filters">
            <!-- Single button -->
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Edit properties <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="http://wolfadmin.herokuapp.com/1.1/reports/sales#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>
        </div>

        <div class="data">
            <div id="datatable-example_wrapper" class="dataTables_wrapper" role="grid"><div id="datatable-example_length" class="dataTables_length"><label>Show <select size="1" name="datatable-example_length" aria-controls="datatable-example"><option value="20" selected="selected">20</option><option value="50">50</option><option value="100">100</option><option value="-1">All</option></select> entries</label></div><div class="dataTables_filter" id="datatable-example_filter"><label>Search: <input type="text" aria-controls="datatable-example"></label></div><table id="datatable-example" class="dataTable" aria-describedby="datatable-example_info">
                    <thead>
                        <tr role="row"><th tabindex="0" rowspan="1" colspan="1" class="sorting_asc" role="columnheader" aria-controls="datatable-example" aria-sort="ascending" aria-label="Year
                                           : activate to sort column descending" style="width: 97px;">Year
                            </th><th tabindex="0" rowspan="1" colspan="1" class="sorting" role="columnheader" aria-controls="datatable-example" aria-label="Month
                                     : activate to sort column ascending" style="width: 159px;">Month
                            </th><th tabindex="0" rowspan="1" colspan="1" class="sorting" role="columnheader" aria-controls="datatable-example" aria-label="Products Sold
                                     : activate to sort column ascending" style="width: 203px;">Products Sold
                            </th><th tabindex="0" rowspan="1" colspan="1" class="sorting" role="columnheader" aria-controls="datatable-example" aria-label="Total Orders
                                     : activate to sort column ascending" style="width: 185px;">Total Orders
                            </th><th tabindex="0" rowspan="1" colspan="1" class="sorting" role="columnheader" aria-controls="datatable-example" aria-label="Total Sales
                                     : activate to sort column ascending" style="width: 167px;">Total Sales
                            </th></tr>
                    </thead>

                    <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                            <td class=" sorting_1">
                                <a href="#">#2014</a>
                            </td>
                            <td class=" ">January</td>
                            <td class=" ">34</td>
                            <td class=" ">78</td>
                            <td class="center ">$3,399.99</td>
                        </tr><tr class="even">
                            <td class=" sorting_1">
                                <a href="#">#2014</a>
                            </td>
                            <td class=" ">February</td>
                            <td class=" ">153</td>
                            <td class=" ">24</td>
                            <td class="center ">$6,299.99</td>
                        </tr><tr class="odd">
                            <td class=" sorting_1">
                                <a href="#">#2014</a>
                            </td>
                            <td class=" ">March</td>
                            <td class=" ">67</td>
                            <td class=" ">56</td>
                            <td class="center ">$1,879.99</td>
                        </tr><tr class="even">
                            <td class=" sorting_1">
                                <a href="#">#2014</a>
                            </td>
                            <td class=" ">April</td>
                            <td class=" ">89</td>
                            <td class=" ">78</td>
                            <td class="center ">$2,179.99</td>
                        </tr><tr class="odd">
                            <td class=" sorting_1">
                                <a href="#">#2014</a>
                            </td>
                            <td class=" ">May</td>
                            <td class=" ">22</td>
                            <td class=" ">232</td>
                            <td class="center ">$5,599.99</td>
                        </tr><tr class="even">
                            <td class=" sorting_1">
                                <a href="#">#2014</a>
                            </td>
                            <td class=" ">June</td>
                            <td class=" ">145</td>
                            <td class=" ">342</td>
                            <td class="center ">$3,389.99</td>
                        </tr><tr class="odd">
                            <td class=" sorting_1">
                                <a href="#">#2014</a>
                            </td>
                            <td class=" ">July</td>
                            <td class=" ">123</td>
                            <td class=" ">12</td>
                            <td class="center ">$1,253.00</td>
                        </tr><tr class="even">
                            <td class=" sorting_1">
                                <a href="#">#2014</a>
                            </td>
                            <td class=" ">August</td>
                            <td class=" ">78</td>
                            <td class=" ">98</td>
                            <td class="center ">$1,845.00</td>
                        </tr><tr class="odd">
                            <td class=" sorting_1">
                                <a href="#">#2014</a>
                            </td>
                            <td class=" ">September</td>
                            <td class=" ">55</td>
                            <td class=" ">24</td>
                            <td class="center ">$1,624.90</td>
                        </tr><tr class="even">
                            <td class=" sorting_1">
                                <a href="#">#2014</a>
                            </td>
                            <td class=" ">October</td>
                            <td class=" ">203</td>
                            <td class=" ">44</td>
                            <td class="center ">$1,832.83</td>
                        </tr><tr class="odd">
                            <td class=" sorting_1">
                                <a href="#">#2014</a>
                            </td>
                            <td class=" ">November</td>
                            <td class=" ">134</td>
                            <td class=" ">122</td>
                            <td class="center ">$3,242.00</td>
                        </tr><tr class="even">
                            <td class=" sorting_1">
                                <a href="#">#2014</a>
                            </td>
                            <td class=" ">December</td>
                            <td class=" ">166</td>
                            <td class=" ">98</td>
                            <td class="center ">$1,534.70</td>
                        </tr></tbody></table><div class="dataTables_info" id="datatable-example_info">Showing 1 to 12 of 12 entries</div><div class="dataTables_paginate paging_full_numbers" id="datatable-example_paginate"><a tabindex="0" class="first paginate_button paginate_button_disabled" id="datatable-example_first">First</a><a tabindex="0" class="previous paginate_button paginate_button_disabled" id="datatable-example_previous">Previous</a><span><a tabindex="0" class="paginate_active">1</a></span><a tabindex="0" class="next paginate_button paginate_button_disabled" id="datatable-example_next">Next</a><a tabindex="0" class="last paginate_button paginate_button_disabled" id="datatable-example_last">Last</a></div></div>
        </div>
    </div>
</div>

<?= $this->load->view(branded_view('cp/footer')); ?>



<!-- richard -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script src="https://everpayinc.com/test/assets/app_v2/assets/js/formmapper/formmapper.js"></script>
<script>
    $(function() {

        $("#address_1").formmapper({details: "div#shipping-address-content"});

    });
</script>
<!-- richard -->