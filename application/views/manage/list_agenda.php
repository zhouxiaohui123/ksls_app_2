<form id="pagerForm" method="post" action="<?php echo site_url('manage/list_agenda')?>">
    <input type="hidden" name="pageNum" value="<?php echo $pageNum;?>" />
    <input type="hidden" name="numPerPage" value="<?php echo $numPerPage;?>" />
    <input type="hidden" name="company_id" value="<?php echo $company_id;?>" />
    <input type="hidden" name="subsidiary_id" value="<?php echo $subsidiary_id;?>" />
    <input type="hidden" name="user_id" value="<?php echo $user_id;?>" />
    <input type="hidden" name="dbgh_id" value="<?php echo $dbgh_id;?>" />
    <input type="hidden" name="dbyh_id" value="<?php echo $dbyh_id;?>" />
    <input type="hidden" name="course" value="<?php echo $course;?>" />
    <input type="hidden" name="status" value="<?php echo $status;?>" />

    <input type="hidden" name="num" value="<?php echo $num;?>" />
    <input type="hidden" name="xq_name" value="<?php echo $xq_name;?>" />
    <input type="hidden" name="Cstart_date" value="<?php echo $Cstart_date;?>" />
    <input type="hidden" name="Cend_date" value="<?php echo $Cend_date;?>" />
    <input type="hidden" name="Estart_date" value="<?php echo $Estart_date;?>" />
    <input type="hidden" name="Eend_date" value="<?php echo $Eend_date;?>" />
    <input type="hidden" name="orderField" value="<?php echo $this->input->post('orderField');?>" />
    <input type="hidden" name="orderDirection" value="<?php echo $this->input->post('orderDirection');?>" />
</form>

<div class="pageHeader">
    <form onsubmit="return navTabSearch(this);" action="<?php site_url('manage/list_agenda')?>" method="post">
        <div class="searchBar">
            <table class="searchContent" id="search_purchase_order">
                <tr>
                    <td><label>所属公司：</label>
                        <select name="company_id" class="combox"  id="sel_com" ref="sel_age_sub" refUrl="/manage/get_subsidiary_list_2/{value}" >
                            <option value="">请选择公司</option>
                            <?php
                            if (!empty($company_list)):
                                foreach ($company_list as $row):
                                    $selected = !empty($company_id) && $row->id == $company_id ? "selected" : "";
                                    ?>
                                    <option value="<?php echo $row->id; ?>" <?php echo $selected; ?>><?php echo $row->name; ?></option>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </select>
                    </td>
                    <td><label>所属分店：</label>
                        <select name="subsidiary_id" class="combox" id="sel_age_sub" ref="sel_age_user" refUrl="/manage/get_user_list_age/{value}">
                            <option id="ope1" value="">请选择分店</option>
                            <?php
                            if (!empty($subsidiary_list)):
                                foreach ($subsidiary_list as $row):
                                    $selected = !empty($subsidiary_id) && $row['id'] == $subsidiary_id ? "selected" : "";
                                    ?>
                                    <option value="<?php echo $row['id']; ?>" <?php echo $selected; ?>><?php echo $row['name']; ?></option>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </select>
                    </td>
                    <td><label>所属人员：</label>
                        <select name="user_id" class="combox" id="sel_age_user" >
                            <option id="ope2" value="">请选择人员</option>
                            <?php
                            if (!empty($user_list)):
                                foreach ($user_list as $row):
                                    $selected = !empty($user_id) && $row['id'] == $user_id ? "selected" : "";
                                    ?>
                                    <option value="<?php echo $row['id']; ?>" <?php echo $selected; ?>><?php echo $row['rel_name']; ?></option>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>编号：</label><input type="text" size="16" name="num" value="<?php echo $num;?>" /></td>
                    <td><label>房屋地址：</label><input type="text" size="16" name="xq_name" value="<?php echo $xq_name;?>" /></td>
                </tr>
                <tr>
                    <td><label>代办过户：</label>
                        <select name="dbgh_id" class="combox">
                            <option value="">请选择</option>
                            <?php
                            if (!empty($dbgh_list)):
                                foreach ($dbgh_list as $row):
                                    $selected = !empty($dbgh_id) && $row['id'] == $dbgh_id ? "selected" : "";
                                    ?>
                                    <option value="<?php echo $row['id']; ?>" <?php echo $selected; ?>><?php echo $row['rel_name']; ?></option>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </select>
                    </td>
                    <td><label>代办银行：</label>
                        <select name="dbyh_id" class="combox">
                            <option value="">请选择</option>
                            <?php
                            if (!empty($dbyh_list)):
                                foreach ($dbyh_list as $row):
                                    $selected = !empty($dbyh_id) && $row['id'] == $dbyh_id ? "selected" : "";
                                    ?>
                                    <option value="<?php echo $row['id']; ?>" <?php echo $selected; ?>><?php echo $row['rel_name']; ?></option>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </select>
                    </td>
                    <td><label>进程：</label>
                        <select name="course" class="combox">
                            <option value="">请选择</option>
                            <?php
                            if (!empty($course_list)):
                                foreach ($course_list as $row):
                                    $selected = !empty($course) && $row['id'] == $course ? "selected" : "";
                                    ?>
                                    <option value="<?php echo $row['id']; ?>" <?php echo $selected; ?>><?php echo $row['name']; ?></option>
                                    <?php
                                endforeach;
                            endif;
                            ?>
                        </select>
                    </td>
                    <td><label>状态：</label>
                        <select class="combox" name="status">
                            <option value="">请选择状态</option>
                            <option value="1" <?php if($status == 1) echo 'selected="selected"'?>>正常</option>
                            <option value="2" <?php if($status == 2) echo 'selected="selected"'?>>异常</option>
                            <option value="3" <?php if($status == 3) echo 'selected="selected"'?>>服务完成</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>申请时间：</label>
                        <input type="text" name="Cstart_date" id="CJ_DepDate" value="<?php echo $Cstart_date;?>" class="sel-begin-time trigger-node-yui_3_5_1_1_1470035798576_18">
                         到</td>
                    <td>
                        <input type="text" name="Cend_date" id="CJ_EndDate" value="<?php echo $Cend_date;?>" class="sel-begin-time trigger-node-yui_3_5_1_1_1470035798576_18">

                        </td>
                </tr>
                <tr>
                    <td><label>服务完成时间：</label>
                        <input type="text" name="Estart_date" id="EJ_DepDate" value="<?php echo $Estart_date;?>" class="sel-begin-time trigger-node-yui_3_5_1_1_1470035798576_18">
                        到</td>
                    <td>
                        <input type="text" name="Eend_date" id="EJ_EndDate" value="<?php echo $Eend_date;?>" class="sel-begin-time trigger-node-yui_3_5_1_1_1470035798576_18">

                    </td>
                </tr>
            </table>
            <div class="subBar">
                <ul>
                    <li><div class="button"><div class="buttonContent"><button id="clear_search">清除查询</button></div></div></li>
                    <li><div class="buttonActive"><div class="buttonContent"><button type="submit">执行查询</button></div></div></li>
                </ul>
            </div>
        </div>
    </form>
