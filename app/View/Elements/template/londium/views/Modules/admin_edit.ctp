<?php echo $this->Form->create("Module", array("class" => "form-horizontal", "action" => "edit", "id" => "formSubmit", "inputDefaults" => array("error" => array("attributes" => array("wrap" => "label", "class" => "error"))))) ?>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h6 class="panel-title"><i class="icon-bubble4"></i><?= __("Data Module") ?></h6>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <?php
                    echo $this->Form->label("Module.name", __("Label"), array("class" => "col-sm-2 control-label"));
                    echo $this->Form->input("Module.name", array("div" => array("class" => "col-sm-10"), "label" => false, "class" => "form-control"));
                    ?>
                </div>
                <div class="form-group">
                    <?php
                    echo $this->Form->label("alias", __("Alias"), array("class" => "col-sm-2 control-label"));
                    echo $this->Form->input("alias", array("div" => array("class" => "col-sm-10"), "label" => false, "class" => "form-control"));
                    ?>
                </div>
                <div class="form-group">
                    <?php
                    echo $this->Form->label("class_icon", __("Icon"), array("class" => "col-sm-2 control-label"));
                    echo $this->Form->input("class_icon", array("div" => array("class" => "col-sm-10"), "label" => false, "class" => "form-control"));
                    ?>
                </div>
                <div class="form-group">
                    <?php
                    echo $this->Form->label("position", __("Posisi"), array("class" => "col-sm-2 control-label"));
                    echo $this->Form->input("position", array("div" => array("class" => "col-sm-10"), "label" => false, "class" => "form-control"));
                    ?>
                </div>
                <div class="form-group">
                    <?php
                    echo $this->Form->label("ordering_number", __("Ordering Number"), array("class" => "col-sm-2 control-label"));
                    echo $this->Form->input("ordering_number", array("div" => array("class" => "col-sm-10"), "label" => false, "class" => "form-control"));
                    ?>
                </div>
                <div class="form-actions text-right">
                    <button type="button" class="btn btn-primary" onclick="javascript:history.go(-1)"><?= __("Kembali") ?></button>
                    <button type="submit" class="btn btn-info" id="formButton"><?= __("Simpan") ?></button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->Form->end() ?>
<?php
echo $this->element(_TEMPLATE_DIR . "/londium/form-submit");
?>