<div class='boxcontent row'>
  <h2 class='pull-left'>Add / Edit <?php echo ucfirst($this->uri->segment(1))." ".ucfirst($this->uri->segment(2)); ?></h2>
  <div class='pull-right'><?php echo form_submit('submit','Simpan Data','class="btn btn-success" form="transactionForm"'); ?><?php echo anchor($page,'Kembali','class="btn btn-warning"'); ?></div>
</div>

<div class='boxContent'>
    <?php echo form_open($page."/save",array("id"=>"transactionForm")); ?>
    
    <div class="form-group">
        <label class="col-sm-2 control-label">Customer Name</label>
        <div class="col-sm-10">
            <?php echo $this->inputfields->customer_lists("customer_id",(!empty($data['customer_id']) ? $data['customer_id'] : ""),array("placeHolder"=>"Customer Name","","class"=>"form-control")); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Quantity</label>
        <div class="col-sm-10">
            <?php echo $this->inputfields->text("quantity",(!empty($data['quantity']) ? $data['quantity'] : ""),array("placeHolder"=>"Quantity","","class"=>"form-control")); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Gross Weight</label>
        <div class="col-sm-10">
            <?php echo $this->inputfields->text("gross_weight",(!empty($data['gross_weight']) ? $data['gross_weight'] : ""),array("placeHolder"=>"Gross Weight","","class"=>"form-control")); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Volume</label>
        <div class="col-sm-10">
            <?php echo $this->inputfields->text("volume",(!empty($data['volume']) ? $data['volume'] : ""),array("placeHolder"=>"Volume","","class"=>"form-control")); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Volume Weight</label>
        <div class="col-sm-10">
            <?php echo $this->inputfields->text("volume_weight",(!empty($data['volume_weight']) ? $data['volume_weight'] : ""),array("placeHolder"=>"Volume Weight","","class"=>"form-control")); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Description Goods</label>
        <div class="col-sm-10">
            <?php echo $this->inputfields->textarea("drescription",(!empty($data['drescription']) ? $data['drescription'] : ""),array("placeHolder"=>"Description","","class"=>"form-control")); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Special Instruction</label>
        <div class="col-sm-10">
            <?php echo $this->inputfields->textarea("special_instruction",(!empty($data['special_instruction']) ? $data['special_instruction'] : ""),array("placeHolder"=>"Special Instruction","","class"=>"form-control")); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Penyerah</label>
        <div class="col-sm-10">
            <?php echo $this->inputfields->text("penyerah",(!empty($data['penyerah']) ? $data['penyerah'] : ""),array("placeHolder"=>"Penyerah","","class"=>"form-control")); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Penerima</label>
        <div class="col-sm-10">
            <?php echo $this->inputfields->text("penerima",(!empty($data['penerima']) ? $data['penerima'] : ""),array("placeHolder"=>"Penerima","","class"=>"form-control")); ?>
        </div>
    </div>

    <div class="form-group">
    <label class="col-sm-2 control-label">Total</label>
        <div class="col-sm-10">
            <?php echo $this->inputfields->text("price",(!empty($data['price']) ? $data['price'] : ""),array("placeHolder"=>"Total","","class"=>"form-control")); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Picked By</label>
        <div class="col-sm-10">
            <?php echo $this->inputfields->text("picked_by",(!empty($data['picked_by']) ? $data['picked_by'] : ""),array("placeHolder"=>"Picked By","","class"=>"form-control")); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Picked By</label>
        <div class="col-sm-10">
            <?php echo $this->inputfields->text("delivery_by",(!empty($data['delivery_by']) ? $data['delivery_by'] : ""),array("placeHolder"=>"Delivery By","","class"=>"form-control")); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Handover By</label>
        <div class="col-sm-10">
            <?php echo $this->inputfields->text("handover_by",(!empty($data['handover_by']) ? $data['handover_by'] : ""),array("placeHolder"=>"Handover By","","class"=>"form-control")); ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Received By</label>
        <div class="col-sm-10">
            <?php echo $this->inputfields->text("received_by",(!empty($data['received_by']) ? $data['received_by'] : ""),array("placeHolder"=>"Received By","","class"=>"form-control")); ?>
        </div>
    </div>

    <p>&nbsp;</p>
    <a href='#' class='btn btn-primary pull-right cloneRow'>Clone Button</a>
    <table class='table table-striped'>
        <tr>
            <th>Transaction id</th>
            <th>Penyerah</th>
            <th>Penerima</th>
            <th>Date</th>
            <th>Shipping Date</th>
            <th>Arrived Date</th>
            <th>complete Date</th>
            <th>Remark</th>
            <th>Status</th>
        </tr>
        <!-- hidden tr disediakan untuk di clone di baris selanjutnya -->
        <tr class='hide rowPrivilege'>
            <td>
                <?php echo $this->inputfields->transactions_lists("transaction_id[]",(!empty($data['transaction_id']) ? $data['transaction_id'] : ""),array("placeHolder"=>"Transaksi","","class"=>"form-control")); ?>
            </td>
            <td><input type='text' name='detail_penyerah[]' class='form-control' placeHolder='Penyerah'/></td>
            <td><input type='text' name='detail_penerima[]' class='form-control' placeHolder='Penerima'/></td>
            <td><input type='text' name='detail_date[]' class='form-control datepicker' placeHolder='Date'/></td>
            <td><input type='text' name='detail_shipping_date[]' class='form-control datepicker' placeHolder='Shipping Date'/></td>
            <td><input type='text' name='detail_arrived_date[]' class='form-control datepicker' placeHolder='Arrived Date'/></td>
            <td><input type='text' name='detail_complete_date[]' class='form-control datepicker' placeHolder='complete Date'/></td>
            <td><input type='textarea' name='remark[]' class='form-control' placeHolder='Remark'/></td>
            <td>
    <?php echo $this->inputfields->shipment_lists("detail_status[]","",array("placeHolder"=>"Status","","class"=>"form-control")); ?>
            </td>
        </tr>
        
        <?php if(!empty($data1)): ?>
        <tr class='displayPrivilege'>
           <td>
                <?php echo $this->inputfields->transactions_lists("transaction_id[]",(!empty($data['transaction_id']) ? $data['transaction_id'] : ""),array("placeHolder"=>"Transaksi","","class"=>"form-control")); ?>
            </td>
            <td><input type='text' name='detail_penyerah[]' class='form-control' placeHolder='Penyerah' value="<?php echo $data['penyerah'] ?>"/></td>
            <td><input type='text' name='detail_penerima[]' class='form-control' placeHolder='Penerima' value="<?php echo $data['penerima'] ?>"/></td>
            <td><input type='text' id="date" name='detail_date[]' class='form-control datepicker' placeHolder='Date' value="<?php echo $data['date'] ?>"/></td>
            <td><input type='text' id="date" name='detail_shipping_date[]' class='form-control datepicker' placeHolder='Shipping Date' value="<?php echo $data['shipping_date'] ?>"/></td>
            <td><input type='text' id="date" name='detail_arrived_date[]' class='form-control datepicker' placeHolder='Arrived Date' value="<?php echo $data['arrived_date'] ?>"/></td>
            <td><input type='text' id="date" name='detail_complete_date[]' class='form-control datepicker' placeHolder='complete Date' value="<?php echo $data['complete_date'] ?>"/></td>
            <td><input type='textarea' name='remark[]' class='form-control' placeHolder='Remark'/></td>
            <td>
    <?php echo $this->inputfields->shipment_lists("detail_status[]","",array("placeHolder"=>"Status","","class"=>"form-control")); ?>
            </td>
        </tr>

        <?php else: ?>
        <tr class='displayPrivilege'>
                <td>
                <?php echo $this->inputfields->transactions_lists("transaction_id[]",(!empty($data['transaction_id']) ? $data['transaction_id'] : ""),array("placeHolder"=>"Transaksi","","class"=>"form-control")); ?>
            </td>
            <td><input type='text' name='detail_penyerah[]' class='form-control' placeHolder='Penyerah'/></td>
            <td><input type='text' name='detail_penerima[]' class='form-control' placeHolder='Penerima'/></td>
            <td><input type='text' name='detail_date[]' class='form-control datepicker' placeHolder='Date'/></td>
            <td><input type='text' name='detail_shipping_date[]' class='form-control datepicker' placeHolder='Shipping Date'/></td>
            <td><input type='text' name='detail_arrived_date[]' class='form-control datepicker' placeHolder='Arrived Date'/></td>
            <td><input type='text' name='detail_complete_date[]' class='form-control datepicker' placeHolder='complete Date'/></td>
            <td><input type='textarea' name='remark[]' class='form-control' placeHolder='Remark'/></td>
            <td>
    <?php echo $this->inputfields->shipment_lists("detail_status[]","",array("placeHolder"=>"Status","","class"=>"form-control")); ?>
            </td>
        </tr>
        <?php endif; ?>
    </table>
<?php echo form_close(); ?>
</div>
