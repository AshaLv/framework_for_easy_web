@extends('layouts.app')
@section('css')
<style type="text/css">
    li{
        color:cadetblue;
        cursor: pointer;
    }
</style> 
@endsection

@section('content')

@unless(auth()->user()->email == '289574827@qq.com')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">工资记录表</div>

                <div class="panel-body">
                    <li style="cursor: pointer;" @click="show_your_salary" data-target="#showyoursalary" data-toggle="collapse">点击这里看看能领多少工资</li><input id="userid" type="text" hidden="" value="{{auth()->user()->id}}">
                    @include('layouts.showyoursalary')
                    <p style="text-align: right;cursor: pointer;" @click="give_messeage" data-target="#givemessage" data-toggle="collapse"><span>信箱反馈</span></p>
                    @include('layouts.givemessage')
                </div>

            </div>
        </div>
    </div>

    <div class="row"  id="check_p">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">查看公告</div>

                <div class="panel-body">
                    <li data-target="#check_post" data-toggle="collapse" @click="check_post">打开表单</li>
                    @include('layouts.check_post')
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if(auth()->user()->email == '289574827@qq.com')
<div class="container">
    <div class="row"  id="sendsalary">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">工资发放表单</div>

                <div class="panel-body">
                    <li data-target="#givesalary" data-toggle="collapse" @click="get_students_name">打开表单</li>
                    @include('layouts.givesalary')
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="" id="changesalary">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">时薪录入</div>

                <div class="panel-body">
                    <li data-target="#makesalary" data-toggle="collapse" @click="get_students_name">打开表单</li>
                    @include('layouts.makesalary')
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="" id="issue">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">查看投诉</div>

                <div class="panel-body">
                    <li  @click="show_messages" data-toggle="collapse" data-target="#showmessages">打开表单</li>
                    @include('layouts.issue')
                </div>
            </div>
        </div>
    </div>

    <div class="row"  id="post">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">发送公告</div>

                <div class="panel-body">
                    <li data-target="#sendpost" data-toggle="collapse">打开表单</li>
                    @include('layouts.send_post')
                </div>
            </div>
        </div>
    </div>

    <div class="row"  id="search_s">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">查看工资分配情况</div>

                <div class="panel-body">
                    <li data-target="#search_salary" data-toggle="collapse" @click="get_students_name">打开表单</li>
                    @include('layouts.search_salary')
                </div>
            </div>
        </div>
    </div>

    <div class="row"  id="check_p">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">查看公告</div>

                <div class="panel-body">
                    <li data-target="#check_post" data-toggle="collapse" @click="check_post">打开表单</li>
                    @include('layouts.check_post')
                </div>
            </div>
        </div>
    </div>
</div>

<div style="position: fixed; top:100px">
<ul class="nav nav-pills nav-stacked" >
  <li style="margin: 30px 0"><a href="#sendsalary">工资发放</a></li>
  <li style="margin: 30px 0"><a href="#changesalary">时薪录入</a></li>
  <li style="margin: 30px 0"><a href="#issue">查看投诉</a></li>
  <li style="margin: 30px 0"><a href="#post">发送公告</a></li>
  <li style="margin: 30px 0"><a href="#search_s">查看工资分配情况</a></li>
  <li style="margin: 30px 0"><a href="#search_p">查看公告</a></li>
</ul>
</div>
@endif

@endsection
