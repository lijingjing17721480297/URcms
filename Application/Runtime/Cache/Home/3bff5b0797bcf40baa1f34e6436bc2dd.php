<?php if (!defined('THINK_PATH')) exit();?><a class="navbar-brand"  href="<?php echo U('Saler/Saler/show_saler_page');?>" >返回条件选择页
    <!--onClick="javascript :history.back(-1);"-->
</a>

<br>
<br>
<br>
<br>
<br>
<br>
<form id='ff' action='/home/product/upload_diebase' method='post' enctype='multipart/form-data'>
    <table>
        <tr>
            <td>销售死库费用:</td>
            <td><input name='file' type="file"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' value='Submit'/></td>
        </tr>
    </table>
</form>
<a href="../../../../Y_offlineclearn.xls">导出销售死库模板</a>
<br>
<br>
<br>
<br>
<br>
<br>

<form action='/Demo/DevClearn/upload' method='post' enctype='multipart/form-data'>
    <table>
        <tr>
            <td>开发死库费用:</td>
            <td><input name='file' type="file"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' value='Submit'/></td>
        </tr>
    </table>
</form>
<a href="../../../../Y_devOfflineClearn.xlsx">导出开发死库模板</a>

<br>
<br>
<br>
<br>
<br>
<br>

<form action='/Demo/OfflineClearn/upload_posclearn' method='post' enctype='multipart/form-data'>
    <table>
        <tr>
            <td>美工死库费用:</td>
            <td><input name='file' type="file"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' value='Submit'/></td>
        </tr>
    </table>
</form>
<a href="../../../../Y_PossessOfflineClearn.xlsx">导出美工死库模板</a>

<br>
<br>
<br>
<br>
<br>
<br>

<form action='/Demo/offlineClearn/upload_purclearn' method='post' enctype='multipart/form-data'>
    <table>
        <tr>
            <td>采购死库费用:</td>
            <td><input name='file' type="file"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input type='submit' value='Submit'/></td>
        </tr>
    </table>
</form>
<a href="../../../../Y_purOfflineClearn.xlsx">导出采购死库模板</a>