</div>
<div class="pageContent">
    <div class="panelBar">
        <ul class="toolBar">
            <?php if($this->session->userdata('permission_id') == 0): ?>
                <li><a class="delete" href="<?php echo site_url('manage/delete_aganda')?>/{id}" target="ajaxTodo"  title="确定要删除？" warn="请选择一条记录"><span>删除</span></a></li>
            <?php endif ?>
        </ul>
    </div>

    <div layoutH="215" id="list_warehouse_in_print">
        <table class="list" width="100%" targetType="navTab" asc="asc" desc="desc">
            <thead>
            <tr>
                <th width="60">申请人</th>
                <th width="70">编号</th>
                <th>房屋地址</th>
                <th>权证(过户)</th>
                <th>权证(银行)</th>
                <th width="80">申请时间</th>
                <th width="80">服务完成时间</th>
                <th>进程</th>
                <th>状态</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if (!empty($res_list)):
                foreach ($res_list as $row):
                    ?>
                    <tr target="id" rel=<?php echo $row->id; ?>>
                        <td><?php echo $row->rel_name;?></td>
                        <td><?php echo $row->num;?></td>
                        <td><?php echo $row->xq_name;?></td>
                        <td><?php echo $row->gh_name;?></td>
                        <td><?php echo $row->yh_name;?></td>
                        <td><?php echo $row->cdate;?></td>
                        <td><?php echo $row->edate;?></td>
                        <td><?php echo $row->course_name;?></td>
                        <td>
                            <?php
                            if($row->status==1){
                                echo '正常';
                            }
                            if($row->status==2){
                                echo '异常';
                            }
                            if($row->status==3){
                                echo '服务完成';
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                endforeach;
            endif;
            ?>
            </tbody>
        </table>
    </div>
    <div class="panelBar" >
        <div class="pages">
            <span>显示</span>
            <select name="numPerPage" class="combox" onchange="navTabPageBreak({numPerPage:this.value})">
                <option value="20" <?php echo $this->input->post('numPerPage')==20?'selected':''?>>20</option>
                <option value="50" <?php echo  $this->input->post('numPerPage')==50?'selected':''?>>50</option>
                <option value="100" <?php echo $this->input->post('numPerPage')==100?'selected':''?>>100</option>
                <option value="200" <?php echo $this->input->post('numPerPage')==200?'selected':''?>>200</option>
            </select>
            <span>条，共<?php  echo $countPage;?>条</span>
        </div>
        <div class="pagination" targetType="navTab" totalCount="<?php echo $countPage;?>" numPerPage="<?php echo $numPerPage;?>" pageNumShown="10" currentPage="<?php echo $pageNum;?>"></div>
    </div>
</div>
<script type="text/javascript" src="/static/js/yui-min.js"></script>
<script type="text/javascript">
    //$('.item-icon').poshytip();
    YUI({
        modules: {
            'trip-calendar': {
                fullpath: '/static/js/calendar.js',
                type    : 'js',
                requires: ['trip-calendar-css']
            },
            'trip-calendar-css': {
                fullpath: '/static/css/calendar.css',
                type    : 'css'
            }
        }
    }).use('trip-calendar', function(Y) {
        new Y.TripCalendar({
            // minDate         : new Date,     //最小时间限制
            triggerNode     : '#CJ_DepDate', //第一个触节点
            finalTriggerNode: '#CJ_EndDate',  //最后一个触发节点
            isHoliday:true,
            isDateInfo:false,
            count:1
        });
    });
    YUI({
        modules: {
            'trip-calendar': {
                fullpath: '/static/js/calendar.js',
                type    : 'js',
                requires: ['trip-calendar-css']
            },
            'trip-calendar-css': {
                fullpath: '/static/css/calendar.css',
                type    : 'css'
            }
        }
    }).use('trip-calendar', function(Y) {
        new Y.TripCalendar({
            // minDate         : new Date,     //最小时间限制
            triggerNode     : '#EJ_DepDate', //第一个触节点
            finalTriggerNode: '#EJ_EndDate',  //最后一个触发节点
            isHoliday:true,
            isDateInfo:false,
            count:1
        });
    });
</script>