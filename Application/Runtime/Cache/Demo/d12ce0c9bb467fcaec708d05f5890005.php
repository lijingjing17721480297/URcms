<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>开发毛利报表</title>
    <link rel="stylesheet" href="/Public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/assets/bootstrap-table/src/bootstrap-table.css">
    <link rel="stylesheet" href="//rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css">
    <link rel="stylesheet" href="/Public/assets/examples.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap-table/1.9.1/bootstrap-table.min.js"></script>

</head>
<body>
<div class="header navbar " style="margin-bottom: -38px; width:400px">

    <div class="header-inner">
        <a class="navbar-brand"  href=”#” onClick="javascript :history.back(-1);">返回条件选择页
        </a>
        <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a  class="navbar-brand" href="<?php echo U('Demo/Index/export');?>" >导出数据
        </a>
    </div>

</div>
<div  class="container-fluid">
    <div class="row">
        <table id="table">
            <tfoot></tfoot>
        </table>
    </div>
    <div class="row">
        <table id="table2">
        </table>
    </div>



</div>

<script>


    function initTable(tableName,num) {

        tableName.bootstrapTable({
            footerFormatter:totalPriceFormatter,
            footerStyle:'footerStyle',
            showFooter:true,
            showColumns:true,
            search:true,
            url:"/Demo/Index/salername" + num,
            columns: [
                [

                    {
                        title: '业绩归属人' + num,
                        field: 'salernamezero',
                        rowspan: 1,
                        align: 'center',
                        valign: 'middle',
                        sortable: true,
                        visible:true,

                    },
                    {
                        field: 'timegroupzero',
                        title: '时间段(0-6月)',
                        visible:false,

                        align: 'center'
                    },{
                    field: 'salemoneyrmbuszero',
                    title: '销售额$(0-6月)',
                    visible:false,
                    sortable: true,

                    align: 'center'
                }, {
                    field: 'salemoneyrmbznzero',
                    title: '销售额￥(0-6月)',
                    sortable: true,
                    visible:true,
                    align: 'center',

                }, {

                    field: 'costmoneyrmbzero',
                    title: '商品成本￥(0-6月)',
                    sortable: true,
                    visible:false,
                    align: 'center',


                },{
                    field: 'ppebayuszero',
                    title: '交易费汇总$(0-6月)',
                    sortable: true,
                    visible:false,
                    align: 'center',


                },{
                    field: 'ppebayznzero',
                    title: '交易费汇总￥(0-6月)',
                    sortable: true,
                    visible:false,
                    align: 'center',


                },{
                    field: 'inpackagefeermbzero',
                    title: '包装成本￥(0-6月)',
                    sortable: true,
                    visible:false,
                    align: 'center',


                },{
                    field: 'expressfarermbzero',
                    title: '运费成本￥(0-6月)',
                    sortable: true,
                    visible:false,
                    align: 'center',
                },{
                    field: 'devofflinefeezero',
                    title: '死库处理￥(0-6月)',
                    sortable: true,
                    visible:false,
                    align: 'center',

                },
                    {
                        field: 'devopefeezero',
                        title: '运营杂费￥(0-6月)',
                        sortable: true,
                        visible:false,
                        align: 'center',

                    },
                    {
                    field: 'netprofitzero',
                    title: '毛利润￥(0-6月)',
                    sortable: true,
                    visible:true,
                    align: 'center',

                }
                    ,{

                    field: 'netratezero',
                    title: '毛利率%(0-6月)',
                    sortable: true,
                    visible:true,
                    align: 'center',

                },{

                    field: 'timegroupsix',
                    title: '时间段(6-12月)',

                    visible:false,
                    align: 'center'
                },{
                    field: 'salemoneyrmbussix',
                    title: '销售额$(6-12月)',
                    sortable: true,
                    visible:false,
                    align: 'center'
                }, {
                    field: 'salemoneyrmbznsix',
                    title: '销售额￥(6-12月)',
                    sortable: true,
                    visible:true,
                    align: 'center',
                }, {
                    field: 'costmoneyrmbsix',
                    title: '商品成本￥(6-12月)',
                    sortable: true,
                    visible:false,
                    align: 'center',

                },{

                    field: 'ppebayussix',
                    title: '交易费汇总$(6-12月)',
                    sortable: true,
                    visible:false,
                    align: 'center',

                },{
                    field: 'ppebayznsix',
                    title: '交易费汇总￥(6-12月)',
                    visible:false,
                    align: 'center',

                },{
                    field: 'inpackagefeermbsix',
                    title: '包装成本￥(6-12月)',
                    sortable: true,
                    visible:false,
                    align: 'center',

                },{
                    field: 'expressfarermbsix',
                    title: '运费成本￥(6-12月)',
                    sortable: true,
                    visible:false,
                    align: 'center',

                },{
                    field: 'devofflinefeesix',
                    title: '死库处理￥(6-12月)',
                    sortable: true,
                    visible:false,
                    align: 'center',

                },
                    {
                        field: 'devopefeesix',
                        title: '运营杂费￥(6-12月)',
                        sortable: true,
                        visible:false,
                        align: 'center',

                    },
                    {
                    field: 'netprofitsix',
                    title: '毛利润￥(6-12月)',
                    sortable: true,
                    visible:true,
                    align: 'center',

                }

                    ,{
                    field: 'netratesix',
                    title: '毛利率%(6-12月)',
                    sortable: true,
                    visible:true,
                    align: 'center',

                },
                    {

                        field: 'timegrouptwe',
                        title: '时间段(12月以上)',

                        visible:false,
                        editable: true,
                        align: 'center'
                    },{
                    field: 'salemoneyrmbustwe',
                    title: '销售额$(12月以上)',
                    sortable: true,
                    visible:false,
                    align: 'center'
                }, {
                    field: 'salemoneyrmbzntwe',
                    title: '销售额￥(12月以上)',
                    sortable: true,
                    visible:true,
                    align: 'center',

                }, {
                    field: 'costmoneyrmbtwe',
                    title: '商品成本￥(12月以上)',
                    sortable: true,
                    visible:false,
                    align: 'center',

                },{

                    field: 'ppebayustwe',
                    title: '交易费汇总$(12月以上)',
                    sortable: true,
                    visible:false,
                    align: 'center',

                },{
                    field: 'ppebayzntwe',
                    title: '交易费汇总￥(12月以上)',
                    sortable: true,
                    visible:false,
                    align: 'center',

                },{
                    field: 'inpackagefeermbtwe',
                    title: '包装成本￥(12月以上)',
                    sortable: true,
                    visible:false,
                    align: 'center',

                },{
                    field: 'expressfarermbtwe',
                    title: '运费成本￥(12月以上)',
                    sortable: true,
                    visible:false,
                    align: 'center',

                },{
                    field: 'devofflinefeetwe',
                    title: '死库处理￥(12月以上)',
                    sortable: true,
                    visible:false,
                    align: 'center',

                },
                    {
                        field: 'devopefeetwe',
                        title: '运营杂费￥(12月以上)',
                        sortable: true,
                        visible:false,
                        align: 'center',

                    },{
                    field: 'netprofittwe',
                    title: '毛利润￥(12月以上)',
                    sortable: true,
                    visible:true,
                    align: 'center',

                },{
                    field: 'netratetwe',
                    title: '毛利率%(12月以上)',
                    sortable: true,
                    visible:true,
                    align: 'center',

                }
                    , {
                    field: 'salemoneyrmbtotal',
                    title: '销售额￥(汇总)',
                    sortable: true,
                    visible:true,
                    align: 'center',

                }
                    , {
                    field: 'netprofittotal',
                    title: '毛利润￥(汇总)',
                    sortable: true,
                    visible:true,
                    align: 'center',

                }
                    , {
                    field: 'netratetotal',
                    title: '毛利率%(汇总)',
                    sortable: true,
                    visible:true,
                    align: 'center',

                }

                ]
            ]
        });
    }

    function totalPriceFormatter(data) {
        var total = 0;
        $.each(data, function (i, row) {
            total += +(row.salemoneyrmbznzero.substring(1));
        });
        return '$' + total;
    }

    function footerStyle(value, row, index) {
        return {
            css: { "font-weight": "blod" }
        };
    }


</script>
<script>
    $(function () {
        var $table = $('#table'),
            $table2 = $('#table2'),
            $total =$('#total');
        initTable($table,'');
        initTable($table2,'2');

    })
</script>
</body>
</html>