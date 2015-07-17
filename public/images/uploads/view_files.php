<div id="files-<?php echo $object['object_id']; ?>" class="box box-color box-bordered uploaded-files-container" style="padding:0">
    <div class="box-title">
        <h3><i class="icon-table"></i>Files</h3>
    </div>
    <div class="box-content nopadding">
        <?php 
        if ($this->uri->segment(1) != "proposals"):
            echo isset($page_tabs) ? $page_tabs: $this->load->view('projects/project_tabs', array('project' => array('id' => $object['object_id'])));
        endif; ?>
        <div class="clear"></div>
        <?php
        if ($this->uri->segment(1) != "clients"):
            echo isset($page_tabs) ? $page_tabs : $this->load->view('proposals/tabs_proposal', '', FALSE);
        endif;
        ?>
        <!--START CONTENT-->
        <div id="files-<?php echo $object['object_id']; ?>">
            <div id="uploaded-files-tbl-tb">
                <div class="form-horizontal form-column form-bordered" style="margin:10px auto; width:80%">
                    <div class="span6">
                        <?php $this->load->view('files/upload_form', array('object' => $object)); ?>
                    </div>
                    <div class="span6">
                    <?php
                    echo form_open($object['object_update_url'], 'id="object-update-form"', array('object_id' => $object['object_id'], 'object_type' => $object['object_type'], 'client_id' => $object['client_id'], 'action' => 'update'));
                    if (isset($object['category_id']) && $object['category_id'] != NULL && $object['category_id'] != 0) {
                        echo form_hidden('category', $object['category_id']);
                        $form_opts = array('class' => 'easyui-combobox', 'id' => 'product-select', 'data-options' => 'valueField: \'id\', textField: \'name\', url: \'/ajax/get-products\', width: \'300\', onBeforeLoad: function(param) { param.category = ' . $object['category_id'] . '; param.client_id = ' . $object['client_id'] . '; }, onLoadSuccess: function () { $(\'#product-select\').combobox(\'setValue\', \'' . $object['product_id'] . '\'); }');
                    } else {
                        $form_opts = array('class' => 'easyui-combobox', 'id' => 'product-select', 'data-options' => 'valueField: \'id\', textField: \'name\', url: \'/ajax/get-products\', width: \'300\'');
                    }
                    ?>
                        <div class="control-group">
                            <label for="textfield" class="control-label"><?php echo form_label('Product:', 'product'); ?></label>
                            <div class="controls"><?php echo form_input($form_opts); ?></div>
                        </div>
                        <div class="control-group">
                            <label for="textfield" class="control-label"><?php echo form_label('Status:', 'status', array('id' => 'status-lbl')); ?></label>
                            <div class="controls"><?php echo form_dropdown('status', $object['status_list'], $object['status_id'], 'class="easyui-combobox" id="status-select" required="true"'); ?></div>
                        </div>
                        <div class="actions" style="padding:10px">
                            <?php echo form_submit('submit', 'Update', 'class="btn btn-primary"'); ?>
                        </div>
                    <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <table id="uploaded-files-tbl" class="tbl" title="<?php echo $object['object_title']; ?>" rel="files/get-uploaded-files" data-options="queryParams: { object_id: <?php echo $object['object_id']; ?>, object_type: '<?php echo $object['object_type']; ?>', page_referrer: '<?php echo $this->uri->segment(1); ?>' }">
                <thead>
                    <tr>
                        <th data-options="field: 'file_id', align: 'center', width: 80, formatter: uploadedFilesActionFormat">Action</th>
                        <th data-options="field: 'filename', width: 330, sortable: true">File Name</th>
                        <th data-options="field: 'category', width: 170">Category</th>
                        <th data-options="field: 'download_count', width: 160, align: 'center'">Download Count</th>
                        <th data-options="field: 'date_uploaded', width: 150, sortable: true">Date Uploaded</th>									
                    </tr>
                </thead>
            </table>
        </div>
        <!--END CONTENT-->
    </div>
</div>
