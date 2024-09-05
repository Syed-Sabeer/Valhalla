<?php 
include("./common/nav.php");
?>
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-bar">
                            <div class="page-title-breadcrumb">
                                <div class="pull-left">
                                    <div class="page-title">
                                        Basic Tables
                                    </div>
                                </div>
                                <ol class="breadcrumb page-breadcrumb pull-right">
                                    <li>
                                        <i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li>
                                        <a class="parent-item" href="">Data Tables</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active">Basic Tables
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card card-topline-green">
                                            <div class="card-head">
                                                <header>
                                                    BASIC TABLE
                                                </header>
                                                <div class="tools">
                                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a><a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a><a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-scrollable">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    #
                                                                </th>
                                                                <th>
                                                                    First Name
                                                                </th>
                                                                <th>
                                                                    Last Name
                                                                </th>
                                                                <th>
                                                                    Username
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    1
                                                                </td>
                                                                <td>
                                                                    Mark
                                                                </td>
                                                                <td>
                                                                    Otto
                                                                </td>
                                                                <td>
                                                                    @mdo
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    2
                                                                </td>
                                                                <td>
                                                                    Jacob
                                                                </td>
                                                                <td>
                                                                    Thornton
                                                                </td>
                                                                <td>
                                                                    @fat
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    3
                                                                </td>
                                                                <td>
                                                                    Larry
                                                                </td>
                                                                <td>
                                                                    the Bird
                                                                </td>
                                                                <td>
                                                                    @twitter
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    4
                                                                </td>
                                                                <td>
                                                                    John
                                                                </td>
                                                                <td>
                                                                    smith
                                                                </td>
                                                                <td>
                                                                    @twitter
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card card-topline-yellow">
                                            <div class="card-head">
                                                <header>
                                                    BORDER TABLE
                                                </header>
                                                <div class="tools">
                                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a><a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a><a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-scrollable">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    #
                                                                </th>
                                                                <th>
                                                                    First Name
                                                                </th>
                                                                <th>
                                                                    Last Name
                                                                </th>
                                                                <th>
                                                                    Username
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td rowspan="2">
                                                                    1
                                                                </td>
                                                                <td>
                                                                    Mark
                                                                </td>
                                                                <td>
                                                                    Otto
                                                                </td>
                                                                <td>
                                                                    @mdo
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Mark
                                                                </td>
                                                                <td>
                                                                    Otto
                                                                </td>
                                                                <td>
                                                                    @TwBootstrap
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    2
                                                                </td>
                                                                <td>
                                                                    Jacob
                                                                </td>
                                                                <td>
                                                                    Thornton
                                                                </td>
                                                                <td>
                                                                    @fat
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    3
                                                                </td>
                                                                <td colspan="2">
                                                                    Larry the Bird
                                                                </td>
                                                                <td>
                                                                    @twitter
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card card-topline-red">
                                            <div class="card-head">
                                                <header>
                                                    STRIPED TABLE
                                                </header>
                                                <div class="tools">
                                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a><a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a><a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-scrollable">
                                                    <table class="table table-striped table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    #
                                                                </th>
                                                                <th>
                                                                    First Name
                                                                </th>
                                                                <th>
                                                                    Last Name
                                                                </th>
                                                                <th>
                                                                    Username
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    1
                                                                </td>
                                                                <td>
                                                                    Mark
                                                                </td>
                                                                <td>
                                                                    Otto
                                                                </td>
                                                                <td>
                                                                    makr124
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    2
                                                                </td>
                                                                <td>
                                                                    Jacob
                                                                </td>
                                                                <td>
                                                                    Nilson
                                                                </td>
                                                                <td>
                                                                    jac123
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    3
                                                                </td>
                                                                <td>
                                                                    Larry
                                                                </td>
                                                                <td>
                                                                    Cooper
                                                                </td>
                                                                <td>
                                                                    lar
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    4
                                                                </td>
                                                                <td>
                                                                    Sandy
                                                                </td>
                                                                <td>
                                                                    Lim
                                                                </td>
                                                                <td>
                                                                    sanlim
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    5
                                                                </td>
                                                                <td>
                                                                    Mark
                                                                </td>
                                                                <td>
                                                                    Otto
                                                                </td>
                                                                <td>
                                                                    makr124
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    6
                                                                </td>
                                                                <td>
                                                                    Jacob
                                                                </td>
                                                                <td>
                                                                    Nilson
                                                                </td>
                                                                <td>
                                                                    jac123
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    7
                                                                </td>
                                                                <td>
                                                                    Larry
                                                                </td>
                                                                <td>
                                                                    Cooper
                                                                </td>
                                                                <td>
                                                                    lar
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    8
                                                                </td>
                                                                <td>
                                                                    Sandy
                                                                </td>
                                                                <td>
                                                                    Lim
                                                                </td>
                                                                <td>
                                                                    sanlim
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    9
                                                                </td>
                                                                <td>
                                                                    Jacob
                                                                </td>
                                                                <td>
                                                                    Nilson
                                                                </td>
                                                                <td>
                                                                    jac123
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card card-topline-aqua">
                                            <div class="card-head">
                                                <header>
                                                    CONTEXTUAL TABLE
                                                </header>
                                                <div class="tools">
                                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a><a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a><a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-scrollable">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    #
                                                                </th>
                                                                <th>
                                                                    Column heading
                                                                </th>
                                                                <th>
                                                                    Column heading
                                                                </th>
                                                                <th>
                                                                    Column heading
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="active">
                                                                <th scope="row">
                                                                    1
                                                                </th>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    2
                                                                </th>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                            </tr>
                                                            <tr class="success">
                                                                <th scope="row">
                                                                    3
                                                                </th>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    4
                                                                </th>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                            </tr>
                                                            <tr class="info">
                                                                <th scope="row">
                                                                    5
                                                                </th>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    6
                                                                </th>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                            </tr>
                                                            <tr class="warning">
                                                                <th scope="row">
                                                                    7
                                                                </th>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">
                                                                    8
                                                                </th>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                            </tr>
                                                            <tr class="danger">
                                                                <th scope="row">
                                                                    9
                                                                </th>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                                <td>
                                                                    Column content
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-topline-purple">
                                    <div class="card-head">
                                        <header>
                                            STRIPED TABLE
                                        </header>
                                        <div class="tools">
                                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a><a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a><a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped custom-table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Company
                                                        </th>
                                                        <th>
                                                            Descrition
                                                        </th>
                                                        <th>
                                                            Profit
                                                        </th>
                                                        <th>
                                                            Progress
                                                        </th>
                                                        <th>
                                                            Status
                                                        </th>
                                                        <th>
                                                            Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#">VectorLab</a>
                                                        </td>
                                                        <td>
                                                            Lorem Ipsum dorolo imit
                                                        </td>
                                                        <td>
                                                            693030.00$
                                                        </td>
                                                        <td>
                                                            <div class="progress progress-striped progress-xs">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-success width-80"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="label label-info label-mini">Due</span>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#">Admin Lab</a>
                                                        </td>
                                                        <td>
                                                            Lorem Ipsum dorolo
                                                        </td>
                                                        <td>
                                                            10003.00$
                                                        </td>
                                                        <td>
                                                            <div class="progress progress-striped progress-xs">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning width-60"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="label label-warning label-mini">Due</span>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#">Metro Lab</a>
                                                        </td>
                                                        <td>
                                                            Lorem Ipsum dorolo
                                                        </td>
                                                        <td>
                                                            23400.00$
                                                        </td>
                                                        <td>
                                                            <div class="progress progress-striped progress-xs">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" role="progressbar" class="progress-bar progress-bar-info width-75"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="label label-success label-mini">Paid</span>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#">Flat Lab</a>
                                                        </td>
                                                        <td>
                                                            Lorem Ipsum dorolo
                                                        </td>
                                                        <td>
                                                            36342.50$
                                                        </td>
                                                        <td>
                                                            <div class="progress progress-striped progress-xs">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-danger width-40"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="label label-danger label-mini">Paid</span>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#">Slick Lab</a>
                                                        </td>
                                                        <td>
                                                            Lorem Ipsum dorolo imit
                                                        </td>
                                                        <td>
                                                            4022.00$
                                                        </td>
                                                        <td>
                                                            <div class="progress progress-striped progress-xs">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-success width-80"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="label label-primary label-mini">Due</span>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#">TroCode</a>
                                                        </td>
                                                        <td>
                                                            Lorem Ipsum dorolo
                                                        </td>
                                                        <td>
                                                            526456.00$
                                                        </td>
                                                        <td>
                                                            <div class="progress progress-striped progress-xs">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning width-60"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="label label-warning label-mini">Due</span>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#">Vector Ltd</a>
                                                        </td>
                                                        <td>
                                                            Lorem Ipsum dorolo imit
                                                        </td>
                                                        <td>
                                                            12120.00$
                                                        </td>
                                                        <td>
                                                            <div class="progress progress-striped progress-xs">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-info width-40"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="label label-success label-mini">Due</span>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#">Dashboard</a>
                                                        </td>
                                                        <td>
                                                            Lorem Ipsum dorolo
                                                        </td>
                                                        <td>
                                                            56456.00$
                                                        </td>
                                                        <td>
                                                            <div class="progress progress-striped progress-xs">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" role="progressbar" class="progress-bar progress-bar-success width-75"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="label label-warning label-mini">Due</span>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#">Vector Ltd</a>
                                                        </td>
                                                        <td>
                                                            Lorem Ipsum dorolo imit
                                                        </td>
                                                        <td>
                                                            12120.00$
                                                        </td>
                                                        <td>
                                                            <div class="progress progress-striped progress-xs">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-info width-80"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="label label-info label-mini">Due</span>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#">Modern</a>
                                                        </td>
                                                        <td>
                                                            Lorem Ipsum dorolo
                                                        </td>
                                                        <td>
                                                            56456.00$
                                                        </td>
                                                        <td>
                                                            <div class="progress progress-striped progress-xs">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-info width-60"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <span class="label label-warning label-mini">Due</span>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end page content --><!-- start chat sidebar -->
                <div class="chat-sidebar-container" data-close-on-body-click="false">
                    <div class="chat-sidebar">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab">Theme</a>
                            </li>
                            <li class="nav-item">
                                <a href="#quick_sidebar_tab_2" class="nav-link tab-icon" data-toggle="tab">Settings</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane chat-sidebar-settings in show active animated shake" role="tabpanel" id="quick_sidebar_tab_1">
                                <div class="slimscroll-style">
                                    <div class="theme-light-dark">
                                        <h6>
                                            Sidebar Theme
                                        </h6><button type="button" data-theme="white" class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light Sidebar</button><button type="button" data-theme="dark" class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark Sidebar</button>
                                    </div>
                                    <div class="theme-light-dark">
                                        <h6>
                                            Sidebar Color
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li class="complete">
                                                <div class="theme-color sidebar-theme">
                                                    <a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <h6>
                                            Header Brand color
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li class="theme-option">
                                                <div class="theme-color logo-theme">
                                                    <a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <h6>
                                            Header color
                                        </h6>
                                        <ul class="list-unstyled">
                                            <li class="theme-option">
                                                <div class="theme-color header-theme">
                                                    <a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a><a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- Start Setting Panel -->
                            <div class="tab-pane chat-sidebar-settings animated slideInUp" id="quick_sidebar_tab_2">
                                <div class="chat-sidebar-settings-list slimscroll-style">
                                    <div class="chat-header">
                                        <h5 class="list-heading">
                                            Layout Settings
                                        </h5>
                                    </div>
                                    <div class="chatpane inner-content">
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Sidebar Position
                                                </div>
                                                <div class="setting-set">
                                                    <select class="sidebar-pos-option form-control input-inline input-sm input-small">
                                                        <option value="left" selected="selected">
                                                            Left
                                                        </option>
                                                        <option value="right">
                                                            Right
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Header
                                                </div>
                                                <div class="setting-set">
                                                    <select class="page-header-option form-control input-inline input-sm input-small">
                                                        <option value="fixed" selected="selected">
                                                            Fixed
                                                        </option>
                                                        <option value="default">
                                                            Default
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Sidebar Menu
                                                </div>
                                                <div class="setting-set">
                                                    <select class="sidebar-menu-option form-control input-inline input-sm input-small">
                                                        <option value="accordion" selected="selected">
                                                            Accordion
                                                        </option>
                                                        <option value="hover">
                                                            Hover
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Footer
                                                </div>
                                                <div class="setting-set">
                                                    <select class="page-footer-option form-control input-inline input-sm input-small">
                                                        <option value="fixed">
                                                            Fixed
                                                        </option>
                                                        <option value="default" selected="selected">
                                                            Default
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-header">
                                            <h5 class="list-heading">
                                                Account Settings
                                            </h5>
                                        </div>
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Notifications
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1"><input type="checkbox" id="switch-1" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Show Online
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-7"><input type="checkbox" id="switch-7" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Status
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-2"><input type="checkbox" id="switch-2" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    2 Steps Verification
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-3"><input type="checkbox" id="switch-3" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-header">
                                            <h5 class="list-heading">
                                                General Settings
                                            </h5>
                                        </div>
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Location
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-4"><input type="checkbox" id="switch-4" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Save Histry
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-5"><input type="checkbox" id="switch-5" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">
                                                    Auto Updates
                                                </div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-6"><input type="checkbox" id="switch-6" class="mdl-switch__input" checked></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end chat sidebar -->
            </div><!-- end page container --><!-- start footer -->
            <?php 
include("./common/footer.php");
?>