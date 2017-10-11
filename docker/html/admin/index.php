<?php
/**
 * OpenEMR Demo farm Admin Page
 *
 * @link      http://www.open-emr.org
 * @author    Brady Miller <brady.g.miller@gmail.com>
 * @copyright Copyright (c) 2017 Brady Miller <brady.g.miller@gmail.com>
 * @license   GNU General Public License 3
 */
?>

<html>
    <head>

        <meta name=viewport content="width=device-width, initial-scale=1">

        <title>OpenEMR Demo Farm Admin Page</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="page-header">
                    <h1>OpenEMR Demo Farm Admin Page</h1>
                </div>
            </div>
            <div class="row">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#status">Status</a></li>
                    <li><a data-toggle="tab" href="#upforgrabs">Up For Grabs</a></li>
                    <li><a data-toggle="tab" href="#advanced">Advanced</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div id="status" class="tab-pane fade in active">
                    <div class="row text-center">
                        <h3>Status</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="row form-group">
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseStatusMain" aria-expanded="false" aria-controls="collapseStatusMain">
                                            Status Main Toggle
                                        </button>
                                        <div class="collapse" id="collapseStatusMain">
                                            <div class="panel-body">
                                                <div class="card card-body">
                                                    <div class="row col-xs-12">
                                                        <div class="btn-group-vertical form-group">
                                                            <button type="button" class="btn btn-primary procedure-demo" id="status_farm" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Status">Farm Status</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseStatusDemos" aria-expanded="false" aria-controls="collapseStatusDemos">
                                            Status Demos Toggle
                                        </button>
                                        <div class="collapse" id="collapseStatusDemos">
                                            <div class="panel-body">
                                                <div class="card card-body">
                                                    <div class="row col-xs-12">
                                                        <div class="btn-group-vertical form-group">
                                                            <button type="button" class="btn btn-primary procedure-demo" id="status_one_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Status">One Status</button>
                                                            <button type="button" class="btn btn-primary procedure-demo" id="status_two_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Status">Two Status</button>
                                                            <button type="button" class="btn btn-primary procedure-demo" id="status_three_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Status">Three Status</button>
                                                            <button type="button" class="btn btn-primary procedure-demo" id="status_four_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Status">Four Status</button>
                                                            <button type="button" class="btn btn-primary procedure-demo" id="status_five_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Status">Five Status</button>
                                                            <button type="button" class="btn btn-primary procedure-demo" id="status_six_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Status">Six Status</button>
                                                            <button type="button" class="btn btn-primary procedure-demo" id="status_seven_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Status">Seven Status</button>
                                                            <button type="button" class="btn btn-primary procedure-demo" id="status_eight_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Status">Eight Status</button>
                                                            <button type="button" class="btn btn-primary procedure-demo" id="status_nine_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Status">Nine Status</button>
                                                            <button type="button" class="btn btn-primary procedure-demo" id="status_ten_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Status">Ten Status</button>
                                                            <button type="button" class="btn btn-primary procedure-demo" id="status_edu_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Status">Edu Status</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseStatusOther" aria-expanded="false" aria-controls="collapseStatusOther">
                                            Status Other Toggle
                                        </button>
                                        <div class="collapse" id="collapseStatusOther">
                                            <div class="panel-body">
                                                <div class="card card-body">
                                                    <div class="row col-xs-12">
                                                        <div class="btn-group-vertical form-group">
                                                            <button type="button" class="btn btn-primary procedure-demo" id="status_mysql" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Status">Mysql Status</button>
                                                            <button type="button" class="btn btn-primary procedure-demo" id="status_nginx" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Status">Nginx Status</button>
                                                            <button type="button" class="btn btn-primary procedure-demo" id="status_phpmyadmin" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Status">PhpMyAdmin Status</button>
                                                            <button type="button" class="btn btn-primary procedure-demo" id="status_php" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Status">Php Status</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <pre>
                                <textarea class="form-control" id="status_output" rows="31" wrap="off" readonly></textarea>
                            </pre>
                        </div>
                    </div>
                </div>
                <div id="upforgrabs" class="tab-pane fade">
                    <div class="row text-center">
                        <h3>Up For Grabs</h3>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseAlpha" aria-expanded="false" aria-controls="collapseAlpha">
                                        Alpha Demo Details - Toggle
                                    </button>
                                    <div class="collapse" id="collapseAlpha">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <p><b>Step 1:</b> Place the repository and branch in this wiki section: <a href="http://www.open-emr.org/wiki/index.php/Development_Demo#Alpha_-_Up_For_Grabs_Demo" target="_blank">Alpha Up For Grabs Demo</a></p>
                                                    <p><b>Step 2:</b> Edit the following tab delimited file at the <b>two</b> row; place the repository(2nd column) and branch(3rd column) in the <b>two</b> row.(note this is a tab delimited file; if tabs are removed between columns, then it will break!)(also note that we are generally serving branches, however, in the unusual case of serving tagged code, then need to change 'branch' to 'tag' in the 11th column): <a href="https://github.com/openemr/demo_farm_openemr/blob/master/ip_map_branch.txt" target="_blank">ip_map_branch.txt file on github</a></p>
                                                    <p><b>Step 3:</b> Refresh the demo (ie. click the button below; after about a minute the output of the refresh will show up in the status box below).</p>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="upforgrabs_refresh_two_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Alpha Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBeta" aria-expanded="false" aria-controls="collapseBeta">
                                        Beta Demo Details - Toggle
                                    </button>
                                    <div class="collapse" id="collapseBeta">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <p><b>Step 1:</b> Place the repository and branch in this wiki section: <a href="http://www.open-emr.org/wiki/index.php/Development_Demo#Beta_-_Up_For_Grabs_Demo" target="_blank">Beta Up For Grabs Demo</a></p>
                                                    <p><b>Step 2:</b> Edit the following tab delimited file at the <b>three</b> row; place the repository(2nd column) and branch(3rd column) in the <b>three</b> row.(note this is a tab delimited file; if tabs are removed between columns, then it will break!)(also note that we are generally serving branches, however, in the unusual case of serving tagged code, then need to change 'branch' to 'tag' in the 11th column): <a href="https://github.com/openemr/demo_farm_openemr/blob/master/ip_map_branch.txt" target="_blank">ip_map_branch.txt file on github</a></p>
                                                    <p><b>Step 3:</b> Refresh the demo (ie. click the button below; after about a minute the output of the refresh will show up in the status box below).</p>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="upforgrabs_refresh_three_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Beta Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseGamma" aria-expanded="false" aria-controls="collapseGamma">
                                        Gamma Demo Details - Toggle
                                    </button>
                                    <div class="collapse" id="collapseGamma">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <p><b>Step 1:</b> Place the repository and branch in this wiki section: <a href="http://www.open-emr.org/wiki/index.php/Development_Demo#Gamma_-_Up_For_Grabs_Demo" target="_blank">Gamma Up For Grabs Demo</a></p>
                                                    <p><b>Step 2:</b> Edit the following tab delimited file at the <b>four</b> row; place the repository(2nd column) and branch(3rd column) in the <b>four</b> row.(note this is a tab delimited file; if tabs are removed between columns, then it will break!)(also note that we are generally serving branches, however, in the unusual case of serving tagged code, then need to change 'branch' to 'tag' in the 11th column): <a href="https://github.com/openemr/demo_farm_openemr/blob/master/ip_map_branch.txt" target="_blank">ip_map_branch.txt file on github</a></p>
                                                    <p><b>Step 3:</b> Refresh the demo (ie. click the button below; after about a minute the output of the refresh will show up in the status box below).</p>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="upforgrabs_refresh_four_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Gamma Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseDelta" aria-expanded="false" aria-controls="collapseDelta">
                                        Delta Demo Details - Toggle
                                    </button>
                                    <div class="collapse" id="collapseDelta">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <p><b>Step 1:</b> Place the repository and branch in this wiki section: <a href="http://www.open-emr.org/wiki/index.php/Development_Demo#Delta_-_Up_For_Grabs_Demo" target="_blank">Delta Up For Grabs Demo</a></p>
                                                    <p><b>Step 2:</b> Edit the following tab delimited file at the <b>four_a</b> row; place the repository(2nd column) and branch(3rd column) in the <b>four_a</b> row.(note this is a tab delimited file; if tabs are removed between columns, then it will break!)(also note that we are generally serving branches, however, in the unusual case of serving tagged code, then need to change 'branch' to 'tag' in the 11th column): <a href="https://github.com/openemr/demo_farm_openemr/blob/master/ip_map_branch.txt" target="_blank">ip_map_branch.txt file on github</a></p>
                                                    <p><b>Step 3:</b> Refresh the demo (ie. click the button below; after about a minute the output of the refresh will show up in the status box below).</p>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="upforgrabs_refresh_four_a_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Delta Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEpsilon" aria-expanded="false" aria-controls="collapseEpsilon">
                                        Epsilon Demo Details - Toggle
                                    </button>
                                    <div class="collapse" id="collapseEpsilon">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <p><b>Step 1:</b> Place the repository and branch in this wiki section: <a href="http://www.open-emr.org/wiki/index.php/Development_Demo#Epsilon_-_Up_For_Grabs_Demo" target="_blank">Epsilon Up For Grabs Demo</a></p>
                                                    <p><b>Step 2:</b> Edit the following tab delimited file at the <b>four_b</b> row; place the repository(2nd column) and branch(3rd column) in the <b>four_b</b> row.(note this is a tab delimited file; if tabs are removed between columns, then it will break!)(also note that we are generally serving branches, however, in the unusual case of serving tagged code, then need to change 'branch' to 'tag' in the 11th column): <a href="https://github.com/openemr/demo_farm_openemr/blob/master/ip_map_branch.txt" target="_blank">ip_map_branch.txt file on github</a></p>
                                                    <p><b>Step 3:</b> Refresh the demo (ie. click the button below; after about a minute the output of the refresh will show up in the status box below).</p>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="upforgrabs_refresh_four_b_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Epsilon Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseZeta" aria-expanded="false" aria-controls="collapseZeta">
                                        Zeta Demo Details - Toggle
                                    </button>
                                    <div class="collapse" id="collapseZeta">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <p><b>Step 1:</b> Place the repository and branch in this wiki section: <a href="http://www.open-emr.org/wiki/index.php/Development_Demo#Zeta_-_Up_For_Grabs_Demo" target="_blank">Zeta Up For Grabs Demo</a></p>
                                                    <p><b>Step 2:</b> Edit the following tab delimited file at the <b>four_c</b> row; place the repository(2nd column) and branch(3rd column) in the <b>four_c</b> row.(note this is a tab delimited file; if tabs are removed between columns, then it will break!)(also note that we are generally serving branches, however, in the unusual case of serving tagged code, then need to change 'branch' to 'tag' in the 11th column): <a href="https://github.com/openemr/demo_farm_openemr/blob/master/ip_map_branch.txt" target="_blank">ip_map_branch.txt file on github</a></p>
                                                    <p><b>Step 3:</b> Refresh the demo (ie. click the button below; after about a minute the output of the refresh will show up in the status box below).</p>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="upforgrabs_refresh_four_c_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Zeta Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEta" aria-expanded="false" aria-controls="collapseEta">
                                        Eta Demo Details - Toggle
                                    </button>
                                    <div class="collapse" id="collapseEta">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <p><b>Step 1:</b> Place the repository and branch in this wiki section: <a href="http://www.open-emr.org/wiki/index.php/Development_Demo#Eta_-_Up_For_Grabs_Demo" target="_blank">Eta Up For Grabs Demo</a></p>
                                                    <p><b>Step 2:</b> Edit the following tab delimited file at the <b>four_d</b> row; place the repository(2nd column) and branch(3rd column) in the <b>four_d</b> row.(note this is a tab delimited file; if tabs are removed between columns, then it will break!)(also note that we are generally serving branches, however, in the unusual case of serving tagged code, then need to change 'branch' to 'tag' in the 11th column): <a href="https://github.com/openemr/demo_farm_openemr/blob/master/ip_map_branch.txt" target="_blank">ip_map_branch.txt file on github</a></p>
                                                    <p><b>Step 3:</b> Refresh the demo (ie. click the button below; after about a minute the output of the refresh will show up in the status box below).</p>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="upforgrabs_refresh_four_d_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Eta Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTheta" aria-expanded="false" aria-controls="collapseTheta">
                                        Theta Demo Details - Toggle
                                    </button>
                                    <div class="collapse" id="collapseTheta">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <p><b>Step 1:</b> Place the repository and branch in this wiki section: <a href="http://www.open-emr.org/wiki/index.php/Development_Demo#Theta_-_Up_For_Grabs_Demo" target="_blank">Theta Up For Grabs Demo</a></p>
                                                    <p><b>Step 2:</b> Edit the following tab delimited file at the <b>four_e</b> row; place the repository(2nd column) and branch(3rd column) in the <b>four_e</b> row.(note this is a tab delimited file; if tabs are removed between columns, then it will break!)(also note that we are generally serving branches, however, in the unusual case of serving tagged code, then need to change 'branch' to 'tag' in the 11th column): <a href="https://github.com/openemr/demo_farm_openemr/blob/master/ip_map_branch.txt" target="_blank">ip_map_branch.txt file on github</a></p>
                                                    <p><b>Step 3:</b> Refresh the demo (ie. click the button below; after about a minute the output of the refresh will show up in the status box below).</p>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="upforgrabs_refresh_four_e_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Theta Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseIota" aria-expanded="false" aria-controls="collapseIota">
                                        Iota Demo Details - Toggle
                                    </button>
                                    <div class="collapse" id="collapseIota">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <p><b>Step 1:</b> Place the repository and branch in this wiki section: <a href="http://www.open-emr.org/wiki/index.php/Development_Demo#Iota_-_Up_For_Grabs_Demo" target="_blank">Iota Up For Grabs Demo</a></p>
                                                    <p><b>Step 2:</b> Edit the following tab delimited file at the <b>four_f</b> row; place the repository(2nd column) and branch(3rd column) in the <b>four_f</b> row.(note this is a tab delimited file; if tabs are removed between columns, then it will break!)(also note that we are generally serving branches, however, in the unusual case of serving tagged code, then need to change 'branch' to 'tag' in the 11th column): <a href="https://github.com/openemr/demo_farm_openemr/blob/master/ip_map_branch.txt" target="_blank">ip_map_branch.txt file on github</a></p>
                                                    <p><b>Step 3:</b> Refresh the demo (ie. click the button below; after about a minute the output of the refresh will show up in the status box below).</p>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="upforgrabs_refresh_four_f_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Iota Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseKappa" aria-expanded="false" aria-controls="collapseKappa">
                                        Kappa Demo Details - Toggle
                                    </button>
                                    <div class="collapse" id="collapseKappa">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <p><b>Step 1:</b> Place the repository and branch in this wiki section: <a href="http://www.open-emr.org/wiki/index.php/Development_Demo#Kappa_-_Up_For_Grabs_Demo" target="_blank">Kappa Up For Grabs Demo</a></p>
                                                    <p><b>Step 2:</b> Edit the following tab delimited file at the <b>four_g</b> row; place the repository(2nd column) and branch(3rd column) in the <b>four_g</b> row.(note this is a tab delimited file; if tabs are removed between columns, then it will break!)(also note that we are generally serving branches, however, in the unusual case of serving tagged code, then need to change 'branch' to 'tag' in the 11th column): <a href="https://github.com/openemr/demo_farm_openemr/blob/master/ip_map_branch.txt" target="_blank">ip_map_branch.txt file on github</a></p>
                                                    <p><b>Step 3:</b> Refresh the demo (ie. click the button below; after about a minute the output of the refresh will show up in the status box below).</p>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="upforgrabs_refresh_four_g_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Kappa Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseLambda" aria-expanded="false" aria-controls="collapseLambda">
                                        Lambda Demo Details - Toggle
                                    </button>
                                    <div class="collapse" id="collapseLambda">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <p><b>Step 1:</b> Place the repository and branch in this wiki section: <a href="http://www.open-emr.org/wiki/index.php/Development_Demo#Lambda_-_Up_For_Grabs_Demo" target="_blank">Lambda Up For Grabs Demo</a></p>
                                                    <p><b>Step 2:</b> Edit the following tab delimited file at the <b>four_h</b> row; place the repository(2nd column) and branch(3rd column) in the <b>four_h</b> row.(note this is a tab delimited file; if tabs are removed between columns, then it will break!)(also note that we are generally serving branches, however, in the unusual case of serving tagged code, then need to change 'branch' to 'tag' in the 11th column): <a href="https://github.com/openemr/demo_farm_openemr/blob/master/ip_map_branch.txt" target="_blank">ip_map_branch.txt file on github</a></p>
                                                    <p><b>Step 3:</b> Refresh the demo (ie. click the button below; after about a minute the output of the refresh will show up in the status box below).</p>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="upforgrabs_refresh_four_h_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Lambda Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseMu" aria-expanded="false" aria-controls="collapseMu">
                                        Mu Demo Details - Toggle
                                    </button>
                                    <div class="collapse" id="collapseMu">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <p><b>Step 1:</b> Place the repository and branch in this wiki section: <a href="http://www.open-emr.org/wiki/index.php/Development_Demo#Mu_-_Up_For_Grabs_Demo" target="_blank">Mu Up For Grabs Demo</a></p>
                                                    <p><b>Step 2:</b> Edit the following tab delimited file at the <b>four_i</b> row; place the repository(2nd column) and branch(3rd column) in the <b>four_i</b> row.(note this is a tab delimited file; if tabs are removed between columns, then it will break!)(also note that we are generally serving branches, however, in the unusual case of serving tagged code, then need to change 'branch' to 'tag' in the 11th column): <a href="https://github.com/openemr/demo_farm_openemr/blob/master/ip_map_branch.txt" target="_blank">ip_map_branch.txt file on github</a></p>
                                                    <p><b>Step 3:</b> Refresh the demo (ie. click the button below; after about a minute the output of the refresh will show up in the status box below).</p>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="upforgrabs_refresh_four_i_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Mu Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <pre>
                                <textarea class="form-control" id="upforgrabs_output" rows="34" wrap="off" readonly></textarea>
                            </pre>
                        </div>
                    </div>
                </div>
                <div id="advanced" class="tab-pane fade">
                    <div class="row text-center">
                        <h3>Advanced</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        One Toggle
                                    </button>
                                    <div class="collapse" id="collapseOne">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="restart_one_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Restart">One Restart</button>
                                                    </div>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_one_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">One Refresh</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_one_a_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">One A Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Two Toggle
                                    </button>
                                    <div class="collapse" id="collapseTwo">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="restart_two_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Restart">Two Restart</button>
                                                    </div>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_two_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Two Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Three Toggle
                                    </button>
                                    <div class="collapse" id="collapseThree">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="restart_three_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Restart">Three Restart</button>
                                                    </div>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_three_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Three Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Four Toggle
                                    </button>
                                    <div class="collapse" id="collapseFour">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="restart_four_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Restart">Four Restart</button>
                                                    </div>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_four_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Four Refresh</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_four_a_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Four A Refresh</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_four_b_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Four B Refresh</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_four_c_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Four C Refresh</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_four_d_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Four D Refresh</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_four_e_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Four E Refresh</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_four_f_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Four F Refresh</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_four_g_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Four G Refresh</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_four_h_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Four H Refresh</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_four_i_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Four I Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Five Toggle
                                    </button>
                                    <div class="collapse" id="collapseFive">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="restart_five_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Restart">Five Restart</button>
                                                    </div>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_five_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Five Refresh</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_five_a_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Five A Refresh</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_five_b_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Five B Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Six Toggle
                                    </button>
                                    <div class="collapse" id="collapseSix">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="restart_six_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Restart">Six Restart</button>
                                                    </div>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_six_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Six Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Seven Toggle
                                    </button>
                                    <div class="collapse" id="collapseSeven">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="restart_seven_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Restart">Seven Restart</button>
                                                    </div>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_seven_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Seven Refresh</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_seven_a_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Seven A Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        Eight Toggle
                                    </button>
                                    <div class="collapse" id="collapseEight">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="restart_eight_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Restart">Eight Restart</button>
                                                    </div>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_eight_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Eight Refresh</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_eight_a_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Eight A Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        Nine Toggle
                                    </button>
                                    <div class="collapse" id="collapseNine">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="restart_nine_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Restart">Nine Restart</button>
                                                    </div>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_nine_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Nine Refresh</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_nine_a_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Nine A Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        Ten Toggle
                                    </button>
                                    <div class="collapse" id="collapseTen">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="restart_ten_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Restart">Ten Restart</button>
                                                    </div>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_ten_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Ten Refresh</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_ten_a_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Ten A Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEdu" aria-expanded="false" aria-controls="collapseEdu">
                                        Edu Toggle
                                    </button>
                                    <div class="collapse" id="collapseEdu">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="restart_edu_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Restart">Edu Restart</button>
                                                    </div>
                                                </div>
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_edu_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Edu Refresh</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_edu_a_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Edu A Refresh</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOther" aria-expanded="false" aria-controls="collapseOther">
                                        Other Stuff Toggle
                                    </button>
                                    <div class="collapse" id="collapseOther">
                                        <div class="panel-body">
                                            <div class="card card-body">
                                                <div class="row col-xs-12">
                                                    <div class="btn-group-vertical form-group">
                                                        <button type="button" class="btn btn-warning procedure-demo" id="restart_all_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Restart">Restart All Demos</button>
                                                        <button type="button" class="btn btn-danger procedure-demo" id="restart_database_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Restart">Restart Demo Databases</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="restart_phpmyadmin_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Restart">PhpMyAdmin Restart</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="restart_nginx_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Restart" disabled>Nginx Restart</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="restart_php_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Restart" disabled>Php Restart</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="restart_certs_openemr" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Renew" disabled>Renew SSL Certs</button>
                                                        <button type="button" class="btn btn-primary procedure-demo" id="refresh_website" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing Refresh">Refresh Website</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <pre>
                                <textarea class="form-control" id="advanced_output" rows="34" wrap="off" readonly></textarea>
                            </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>

        $(".procedure-demo").click(function(){

            var this_button = $(this).button();
            this_button.button('loading');

            var procedure = $(this).attr('id');

            if (procedure.includes('status')) {
                var outputPanel = 'status_output';
            } else if (procedure.includes('upforgrabs')) {
                // remove the 'upforgrabs_' from the procedure
                procedure = procedure.slice(11);
                var outputPanel = 'upforgrabs_output';
            } else { // procedure.includes('restart')
                var outputPanel = 'advanced_output';
            }

            document.getElementById(outputPanel).value = "";

            $.post("ajax_admin_demo_farm.php",
            {
                procedure: procedure
            },
            function(data, status){
                var entireData = "";
                data = $.parseJSON(data);
                $.each(data, function(i, item) {
                    entireData = entireData + item + "\n";
                });
                document.getElementById(outputPanel).value = entireData;
                this_button.button('reset');
            });
        });

    </script>
</html>
