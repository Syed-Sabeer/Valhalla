<?php 
include("./common/nav.php");
?>
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-bar">
                            <div class="page-title-breadcrumb">
                                <div class="pull-left">
                                    <div class="page-title">
                                        All Drivers
                                    </div>
                                </div>
                                <ol class="breadcrumb page-breadcrumb pull-right">
                                    <li>
                                        <i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li>
                                        <a class="parent-item" href="">Driver</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active">All Drivers
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <ul class="nav nav-pills nav-pills-rose">
                            <li class="nav-item tab-all">
                                <a class="nav-link active show" href="#tab1" data-toggle="tab">List View</a>
                            </li>
                            <li class="nav-item tab-all">
                                <a class="nav-link" href="#tab2" data-toggle="tab">Grid View</a>
                            </li>
                        </ul>
                        <div class="tab-content tab-space">
                            <div class="tab-pane active show" id="tab1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-box">
                                            <div class="card-head">
                                                <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></button>
                                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button">
                                                    <li class="mdl-menu__item">
                                                        <i class="material-icons">assistant_photo</i>Action
                                                    </li>
                                                    <li class="mdl-menu__item">
                                                        <i class="material-icons">print</i>Another action
                                                    </li>
                                                    <li class="mdl-menu__item">
                                                        <i class="material-icons">favorite</i>Something else here
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-scrollable">
                                                    <table class="table table-hover table-checkable order-column full-width" id="example4">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th class="center">
                                                                    Name
                                                                </th>
                                                                <th class="center">
                                                                    Mobile
                                                                </th>
                                                                <th class="center">
                                                                    Email
                                                                </th>
                                                                <th class="center">
                                                                    Address
                                                                </th>
                                                                <th class="center">
                                                                    Joining Date
                                                                </th>
                                                                <th class="center">
                                                                    Trips
                                                                </th>
                                                                <th class="center">
                                                                    Status
                                                                </th>
                                                                <th class="center">
                                                                    Action
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="odd gradeX">
                                                                <td class="user-circle-img sorting_1">
                                                                    <img src="assets/img/user/user1.jpg" alt="">
                                                                </td>
                                                                <td class="center">
                                                                    Rajesh
                                                                </td>
                                                                <td class="center">
                                                                    <a href="tel:4444565756">4444565756</a>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="mailto:shuxer@example.com">rajesh@example.com</a>
                                                                </td>
                                                                <td class="center">
                                                                    22,tilak appt. surat
                                                                </td>
                                                                <td class="center">
                                                                    22 Feb 2000
                                                                </td>
                                                                <td class="center">
                                                                    212
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm box-shadow-1 label-success">On Trip</span>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="#" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><a class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td class="user-circle-img sorting_1">
                                                                    <img src="assets/img/user/user10.jpg" alt="">
                                                                </td>
                                                                <td class="center">
                                                                    Pooja Patel
                                                                </td>
                                                                <td class="center">
                                                                    <a href="tel:444786876">444786876</a>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="mailto:shuxer@example.com">pooja@example.com</a>
                                                                </td>
                                                                <td class="center">
                                                                    22,tilak appt. surat
                                                                </td>
                                                                <td class="center">
                                                                    27 Aug 2005
                                                                </td>
                                                                <td class="center">
                                                                    153
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm box-shadow-1 label-warning">Available</span>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="#" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><a class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td class="user-circle-img sorting_1">
                                                                    <img src="assets/img/user/user2.jpg" alt="">
                                                                </td>
                                                                <td class="center">
                                                                    Sarah Smith
                                                                </td>
                                                                <td class="center">
                                                                    <a href="tel:44455546456">44455546456</a>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="mailto:shuxer@example.com">sarah@example.com</a>
                                                                </td>
                                                                <td class="center">
                                                                    22,tilak appt. surat
                                                                </td>
                                                                <td class="center">
                                                                    05 Jun 2011
                                                                </td>
                                                                <td class="center">
                                                                    345
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm box-shadow-1 label-success">On Trip</span>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="#" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><a class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td class="user-circle-img sorting_1">
                                                                    <img src="assets/img/user/user3.jpg" alt="">
                                                                </td>
                                                                <td class="center">
                                                                    John Deo
                                                                </td>
                                                                <td class="center">
                                                                    <a href="tel:444543564">444543564</a>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="mailto:shuxer@example.com">john@example.com</a>
                                                                </td>
                                                                <td class="center">
                                                                    22,tilak appt. surat
                                                                </td>
                                                                <td class="center">
                                                                    15 Feb 2012
                                                                </td>
                                                                <td class="center">
                                                                    565
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm box-shadow-1 label-danger">Leave</span>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="#" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><a class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td class="user-circle-img sorting_1">
                                                                    <img src="assets/img/user/user4.jpg" alt="">
                                                                </td>
                                                                <td class="center">
                                                                    Jay Soni
                                                                </td>
                                                                <td class="center">
                                                                    <a href="tel:444543564">444543564</a>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="mailto:shuxer@example.com">kenh@example.com</a>
                                                                </td>
                                                                <td class="center">
                                                                    22,tilak appt. surat
                                                                </td>
                                                                <td class="center">
                                                                    12 Nov 2012
                                                                </td>
                                                                <td class="center">
                                                                    524
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm box-shadow-1 label-warning">Available</span>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="#" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><a class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td class="user-circle-img sorting_1">
                                                                    <img src="assets/img/user/user5.jpg" alt="">
                                                                </td>
                                                                <td class="center">
                                                                    Jacob Ryan
                                                                </td>
                                                                <td class="center">
                                                                    <a href="tel:444543564">444543564</a>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="mailto:shuxer@example.com">johnson@example.com</a>
                                                                </td>
                                                                <td class="center">
                                                                    22,tilak appt. surat
                                                                </td>
                                                                <td class="center">
                                                                    03 Dec 2001
                                                                </td>
                                                                <td class="center">
                                                                    23
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm box-shadow-1 label-success">On Trip</span>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="#" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><a class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td class="user-circle-img sorting_1">
                                                                    <img src="assets/img/user/user6.jpg" alt="">
                                                                </td>
                                                                <td class="center">
                                                                    Megha Trivedi
                                                                </td>
                                                                <td class="center">
                                                                    <a href="tel:444543564">444543564</a>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="mailto:shuxer@example.com">megha@example.com</a>
                                                                </td>
                                                                <td class="center">
                                                                    22,tilak appt. surat
                                                                </td>
                                                                <td class="center">
                                                                    17 Mar 2013
                                                                </td>
                                                                <td class="center">
                                                                    865
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm box-shadow-1 label-warning">Available</span>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="#" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><a class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td class="user-circle-img sorting_1">
                                                                    <img src="assets/img/user/user1.jpg" alt="">
                                                                </td>
                                                                <td class="center">
                                                                    Rajesh
                                                                </td>
                                                                <td class="center">
                                                                    <a href="tel:4444565756">4444565756</a>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="mailto:shuxer@example.com">rajesh@example.com</a>
                                                                </td>
                                                                <td class="center">
                                                                    22,tilak appt. surat
                                                                </td>
                                                                <td class="center">
                                                                    22 Feb 2000
                                                                </td>
                                                                <td class="center">
                                                                    137
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm box-shadow-1 label-success">On Trip</span>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="#" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><a class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td class="user-circle-img sorting_1">
                                                                    <img src="assets/img/user/user10.jpg" alt="">
                                                                </td>
                                                                <td class="center">
                                                                    Pooja Patel
                                                                </td>
                                                                <td class="center">
                                                                    <a href="tel:444786876">444786876</a>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="mailto:shuxer@example.com">pooja@example.com</a>
                                                                </td>
                                                                <td class="center">
                                                                    22,tilak appt. surat
                                                                </td>
                                                                <td class="center">
                                                                    27 Aug 2005
                                                                </td>
                                                                <td class="center">
                                                                    534
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm box-shadow-1 label-danger">Leave</span>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="#" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><a class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td class="user-circle-img sorting_1">
                                                                    <img src="assets/img/user/user2.jpg" alt="">
                                                                </td>
                                                                <td class="center">
                                                                    Sarah Smith
                                                                </td>
                                                                <td class="center">
                                                                    <a href="tel:44455546456">44455546456</a>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="mailto:shuxer@example.com">sarah@example.com</a>
                                                                </td>
                                                                <td class="center">
                                                                    22,tilak appt. surat
                                                                </td>
                                                                <td class="center">
                                                                    05 Jun 2011
                                                                </td>
                                                                <td class="center">
                                                                    454
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm box-shadow-1 label-warning">Available</span>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="#" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><a class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td class="user-circle-img sorting_1">
                                                                    <img src="assets/img/user/user5.jpg" alt="">
                                                                </td>
                                                                <td class="center">
                                                                    Jacob Ryan
                                                                </td>
                                                                <td class="center">
                                                                    <a href="tel:444543564">444543564</a>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="mailto:shuxer@example.com">johnson@example.com</a>
                                                                </td>
                                                                <td class="center">
                                                                    22,tilak appt. surat
                                                                </td>
                                                                <td class="center">
                                                                    03 Dec 2001
                                                                </td>
                                                                <td class="center">
                                                                    865
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm box-shadow-1 label-success">On Trip</span>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="#" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><a class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td class="user-circle-img sorting_1">
                                                                    <img src="assets/img/user/user6.jpg" alt="">
                                                                </td>
                                                                <td class="center">
                                                                    Megha Trivedi
                                                                </td>
                                                                <td class="center">
                                                                    <a href="tel:444543564">444543564</a>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="mailto:shuxer@example.com">megha@example.com</a>
                                                                </td>
                                                                <td class="center">
                                                                    22,tilak appt. surat
                                                                </td>
                                                                <td class="center">
                                                                    17 Mar 2013
                                                                </td>
                                                                <td class="center">
                                                                    63
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm box-shadow-1 label-warning">Available</span>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="#" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><a class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td class="user-circle-img sorting_1">
                                                                    <img src="assets/img/user/user1.jpg" alt="">
                                                                </td>
                                                                <td class="center">
                                                                    Rajesh
                                                                </td>
                                                                <td class="center">
                                                                    <a href="tel:4444565756">4444565756</a>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="mailto:shuxer@example.com">rajesh@example.com</a>
                                                                </td>
                                                                <td class="center">
                                                                    22,tilak appt. surat
                                                                </td>
                                                                <td class="center">
                                                                    22 Feb 2000
                                                                </td>
                                                                <td class="center">
                                                                    235
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm box-shadow-1 label-warning">Available</span>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="#" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><a class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td class="user-circle-img sorting_1">
                                                                    <img src="assets/img/user/user10.jpg" alt="">
                                                                </td>
                                                                <td class="center">
                                                                    Pooja Patel
                                                                </td>
                                                                <td class="center">
                                                                    <a href="tel:444786876">444786876</a>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="mailto:shuxer@example.com">pooja@example.com</a>
                                                                </td>
                                                                <td class="center">
                                                                    22,tilak appt. surat
                                                                </td>
                                                                <td class="center">
                                                                    27 Aug 2005
                                                                </td>
                                                                <td class="center">
                                                                    137
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm box-shadow-1 label-success">On Trip</span>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="#" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><a class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd gradeX">
                                                                <td class="user-circle-img sorting_1">
                                                                    <img src="assets/img/user/user2.jpg" alt="">
                                                                </td>
                                                                <td class="center">
                                                                    Sarah Smith
                                                                </td>
                                                                <td class="center">
                                                                    <a href="tel:44455546456">44455546456</a>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="mailto:shuxer@example.com">sarah@example.com</a>
                                                                </td>
                                                                <td class="center">
                                                                    22,tilak appt. surat
                                                                </td>
                                                                <td class="center">
                                                                    05 Jun 2011
                                                                </td>
                                                                <td class="center">
                                                                    976
                                                                </td>
                                                                <td>
                                                                    <span class="label label-sm box-shadow-1 label-danger">Leave</span>
                                                                </td>
                                                                <td class="center">
                                                                    <a href="#" class="btn btn-tbl-edit btn-xs"><i class="fa fa-pencil"></i></a><a class="btn btn-tbl-delete btn-xs"><i class="fa fa-trash-o"></i></a>
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
                            <div class="tab-pane" id="tab2">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="m-b-20">
                                                <div class="doctor-profile">
                                                    <div class="profile-header bg-b-purple">
                                                        <div class="user-name">
                                                            Pooja Patel
                                                        </div>
                                                        <div class="name-center">
                                                            435 Trips
                                                        </div>
                                                    </div><img src="assets/img/user/usrbig1.jpg" class="user-img" alt="">
                                                    <div class="col-md-12 col-sm-12 rating-style">
                                                        <i class="material-icons">star</i><i class="material-icons">star_half</i><i class="material-icons">star_border</i><i class="material-icons">star_border</i><i class="material-icons">star_border</i>
                                                    </div>
                                                    <p>
                                                        A-103, shyam gokul flats, Mahatma Road<br>
                                                        Mumbai
                                                    </p>
                                                    <div>
                                                        <p>
                                                            <i class="fa fa-phone"></i> <a href="tel:(123)456-7890">(123)456-7890</a>
                                                        </p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="staff_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="m-b-20">
                                                <div class="doctor-profile">
                                                    <div class="profile-header cyan-bgcolor">
                                                        <div class="user-name">
                                                            Smita Patil
                                                        </div>
                                                        <div class="name-center">
                                                            876 Trips
                                                        </div>
                                                    </div><img src="assets/img/user/usrbig2.jpg" class="user-img" alt="">
                                                    <div class="col-md-12 col-sm-12 rating-style">
                                                        <i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star_half</i><i class="material-icons">star_border</i>
                                                    </div>
                                                    <p>
                                                        45, Krishna Tower, Near Bus Stop, Satellite,<br>
                                                        Ahmedabad
                                                    </p>
                                                    <div>
                                                        <p>
                                                            <i class="fa fa-phone"></i> <a href="tel:(123)456-7890">(123)456-7890</a>
                                                        </p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="staff_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="m-b-20">
                                                <div class="doctor-profile">
                                                    <div class="profile-header light-dark-bgcolor">
                                                        <div class="user-name">
                                                            John Smith
                                                        </div>
                                                        <div class="name-center">
                                                            234 Trips
                                                        </div>
                                                    </div><img src="assets/img/user/usrbig3.jpg" class="user-img" alt="">
                                                    <div class="col-md-12 col-sm-12 rating-style">
                                                        <i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i>
                                                    </div>
                                                    <p>
                                                        456, Estern evenue, Courtage area,<br>
                                                        New York
                                                    </p>
                                                    <div>
                                                        <p>
                                                            <i class="fa fa-phone"></i> <a href="tel:(123)456-7890">(123)456-7890</a>
                                                        </p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="staff_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="m-b-20">
                                                <div class="doctor-profile">
                                                    <div class="profile-header bg-b-orange">
                                                        <div class="user-name">
                                                            Pooja Patel
                                                        </div>
                                                        <div class="name-center">
                                                            23 Trips
                                                        </div>
                                                    </div><img src="assets/img/user/usrbig4.jpg" class="user-img" alt="">
                                                    <div class="col-md-12 col-sm-12 rating-style">
                                                        <i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star_half</i>
                                                    </div>
                                                    <p>
                                                        A-103, shyam gokul flats, Mahatma Road<br>
                                                        Mumbai
                                                    </p>
                                                    <div>
                                                        <p>
                                                            <i class="fa fa-phone"></i> <a href="tel:(123)456-7890">(123)456-7890</a>
                                                        </p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="staff_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="m-b-20">
                                                <div class="doctor-profile">
                                                    <div class="profile-header bg-b-green">
                                                        <div class="user-name">
                                                            Smita Patil
                                                        </div>
                                                        <div class="name-center">
                                                            864 Trips
                                                        </div>
                                                    </div><img src="assets/img/user/usrbig5.jpg" class="user-img" alt="">
                                                    <div class="col-md-12 col-sm-12 rating-style">
                                                        <i class="material-icons">star</i><i class="material-icons">star_border</i><i class="material-icons">star_border</i><i class="material-icons">star_border</i><i class="material-icons">star_border</i>
                                                    </div>
                                                    <p>
                                                        45, Krishna Tower, Near Bus Stop, Satellite,<br>
                                                        Ahmedabad
                                                    </p>
                                                    <div>
                                                        <p>
                                                            <i class="fa fa-phone"></i> <a href="tel:(123)456-7890">(123)456-7890</a>
                                                        </p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="staff_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="m-b-20">
                                                <div class="doctor-profile">
                                                    <div class="profile-header bg-b-danger">
                                                        <div class="user-name">
                                                            John Smith
                                                        </div>
                                                        <div class="name-center">
                                                            424 Trips
                                                        </div>
                                                    </div><img src="assets/img/user/usrbig6.jpg" class="user-img" alt="">
                                                    <div class="col-md-12 col-sm-12 rating-style">
                                                        <i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star_half</i><i class="material-icons">star_border</i>
                                                    </div>
                                                    <p>
                                                        456, Estern evenue, Courtage area,<br>
                                                        New York
                                                    </p>
                                                    <div>
                                                        <p>
                                                            <i class="fa fa-phone"></i> <a href="tel:(123)456-7890">(123)456-7890</a>
                                                        </p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="staff_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="m-b-20">
                                                <div class="doctor-profile">
                                                    <div class="profile-header bg-b-black">
                                                        <div class="user-name">
                                                            Pooja Patel
                                                        </div>
                                                        <div class="name-center">
                                                            754 Trips
                                                        </div>
                                                    </div><img src="assets/img/user/usrbig7.jpg" class="user-img" alt="">
                                                    <div class="col-md-12 col-sm-12 rating-style">
                                                        <i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star_half</i><i class="material-icons">star_border</i>
                                                    </div>
                                                    <p>
                                                        A-103, shyam gokul flats, Mahatma Road<br>
                                                        Mumbai
                                                    </p>
                                                    <div>
                                                        <p>
                                                            <i class="fa fa-phone"></i> <a href="tel:(123)456-7890">(123)456-7890</a>
                                                        </p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="staff_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="m-b-20">
                                                <div class="doctor-profile">
                                                    <div class="profile-header bg-b-yellow">
                                                        <div class="user-name">
                                                            Smita Patil
                                                        </div>
                                                        <div class="name-center">
                                                            842 Trips
                                                        </div>
                                                    </div><img src="assets/img/user/usrbig8.jpg" class="user-img" alt="">
                                                    <div class="col-md-12 col-sm-12 rating-style">
                                                        <i class="material-icons">star</i><i class="material-icons">star_half</i><i class="material-icons">star_border</i><i class="material-icons">star_border</i><i class="material-icons">star_border</i>
                                                    </div>
                                                    <p>
                                                        45, Krishna Tower, Near Bus Stop, Satellite,<br>
                                                        Ahmedabad
                                                    </p>
                                                    <div>
                                                        <p>
                                                            <i class="fa fa-phone"></i> <a href="tel:(123)456-7890">(123)456-7890</a>
                                                        </p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="staff_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="m-b-20">
                                                <div class="doctor-profile">
                                                    <div class="profile-header bg-b-pink">
                                                        <div class="user-name">
                                                            John Smith
                                                        </div>
                                                        <div class="name-center">
                                                            123 Trips
                                                        </div>
                                                    </div><img src="assets/img/user/usrbig9.jpg" class="user-img" alt="">
                                                    <div class="col-md-12 col-sm-12 rating-style">
                                                        <i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i><i class="material-icons">star</i>
                                                    </div>
                                                    <p>
                                                        456, Estern evenue, Courtage area,<br>
                                                        New York
                                                    </p>
                                                    <div>
                                                        <p>
                                                            <i class="fa fa-phone"></i> <a href="tel:(123)456-7890">(123)456-7890</a>
                                                        </p>
                                                    </div>
                                                    <div class="profile-userbuttons">
                                                        <a href="staff_profile.php" class="btn btn-circle deepPink-bgcolor btn-sm">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
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