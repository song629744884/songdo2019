{{--@extends('layouts.admin')
@section('title', '商城首页')

@section('content')
	<p>This is my body content.</p>
@endsection--}}

@extends('layouts.app2')

@section('content')

    <!-- 右 -->
    <div class="content">
        <div class="header">
            <h1 class="page-title">商品管理</h1>
        </div>

        <div class="well">
            <!-- search button -->
            <form class="form-search">
                <div class="row-fluid" style="text-align: left;">
                    <div class="pull-left span4 unstyled">
                        <p> 渠道商：<input class="input-medium" type="text"></p>
                        <p> 状态：
                            <select class="span1">
                                <option value="-2">上架</option>
                                <option value="-2">下架</option>
                            </select>
                        </p>
                        <p> 标签：
                            <select class="span1">
                                <option value="-2">所有</option>
                                <option value="-2">情趣</option>
                            </select>
                        </p>
                    </div>
                    <div class="pull-left span4 unstyled">
                        <p> 分类：
                            <select class="span1">
                                <option value="-2">所有</option>
                                <option value="161">情爱成人</option>
                                <option value="63">赠礼</option>
                                <option value="62">保健塑身</option>
                                <option value="47">配饰</option>
                                <option value="46">鞋包</option>
                                <option value="38">新奇数码</option>
                                <option value="37">创意百货</option>
                                <option value="35">美容</option>
                                <option value="34">服饰</option>
                            </select>
                        </p>
                        <p> 商户：
                            <select class="span1">
                                <option value="-2">所有</option>
                                <option value="161">情爱成人</option>
                                <option value="63">赠礼</option>
                                <option value="62">保健塑身</option>
                                <option value="47">配饰</option>
                                <option value="46">鞋包</option>
                                <option value="38">新奇数码</option>
                                <option value="37">创意百货</option>
                                <option value="35">美容</option>
                                <option value="34">服饰</option>
                            </select>
                        </p>
                        <p> 开始时间：<input class="input-medium" type="text" onclick="WdatePicker()"></p>
                    </div>
                    <div class="pull-left span4 unstyled">
                        <p> 二级分类：
                            <select class="span1">
                                <option value="-2">所有</option>
                                <option value="161">情爱成人</option>
                                <option value="63">赠礼</option>
                                <option value="62">保健塑身</option>
                                <option value="47">配饰</option>
                                <option value="46">鞋包</option>
                                <option value="38">新奇数码</option>
                                <option value="37">创意百货</option>
                                <option value="35">美容</option>
                                <option value="34">服饰</option>
                            </select>
                        </p>
                        <p>
                            商品名：<input class="input-medium" type="text">
                        </p>
                        <p> 结束时间：<input class="input-medium " type="text" onclick="WdatePicker()"></p>
                    </div>
                </div>
                <button type="submit" class="btn">查找</button>
                <a class="btn btn-primary" onclick="javascript:window.location.href='operation.html'">新增</a>
            </form>
        </div>
        <div class="well">
            <!-- table -->
            <table class="table table-bordered table-hover table-condensed">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>产品</th>
                    <th>交付时间</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>TB - Monthly</td>
                    <td>01/04/2012</td>
                    <td>Default</td>
                    <td>
                        <a href="operation.html"><i class="icon-pencil"></i></a>
                        <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                    </td>
                </tr>
                <tr class="success">
                    <td>1</td>
                    <td>TB - Monthly</td>
                    <td>01/04/2012</td>
                    <td>Approved</td>
                    <td>
                        <a href="operation.html"><i class="icon-pencil"></i></a>
                        <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                    </td>
                </tr>
                <tr class="error">
                    <td>2</td>
                    <td>TB - Monthly</td>
                    <td>02/04/2012</td>
                    <td>Declined</td>
                    <td>
                        <a href="operation.html"><i class="icon-pencil"></i></a>
                        <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                    </td>
                </tr>
                <tr class="warning">
                    <td>3</td>
                    <td>TB - Monthly</td>
                    <td>03/04/2012</td>
                    <td>Pending</td>
                    <td>
                        <a href="operation.html"><i class="icon-pencil"></i></a>
                        <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                    </td>
                </tr>
                <tr class="info">
                    <td>4</td>
                    <td>TB - Monthly</td>
                    <td>04/04/2012</td>
                    <td>Call in to confirm</td>
                    <td>
                        <a href="operation.html"><i class="icon-pencil"></i></a>
                        <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- pagination -->
            <div class="pagination">
                <ul>
                    <li><a href="#">Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>
        <!-- delete showmodaldialog -->
        <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Delete Confirmation</h3>
            </div>
            <div class="modal-body">
                <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete this data?</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                <button class="btn btn-danger" data-dismiss="modal">Delete</button>
            </div>
        </div>

    </div>
@endsection