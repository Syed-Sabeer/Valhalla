<?php 
include("./common/nav.php");
?>
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-bar">
                            <div class="page-title-breadcrumb">
                                <div class="pull-left">
                                    <div class="page-title">
                                        Booked Trips
                                    </div>
                                </div>
                                <ol class="breadcrumb page-breadcrumb pull-right">
                                    <li>
                                        <i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li>
                                        <a class="parent-item" href="">Trip</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active">Booked Trips
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            Booked Trips
                                        </header>
                                        <div class="tools">
                                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a><a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a><a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-scrollable">
                                            <table id="tableExport" class="display">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            #
                                                        </th>
                                                        <th>
                                                            Trip Id
                                                        </th>
                                                        <th>
                                                            Passenger Name
                                                        </th>
                                                        <th>
                                                            Trip From
                                                        </th>
                                                        <th>
                                                            Trip To
                                                        </th>
                                                        <th>
                                                            Allocated Driver
                                                        </th>
                                                        <th>
                                                            Start Time
                                                        </th>
                                                        <th>
                                                            Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            ID234
                                                        </td>
                                                        <td>
                                                            John Smith
                                                        </td>
                                                        <td>
                                                            34, Alax street
                                                        </td>
                                                        <td>
                                                            99 Myrtle Dr.Long Branch
                                                        </td>
                                                        <td>
                                                            Kevin Wilson
                                                        </td>
                                                        <td>
                                                            22-03-2018 12:34
                                                        </td>
                                                        <td>
                                                            <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><button class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>
                                                            ID244
                                                        </td>
                                                        <td>
                                                            William Miller
                                                        </td>
                                                        <td>
                                                            823 Lincoln Ave.Huntsville
                                                        </td>
                                                        <td>
                                                            3 Cedar Swamp Rd. Crown Point
                                                        </td>
                                                        <td>
                                                            Daniel Davis
                                                        </td>
                                                        <td>
                                                            12-03-2018 12:40
                                                        </td>
                                                        <td>
                                                            <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><button class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            3
                                                        </td>
                                                        <td>
                                                            ID254
                                                        </td>
                                                        <td>
                                                            Daniel Davis
                                                        </td>
                                                        <td>
                                                            7578 Vale Ave. Canfield
                                                        </td>
                                                        <td>
                                                            619 S. Wayne Ave. Fairport
                                                        </td>
                                                        <td>
                                                            Jason Smith
                                                        </td>
                                                        <td>
                                                            16-03-2018 11:34
                                                        </td>
                                                        <td>
                                                            <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><button class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            4
                                                        </td>
                                                        <td>
                                                            ID264
                                                        </td>
                                                        <td>
                                                            Kevin Wilson
                                                        </td>
                                                        <td>
                                                            568 Canal Street Toledo
                                                        </td>
                                                        <td>
                                                            892 Myers Ave. Des Moines
                                                        </td>
                                                        <td>
                                                            William Miller
                                                        </td>
                                                        <td>
                                                            11-03-2018 02:14
                                                        </td>
                                                        <td>
                                                            <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><button class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            5
                                                        </td>
                                                        <td>
                                                            ID274
                                                        </td>
                                                        <td>
                                                            Jason Smith
                                                        </td>
                                                        <td>
                                                            114 East Edgewood St.
                                                        </td>
                                                        <td>
                                                            7 Glen Ridge Street Fairmont
                                                        </td>
                                                        <td>
                                                            Ronald Thomas
                                                        </td>
                                                        <td>
                                                            23-02-2018 12:34
                                                        </td>
                                                        <td>
                                                            <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><button class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            6
                                                        </td>
                                                        <td>
                                                            ID284
                                                        </td>
                                                        <td>
                                                            Ronald Thomas
                                                        </td>
                                                        <td>
                                                            624 Monroe St. Irmo
                                                        </td>
                                                        <td>
                                                            8373 S. Santa Clara Drive Mc Lean
                                                        </td>
                                                        <td>
                                                            Mary White
                                                        </td>
                                                        <td>
                                                            12-03-2018 12:55
                                                        </td>
                                                        <td>
                                                            <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><button class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            7
                                                        </td>
                                                        <td>
                                                            ID294
                                                        </td>
                                                        <td>
                                                            Ryan Allen
                                                        </td>
                                                        <td>
                                                            37 La Sierra St. Mount Holly
                                                        </td>
                                                        <td>
                                                            425 Sage Street Leesburg
                                                        </td>
                                                        <td>
                                                            Nancy Clark
                                                        </td>
                                                        <td>
                                                            02-03-2018 07:34
                                                        </td>
                                                        <td>
                                                            <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><button class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            8
                                                        </td>
                                                        <td>
                                                            ID236
                                                        </td>
                                                        <td>
                                                            Brandon Hill
                                                        </td>
                                                        <td>
                                                            61 East Tallwood Ave. Cumming
                                                        </td>
                                                        <td>
                                                            8490 Middle River Ave. Roslindale
                                                        </td>
                                                        <td>
                                                            Sarah k
                                                        </td>
                                                        <td>
                                                            16-03-2018 10:38
                                                        </td>
                                                        <td>
                                                            <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><button class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            9
                                                        </td>
                                                        <td>
                                                            ID233
                                                        </td>
                                                        <td>
                                                            William Miller
                                                        </td>
                                                        <td>
                                                            4 Bedford Dr. Ashland
                                                        </td>
                                                        <td>
                                                            17 Lyme Ave. Redford
                                                        </td>
                                                        <td>
                                                            Lisa Scott
                                                        </td>
                                                        <td>
                                                            09-03-2018 12:54
                                                        </td>
                                                        <td>
                                                            <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><button class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            10
                                                        </td>
                                                        <td>
                                                            ID237
                                                        </td>
                                                        <td>
                                                            John Smith
                                                        </td>
                                                        <td>
                                                            941 Foster Street Shakopee
                                                        </td>
                                                        <td>
                                                            24 Amerige Rd. Utica
                                                        </td>
                                                        <td>
                                                            Kevin Wilson
                                                        </td>
                                                        <td>
                                                            12-03-2018 12:34
                                                        </td>
                                                        <td>
                                                            <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><button class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            11
                                                        </td>
                                                        <td>
                                                            ID238
                                                        </td>
                                                        <td>
                                                            William Miller
                                                        </td>
                                                        <td>
                                                            37 La Sierra St. Mount Holly
                                                        </td>
                                                        <td>
                                                            425 Sage Street Leesburg
                                                        </td>
                                                        <td>
                                                            Daniel Davis
                                                        </td>
                                                        <td>
                                                            18-02-2018 18:34
                                                        </td>
                                                        <td>
                                                            <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><button class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            12
                                                        </td>
                                                        <td>
                                                            ID239
                                                        </td>
                                                        <td>
                                                            Daniel Davis
                                                        </td>
                                                        <td>
                                                            624 Monroe St. Irmo
                                                        </td>
                                                        <td>
                                                            8373 S. Santa Clara Drive Mc Lean
                                                        </td>
                                                        <td>
                                                            Jason Smith
                                                        </td>
                                                        <td>
                                                            12-03-2018 12:34
                                                        </td>
                                                        <td>
                                                            <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><button class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            13
                                                        </td>
                                                        <td>
                                                            ID231
                                                        </td>
                                                        <td>
                                                            Kevin Wilson
                                                        </td>
                                                        <td>
                                                            34, Alax street
                                                        </td>
                                                        <td>
                                                            Au, xyz road
                                                        </td>
                                                        <td>
                                                            William Miller
                                                        </td>
                                                        <td>
                                                            23-02-2018 12:34
                                                        </td>
                                                        <td>
                                                            <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><button class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            14
                                                        </td>
                                                        <td>
                                                            ID232
                                                        </td>
                                                        <td>
                                                            Jason Smith
                                                        </td>
                                                        <td>
                                                            34, Alax street
                                                        </td>
                                                        <td>
                                                            Au, xyz road
                                                        </td>
                                                        <td>
                                                            Ronald Thomas
                                                        </td>
                                                        <td>
                                                            24-02-2018 12:34
                                                        </td>
                                                        <td>
                                                            <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><button class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            15
                                                        </td>
                                                        <td>
                                                            ID233
                                                        </td>
                                                        <td>
                                                            Ronald Thomas
                                                        </td>
                                                        <td>
                                                            34, Alax street
                                                        </td>
                                                        <td>
                                                            Au, xyz road
                                                        </td>
                                                        <td>
                                                            Mary White
                                                        </td>
                                                        <td>
                                                            13-02-2018 12:34
                                                        </td>
                                                        <td>
                                                            <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><button class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            16
                                                        </td>
                                                        <td>
                                                            ID234
                                                        </td>
                                                        <td>
                                                            Ryan Allen
                                                        </td>
                                                        <td>
                                                            34, Alax street
                                                        </td>
                                                        <td>
                                                            Au, xyz road
                                                        </td>
                                                        <td>
                                                            Nancy Clark
                                                        </td>
                                                        <td>
                                                            27-02-2018 12:34
                                                        </td>
                                                        <td>
                                                            <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><button class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            17
                                                        </td>
                                                        <td>
                                                            ID235
                                                        </td>
                                                        <td>
                                                            Brandon Hill
                                                        </td>
                                                        <td>
                                                            34, Alax street
                                                        </td>
                                                        <td>
                                                            Au, xyz road
                                                        </td>
                                                        <td>
                                                            Sarah k
                                                        </td>
                                                        <td>
                                                            21-02-2018 12:34
                                                        </td>
                                                        <td>
                                                            <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><button class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            18
                                                        </td>
                                                        <td>
                                                            ID236
                                                        </td>
                                                        <td>
                                                            John Smith
                                                        </td>
                                                        <td>
                                                            34, Alax street
                                                        </td>
                                                        <td>
                                                            Au, xyz road
                                                        </td>
                                                        <td>
                                                            Lisa Scott
                                                        </td>
                                                        <td>
                                                            18-02-2018 12:34
                                                        </td>
                                                        <td>
                                                            <a href="edit_booking.php" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><button class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></button>
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