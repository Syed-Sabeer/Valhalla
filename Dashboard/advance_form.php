<?php 
include("./common/nav.php");
?>
                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-bar">
                            <div class="page-title-breadcrumb">
                                <div class="pull-left">
                                    <div class="page-title">
                                        Advance Form
                                    </div>
                                </div>
                                <ol class="breadcrumb page-breadcrumb pull-right">
                                    <li>
                                        <i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li>
                                        <a class="parent-item" href="">Forms</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="active">Advance Form
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            Dropzone
                                        </header><button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></button>
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
                                    <div class="card-body" id="bar-parent">
                                        <form id="my-awesome-dropzone" action="/target" class="dropzone form-horizontal" name="my-awesome-dropzone"></form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            Toggle
                                        </header><button id="panel-button1" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></button>
                                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button1">
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
                                    <div class="card-body" id="bar-parent1">
                                        <form>
                                            <div class="height-75">
                                                <label class="switchToggle"><input type="checkbox" checked><span class="slider red"></span></label><label class="switchToggle"><input type="checkbox" checked><span class="slider green"></span></label><label class="switchToggle"><input type="checkbox" checked><span class="slider aqua"></span></label><label class="switchToggle"><input type="checkbox" checked><span class="slider yellow"></span></label><label class="switchToggle"><input type="checkbox" checked><span class="slider bg-b-danger"></span></label><label class="switchToggle"><input type="checkbox" checked><span class="slider bg-b-green"></span></label><label class="switchToggle"><input type="checkbox" checked><span class="slider bg-b-black"></span></label>
                                            </div>
                                            <div class="height-75">
                                                <label class="switchToggle"><input type="checkbox" checked><span class="slider red round"></span></label><label class="switchToggle"><input type="checkbox" checked><span class="slider green round"></span></label><label class="switchToggle"><input type="checkbox" checked><span class="slider aqua round"></span></label><label class="switchToggle"><input type="checkbox" checked><span class="slider yellow round"></span></label><label class="switchToggle"><input type="checkbox" checked><span class="slider bg-b-danger round"></span></label><label class="switchToggle"><input type="checkbox" checked><span class="slider bg-b-green round"></span></label><label class="switchToggle"><input type="checkbox" checked><span class="slider bg-b-black round"></span></label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            CheckBox
                                        </header><button id="panel-button2" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></button>
                                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button2">
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
                                    <div class="card-body" id="bar-parent2">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="checkbox checkbox-icon-black">
                                                        <input id="checkbox1" type="checkbox"><label for="checkbox1">Black Checkbox</label>
                                                    </div>
                                                    <div class="checkbox checkbox-icon-yellow">
                                                        <input id="checkbox2" type="checkbox" checked="checked"> <label for="checkbox2">Yellow Checkbox</label>
                                                    </div>
                                                    <div class="checkbox checkbox-icon-red">
                                                        <input id="checkbox3" type="checkbox" checked="checked"> <label for="checkbox3">Red Checkbox</label>
                                                    </div>
                                                    <div class="checkbox checkbox-icon-aqua">
                                                        <input id="checkbox4" type="checkbox" checked="checked"> <label for="checkbox4">Aqua Checkbox</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input id="checkboxD1" type="checkbox" disabled="disabled"> <label for="checkboxD1">Checkbox Disabled</label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <input id="checkboxCD1" type="checkbox" checked="checked" disabled="disabled"> <label for="checkboxCD1">Checkbox Checked & Disabled</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="checkbox checkbox-black">
                                                        <input id="checkboxbg1" type="checkbox" checked="checked"> <label for="checkboxbg1">Black Checkbox</label>
                                                    </div>
                                                    <div class="checkbox checkbox-yellow">
                                                        <input id="checkboxbg2" type="checkbox" checked="checked"> <label for="checkboxbg2">Yellow Checkbox</label>
                                                    </div>
                                                    <div class="checkbox checkbox-red">
                                                        <input id="checkboxbg3" type="checkbox" checked="checked"> <label for="checkboxbg3">Red Checkbox</label>
                                                    </div>
                                                    <div class="checkbox checkbox-aqua">
                                                        <input id="checkboxbg4" type="checkbox" checked="checked"> <label for="checkboxbg4">Aqua Checkbox</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            Radio
                                        </header><button id="panel-button3" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></button>
                                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button3">
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
                                    <div class="card-body" id="bar-parent3">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="radio">
                                                        <input id="radiobg1" name="radio2" type="radio" checked="checked"><label for="radiobg1">Black radio</label>
                                                    </div>
                                                    <div class="radio radio-yellow">
                                                        <input id="radiobg2" name="radio2" type="radio" checked="checked"> <label for="radiobg2">Yellow radio</label>
                                                    </div>
                                                    <div class="radio radio-red">
                                                        <input id="radiobg3" name="radio2" type="radio" checked="checked"> <label for="radiobg3">Red radio</label>
                                                    </div>
                                                    <div class="radio radio-aqua">
                                                        <input id="radiobg4" name="radio2" type="radio" checked="checked"> <label for="radiobg4">Aqua radio</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="radioD1" name="radio3" type="radio" disabled="disabled"> <label for="radioD1">radio Disabled</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="radioCD1" name="radio3" type="radio" checked="checked" disabled="disabled"> <label for="radioCD1">radio Checked & Disabled</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="radioicon-group">
                                                        <div class="radioicon radioicon-black">
                                                            <input type="radio" name="option" id="radio1" checked><label for="radio1"><span class="fa-stack"><i class="fa fa-circle"></i></span>Black radio</label>
                                                        </div>
                                                        <div class="radioicon radioicon-yellow">
                                                            <input type="radio" name="option" id="radio2"><label for="radio2"><span class="fa-stack"><i class="fa fa-circle"></i></span>Yellow radio</label>
                                                        </div>
                                                        <div class="radioicon radioicon-red">
                                                            <input type="radio" name="option" id="radio3"><label for="radio3"><span class="fa-stack"><i class="fa fa-circle"></i></span>Red radio</label>
                                                        </div>
                                                        <div class="radioicon radioicon-aqua">
                                                            <input type="radio" name="option" id="radio4"><label for="radio4"><span class="fa-stack"><i class="fa fa-circle"></i></span>Aqua radio</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            Date & Time Picker
                                        </header><button id="panel-button4" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></button>
                                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button4">
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
                                    <div class="card-body" id="bar-parent5">
                                        <form>
                                            <div class="form-group row">
                                                <label class="col-md-4 control-label">DateTime Picking</label>
                                                <div class="input-group date form_datetime col-md-8" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                                                    <input class="form-control" size="16" type="text" value=""><span class="input-group-addon"><span class="fa fa-remove"></span></span><span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                </div><input type="hidden" id="dtp_input1" value=""><br>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 control-label">Date Picking</label>
                                                <div class="input-group date form_date col-md-8" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                    <input class="form-control" size="16" type="text" value=""><span class="input-group-addon"><span class="fa fa-remove"></span></span><span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                </div><input type="hidden" id="dtp_input2" value=""><br>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 control-label">Time Picking</label>
                                                <div class="input-group date form_time col-md-8" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                                                    <input class="form-control" size="16" type="text" value=""><span class="input-group-addon"><span class="fa fa-remove"></span></span><span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                                                </div><input type="hidden" id="dtp_input3" value=""><br>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            Spinner
                                        </header><button id="panel-button5" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></button>
                                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button5">
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
                                    <div class="card-body" id="bar-parent4">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Spinner1</label>
                                                        <div class="input-group spinner">
                                                            <input type="text" class="form-control" value="1">
                                                            <div class="input-group-btn-vertical">
                                                                <button class="btn btn-default" type="button" data-dir="up"><i class="fa fa-caret-up"></i></button><button class="btn btn-default" type="button" data-dir="dwn"><i class="fa fa-caret-down"></i></button>
                                                            </div>
                                                        </div><span class="help-block">Basic</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Spinner2</label>
                                                        <div class="input-group spinner">
                                                            <span class="input-group-btn"><button class="btn btn-default" data-dir="dwn" type="button"><span class="input-group-btn"><span class="fa fa-minus"></span></span></button></span><input type="number" class="form-control text-center" value="1" min="1" max="5"><span class="input-group-btn"><button class="btn btn-default" data-dir="up" type="button"><span class="input-group-btn"><span class="fa fa-plus"></span></span></button></span>
                                                        </div><span class="help-block">Max value: 5</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Spinner3</label>
                                                        <div class="input-group spinner">
                                                            <input type="number" class="form-control" value="1" step="4">
                                                            <div class="input-group-btn-vertical">
                                                                <button class="btn btn-info" type="button" data-dir="up"><i class="fa fa-caret-up"></i></button><button class="btn btn-info" type="button" data-dir="dwn"><i class="fa fa-caret-down"></i></button>
                                                            </div>
                                                        </div><span class="help-block">Step: 4</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Spinner4</label>
                                                        <div class="input-group spinner">
                                                            <span class="input-group-btn"><button class="btn btn-info" data-dir="dwn" type="button"><span class="input-group-btn"><span class="fa fa-minus"></span></span></button></span><input type="text" class="form-control text-center" value="1"><span class="input-group-btn"><button class="btn btn-danger" data-dir="up" type="button"><span class="input-group-btn"><span class="fa fa-plus"></span></span></button></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            Input mask
                                        </header><button id="panel-button6" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></button>
                                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button6">
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
                                    <div class="card-body" id="bar-parent6">
                                        <form>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label">IP</label>
                                                <div class="col-sm-10">
                                                    <input type="text" placeholder="" data-mask="999.999.999.9999" class="form-control"><span class="help-block">192.168.110.310</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label">Tax ID</label>
                                                <div class="col-sm-10">
                                                    <input type="text" placeholder="" data-mask="99-9999999" class="form-control"><span class="help-block">99-9999999</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label">Phone</label>
                                                <div class="col-sm-10">
                                                    <input type="text" placeholder="" data-mask="(999) 999-9999" class="form-control"><span class="help-block">(999) 999-9999</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label">Currency</label>
                                                <div class="col-sm-10">
                                                    <input type="text" placeholder="" data-mask="$ 999,999,999.99" class="form-control"><span class="help-block">$ 999,999,999.99</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label">Date</label>
                                                <div class="col-sm-10">
                                                    <input type="text" placeholder="" data-mask="99/99/9999" class="form-control"><span class="help-block">dd/mm/yyyy</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 control-label">Date 2</label>
                                                <div class="col-sm-10">
                                                    <input type="text" placeholder="" data-mask="99-99-9999" class="form-control"><span class="help-block">dd-mm-yyyy</span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            Input mask
                                        </header><button id="panel-button7" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></button>
                                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button7">
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
                                    <div class="card-body" id="bar-parent7">
                                        <form>
                                            <div class="form-group">
                                                <label class="control-label">Defaults:</label><input type="text" class="tags tags-input" data-type="tags" value="red,green,black,yellow">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Fruits:(fruits shown in aqua color)</label><input type="text" class="tags tags-input" data-type="fruits-tags" data-highlight-color="#00C0EF" value="apple,red,black,banana">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Fixed Width:</label><input type='text' class='tags tags-input' data-type="fixedWidth-tags">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            Select Single & Multiple
                                        </header><button id="panel-button8" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></button>
                                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button8">
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
                                    <div class="card-body" id="bar-parent10">
                                        <form class="form-horizontal">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-md-4 control-label">Single Select</label>
                                                <div class="col-lg-9 col-md-8">
                                                    <select class="form-control select2">
                                                        <option value="">
                                                            Select a state
                                                        </option>
                                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                                            <option value="AK">
                                                                Alaska
                                                            </option>
                                                            <option value="HI">
                                                                Hawaii
                                                            </option>
                                                        </optgroup>
                                                        <optgroup label="Pacific Time Zone">
                                                            <option value="CA">
                                                                California
                                                            </option>
                                                            <option value="NV">
                                                                Nevada
                                                            </option>
                                                            <option value="OR">
                                                                Oregon
                                                            </option>
                                                            <option value="WA">
                                                                Washington
                                                            </option>
                                                        </optgroup>
                                                        <optgroup label="Mountain Time Zone">
                                                            <option value="AZ">
                                                                Arizona
                                                            </option>
                                                            <option value="CO">
                                                                Colorado
                                                            </option>
                                                            <option value="ID">
                                                                Idaho
                                                            </option>
                                                            <option value="MT">
                                                                Montana
                                                            </option>
                                                            <option value="NE">
                                                                Nebraska
                                                            </option>
                                                            <option value="NM">
                                                                New Mexico
                                                            </option>
                                                            <option value="ND">
                                                                North Dakota
                                                            </option>
                                                            <option value="UT">
                                                                Utah
                                                            </option>
                                                            <option value="WY">
                                                                Wyoming
                                                            </option>
                                                        </optgroup>
                                                        <optgroup label="Central Time Zone">
                                                            <option value="AL">
                                                                Alabama
                                                            </option>
                                                            <option value="AR">
                                                                Arkansas
                                                            </option>
                                                            <option value="IL">
                                                                Illinois
                                                            </option>
                                                            <option value="IA">
                                                                Iowa
                                                            </option>
                                                            <option value="KS">
                                                                Kansas
                                                            </option>
                                                            <option value="KY">
                                                                Kentucky
                                                            </option>
                                                            <option value="LA">
                                                                Louisiana
                                                            </option>
                                                            <option value="MN">
                                                                Minnesota
                                                            </option>
                                                            <option value="MS">
                                                                Mississippi
                                                            </option>
                                                            <option value="MO">
                                                                Missouri
                                                            </option>
                                                            <option value="OK">
                                                                Oklahoma
                                                            </option>
                                                            <option value="SD">
                                                                South Dakota
                                                            </option>
                                                            <option value="TX">
                                                                Texas
                                                            </option>
                                                            <option value="TN">
                                                                Tennessee
                                                            </option>
                                                            <option value="WI">
                                                                Wisconsin
                                                            </option>
                                                        </optgroup>
                                                        <optgroup label="Eastern Time Zone">
                                                            <option value="CT">
                                                                Connecticut
                                                            </option>
                                                            <option value="DE">
                                                                Delaware
                                                            </option>
                                                            <option value="FL">
                                                                Florida
                                                            </option>
                                                            <option value="GA">
                                                                Georgia
                                                            </option>
                                                            <option value="IN">
                                                                Indiana
                                                            </option>
                                                            <option value="ME">
                                                                Maine
                                                            </option>
                                                            <option value="MD">
                                                                Maryland
                                                            </option>
                                                            <option value="MA">
                                                                Massachusetts
                                                            </option>
                                                            <option value="MI">
                                                                Michigan
                                                            </option>
                                                            <option value="NH">
                                                                New Hampshire
                                                            </option>
                                                            <option value="NJ">
                                                                New Jersey
                                                            </option>
                                                            <option value="NY">
                                                                New York
                                                            </option>
                                                            <option value="NC">
                                                                North Carolina
                                                            </option>
                                                            <option value="OH">
                                                                Ohio
                                                            </option>
                                                            <option value="PA">
                                                                Pennsylvania
                                                            </option>
                                                            <option value="RI">
                                                                Rhode Island
                                                            </option>
                                                            <option value="SC">
                                                                South Carolina
                                                            </option>
                                                            <option value="VT">
                                                                Vermont
                                                            </option>
                                                            <option value="VA">
                                                                Virginia
                                                            </option>
                                                            <option value="WV">
                                                                West Virginia
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-md-4 control-label">Single Select</label>
                                                <div class="col-lg-9 col-md-8">
                                                    <select class="form-control" id="selitemIcon">
                                                        <option value="">
                                                            Select a country
                                                        </option>
                                                        <option value="AF">
                                                            Afghanistan
                                                        </option>
                                                        <option value="AX">
                                                            Åland Islands
                                                        </option>
                                                        <option value="AL">
                                                            Albania
                                                        </option>
                                                        <option value="DZ">
                                                            Algeria
                                                        </option>
                                                        <option value="AS">
                                                            American Samoa
                                                        </option>
                                                        <option value="AD">
                                                            Andorra
                                                        </option>
                                                        <option value="AO">
                                                            Angola
                                                        </option>
                                                        <option value="AI">
                                                            Anguilla
                                                        </option>
                                                        <option value="AG">
                                                            Antigua and Barbuda
                                                        </option>
                                                        <option value="AR">
                                                            Argentina
                                                        </option>
                                                        <option value="AM">
                                                            Armenia
                                                        </option>
                                                        <option value="AW">
                                                            Aruba
                                                        </option>
                                                        <option value="AU">
                                                            Australia
                                                        </option>
                                                        <option value="AT">
                                                            Austria
                                                        </option>
                                                        <option value="AZ">
                                                            Azerbaijan
                                                        </option>
                                                        <option value="BS">
                                                            Bahamas
                                                        </option>
                                                        <option value="BH">
                                                            Bahrain
                                                        </option>
                                                        <option value="BD">
                                                            Bangladesh
                                                        </option>
                                                        <option value="BB">
                                                            Barbados
                                                        </option>
                                                        <option value="BY">
                                                            Belarus
                                                        </option>
                                                        <option value="BE">
                                                            Belgium
                                                        </option>
                                                        <option value="BZ">
                                                            Belize
                                                        </option>
                                                        <option value="BJ">
                                                            Benin
                                                        </option>
                                                        <option value="BM">
                                                            Bermuda
                                                        </option>
                                                        <option value="BT">
                                                            Bhutan
                                                        </option>
                                                        <option value="BO">
                                                            Bolivia, Plurinational State of
                                                        </option>
                                                        <option value="BQ">
                                                            Bonaire, Sint Eustatius and Saba
                                                        </option>
                                                        <option value="BA">
                                                            Bosnia and Herzegovina
                                                        </option>
                                                        <option value="BW">
                                                            Botswana
                                                        </option>
                                                        <option value="BV">
                                                            Bouvet Island
                                                        </option>
                                                        <option value="BR">
                                                            Brazil
                                                        </option>
                                                        <option value="IO">
                                                            British Indian Ocean Territory
                                                        </option>
                                                        <option value="BN">
                                                            Brunei Darussalam
                                                        </option>
                                                        <option value="BG">
                                                            Bulgaria
                                                        </option>
                                                        <option value="BF">
                                                            Burkina Faso
                                                        </option>
                                                        <option value="BI">
                                                            Burundi
                                                        </option>
                                                        <option value="KH">
                                                            Cambodia
                                                        </option>
                                                        <option value="CM">
                                                            Cameroon
                                                        </option>
                                                        <option value="CA">
                                                            Canada
                                                        </option>
                                                        <option value="CV">
                                                            Cape Verde
                                                        </option>
                                                        <option value="KY">
                                                            Cayman Islands
                                                        </option>
                                                        <option value="CF">
                                                            Central African Republic
                                                        </option>
                                                        <option value="TD">
                                                            Chad
                                                        </option>
                                                        <option value="CL">
                                                            Chile
                                                        </option>
                                                        <option value="CN">
                                                            China
                                                        </option>
                                                        <option value="CX">
                                                            Christmas Island
                                                        </option>
                                                        <option value="CC">
                                                            Cocos (Keeling) Islands
                                                        </option>
                                                        <option value="CO">
                                                            Colombia
                                                        </option>
                                                        <option value="KM">
                                                            Comoros
                                                        </option>
                                                        <option value="CG">
                                                            Congo
                                                        </option>
                                                        <option value="CD">
                                                            Congo, the Democratic Republic of the
                                                        </option>
                                                        <option value="CK">
                                                            Cook Islands
                                                        </option>
                                                        <option value="CR">
                                                            Costa Rica
                                                        </option>
                                                        <option value="CI">
                                                            Côte d'Ivoire
                                                        </option>
                                                        <option value="HR">
                                                            Croatia
                                                        </option>
                                                        <option value="CU">
                                                            Cuba
                                                        </option>
                                                        <option value="CW">
                                                            Curaçao
                                                        </option>
                                                        <option value="CY">
                                                            Cyprus
                                                        </option>
                                                        <option value="CZ">
                                                            Czech Republic
                                                        </option>
                                                        <option value="DK">
                                                            Denmark
                                                        </option>
                                                        <option value="DJ">
                                                            Djibouti
                                                        </option>
                                                        <option value="DM">
                                                            Dominica
                                                        </option>
                                                        <option value="DO">
                                                            Dominican Republic
                                                        </option>
                                                        <option value="EC">
                                                            Ecuador
                                                        </option>
                                                        <option value="EG">
                                                            Egypt
                                                        </option>
                                                        <option value="SV">
                                                            El Salvador
                                                        </option>
                                                        <option value="GQ">
                                                            Equatorial Guinea
                                                        </option>
                                                        <option value="ER">
                                                            Eritrea
                                                        </option>
                                                        <option value="EE">
                                                            Estonia
                                                        </option>
                                                        <option value="ET">
                                                            Ethiopia
                                                        </option>
                                                        <option value="FK">
                                                            Falkland Islands (Malvinas)
                                                        </option>
                                                        <option value="FO">
                                                            Faroe Islands
                                                        </option>
                                                        <option value="FJ">
                                                            Fiji
                                                        </option>
                                                        <option value="FI">
                                                            Finland
                                                        </option>
                                                        <option value="FR">
                                                            France
                                                        </option>
                                                        <option value="GF">
                                                            French Guiana
                                                        </option>
                                                        <option value="PF">
                                                            French Polynesia
                                                        </option>
                                                        <option value="TF">
                                                            French Southern Territories
                                                        </option>
                                                        <option value="GA">
                                                            Gabon
                                                        </option>
                                                        <option value="GM">
                                                            Gambia
                                                        </option>
                                                        <option value="GE">
                                                            Georgia
                                                        </option>
                                                        <option value="DE">
                                                            Germany
                                                        </option>
                                                        <option value="GH">
                                                            Ghana
                                                        </option>
                                                        <option value="GI">
                                                            Gibraltar
                                                        </option>
                                                        <option value="GR">
                                                            Greece
                                                        </option>
                                                        <option value="GL">
                                                            Greenland
                                                        </option>
                                                        <option value="GD">
                                                            Grenada
                                                        </option>
                                                        <option value="GP">
                                                            Guadeloupe
                                                        </option>
                                                        <option value="GU">
                                                            Guam
                                                        </option>
                                                        <option value="GT">
                                                            Guatemala
                                                        </option>
                                                        <option value="GG">
                                                            Guernsey
                                                        </option>
                                                        <option value="GN">
                                                            Guinea
                                                        </option>
                                                        <option value="GW">
                                                            Guinea-Bissau
                                                        </option>
                                                        <option value="GY">
                                                            Guyana
                                                        </option>
                                                        <option value="HT">
                                                            Haiti
                                                        </option>
                                                        <option value="HM">
                                                            Heard Island and McDonald Islands
                                                        </option>
                                                        <option value="VA">
                                                            Holy See (Vatican City State)
                                                        </option>
                                                        <option value="HN">
                                                            Honduras
                                                        </option>
                                                        <option value="HK">
                                                            Hong Kong
                                                        </option>
                                                        <option value="HU">
                                                            Hungary
                                                        </option>
                                                        <option value="IS">
                                                            Iceland
                                                        </option>
                                                        <option value="IN">
                                                            India
                                                        </option>
                                                        <option value="ID">
                                                            Indonesia
                                                        </option>
                                                        <option value="IR">
                                                            Iran, Islamic Republic of
                                                        </option>
                                                        <option value="IQ">
                                                            Iraq
                                                        </option>
                                                        <option value="IE">
                                                            Ireland
                                                        </option>
                                                        <option value="IM">
                                                            Isle of Man
                                                        </option>
                                                        <option value="IL">
                                                            Israel
                                                        </option>
                                                        <option value="IT">
                                                            Italy
                                                        </option>
                                                        <option value="JM">
                                                            Jamaica
                                                        </option>
                                                        <option value="JP">
                                                            Japan
                                                        </option>
                                                        <option value="JE">
                                                            Jersey
                                                        </option>
                                                        <option value="JO">
                                                            Jordan
                                                        </option>
                                                        <option value="KZ">
                                                            Kazakhstan
                                                        </option>
                                                        <option value="KE">
                                                            Kenya
                                                        </option>
                                                        <option value="KI">
                                                            Kiribati
                                                        </option>
                                                        <option value="KP">
                                                            Korea, Democratic People's Republic of
                                                        </option>
                                                        <option value="KR">
                                                            Korea, Republic of
                                                        </option>
                                                        <option value="KW">
                                                            Kuwait
                                                        </option>
                                                        <option value="KG">
                                                            Kyrgyzstan
                                                        </option>
                                                        <option value="LA">
                                                            Lao People's Democratic Republic
                                                        </option>
                                                        <option value="LV">
                                                            Latvia
                                                        </option>
                                                        <option value="LB">
                                                            Lebanon
                                                        </option>
                                                        <option value="LS">
                                                            Lesotho
                                                        </option>
                                                        <option value="LR">
                                                            Liberia
                                                        </option>
                                                        <option value="LY">
                                                            Libya
                                                        </option>
                                                        <option value="LI">
                                                            Liechtenstein
                                                        </option>
                                                        <option value="LT">
                                                            Lithuania
                                                        </option>
                                                        <option value="LU">
                                                            Luxembourg
                                                        </option>
                                                        <option value="MO">
                                                            Macao
                                                        </option>
                                                        <option value="MK">
                                                            Macedonia, the former Yugoslav Republic of
                                                        </option>
                                                        <option value="MG">
                                                            Madagascar
                                                        </option>
                                                        <option value="MW">
                                                            Malawi
                                                        </option>
                                                        <option value="MY">
                                                            Malaysia
                                                        </option>
                                                        <option value="MV">
                                                            Maldives
                                                        </option>
                                                        <option value="ML">
                                                            Mali
                                                        </option>
                                                        <option value="MT">
                                                            Malta
                                                        </option>
                                                        <option value="MH">
                                                            Marshall Islands
                                                        </option>
                                                        <option value="MQ">
                                                            Martinique
                                                        </option>
                                                        <option value="MR">
                                                            Mauritania
                                                        </option>
                                                        <option value="MU">
                                                            Mauritius
                                                        </option>
                                                        <option value="YT">
                                                            Mayotte
                                                        </option>
                                                        <option value="MX">
                                                            Mexico
                                                        </option>
                                                        <option value="FM">
                                                            Micronesia, Federated States of
                                                        </option>
                                                        <option value="MD">
                                                            Moldova, Republic of
                                                        </option>
                                                        <option value="MC">
                                                            Monaco
                                                        </option>
                                                        <option value="MN">
                                                            Mongolia
                                                        </option>
                                                        <option value="ME">
                                                            Montenegro
                                                        </option>
                                                        <option value="MS">
                                                            Montserrat
                                                        </option>
                                                        <option value="MA">
                                                            Morocco
                                                        </option>
                                                        <option value="MZ">
                                                            Mozambique
                                                        </option>
                                                        <option value="MM">
                                                            Myanmar
                                                        </option>
                                                        <option value="NA">
                                                            Namibia
                                                        </option>
                                                        <option value="NR">
                                                            Nauru
                                                        </option>
                                                        <option value="NP">
                                                            Nepal
                                                        </option>
                                                        <option value="NL">
                                                            Netherlands
                                                        </option>
                                                        <option value="NC">
                                                            New Caledonia
                                                        </option>
                                                        <option value="NZ">
                                                            New Zealand
                                                        </option>
                                                        <option value="NI">
                                                            Nicaragua
                                                        </option>
                                                        <option value="NE">
                                                            Niger
                                                        </option>
                                                        <option value="NG">
                                                            Nigeria
                                                        </option>
                                                        <option value="NU">
                                                            Niue
                                                        </option>
                                                        <option value="NF">
                                                            Norfolk Island
                                                        </option>
                                                        <option value="MP">
                                                            Northern Mariana Islands
                                                        </option>
                                                        <option value="NO">
                                                            Norway
                                                        </option>
                                                        <option value="OM">
                                                            Oman
                                                        </option>
                                                        <option value="PK">
                                                            Pakistan
                                                        </option>
                                                        <option value="PW">
                                                            Palau
                                                        </option>
                                                        <option value="PS">
                                                            Palestinian Territory, Occupied
                                                        </option>
                                                        <option value="PA">
                                                            Panama
                                                        </option>
                                                        <option value="PG">
                                                            Papua New Guinea
                                                        </option>
                                                        <option value="PY">
                                                            Paraguay
                                                        </option>
                                                        <option value="PE">
                                                            Peru
                                                        </option>
                                                        <option value="PH">
                                                            Philippines
                                                        </option>
                                                        <option value="PN">
                                                            Pitcairn
                                                        </option>
                                                        <option value="PL">
                                                            Poland
                                                        </option>
                                                        <option value="PT">
                                                            Portugal
                                                        </option>
                                                        <option value="PR">
                                                            Puerto Rico
                                                        </option>
                                                        <option value="QA">
                                                            Qatar
                                                        </option>
                                                        <option value="RE">
                                                            Réunion
                                                        </option>
                                                        <option value="RO">
                                                            Romania
                                                        </option>
                                                        <option value="RU">
                                                            Russian Federation
                                                        </option>
                                                        <option value="RW">
                                                            Rwanda
                                                        </option>
                                                        <option value="BL">
                                                            Saint Barthélemy
                                                        </option>
                                                        <option value="SH">
                                                            Saint Helena, Ascension and Tristan da Cunha
                                                        </option>
                                                        <option value="KN">
                                                            Saint Kitts and Nevis
                                                        </option>
                                                        <option value="LC">
                                                            Saint Lucia
                                                        </option>
                                                        <option value="MF">
                                                            Saint Martin (French part)
                                                        </option>
                                                        <option value="PM">
                                                            Saint Pierre and Miquelon
                                                        </option>
                                                        <option value="VC">
                                                            Saint Vincent and the Grenadines
                                                        </option>
                                                        <option value="WS">
                                                            Samoa
                                                        </option>
                                                        <option value="SM">
                                                            San Marino
                                                        </option>
                                                        <option value="ST">
                                                            Sao Tome and Principe
                                                        </option>
                                                        <option value="SA">
                                                            Saudi Arabia
                                                        </option>
                                                        <option value="SN">
                                                            Senegal
                                                        </option>
                                                        <option value="RS">
                                                            Serbia
                                                        </option>
                                                        <option value="SC">
                                                            Seychelles
                                                        </option>
                                                        <option value="SL">
                                                            Sierra Leone
                                                        </option>
                                                        <option value="SG">
                                                            Singapore
                                                        </option>
                                                        <option value="SX">
                                                            Sint Maarten (Dutch part)
                                                        </option>
                                                        <option value="SK">
                                                            Slovakia
                                                        </option>
                                                        <option value="SI">
                                                            Slovenia
                                                        </option>
                                                        <option value="SB">
                                                            Solomon Islands
                                                        </option>
                                                        <option value="SO">
                                                            Somalia
                                                        </option>
                                                        <option value="ZA">
                                                            South Africa
                                                        </option>
                                                        <option value="GS">
                                                            South Georgia and the South Sandwich Islands
                                                        </option>
                                                        <option value="ES">
                                                            Spain
                                                        </option>
                                                        <option value="LK">
                                                            Sri Lanka
                                                        </option>
                                                        <option value="SD">
                                                            Sudan
                                                        </option>
                                                        <option value="SR">
                                                            Suriname
                                                        </option>
                                                        <option value="SJ">
                                                            Svalbard and Jan Mayen
                                                        </option>
                                                        <option value="SZ">
                                                            Swaziland
                                                        </option>
                                                        <option value="SE">
                                                            Sweden
                                                        </option>
                                                        <option value="CH">
                                                            Switzerland
                                                        </option>
                                                        <option value="SY">
                                                            Syrian Arab Republic
                                                        </option>
                                                        <option value="TW">
                                                            Taiwan, Province of China
                                                        </option>
                                                        <option value="TJ">
                                                            Tajikistan
                                                        </option>
                                                        <option value="TZ">
                                                            Tanzania, United Republic of
                                                        </option>
                                                        <option value="TH">
                                                            Thailand
                                                        </option>
                                                        <option value="TL">
                                                            Timor-Leste
                                                        </option>
                                                        <option value="TG">
                                                            Togo
                                                        </option>
                                                        <option value="TK">
                                                            Tokelau
                                                        </option>
                                                        <option value="TO">
                                                            Tonga
                                                        </option>
                                                        <option value="TT">
                                                            Trinidad and Tobago
                                                        </option>
                                                        <option value="TN">
                                                            Tunisia
                                                        </option>
                                                        <option value="TR">
                                                            Turkey
                                                        </option>
                                                        <option value="TM">
                                                            Turkmenistan
                                                        </option>
                                                        <option value="TC">
                                                            Turks and Caicos Islands
                                                        </option>
                                                        <option value="TV">
                                                            Tuvalu
                                                        </option>
                                                        <option value="UG">
                                                            Uganda
                                                        </option>
                                                        <option value="UA">
                                                            Ukraine
                                                        </option>
                                                        <option value="AE">
                                                            United Arab Emirates
                                                        </option>
                                                        <option value="GB">
                                                            United Kingdom
                                                        </option>
                                                        <option value="US">
                                                            United States
                                                        </option>
                                                        <option value="UM">
                                                            United States Minor Outlying Islands
                                                        </option>
                                                        <option value="UY">
                                                            Uruguay
                                                        </option>
                                                        <option value="UZ">
                                                            Uzbekistan
                                                        </option>
                                                        <option value="VU">
                                                            Vanuatu
                                                        </option>
                                                        <option value="VE">
                                                            Venezuela, Bolivarian Republic of
                                                        </option>
                                                        <option value="VN">
                                                            Viet Nam
                                                        </option>
                                                        <option value="VG">
                                                            Virgin Islands, British
                                                        </option>
                                                        <option value="VI">
                                                            Virgin Islands, U.S.
                                                        </option>
                                                        <option value="WF">
                                                            Wallis and Futuna
                                                        </option>
                                                        <option value="EH">
                                                            Western Sahara
                                                        </option>
                                                        <option value="YE">
                                                            Yemen
                                                        </option>
                                                        <option value="ZM">
                                                            Zambia
                                                        </option>
                                                        <option value="ZW">
                                                            Zimbabwe
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-md-4 control-label">Multiple Select</label>
                                                <div class="col-lg-9 col-md-8">
                                                    <select id="multiple" class="form-control select2-multiple" multiple>
                                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                                            <option value="AK">
                                                                Alaska
                                                            </option>
                                                            <option value="HI">
                                                                Hawaii
                                                            </option>
                                                        </optgroup>
                                                        <optgroup label="Pacific Time Zone">
                                                            <option value="CA">
                                                                California
                                                            </option>
                                                            <option value="NV">
                                                                Nevada
                                                            </option>
                                                            <option value="OR">
                                                                Oregon
                                                            </option>
                                                            <option value="WA">
                                                                Washington
                                                            </option>
                                                        </optgroup>
                                                        <optgroup label="Mountain Time Zone">
                                                            <option value="AZ">
                                                                Arizona
                                                            </option>
                                                            <option value="CO">
                                                                Colorado
                                                            </option>
                                                            <option value="ID">
                                                                Idaho
                                                            </option>
                                                            <option value="MT">
                                                                Montana
                                                            </option>
                                                            <option value="NE">
                                                                Nebraska
                                                            </option>
                                                            <option value="NM">
                                                                New Mexico
                                                            </option>
                                                            <option value="ND">
                                                                North Dakota
                                                            </option>
                                                            <option value="UT">
                                                                Utah
                                                            </option>
                                                            <option value="WY">
                                                                Wyoming
                                                            </option>
                                                        </optgroup>
                                                        <optgroup label="Central Time Zone">
                                                            <option value="AL">
                                                                Alabama
                                                            </option>
                                                            <option value="AR">
                                                                Arkansas
                                                            </option>
                                                            <option value="IL">
                                                                Illinois
                                                            </option>
                                                            <option value="IA">
                                                                Iowa
                                                            </option>
                                                            <option value="KS">
                                                                Kansas
                                                            </option>
                                                            <option value="KY">
                                                                Kentucky
                                                            </option>
                                                            <option value="LA">
                                                                Louisiana
                                                            </option>
                                                            <option value="MN">
                                                                Minnesota
                                                            </option>
                                                            <option value="MS">
                                                                Mississippi
                                                            </option>
                                                            <option value="MO">
                                                                Missouri
                                                            </option>
                                                            <option value="OK">
                                                                Oklahoma
                                                            </option>
                                                            <option value="SD">
                                                                South Dakota
                                                            </option>
                                                            <option value="TX">
                                                                Texas
                                                            </option>
                                                            <option value="TN">
                                                                Tennessee
                                                            </option>
                                                            <option value="WI">
                                                                Wisconsin
                                                            </option>
                                                        </optgroup>
                                                        <optgroup label="Eastern Time Zone">
                                                            <option value="CT">
                                                                Connecticut
                                                            </option>
                                                            <option value="DE">
                                                                Delaware
                                                            </option>
                                                            <option value="FL">
                                                                Florida
                                                            </option>
                                                            <option value="GA">
                                                                Georgia
                                                            </option>
                                                            <option value="IN">
                                                                Indiana
                                                            </option>
                                                            <option value="ME">
                                                                Maine
                                                            </option>
                                                            <option value="MD">
                                                                Maryland
                                                            </option>
                                                            <option value="MA">
                                                                Massachusetts
                                                            </option>
                                                            <option value="MI">
                                                                Michigan
                                                            </option>
                                                            <option value="NH">
                                                                New Hampshire
                                                            </option>
                                                            <option value="NJ">
                                                                New Jersey
                                                            </option>
                                                            <option value="NY">
                                                                New York
                                                            </option>
                                                            <option value="NC">
                                                                North Carolina
                                                            </option>
                                                            <option value="OH">
                                                                Ohio
                                                            </option>
                                                            <option value="PA">
                                                                Pennsylvania
                                                            </option>
                                                            <option value="RI">
                                                                Rhode Island
                                                            </option>
                                                            <option value="SC">
                                                                South Carolina
                                                            </option>
                                                            <option value="VT">
                                                                Vermont
                                                            </option>
                                                            <option value="VA">
                                                                Virginia
                                                            </option>
                                                            <option value="WV">
                                                                West Virginia
                                                            </option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="card card-box">
                                    <div class="card-head">
                                        <header>
                                            Color Picker
                                        </header><button id="panel-button9" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton"><i class="material-icons">more_vert</i></button>
                                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button9">
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
                                    <div class="card-body" id="bar-parent8">
                                        <form>
                                            <div class="form-group row">
                                                <label class="col-md-4 control-label">Color Picker</label>
                                                <div class="input-group col-md-8">
                                                    <input id="cp1" type="text" class="form-control" value="#5367ce">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 control-label">Addon Color Picker</label>
                                                <div id="colorinput2" class="input-group colorpicker-component col-md-8">
                                                    <input type="text" value="#00AABB" class="form-control"><span class="input-group-addon"><i></i></span>
                                                </div>
                                            </div>
                                        </form>
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