<form id="pagerForm" method="post" action="<?php echo site_url('manage/list_news')?>">
    <input type="hidden" name="pageNum" value="<?php echo $pageNum;?>" />
    <input type="hidden" name="numPerPage" value="<?php echo $numPerPage;?>" />
    <input type="hidden" name="title" value="<?php echo $title;?>" />
    <input type="hidden" name="style" value="<?php echo $style;?>" />
    <input type="hidden" name="type" value="<?php echo $type;?>" />
    <input type="hidden" name="orderField" value="<?php echo $this->input->post('orderField');?>" />
    <input type="hidden" name="orderDirection" value="<?php echo $this->input->post('orderDirection');?>" />
</form>
<div class="pageHeader">
    <form onsubmit="return navTabSearch(this);" action="<?php site_url('manage/list_questions')?>" method="post">
        <div class="searchBar">
            <table class="searchContent" id="search_purchase_order">
                <tr>
                    <td><label>试题标题：</label><input type="text" size="16" name="title" value="<?php echo $title;?>" /></td>
                    <td><label>试题类别：</label>
                    <select class="combox" name="type">
                        <option value="">请选择类别</option>
                        <?php
                        if (!empty($type_list)):
                            foreach ($type_list as $row):
                                $selected = !empty($type) && $row->id == $type ? "selected" : "";
                                ?>
                                <option value="<?php echo $row->id; ?>" <?php echo $selected; ?>><?php echo $row->name; ?></option>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </select>
                    </td>
                    <td><label>试题类型：</label>
                        <select class="combox" name="style">
                            <option value="">请选择试题类型</option>
                            <option value="1" <?php if($style == 1) echo 'selected="selected"'?>>单选题</option>
                            <option value="2" <?php if($style == 2) echo 'selected="selected"'?>>多选题</option>
                            <option value="3" <?php if($style == 3) echo 'selected="selected"'?>>陈述题</option>
                        </select>
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
            <?php if($this->session->userdata('permission_id') == 1 || in_array(5,$this->session->userdata('position_id_array')))  : ?>
                <li><a class="delete" href="<?php echo site_url('manage/delete_questions')?>/{id}" target="ajaxTodo"  title="确定要禁用？" warn="请选择一条记录"><span>禁用</span></a></li>
                <li><a class="add" href="<?php echo site_url('manage/use_questions')?>/{id}" target="ajaxTodo"  title="确定要启用？" warn="请选择一条记录"><span>启用</span></a></li>
            <?php endif ?>
            <li><a class="edit" href="<?php echo site_url('manage/edit_questions/{id}')?>" target="navTab" rel="edit_news" warn="请选择一条记录" title="查看"><span>查看</span></a></li>
        </ul>
    </div>

    <div layoutH="54" id="list_warehouse_in_print">
        <table class="list" width="100%" targetType="navTab" asc="asc" desc="desc">
            <thead>
            <tr>
                <th width="120">ID</th>
                <th>新闻标题</th>
                <th>试题类别</th>
                <th>试题类型</th>
                <th>状态</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if (!empty($res_list)):
                foreach ($res_list as $row):
                    ?>
                    <tr target="id" rel=<?php echo $row->id; ?>>
                        <td><?php echo $row->id;?></td>
                        <td><?php echo $row->title;?></td>
                        <td><?php echo $row->name;?></td>
                        <td><?php
                            if($row->style==1){
                                echo '单选题';
                            }
                            if($row->style==2){
                                echo '多选题';
                            }
                            if($row->style==3){
                                echo '陈述题';
                            }
                            ?></td>
                        <td><?php
                            if($row->flag==1){
                                echo '在用';
                            }
                            if($row->flag==2){
                                echo '禁用';
                            }
                            ?></td>
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