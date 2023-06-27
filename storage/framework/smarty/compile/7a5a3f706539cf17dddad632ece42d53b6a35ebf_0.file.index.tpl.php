<?php
/* Smarty version 3.1.48, created on 2023-06-21 14:38:05
  from '/www/wwwroot/SSPanel/resources/views/metron/admin/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64929acd8f5f78_94745442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a5a3f706539cf17dddad632ece42d53b6a35ebf' => 
    array (
      0 => '/www/wwwroot/SSPanel/resources/views/metron/admin/index.tpl',
      1 => 1686149747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_64929acd8f5f78_94745442 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<style>
    table {
        width: 100%;
        display: table;
        border-collapse: collapse;
        border-spacing: 0;
    }
    table, th, td {
        border: none;
    }
    thead {
        color: rgba(0,0,0,0.6);
    }
    tr {
        border-bottom: 1px solid rgba(0,0,0,0.12);
    }
    td, th {
        padding: 15px 10px;
    }
    td, th {
        padding: 15px 5px;
        display: table-cell;
        text-align: left;
        vertical-align: middle;
        border-radius: 2px;
        font-weight: 500;
    }
    table, th, td {
        border: none;
    }
    tr {
        border-bottom: 1px solid rgba(0,0,0,0.12);
    }
</style>
<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">汇总</h1>
        </div>
    </div>
    <div class="container">
        <section class="content-inner margin-top-no">
            <div class="row">
                <div class="col-xx-12">
                    <div class="card margin-bottom-no">
                        <div class="card-main">
                            <div class="card-inner">
                                <p>下面是系统运行情况简报。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui-card-wrap">
                <div class="row">
                    <div class="col-xx-12 col-sm-3">
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <h5>收入情况</h5>
                                    <p id="income_text" style="margin-top: 10px;">loading</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xx-12 col-sm-3">
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <h5>注册新用户</h5>
                                    <p id="newusers_text" style="margin-top: 10px;">loading</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xx-12 col-sm-3">
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <h5>订单详细</h5>
                                    <p id="order_text" style="margin-top: 10px;">loading</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xx-12 col-sm-3">
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <h5>工单详细</h5>
                                    <p id="ticket_text" style="margin-top: 10px;">loading</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xx-12 col-sm-6">
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <h5>邀请人数</h5>
                                    <button class="mdl-button mdl-js-button mdl-button--raised" onclick="getRefUserCount('today')">今天</button>
                                    <button class="mdl-button mdl-js-button mdl-button--raised" onclick="getRefUserCount('yesterday')">昨天</button>
                                    <button class="mdl-button mdl-js-button mdl-button--raised" onclick="getRefUserCount('week')">本周</button>
                                    <button class="mdl-button mdl-js-button mdl-button--raised" onclick="getRefUserCount('month')">本月</button>
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>用户ID</th>
                                            <th>用户名</th>
                                            <th>用户邮箱</th>
                                            <th>邀请人数</th>
                                        </tr>
                                        </thead>
                                        <tbody id="ref_user_count">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <h5>72小时节点流量使用排名</h5>
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>节点ID</th>
                                            <th>节点名称</th>
                                            <th>使用流量</th>
                                        </tr>
                                        </thead>
                                        <tbody id="node_traffic_text">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">

                                    <div id="check_chart" style="height: 300px; width: 100%;"></div>

                                    <?php echo '<script'; ?>
 src="//cdn.jsdelivr.net/gh/SuicidalCat/canvasjs.js@v2.3.1/canvasjs.min.js"><?php echo '</script'; ?>
>
                                    <?php echo '<script'; ?>
>
                                        var chart = new CanvasJS.Chart("check_chart",
                                                {
                                                    title: {
                                                        text: "用户签到情况(总用户 <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalUser();?>
人)",
                                                        fontFamily: "Impact",
                                                        fontWeight: "normal"
                                                    },

                                                    legend: {
                                                        verticalAlign: "bottom",
                                                        horizontalAlign: "center"
                                                    },
                                                    data: [
                                                        {
                                                            //startAngle: 45,
                                                            indexLabelFontSize: 20,
                                                            indexLabelFontFamily: "Garamond",
                                                            indexLabelFontColor: "darkgrey",
                                                            indexLabelLineColor: "darkgrey",
                                                            indexLabelPlacement: "outside",
                                                            type: "doughnut",
                                                            showInLegend: true,
                                                            dataPoints: [
                                                                {
                                                                    y: <?php echo (1-($_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()))*100;?>
,
                                                                    legendText: "没有签到过的用户 <?php echo number_format((1-($_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()))*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getCheckinUser();?>
人",
                                                                    indexLabel: "没有签到过的用户 <?php echo number_format((1-($_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()))*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getCheckinUser();?>
人"
                                                                },
                                                                {
                                                                    y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()-$_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser())/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser())*100;?>
,
                                                                    legendText: "曾经签到过的用户 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()-$_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser())/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser())*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()-$_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser();?>
人",
                                                                    indexLabel: "曾经签到过的用户 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()-$_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser())/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser())*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()-$_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser();?>
人"
                                                                },
                                                                {
                                                                    y: <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100;?>
,
                                                                    legendText: "今日签到用户 <?php echo number_format($_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser();?>
人",
                                                                    indexLabel: "今日签到用户 <?php echo number_format($_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser();?>
人"
                                                                }
                                                            ]
                                                        }
                                                    ]
                                                });

                                        chart.render();

                                        function chartRender(chart) {
                                            chart.render();
                                            chart.ctx.shadowBlur = 8;
                                            chart.ctx.shadowOffsetX = 4;
                                            chart.ctx.shadowColor = "black";

                                            for (let i in chart.plotInfo.plotTypes) {
                                                let plotType = chart.plotInfo.plotTypes[i];
                                                for (let j in plotType.plotUnits) {
                                                    let plotUnit = plotType.plotUnits[j];
                                                    if (plotUnit.type === "doughnut") {
                                                        // For Column Chart
                                                        chart.renderDoughnut(plotUnit);
                                                    } else if (plotUnit.type === "bar") {
                                                        // For Bar Chart
                                                        chart.renderBar(plotUnit);
                                                    }
                                                }
                                            }
                                            chart.ctx.shadowBlur = 0;
                                            chart.ctx.shadowOffsetX = 0;
                                            chart.ctx.shadowColor = "transparent";
                                        }
                                    <?php echo '</script'; ?>
>

                                </div>

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">

                                    <div id="alive_chart" style="height: 300px; width: 100%;"></div>

                                    <?php echo '<script'; ?>
 src="//cdn.jsdelivr.net/gh/YihanH/canvasjs.js@v2.2/canvasjs.min.js"><?php echo '</script'; ?>
>
                                    <?php echo '<script'; ?>
 type="text/javascript">
                                        var chart = new CanvasJS.Chart("alive_chart",
                                                {
                                                    title: {
                                                        text: "用户在线情况(总用户 <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalUser();?>
人)",
                                                        fontFamily: "Impact",
                                                        fontWeight: "normal"
                                                    },

                                                    legend: {
                                                        verticalAlign: "bottom",
                                                        horizontalAlign: "center"
                                                    },
                                                    data: [
                                                        {
                                                            //startAngle: 45,
                                                            indexLabelFontSize: 20,
                                                            indexLabelFontFamily: "Garamond",
                                                            indexLabelFontColor: "darkgrey",
                                                            indexLabelLineColor: "darkgrey",
                                                            indexLabelPlacement: "outside",
                                                            type: "doughnut",
                                                            showInLegend: true,
                                                            dataPoints: [
                                                                {
                                                                    y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getUnusedUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()))*100;?>
,
                                                                    legendText: "从未在线的用户 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getUnusedUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getUnusedUser()));?>
人",
                                                                    indexLabel: "从未在线的用户 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getUnusedUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getUnusedUser()));?>
人"
                                                                },
                                                                {
                                                                    y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getUnusedUser())/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser())*100;?>
,
                                                                    legendText: "一天以前在线的用户 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getUnusedUser())/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser())*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getUnusedUser());?>
人",
                                                                    indexLabel: "一天以前在线的用户 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getUnusedUser())/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser())*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getUnusedUser());?>
人"
                                                                },
                                                                {
                                                                    y: <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100;?>
,
                                                                    legendText: "一天内在线的用户 <?php echo number_format(($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600));?>
人",
                                                                    indexLabel: "一天内在线的用户 <?php echo number_format(($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600));?>
人"
                                                                },
                                                                {
                                                                    y: <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100;?>
,
                                                                    legendText: "一小时内在线的用户 <?php echo number_format(($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60));?>
人",
                                                                    indexLabel: "一小时内在线的用户 <?php echo number_format(($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60));?>
人"
                                                                },
                                                                {
                                                                    y: <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100;?>
,
                                                                    legendText: "一分钟内在线的用户 <?php echo number_format(($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60));?>
人",
                                                                    indexLabel: "一分钟内在线的用户 <?php echo number_format(($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60));?>
人"
                                                                }
                                                            ]
                                                        }
                                                    ]
                                                });

                                        chart.render();
                                    <?php echo '</script'; ?>
>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xx-12 col-sm-6">

                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <h5>邀请返利</h5>
                                    <button class="mdl-button mdl-js-button mdl-button--raised" onclick="getRefMoneyCount('today')">今天</button>
                                    <button class="mdl-button mdl-js-button mdl-button--raised" onclick="getRefMoneyCount('yesterday')">昨天</button>
                                    <button class="mdl-button mdl-js-button mdl-button--raised" onclick="getRefMoneyCount('week')">本周</button>
                                    <button class="mdl-button mdl-js-button mdl-button--raised" onclick="getRefMoneyCount('month')">本月</button>
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>用户ID</th>
                                            <th>用户名</th>
                                            <th>用户邮箱</th>
                                            <th>返利金额</th>
                                        </tr>
                                        </thead>
                                        <tbody id="ref_money_count">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <h5>72小时用户流量使用排名</h5>
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>用户ID</th>
                                            <th>用户名</th>
                                            <th>邮箱</th>
                                            <th>使用流量</th>
                                        </tr>
                                        </thead>
                                        <tbody id="user_traffic_text">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <div id="node_chart" style="height: 300px; width: 100%;"></div>
                                    <?php echo '<script'; ?>
 src="//cdn.jsdelivr.net/gh/YihanH/canvasjs.js@v2.2/canvasjs.min.js"><?php echo '</script'; ?>
>
                                    <?php echo '<script'; ?>
 type="text/javascript">
                                        var chart = new CanvasJS.Chart("node_chart",
                                                {
                                                    title: {
                                                        text: "节点在线情况(节点数 <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalNodes();?>
个)",
                                                        fontFamily: "Impact",
                                                        fontWeight: "normal"
                                                    },

                                                    legend: {
                                                        verticalAlign: "bottom",
                                                        horizontalAlign: "center"
                                                    },
                                                    data: [
                                                        {
                                                            //startAngle: 45,
                                                            indexLabelFontSize: 20,
                                                            indexLabelFontFamily: "Garamond",
                                                            indexLabelFontColor: "darkgrey",
                                                            indexLabelLineColor: "darkgrey",
                                                            indexLabelPlacement: "outside",
                                                            type: "doughnut",
                                                            showInLegend: true,
                                                            dataPoints: [
                                                                <?php if ($_smarty_tpl->tpl_vars['sts']->value->getTotalNodes() != 0) {?>
                                                                {
                                                                    y: <?php echo (1-($_smarty_tpl->tpl_vars['sts']->value->getAliveNodes()/$_smarty_tpl->tpl_vars['sts']->value->getTotalNodes()))*100;?>
,
                                                                    legendText: "离线节点 <?php echo number_format((1-($_smarty_tpl->tpl_vars['sts']->value->getAliveNodes()/$_smarty_tpl->tpl_vars['sts']->value->getTotalNodes()))*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalNodes()-$_smarty_tpl->tpl_vars['sts']->value->getAliveNodes();?>
个",
                                                                    indexLabel: "离线节点 <?php echo number_format((1-($_smarty_tpl->tpl_vars['sts']->value->getAliveNodes()/$_smarty_tpl->tpl_vars['sts']->value->getTotalNodes()))*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalNodes()-$_smarty_tpl->tpl_vars['sts']->value->getAliveNodes();?>
个"
                                                                },
                                                                {
                                                                    y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getAliveNodes()/$_smarty_tpl->tpl_vars['sts']->value->getTotalNodes()))*100;?>
,
                                                                    legendText: "在线节点 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getAliveNodes()/$_smarty_tpl->tpl_vars['sts']->value->getTotalNodes()))*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getAliveNodes();?>
个",
                                                                    indexLabel: "在线节点 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getAliveNodes()/$_smarty_tpl->tpl_vars['sts']->value->getTotalNodes()))*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getAliveNodes();?>
个"
                                                                }
                                                                <?php }?>
                                                            ]
                                                        }
                                                    ]
                                                });

                                        chart.render();
                                    <?php echo '</script'; ?>
>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-main">
                                <div class="card-inner">
                                    <div id="traffic_chart" style="height: 300px; width: 100%;"></div>
                                    <?php echo '<script'; ?>
 src="//cdn.jsdelivr.net/gh/YihanH/canvasjs.js@v2.2/canvasjs.min.js"><?php echo '</script'; ?>
>
                                    <?php echo '<script'; ?>
 type="text/javascript">
                                        var chart = new CanvasJS.Chart("traffic_chart",
                                                {
                                                    title: {
                                                        text: "流量使用情况(总分配流量 <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalTraffic();?>
)",
                                                        fontFamily: "Impact",
                                                        fontWeight: "normal"
                                                    },

                                                    legend: {
                                                        verticalAlign: "bottom",
                                                        horizontalAlign: "center"
                                                    },
                                                    data: [
                                                        {
                                                            //startAngle: 45,
                                                            indexLabelFontSize: 20,
                                                            indexLabelFontFamily: "Garamond",
                                                            indexLabelFontColor: "darkgrey",
                                                            indexLabelLineColor: "darkgrey",
                                                            indexLabelPlacement: "outside",
                                                            type: "doughnut",
                                                            showInLegend: true,
                                                            dataPoints: [
                                                                <?php if ($_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic() != 0) {?>
                                                                {
                                                                    y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getRawUnusedTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100;?>
,
                                                                    label: "总剩余可用",
                                                                    legendText: "总剩余可用 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getRawUnusedTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getUnusedTrafficUsage()));?>
",
                                                                    indexLabel: "总剩余可用 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getRawUnusedTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getUnusedTrafficUsage()));?>
"
                                                                },
                                                                {
                                                                    y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getRawLastTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100;?>
,
                                                                    label: "总过去已用",
                                                                    legendText: "总过去已用 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getRawLastTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getLastTrafficUsage()));?>
",
                                                                    indexLabel: "总过去已用 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getRawLastTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getLastTrafficUsage()));?>
"
                                                                },
                                                                {
                                                                    y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getRawTodayTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100;?>
,
                                                                    label: "总今日已用",
                                                                    legendText: "总今日已用 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getRawTodayTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getTodayTrafficUsage()));?>
",
                                                                    indexLabel: "总今日已用 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getRawTodayTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getTodayTrafficUsage()));?>
"
                                                                }
                                                                <?php }?>
                                                            ]
                                                        }
                                                    ]
                                                });

                                        chart.render();
                                    <?php echo '</script'; ?>
>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
    function getIncome(date) {
        $.ajax({
            type: "GET",
            url: "/admin/api/analytics/income",
            dataType: "json",
            data: {
                date: date,
            },
            success: function (data) {
                if (data.success) {
                    data = data.data;
                    var html_text = `今日收入：${data.todayIncome}<br>昨日收入：${data.yesterdayIncome}<br>本周收入：${data.thisWeekIncome}<br>上周收入：${data.lastWeekIncome}<br>本月收入：${data.thisMonthIncome}<br>上月收入：${data.lastMonthIncome}`;
                    $('#income_text').html(html_text);
                } else {
                    console.log(data.error)
                }
            }
        })
    }

    function getNodeTraffic(date) {
        $.ajax({
            type: "GET",
            url: "/admin/api/analytics/node",
            dataType: "json",
            data: {
                date: date,
            },
            success: function (data) {
                if (data.success) {
                    data = data.data;
                    var html_text = "";
                    data.forEach(function (item) {
                        html_text += `<tr><th>${item.node_id}</th><th>${item.node_name}</th><th>${item.traffic}</th></tr>`;
                    })
                    $('#node_traffic_text').html(html_text);
                } else {
                    console.log(data.error)
                }
            }
        })
    }

    function getUserTraffic(date) {
        $.ajax({
            type: "GET",
            url: "/admin/api/analytics/userTraffic",
            dataType: "json",
            data: {
                date: date,
            },
            success: function (data) {
                if (data.success) {
                    data = data.data;
                    var html_text = "";
                    data.forEach(function (item) {
                        html_text += `<tr><th>${item.user_id}</th><th>${item.user_name}</th><th>${item.email}</th><th>${item.traffic}</th></tr>`;
                    })
                    $('#user_traffic_text').html(html_text);
                } else {
                    console.log(data.error)
                }
            }
        })
    }

    function getNewUsers(date) {
        $.ajax({
            type: "GET",
            url: "/admin/api/analytics/new_users",
            dataType: "json",
            data: {
                date: date,
            },
            success: function (data) {
                console.log(data.ret);
                if (data.success) {
                    data = data.data;
                    var html_text = `今日新用户：${data.today}<br>昨日新用户：${data.yesterday}<br>本周新用户：${data.thisWeek}<br>上周新用户：${data.lastWeek}<br>本月新用户：${data.thisMonth}<br>上月新用户：${data.lastMonth}`;
                    $('#newusers_text').html(html_text);
                } else {
                    console.log(data.error)
                }
            }
        })
    }

    function getRefUserCount(type) {
        $.ajax({
            type: "GET",
            url: "/admin/api/analytics/ref_user_count",
            dataType: "json",
            data: {
                type: type,
            },
            success: function (data) {
                if (data.success) {
                    data = data.data;
                    var html_text = "";
                    data.forEach(function (item) {
                        html_text += `<tr><th>${item.user_id}</th><th>${item.user_name}</th><th>${item.email}</th><th>${item.ref_buy_count}人</th></tr>`;
                    })
                    $('#ref_user_count').html(html_text);
                } else {
                    console.log(data.error)
                }
            }
        })
    }

    function getRefMoneyCount(type) {
        $.ajax({
            type: "GET",
            url: "/admin/api/analytics/ref_money_count",
            dataType: "json",
            data: {
                type: type,
            },
            success: function (data) {
                if (data.success) {
                    data = data.data;
                    var html_text = "";
                    data.forEach(function (item) {
                        html_text += `<tr><th>${item.user_id}</th><th>${item.user_name}</th><th>${item.email}</th><th>￥${item.ref_get_count}</th></tr>`;
                    })
                    $('#ref_money_count').html(html_text);
                } else {
                    console.log(data.error)
                }
            }
        })
    }

    function getOrderDetail() {
        $.ajax({
            type: "GET",
            url: "/admin/api/analytics/get_order_detail",
            dataType: "json",
            success: function (data) {
                if (data.success) {
                    data = data.data;
                    var html_text = `今日总订单：${data.today_all}<br>今日成功订单：${data.today_success}<br>`+
                        `昨日成功订单：${data.yesterday_success}<br>本周成功订单：${data.week_success}<br>`+
                        `本月成功订单：${data.month_success}<br>上月成功订单：${data.last_month_success}`;
                    $('#order_text').html(html_text);
                } else {
                    console.log(data.error)
                }
            }
        })
    }
    function getTicketDetail() {
        $.ajax({
            type: "GET",
            url: "/admin/api/analytics/get_ticket_detail",
            dataType: "json",
            success: function (data) {
                if (data.success) {
                    data = data.data;
                    var html_text = `开启状态：${data.open}<br>今日工单：${data.today_success}<br>`+
                        `昨日工单：${data.yesterday_success}<br>本周工单：${data.week_success}<br>`+
                        `本月工单：${data.month_success}<br>上月工单：${data.last_month_success}`;
                    $('#ticket_text').html(html_text);
                } else {
                    console.log(data.error)
                }
            }
        })
    }

    String.prototype.replaceAll = function (stringToFind, stringToReplace) {
        if (stringToFind === stringToReplace) return this;
        var temp = this;
        var index = temp.indexOf(stringToFind);
        while (index != -1) {
            temp = temp.replace(stringToFind, stringToReplace);
            index = temp.indexOf(stringToFind);
        }
        return temp;
    };

    var date = new Date();
    date = date.toLocaleDateString();
    date = date.replaceAll('/','-');
    getIncome(date);
    getNewUsers(date);
    getNodeTraffic();
    getUserTraffic();
    getRefUserCount('today');
    getRefMoneyCount('today');
    getOrderDetail();
    getTicketDetail();
<?php echo '</script'; ?>
>

<?php }
}
